<?php

return [
    'custom_fields'		        => 'Campos Personalizados',
    'manage'                    => 'Administrar',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Acerca de los Grupos de Campos Personalizados (Fieldsets)',
    'about_fieldsets_text'		=> 'Los grupos de campos personalizados te permiten agrupar campos personalizados que se reutilizan frecuentemente para determinados modelos de activos.',
    'custom_format'             => 'Expresión regular personalizada...',
    'encrypt_field'      	        => 'Encriptar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'ADVERTENCIA: Encriptar un campo hace que no se pueda buscar.',
    'encrypted'      	        => 'Encriptado',
    'fieldset'      	        => 'Fieldset',
    'qty_fields'      	      => 'Campos de Cantidad',
    'fieldsets'      	        => 'Fieldset',
    'fieldset_name'           => 'Nombre del Fieldset',
    'field_name'              => 'Nombre del Campo',
    'field_values'            => 'Valores del Campo',
    'field_values_help'       => 'Añade opciones seleccionables, una por línea. Líneas en blanco además de la primera será ignorada.',
    'field_element'           => 'Elemento de Formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato Regex Personalizado',
    'field_custom_format_help'     => 'Este campo te permite usar una expresión regex para la validación. Este debe empezar con "regex:" - por ejemplo, para validar que un valor de campo personalizado contiene un IMEI válido (15 dígitos numéricos), podrías usar <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado por Modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo Fieldset',
    'update_fieldset'         => 'Actualizar grupo de campos',
    'fieldset_does_not_exist'   => 'Grupo de campos :id no existe',
    'fieldset_updated'         => 'Grupo de campos actualizado',
    'create_fieldset_title' => 'Crear nuevo grupo de campos',
    'create_field'            => 'Nuevo Campo Personalizado',
    'create_field_title' => 'Crear nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Sólo los administradores pueden ver el valor desencriptado',
    'show_in_email'     => 'Include the value of this field in checkout emails sent to the user? Encrypted fields cannot be included in emails',
    'show_in_email_short'     => 'Include in emails.',
    'help_text' => 'Texto de ayuda',
    'help_text_description' => 'Un texto opcional que aparecerá debajo de los campos del formulario cuando se edite un activo para proporcionar contexto adicional.',
    'about_custom_fields_title' => 'Acerca de los Campos Personalizados',
    'about_custom_fields_text' => 'Los campos personalizados le permiten añadir atributos arbitrarios a los activos.',
    'add_field_to_fieldset' => 'Añadir campo al grupo',
    'make_optional' => 'Requerido - clic para hacerlo opcional',
    'make_required' => 'Opcional - clic para hacerlo requerido',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo de BD',
    'db_convert_warning' => 'ADVERTENCIA. Este campo aparece en la tabla de campos personalizados como <code>:db_column</code>, pero se esperaba <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único dentro de los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario ver estos valores en su página Ver Recursos asignados',
    'display_in_user_view_table' => 'Visible para el usuario',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Show in lists',
    'show_in_requestable_list_short' => 'Show in requestable assets list',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'This field is encrypted, so some display options will not be available.',

];
