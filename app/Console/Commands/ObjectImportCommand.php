<?php

namespace App\Console\Commands;

use App\Importer\Factory;
use App\Importer\MimeTypes;
use App\Importer\Type;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Http\File;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\Console\Helper\ProgressIndicator;

ini_set('max_execution_time', env('IMPORT_TIME_LIMIT', 600)); //600 seconds = 10 minutes
ini_set('memory_limit', env('IMPORT_MEMORY_LIMIT', '500M'));

/**
 * Class ObjectImportCommand
 */
class ObjectImportCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'snipeit:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Items from CSV';

    /**
     * The progress indicator instance.
     */
    protected ProgressIndicator $progressIndicator;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!$this->validate()) {
            return self::FAILURE;
        }

        $this->progressIndicator = new ProgressIndicator($this->output);

        $filename = $this->argument('filename');
        $importer = Factory::make($filename, $this->option('item-type'));
        $importer->setCallbacks([$this, 'log'], [$this, 'progress'], [$this, 'errorCallback'])
            ->setCreatedBy((int)$this->option('user_id'))
            ->setUpdating($this->option('update'))
            ->setShouldNotify($this->option('send-welcome'))
            ->setUsernameFormat($this->option('username_format'));

        // This $logFile/useFiles() bit is currently broken, so commenting it out for now
        // $logFile = $this->option('logfile');
        // Log::useFiles($logFile);
        $this->progressIndicator->start('======= Importing Items from ' . $filename . ' =========');

        $importer->import();

        $this->progressIndicator->finish('Import finished.');
    }

    protected function validate(): bool
    {
        $filepath = $this->argument('filename');
        $importFile = new File(realpath($filepath), false);
        $validator = Validator::make(
            array_merge($this->options(), ['file' => $importFile]),
            $this->rules(),
            $this->messages()
        )->stopOnFirstFailure();

        if (!$importFile->isFile()) {
            $this->error("file \"{$filepath}\" not found.");

            return false;
        }

        foreach ($validator->errors()->all() as $errors) {
            $this->error($errors);

            return false;
        }

        return true;
    }

    /**
     * Get the validation rules for this command.
     */
    protected function rules(): array
    {
        return [
            'file'             => ['file', Rule::file()->types(MimeTypes::VALID)],
            'item-type'       => ['sometimes', Rule::in(Type::validTypesForCli())],
            'user_id'         => ['sometimes', 'int', 'min:1', Rule::exists(User::class, 'id')->withoutTrashed()],
            'username_format' => ['nullable', 'in:firstname.lastname,firstname,filastname,email'],
            'email_format'    => ['nullable', 'in:firstname.lastname,firstname,filastname'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    protected function messages(): array
    {
        return [
            'file.mimetypes' => 'The given file type is not supported.'
        ];
    }

    public function errorCallback($item, $field, $error)
    {
        $this->output->write("\x0D\x1B[2K");

        $this->warn('Error: Item: ' . $item->name . ' failed validation: ' . json_encode($error));
    }

    public function progress($importedItemsCount)
    {
        $this->progressIndicator->advance();
    }

    /**
     * Log a message to file, configurable by the --log-file parameter.
     * If a warning message is passed, we'll spit it to the console as well.
     *
     * @author Daniel Melzter
     * @since 3.0
     * @param string $string
     * @param string $level
     */
    public function log($string, $level = 'info')
    {
        if ($level === 'warning') {
            Log::warning($string);
            $this->comment($string);
        } else {
            Log::Info($string);
            if ($this->option('verbose')) {
                $this->comment($string);
            }
        }
    }

    /**
     * Get the console command arguments.
     *
     * @author Daniel Melzter
     * @since 3.0
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['filename', InputArgument::REQUIRED, 'File for the CSV import.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @author Daniel Melzter
     * @since 3.0
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['email_format', null, InputOption::VALUE_REQUIRED, 'The format of the email addresses that should be generated. Options are <info>firstname.lastname</info>, <info>firstname</info>, <info>filastname</info>', null],
            ['username_format', null, InputOption::VALUE_REQUIRED, 'The format of the username that should be generated. Options are <info>firstname.lastname</info>, <info>firstname</info>, <info>filastname</info>, <info>email</info>', null],
            ['logfile', null, InputOption::VALUE_REQUIRED, 'The path to log output to.  storage/logs/importer.log by default', storage_path('logs/importer.log')],
            ['item-type', null, InputOption::VALUE_REQUIRED, "Item Type To import.  Valid Options are {$this->getValidImportTypesText()}", 'Asset'],
            ['web-importer', null, InputOption::VALUE_NONE, 'Internal: packages output for use with the web importer'],
            ['user_id', null, InputOption::VALUE_REQUIRED, 'ID of user creating items', 1],
            ['update', null, InputOption::VALUE_NONE, 'If a matching item is found, update item information'],
            ['send-welcome', null, InputOption::VALUE_NONE, 'Whether to send a welcome email to any new users that are created.'],
        ];
    }

    private function getValidImportTypesText(): string
    {
        $importTypes = collect(Type::cases())
            ->pluck('value')
            ->map('ucfirst')
            ->map(fn (string $type) => "<info>{$type}</info>");

        $last = $importTypes->pop();

        return implode(' or ', [$importTypes->implode(', '), $last]);
    }
}
