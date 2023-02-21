<?php

return [
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Esto es a veces el mismo que su correo electrónico de dominio, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Asignar nombre de dominio al campo del nombre de usuario',
    'ad_append_domain_help'     => 'No se requiere que el usuario escriba "username@dominio.empresa", ellos podrán, simplemente digitar su nombre de usuario "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Enviar alertas a',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Alertas habilitadas',
    'alert_interval'			=> 'Limite de alertas de expiración (en días)',
    'alert_inv_threshold'		=> 'Umbral de alerta del inventario',
    'allow_user_skin'           => 'Permitir Tema del usuario',
    'allow_user_skin_help_text' => 'Al marcar esta casilla se permitirá al usuario sustituir el tema de la interfase con uno diferente.',
    'asset_ids'					=> 'IDs de Recurso',
    'audit_interval'            => 'Intervalo de auditoría',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Umbral de advertencia de auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación debemos advertirle cuándo se deben auditar los activos?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Copias de seguridad',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Configuración de Código de Barras',
    'confirm_purge'			    => 'Confirmar la purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en el cuadro de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados. (Se recomienda hacer una copia de seguridad previamente, para estar seguro.)',
    'custom_css'				=> 'CSS Personalizado',
    'custom_css_help'			=> 'Ingrese cualquier CSS personalizado que desee utilizar. No incluya tags como: &lt;style&gt;&lt;/style&gt.',
    'custom_forgot_pass_url'	=> 'Reestablecer URL de Contraseña Personalizada',
    'custom_forgot_pass_url_help'	=> 'Esto remplaza la URL incorporada para las contraseñas olvidadas en la pantalla de inicio, útil para dirigir a las personas a una funcionalidad de restablecimiento de contraseña LDAP interna o alojada. Esto efectivamente desactivará la funcionalidad local de olvido de contraseña.',
    'dashboard_message'			=> 'Mensajes del Panel',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel para cualquiera que tenga permiso de ver el Panel.',
    'default_currency'  		=> 'Moneda Predeterminada',
    'default_eula_text'			=> 'EULA por defecto',
    'default_language'			=> 'Idioma predeterminado',
    'default_eula_help_text'	=> 'También puede asociar EULAs personalizadas para categorías especificas de equipos.',
    'display_asset_name'        => 'Mostrar Nombre Equipo',
    'display_checkout_date'     => 'Mostrar Fecha de Salida',
    'display_eol'               => 'Mostrar EOL',
    'display_qr'                => 'Mostrar Códigos QR',
    'display_alt_barcode'		=> 'Mostrar códigos de barras en 1D',
    'email_logo'                => 'Logo de Email',
    'barcode_type'				=> 'Tipo de códigos de barras 2D',
    'alt_barcode_type'			=> 'Tipo de códigos de barras 1D',
    'email_logo_size'       => 'Los logotipos cuadrados se ven mejor en correo electrónico. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Configuración EULA',
    'eula_markdown'				=> 'Este EULS permite <a href="https://help.github.com/articles/github-flavored-markdown/">makrdown estilo Github</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Otros formatos de imagen pueden no funcionar en todos los navegadores.',
    'favicon_size'          => 'Los favicons deben ser imágenes cuadradas, de 16x16 píxeles.',
    'footer_text'               => 'Texto Adicional de Pie de Página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Los enlaces son permitidos usando <a href="https://help.github.com/articles/github-flavored-markdown/">el formato flavored de GitHub</a>. Saltos de línea, cabeceras, imágenes, etc, pueden resultar impredecibles.',
    'general_settings'			=> 'Configuración General',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Generar Respaldo',
    'header_color'              => 'Color de encabezado',
    'info'                      => 'Estos parámetros permirten personalizar ciertos aspectos de la aplicación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Ajustes LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Introduce un nombre de usuario LDAP válido y una contraseña de la DN base que especificaste anteriormente para probar si tu inicio de sesión LDAP está configurado correctamente. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_login_sync_help'      => 'Esto sólo prueba que LDAP puede sincronizarse correctamente. Si tu solicitud de Autenticación LDAP no es correcta, los usuarios aún no podrían iniciar sesión. DEBES GUARDAR TUS CONFIGURACIONES LDAP ACTUALIZADAS PRIMERO.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería empezar con ldap:// (sin codificar o TLS) o ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Certificado de validación SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Permitir certificados SSL inválidos',
    'ldap_server_cert_help'		=> 'Selecciona este campo si estás usando un certificado SSL auto firmado y quieres aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto se debe seleccionar si se está ejecutando STARTTLS en el servidor LDAP. ',
    'ldap_uname'                => 'Enlazar usuario LDAP',
    'ldap_dept'                 => 'Departamento de Protocolo Ligero de Acceso a Directorio (LDAP)',
    'ldap_phone'                => 'Número Telefónico LDAP',
    'ldap_jobtitle'             => 'LDAP Titulo Laboral',
    'ldap_country'              => 'LDAP País',
    'ldap_pword'                => 'Enlazar contraseña LDAP',
    'ldap_basedn'               => 'Enlazar base DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de Contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarca esta casilla si no quieres mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Desactivar esto significa que tus usuarios no podrán acceder si tu servidor LDAP no está disponible por algún motivo.',
    'ldap_username_field'       => 'Campo de usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autentificación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Licencia de Software',
    'load_remote_text'          => 'Scripts remotos',
    'load_remote_help_text'		=> 'Esta instalación de Snipe-IT puede cargar scripts desde fuera.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Nota de inicio de sesión',
    'login_note_help'           => 'Opcionalmente incluya algunas oraciones en su pantalla de inicio de sesión, por ejemplo para ayudar a las personas que han encontrado un dispositivo perdido o robado. Este campo acepta <a href="https://help.github.com/articles/github-flavored-markdown/">Github con sabor markdown</a>',
    'login_remote_user_text'    => 'Opciones de inicio de sesión de usuario remoto',
    'login_remote_user_enabled_text' => 'Habilitar inicio de sesión con encabezado de usuario remoto',
    'login_remote_user_enabled_help' => 'Esta opción habilita la Autenticación mediante el encabezado REMOTE_USER de acuerdo con la "Interfaz de puerta de enlace común (rfc3875)"',
    'login_common_disabled_text' => 'Deshabilitar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Simplemente habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de cierre de sesión personalizado',
    'login_remote_user_custom_logout_url_help' => 'Sí se especifica un URL, los usuarios serán redireccionados a este URL una vez que cierren sesión en Snipe-TI. Esto es útil para cerrar sesiones de usuario de su Authentication Provider de forma correcta.',
    'login_remote_user_header_name_text' => 'Cabecera de nombre de usuario personalizado',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar en Impresión',
    'logo_print_assets_help'    => 'Usar marca en la lista imprimible de equipos',
    'full_multiple_companies_support_help_text' => 'Usuarios restringidos (incluidos administradores) asignados a compañías de sus bienes de compañía.',
    'full_multiple_companies_support_text' => 'Soporte completo múltiple de compañías',
    'show_in_model_list'   => 'Mostrar en Desplegado de Modelos',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión de PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Debes instalar php-gd para mostrar Códigos QR, ver instrucciones de instalación en <a href="http://www.php.net/manual/en/image.installation.php"></a>.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO instalados.',
    'pwd_secure_complexity'     => 'Complejidad de la contraseña',
    'pwd_secure_complexity_help' => 'Seleccione las reglas de complejidad de las contraseñas que desee aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Caracteres mínimos de contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá que los usuarios usen contraseñas comunes de las 10,000 contraseñas principales que se notifican en las infracciones.',
    'qr_help'                   => 'Activa Códigos QR antes para poder ver esto',
    'qr_text'                   => 'Texto Código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de la entidad',
    'saml_sp_acs_url'           => 'URL del Servicio de Consumidor de Afirmaciones (ACS)',
    'saml_sp_sls_url'           => 'URL Servicio individual de cierre de sesión (SLS)',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'URL Metadatos',
    'saml_idp_metadata'         => 'Metadatos SAML IdP',
    'saml_idp_metadata_help'    => 'Puede especificar los metadatos IdP usando un archivo URL o XML.',
    'saml_attr_mapping_username' => 'Mapeo de Atributos - Nombre de Usuario',
    'saml_attr_mapping_username_help' => 'NameID se utilizará si el mapeo de atributos no está especificado o no es válido.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Hacer SAML el inicio de sesión principal',
    'saml_forcelogin_help'      => 'Puedes usar \'/login?nosaml\' para llegar a la página de inicio de sesión normal.',
    'saml_slo_label'            => 'Cerrar sesión única SAML',
    'saml_slo'                  => 'Enviar una solicitud de salida a IdP al cerrar sesión',
    'saml_slo_help'             => 'Esto causará que el usuario sea redirigido primero a la IdP al cerrar sesión. Dejar desmarcado si el IdP no soporta correctamente SAML SLO iniciado por SP.',
    'saml_custom_settings'      => 'Configuración personalizada SAML',
    'saml_custom_settings_help' => 'Puedes especificar ajustes adicionales a la biblioteca onelogin/php-saml. Úsalo bajo tu propio riesgo.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Parámetro',
    'settings'                  => 'Configuración',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Activos archivados',
    'show_archived_in_list_text'     => 'Mostrar activos archivados en el listado de "todos los archivos"',
    'show_assigned_assets'      => 'Mostrar activos asignados a activos',
    'show_assigned_assets_help' => 'Mostrar los activos que fueron asignados a otros activos en Ver Usuarios -> Activos, Ver Usuarios -> Información -> Imprimir todo lo asignado en la cuenta -> Ver activos asignados.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nombre del sitio',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Nombre de bot en Slack',
    'slack_channel'             => 'Canal en Slack',
    'slack_endpoint'            => 'Terminal en Slack',
    'slack_integration'         => 'Configuración Slack',
    'slack_integration_help'    => 'La integración con Slack es opcional, sin embargo, la terminal y el canal son requeridos si desea usarlo. Para configurar la integración con Slack, debe primero <a href=":slack_link" target="_new">crear un webhook entrante</a> en su cuenta de Slack. Haga clic en el botón<strong>Probar la Integración con Slack</strong> para confirmar que su configuraci{on es correcta antes de guardarla. ',
    'slack_integration_help_button'    => 'Una vez que haya guardado su información de Slack, aparecerá un botón de prueba.',
    'slack_test_help'           => 'Pruebe si su integración de Slack está configurada correctamente. Debe Guardar Primero su configuracion Slack Actualizada.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'support_footer'            => 'Enlaces de Soporte de Pie de Página ',
    'support_footer_help'       => 'Especifica quien ve los enlaces de información de Soporte y Manual de Usuarios de Snipe-IT',
    'version_footer'            => 'Versión en pie de página ',
    'version_footer_help'       => 'Especificar quién ve la versión Snipe-IT y el número de compilación.',
    'system'                    => 'Información del Sistema',
    'update'                    => 'Actualizar Parámetros',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Tipo de marca web',
    'about_settings_title'      => 'Acerca de Ajustes',
    'about_settings_text'       => 'Estos ajustes te permiten personalizar ciertos aspectos de tu instalación.',
    'labels_per_page'           => 'Etiquetas por pàgina',
    'label_dimensions'          => 'Dimensiones de las etiquetas (pulgadas)',
    'next_auto_tag_base'        => 'Siguiente incremento automático',
    'page_padding'              => 'Margenès de pàgina (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la Política de Privacidad',
    'privacy_policy'            => 'Política de Privacidad',
    'privacy_policy_link_help'  => 'Si se incluye una URL aquí, un enlace a tu Política de Privacidad se incluirá al pie de la aplicación y en cualquier correo electrónico que el sistema envíe, de conformidad con la ley GDPR. ',
    'purge'                     => 'Purgar registros eliminados',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Borde inferior de la Etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la Etiqueta',
    'labels_fontsize'           => 'Tamaño de fuente de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espaciamiento de etiqueta (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'an',
    'height_h'        => 'al',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarca esta casilla si no deseas volver a vincular tu instalación de Snipe-IT en tus pies de página de correo electrónico. Útil si la mayoría de sus usuarios nunca inician sesión.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles que las miniaturas pueden mostrar en la vista de listado. Mín. 25, máximo 500.',
    'two_factor'        => 'Autenticación en dos pasos',
    'two_factor_secret'        => 'Código de verificación en dos pasos',
    'two_factor_enrollment'        => 'Enrolamiento en verificación en dos pasos',
    'two_factor_enabled_text'        => 'Activar la verificación en dos pasos',
    'two_factor_reset'        => 'Reiniciar Secreto de verificación en dos pasos',
    'two_factor_reset_help'        => 'Esto forzará al usuario a inscribirse otra vez su dispositivo con Google Authenticator. Esto puede ser útil si la pérdida o robo de su dispositivo actualmente inscrito. ',
    'two_factor_reset_success'          => 'Verificación en dos pasos de dispositivo reiniciado exitosamente',
    'two_factor_reset_error'          => 'Falló la Verificación en dos pasos del dispositivo',
    'two_factor_enabled_warning'        => 'Permitiendo dos factores si no está activado inmediatamente obliga a autenticar con un dispositivo de autenticación de Google inscritos. Usted tendrá la posibilidad de inscribirse el dispositivo si uno no está inscrito actualmente.',
    'two_factor_enabled_help'        => 'Esto encenderá la autenticación de dos factores usando Google Authenticator.',
    'two_factor_optional'        => 'Selectiva (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese código de verificación en dos pasos',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'El administrador no permite modificar esta configuración.',
    'two_factor_enrollment_text'	=> "Autenticación de doble factor se requiere, sin embargo el dispositivo no ha inscrito todavía. Abra la aplicación Google Authenticator y escanear el código QR a continuación para inscribir a su dispositivo. Una vez que haya inscrito su dispositivo, introduzca el código de abajo",
    'require_accept_signature'      => 'Requerir Firma',
    'require_accept_signature_help_text'      => 'Para activar esta función se requiere que los usuarios firmen fisicamente aceptando el activo.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'fondo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Al marcar esta casilla se aplicará una restricción única en los seriales de los equipos',
    'zerofill_count'        => 'Longitud de etiquetas de activos, incluyendo relleno de ceros',
    'username_format_help'   => 'Esta configuración sólo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario para usted.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
