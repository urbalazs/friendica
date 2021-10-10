<?php

if(! function_exists("string_plural_select_es")) {
function string_plural_select_es($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Miscellaneous'] = 'Varios';
$a->strings['Birthday:'] = 'Fecha de Nac:';
$a->strings['Age: '] = 'Edad: ';
$a->strings['%d year old'] = [
	0 => '%d Años',
	1 => '%d Años',
];
$a->strings['YYYY-MM-DD or MM-DD'] = 'YYYY-MM-DD o MM-DD';
$a->strings['never'] = 'nunca';
$a->strings['less than a second ago'] = 'hace menos de un segundo';
$a->strings['year'] = 'año';
$a->strings['years'] = 'años';
$a->strings['month'] = 'mes';
$a->strings['months'] = 'meses';
$a->strings['week'] = 'semana';
$a->strings['weeks'] = 'semanas';
$a->strings['day'] = 'día';
$a->strings['days'] = 'días';
$a->strings['hour'] = 'hora';
$a->strings['hours'] = 'horas';
$a->strings['minute'] = 'minuto';
$a->strings['minutes'] = 'minutos';
$a->strings['second'] = 'segundo';
$a->strings['seconds'] = 'segundos';
$a->strings['in %1$d %2$s'] = 'en %1$d %2$s';
$a->strings['%1$d %2$s ago'] = 'hace %1$d %2$s';
$a->strings['%1$s, %2$s Administrator'] = '%1$s, %2$s Administrador';
$a->strings['%s Administrator'] = '%s Administrador';
$a->strings['thanks'] = 'gracias';
$a->strings['Friendica Notification'] = 'Notificación de Friendica';
$a->strings['You must be logged in to use addons. '] = 'Tienes que estar registrado para tener acceso a los accesorios.';
$a->strings['Method not allowed for this module. Allowed method(s): %s'] = 'Método no permitido en este módulo. Permitido(s): %s';
$a->strings['Page not found.'] = 'Pagina no encontrada.';
$a->strings['Delete this item?'] = '¿Eliminar este elemento?';
$a->strings['Block this author? They won\'t be able to follow you nor see your public posts, and you won\'t be able to see their posts and their notifications.'] = '¿Bloquear a este autor? No podrá seguirte ni ver tus publicaciones públicas, y tú no podrás ver sus publicaciones ni sus notificaciones.';
$a->strings['toggle mobile'] = 'Cambiar a versión móvil';
$a->strings['(no subject)'] = '(sin asunto)';
$a->strings['Record not found'] = 'Registro no encontrado';
$a->strings['Friend Suggestion'] = 'Sugerencia de amistad';
$a->strings['Friend/Connect Request'] = 'Solicitud de Amistad/Conexión';
$a->strings['New Follower'] = 'Nuevo seguidor';
$a->strings['%s created a new post'] = '%s creó un nuevo artículo';
$a->strings['%s commented on %s\'s post'] = '%s comentó el artículo de %s';
$a->strings['%s liked %s\'s post'] = 'A %s le gusta el artículo de %s';
$a->strings['%s disliked %s\'s post'] = 'A %s no le gusta el artículo de %s';
$a->strings['%s is attending %s\'s event'] = '%s atenderá el evento de %s';
$a->strings['%s is not attending %s\'s event'] = '%s no atenderá el evento %s';
$a->strings['%s may attending %s\'s event'] = '%s podría asistir al evento de %s';
$a->strings['%s is now friends with %s'] = '%s es ahora amigo de %s';
$a->strings['The database version had been set to %s.'] = 'Versión de la Base de Datos establecida a %s.';
$a->strings['The post update is at version %d, it has to be at %d to safely drop the tables.'] = 'La actualización de la publicación está en versión %d, debe estar en %d para eliminar las tablas de manera segura.';
$a->strings['No unused tables found.'] = 'No hay tablas sin usar.';
$a->strings['These tables are not used for friendica and will be deleted when you execute "dbstructure drop -e":'] = 'Estas tablas no se utilizan por friendica y se eliminarán cuando ejecute "dbstructure drop -e":';
$a->strings['There are no tables on MyISAM or InnoDB with the Antelope file format.'] = 'No hay tablas en MyISAM o InnoDB con formato Antílope.';
$a->strings['
Error %d occurred during database update:
%s
'] = '

Error %d ocurrido durante la actualización de la base de datos:
%s
';
$a->strings['Errors encountered performing database changes: '] = 'Errores encontrados al realizar cambios en la base de datos: ';
$a->strings['Another database update is currently running.'] = 'Otro update de la BD esta corriendo.';
$a->strings['%s: Database update'] = '%s: Actualizar Base de Datos';
$a->strings['%s: updating %s table.'] = '%s: actualizando %s tabla.';
$a->strings['Friendica can\'t display this page at the moment, please contact the administrator.'] = 'Friendica no puede mostrar la página actualmente, contacte al administrador.';
$a->strings['template engine cannot be registered without a name.'] = 'Motor de plantilla no puede registrarse sin nombre.';
$a->strings['template engine is not registered!'] = 'Motor de Plantilla no esta registrado!';
$a->strings['Yourself'] = 'Tu mismo';
$a->strings['Followers'] = 'Seguidores';
$a->strings['Mutuals'] = 'Mutuos';
$a->strings['Post to Email'] = 'Publicar por Correo';
$a->strings['Public'] = 'Público';
$a->strings['This content will be shown to all your followers and can be seen in the community pages and by anyone with its link.'] = 'Este contenido se mostrará a tus seguidores y se podrá ver en laspáginas de la Comunidad y por cualquiera con este enlace.';
$a->strings['Limited/Private'] = 'Limitado/Privado';
$a->strings['This content will be shown only to the people in the first box, to the exception of the people mentioned in the second box. It won\'t appear anywhere public.'] = 'Este contenido se mostrará solo a personas en el primer recuadro, aexcepción de personas mencionadas en el segundo recuadro. No aparecerápúblicamente.';
$a->strings['Show to:'] = 'Mostrar a:';
$a->strings['Except to:'] = 'Excepto a:';
$a->strings['CC: email addresses'] = 'CC: dirección de correo';
$a->strings['Example: bob@example.com, mary@example.com'] = 'Ejemplo: juan@ejemplo.com, maria@ejemplo.com';
$a->strings['Connectors'] = 'Conectores';
$a->strings['Updates from version %s are not supported. Please update at least to version 2021.01 and wait until the postupdate finished version 1383.'] = 'Las actualizaciones de la versión %s no son compatibles. Actualice al menos a la versión 2021.01 y espere hasta que postupdate finalice con versión 1383.';
$a->strings['Updates from postupdate version %s are not supported. Please update at least to version 2021.01 and wait until the postupdate finished version 1383.'] = 'Actualizaciones de postupdate versión %s no soportadas. Actualice al menos a versión 2021.01 y espere hasta que postupdate termine en version 1383.';
$a->strings['%s: executing pre update %d'] = '%s: ejecutando pre update %d ';
$a->strings['%s: executing post update %d'] = '%s: ejecutando post update %d ';
$a->strings['Update %s failed. See error logs.'] = 'Falló la actualización de %s. Vea los registros de errores.';
$a->strings['
				The friendica developers released update %s recently,
				but when I tried to install it, something went terribly wrong.
				This needs to be fixed soon and I can\'t do it alone. Please contact a
				friendica developer if you can not help me on your own. My database might be invalid.'] = '
				Los desarrolladores liberaron una actualización reciente %s ,
				pero cuando se intentó instalar, algo salió mal.
				Necesita arreglarse pronto y no se hará automáticamente. Contacta
				al developer friendica si no puedes hacerlo tu mismo. La base de datos puede estar errónea.';
$a->strings['The error message is\n[pre]%s[/pre]'] = 'El mensaje de error es\n[pre]%s[/pre]';
$a->strings['[Friendica Notify] Database update'] = '[Notificación Friendica] Actualización de Base de Datos';
$a->strings['
					The friendica database was successfully updated from %s to %s.'] = '
					Base de Datos Friendica exitosamente actualizada de %s a %s.';
$a->strings['Monday'] = 'Lunes';
$a->strings['Tuesday'] = 'Martes';
$a->strings['Wednesday'] = 'Miércoles';
$a->strings['Thursday'] = 'Jueves';
$a->strings['Friday'] = 'Viernes';
$a->strings['Saturday'] = 'Sábado';
$a->strings['Sunday'] = 'Domingo';
$a->strings['January'] = 'Enero';
$a->strings['February'] = 'Febrero';
$a->strings['March'] = 'Marzo';
$a->strings['April'] = 'Abril';
$a->strings['May'] = 'Mayo';
$a->strings['June'] = 'Junio';
$a->strings['July'] = 'Julio';
$a->strings['August'] = 'Agosto';
$a->strings['September'] = 'Septiembre';
$a->strings['October'] = 'Octubre';
$a->strings['November'] = 'Noviembre';
$a->strings['December'] = 'Diciembre';
$a->strings['Mon'] = 'Lun';
$a->strings['Tue'] = 'Mar';
$a->strings['Wed'] = 'Mie';
$a->strings['Thu'] = 'Jue';
$a->strings['Fri'] = 'Vie';
$a->strings['Sat'] = 'Sab';
$a->strings['Sun'] = 'Dom';
$a->strings['Jan'] = 'Ene';
$a->strings['Feb'] = 'Feb';
$a->strings['Mar'] = 'Mar';
$a->strings['Apr'] = 'Abr';
$a->strings['Jun'] = 'Jun';
$a->strings['Jul'] = 'Jul';
$a->strings['Aug'] = 'Ago';
$a->strings['Sep'] = 'Sep';
$a->strings['Oct'] = 'Oct';
$a->strings['Nov'] = 'Nov';
$a->strings['Dec'] = 'Dec';
$a->strings['poke'] = 'empujar';
$a->strings['poked'] = 'empujó a';
$a->strings['ping'] = 'mandar "ping"';
$a->strings['pinged'] = 'hizo "ping" a';
$a->strings['prod'] = 'empujar';
$a->strings['prodded'] = 'empujó a';
$a->strings['slap'] = 'abofetear';
$a->strings['slapped'] = 'abofeteó a';
$a->strings['finger'] = 'meter dedo';
$a->strings['fingered'] = 'le metió un dedo a';
$a->strings['rebuff'] = 'desairar';
$a->strings['rebuffed'] = 'desairó a';
$a->strings['The database configuration file "config/local.config.php" could not be written. Please use the enclosed text to create a configuration file in your web server root.'] = 'Archivo de configuración de la BD "config/local.config.php" no pudo ser escrito. Utilice el texto adjunto para crear un archivo de configuración en  raíz del servidor web.';
$a->strings['You may need to import the file "database.sql" manually using phpmyadmin or mysql.'] = 'Puede que tengas que importar el archivo "database.sql" manualmente usando phpmyadmin o mysql.';
$a->strings['Please see the file "doc/INSTALL.md".'] = 'De favor vea el archivo  "doc/INSTALL.md".';
$a->strings['Could not find a command line version of PHP in the web server PATH.'] = 'No se encontró versión de línea de comandos PHP en ruta del servidor web.';
$a->strings['If you don\'t have a command line version of PHP installed on your server, you will not be able to run the background processing. See <a href=\'https://github.com/friendica/friendica/blob/stable/doc/Install.md#set-up-the-worker\'>\'Setup the worker\'</a>'] = 'Si no tienes versión de comando de PHP instalado en tu servidor, no podras correr el proceso de fondo. Ver <a href=\'https://github.com/friendica/friendica/blob/stable/doc/Install.md#set-up-the-worker\'>\'Configurar Worker\'</a>';
$a->strings['PHP executable path'] = 'Ruta executable PHP';
$a->strings['Enter full path to php executable. You can leave this blank to continue the installation.'] = 'Introduce la ruta completa al ejecutable php. Puedes dejarlo en blanco y seguir con la instalación.';
$a->strings['Command line PHP'] = 'Línea de comandos PHP';
$a->strings['PHP executable is not the php cli binary (could be cgi-fgci version)'] = 'Ejecutable PHP no es php cli binary (podria ser versión cgi-fgci)';
$a->strings['Found PHP version: '] = 'Versión PHP encontrada:';
$a->strings['PHP cli binary'] = 'PHP cli binario';
$a->strings['The command line version of PHP on your system does not have "register_argc_argv" enabled.'] = 'La versión en línea de comandos de PHP en tu sistema no tiene "register_argc_argv" habilitado.';
$a->strings['This is required for message delivery to work.'] = 'Esto es requerido para que funcione la entrega de mensajes.';
$a->strings['PHP register_argc_argv'] = 'PHP register_argc_argv';
$a->strings['Error: the "openssl_pkey_new" function on this system is not able to generate encryption keys'] = 'Error:  Función "openssl_pkey_new" en este sistema no es capaz de generar claves de cifrado';
$a->strings['If running under Windows, please see "http://www.php.net/manual/en/openssl.installation.php".'] = 'Si se ejecuta en Windows, por favor consulta la sección "http://www.php.net/manual/en/openssl.installation.php".';
$a->strings['Generate encryption keys'] = 'Generar claves de encriptación';
$a->strings['Error: Apache webserver mod-rewrite module is required but not installed.'] = 'Error: El módulo de Apache mod-rewrite es necesario pero no está instalado.';
$a->strings['Apache mod_rewrite module'] = 'Módulo mod_rewrite de Apache';
$a->strings['Error: PDO or MySQLi PHP module required but not installed.'] = 'Error: Módulo PDO o MySQLi PHP requerido pero no instalado.';
$a->strings['Error: The MySQL driver for PDO is not installed.'] = 'Error: El dispositivo MySQL para PDO no está instalado.';
$a->strings['PDO or MySQLi PHP module'] = 'Módulo PDO o MySQLi PHP';
$a->strings['Error, XML PHP module required but not installed.'] = 'Error, módulo XML PHP requerido pero no instalado.';
$a->strings['XML PHP module'] = 'Módulo XML PHP';
$a->strings['libCurl PHP module'] = 'Módulo PHP libCurl';
$a->strings['Error: libCURL PHP module required but not installed.'] = 'Error: El módulo de PHP libcurl es necesario, pero no está instalado.';
$a->strings['GD graphics PHP module'] = 'Módulo PHP gráficos GD';
$a->strings['Error: GD graphics PHP module with JPEG support required but not installed.'] = 'Error: El módulo de de PHP gráficos GD con soporte JPEG es necesario, pero no está instalado.';
$a->strings['OpenSSL PHP module'] = 'Módulo PHP OpenSSL';
$a->strings['Error: openssl PHP module required but not installed.'] = 'Error: El módulo de PHP openssl es necesario, pero  no está instalado.';
$a->strings['mb_string PHP module'] = 'Módulo PHP mb_string';
$a->strings['Error: mb_string PHP module required but not installed.'] = 'Error: El módulo de PHP mb_string es necesario, pero no está instalado.';
$a->strings['iconv PHP module'] = 'Módulo PHP iconv';
$a->strings['Error: iconv PHP module required but not installed.'] = 'Error: módulo iconv PHP requerido pero no instalado.';
$a->strings['POSIX PHP module'] = 'Módulo PHP POSIX';
$a->strings['Error: POSIX PHP module required but not installed.'] = 'Error: PHP POSIX requerido y no instalado.';
$a->strings['Program execution functions'] = 'Funciones de ejecución de programa';
$a->strings['Error: Program execution functions required but not enabled.'] = 'Error: Funciones de ejecución de programa requeridas pero no habilitadas.';
$a->strings['JSON PHP module'] = 'Módulo PHP JSON';
$a->strings['Error: JSON PHP module required but not installed.'] = 'Eror: Módulo PHP JSON requerido y no instalado.';
$a->strings['File Information PHP module'] = 'Módulo PHP Información de Archivo';
$a->strings['Error: File Information PHP module required but not installed.'] = 'Error: Módulo PHP Información de Archivo requerido y no instalado.';
$a->strings['The web installer needs to be able to create a file called "local.config.php" in the "config" folder of your web server and it is unable to do so.'] = 'El instalador web debe poder crear un archivo llamado"local.config.php" en folder "config" de su servidor web y esincapaz de hacerlo.';
$a->strings['This is most often a permission setting, as the web server may not be able to write files in your folder - even if you can.'] = 'Se trata a menudo de una configuración de permisos, pues el servidor web puede que no sea capaz de escribir archivos en la carpeta, aunque tú puedas.';
$a->strings['At the end of this procedure, we will give you a text to save in a file named local.config.php in your Friendica "config" folder.'] = 'Al final de este procedimiento, le daremos un texto para guardar en un archivollamado local.config.php en su folder "config" de Friendica .';
$a->strings['You can alternatively skip this procedure and perform a manual installation. Please see the file "doc/INSTALL.md" for instructions.'] = 'Alternativamente, puede omitir este procedimiento y realizar una instalación manual. Consulte el archivo "doc/INSTALL.md" para instrucciones.';
$a->strings['config/local.config.php is writable'] = 'config/local.config.php es escriturable';
$a->strings['Friendica uses the Smarty3 template engine to render its web views. Smarty3 compiles templates to PHP to speed up rendering.'] = 'Friendica usa el motor de templates Smarty3 para renderizar su visualización web. Smarty3 compila templates PHP para acelerar la velocidad de renderizar.';
$a->strings['In order to store these compiled templates, the web server needs to have write access to the directory view/smarty3/ under the Friendica top level folder.'] = 'Para poder guardar estos templates compilados, el servidor web necesita acceso de escritura en el directorio /view/smarty3/ en el árbol de raíz de la instalación friendica.';
$a->strings['Please ensure that the user that your web server runs as (e.g. www-data) has write access to this folder.'] = 'Por favor asegure que el usuario que utiliza el servidor web (ejemplo: www-data) tiene permisos de escritura en esta carpeta.';
$a->strings['Note: as a security measure, you should give the web server write access to view/smarty3/ only--not the template files (.tpl) that it contains.'] = 'Nota: como medida de seguridad deberia dar acceso de escritura solo a /view/smarty3 / → no al los archivos template (.tpl) que contiene.';
$a->strings['view/smarty3 is writable'] = 'Se puede escribir en /view/smarty3';
$a->strings['Url rewrite in .htaccess seems not working. Make sure you copied .htaccess-dist to .htaccess.'] = 'La reescritura de URL en .htaccess parece no funcionar. Asegúrese de haber copiado .htaccess-dist a .htaccess.';
$a->strings['In some circumstances (like running inside containers), you can skip this error.'] = 'En algunas circunstancias (como ejecutar dentro de contenedores), puede omitir este error.';
$a->strings['Error message from Curl when fetching'] = 'Mensaje de Error de Curl en lectura';
$a->strings['Url rewrite is working'] = 'Reescribiendo la dirección...';
$a->strings['ImageMagick PHP extension is not installed'] = 'No está instalada la extensión ImageMagick PHP';
$a->strings['ImageMagick PHP extension is installed'] = 'ImageMagick PHP extension is installed';
$a->strings['ImageMagick supports GIF'] = 'ImageMagick supporta GIF';
$a->strings['Database already in use.'] = 'Base de datos ya esta en uso';
$a->strings['Could not connect to database.'] = 'No es posible conectar con Base Datos.';
$a->strings['Error decoding account file'] = 'Error decodificando el archivo de cuenta';
$a->strings['Error! No version data in file! This is not a Friendica account file?'] = 'Error! No hay datos de versión en el archivo! ¿Es esto de una cuenta friendica? ';
$a->strings['User \'%s\' already exists on this server!'] = 'La cuenta \'%s\' ya existe en este servidor!';
$a->strings['User creation error'] = 'Error al crear la cuenta';
$a->strings['%d contact not imported'] = [
	0 => '%d contacto no importado',
	1 => '%d contactos no importados',
];
$a->strings['User profile creation error'] = 'Error al crear Perfil de Usuario';
$a->strings['Done. You can now login with your username and password'] = 'Hecho. Ahora podes ingresar con tu usuario y contraseña.';
$a->strings['Access denied.'] = 'Acceso denegado.';
$a->strings['Permission denied.'] = 'Permiso denegado.';
$a->strings['Contact not found.'] = 'Contacto no encontrado.';
$a->strings['Suggested contact not found.'] = 'El contacto sugerido no se encontró.';
$a->strings['Friend suggestion sent.'] = 'Solicitud de amistad enviada.';
$a->strings['Suggest Friends'] = 'Sugerencias de amistad';
$a->strings['Suggest a friend for %s'] = 'Recomienda un amigo a %s';
$a->strings['Submit'] = 'Enviar';
$a->strings['Bad Request'] = 'Error en solicitud';
$a->strings['Unauthorized'] = 'No autorizado';
$a->strings['Forbidden'] = 'Prohibido';
$a->strings['Not Found'] = 'No se encontró';
$a->strings['Internal Server Error'] = 'Error Interno del Servidor';
$a->strings['Service Unavailable'] = 'Servicio no Disponible';
$a->strings['The server cannot or will not process the request due to an apparent client error.'] = 'Servidor no puede procesar la solicitud debido a aparente error del navegador.';
$a->strings['Authentication is required and has failed or has not yet been provided.'] = 'Se requieren ingresar o falló el intento.';
$a->strings['The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account.'] = 'Solicitud válida, pero el servidor lo rechazó. Podría ser que el Usuario no tenga los permisos necesario, o requiera ingresar con una cuenta.';
$a->strings['The requested resource could not be found but may be available in the future.'] = 'El recurso solicitado no se encontró pero podría estar disponible pronto.';
$a->strings['An unexpected condition was encountered and no more specific message is suitable.'] = 'Se generó un error inesperado y no tenemos mas detalles.';
$a->strings['The server is currently unavailable (because it is overloaded or down for maintenance). Please try again later.'] = 'El servidor no esta disponible (pude estar sobrecargado o en mantenimiento) Inténtelo después.';
$a->strings['Go back'] = 'Regresar';
$a->strings['Stack trace:'] = 'Seguimiento de pila:';
$a->strings['Exception thrown in %s:%d'] = 'Excepción lanzada en %s:%d';
$a->strings['Item was not removed'] = 'Artículo no fue borrado';
$a->strings['Item was not deleted'] = 'Artículo no fue borrado';
$a->strings['You must be logged in to use this module'] = 'Debes ingresar para usar este módulo';
$a->strings['Save to Folder:'] = 'Guardar en directorio:';
$a->strings['- select -'] = '- seleccionar -';
$a->strings['Save'] = 'Guardar';
$a->strings['API endpoint "%s" is not implemented'] = 'API endpoint "%s" no implementada';
$a->strings['The API endpoint is currently not implemented but might be in the future.'] = 'API endpoint no está implementado actualmente, pero podría estarlo en el futuro.';
$a->strings['Contact not found'] = 'Contacto no Encontrado';
$a->strings['User not found'] = 'Usuario no encontrado';
$a->strings['Profile not found'] = 'No se encontró el Perfil';
$a->strings['Error while sending poke, please retry.'] = 'Error al enviar empujón, reintentalo.';
$a->strings['You must be logged in to use this module.'] = 'Debes ingresar para usar el modulo.';
$a->strings['Poke/Prod'] = 'Toque/Empujón';
$a->strings['poke, prod or do other things to somebody'] = 'dar un toque, empujón o similar a alguien';
$a->strings['Choose what you wish to do to recipient'] = 'Elige qué hacer con el receptor';
$a->strings['Make this post private'] = 'Hacer esta publicación privada';
$a->strings['Loading...'] = 'Cargando...';
$a->strings['Contact update failed.'] = 'Error al actualizar el Contacto.';
$a->strings['<strong>WARNING: This is highly advanced</strong> and if you enter incorrect information your communications with this contact may stop working.'] = '<strong>ADVERTENCIA: Esto es muy avanzado</strong> y si se introduce información incorrecta tu conexión con este contacto puede dejar de funcionar.';
$a->strings['Please use your browser \'Back\' button <strong>now</strong> if you are uncertain what to do on this page.'] = 'Por favor usa el botón \'Atrás\' de tu navegador <strong>ahora</strong> si no tienes claro qué hacer en esta página.';
$a->strings['Return to contact editor'] = 'Volver al editor de contactos';
$a->strings['Name'] = 'Nombre';
$a->strings['Account Nickname'] = 'Apodo de cuenta';
$a->strings['@Tagname - overrides Name/Nickname'] = '@Tagname - Sobrescribe el Nombre/Apodo';
$a->strings['Account URL'] = 'Dirección de cuenta';
$a->strings['Account URL Alias'] = 'URL Alias de cuenta';
$a->strings['Friend Request URL'] = 'Dirección de solicitud de amistad';
$a->strings['Friend Confirm URL'] = 'Dirección de confirmación de amistad ';
$a->strings['Notification Endpoint URL'] = 'Dirección URL de notificación';
$a->strings['Poll/Feed URL'] = 'Dirección de Sondeo/Fuente';
$a->strings['New photo from this URL'] = 'Nueva foto de esta URL';
$a->strings['Invalid contact.'] = 'Contacto erróneo.';
$a->strings['No known contacts.'] = 'No hay contactos conocidos.';
$a->strings['No common contacts.'] = 'Sin contactos comunes.';
$a->strings['Follower (%s)'] = [
	0 => 'Seguidor (%s)',
	1 => 'Seguidores (%s)',
];
$a->strings['Following (%s)'] = [
	0 => 'Siguiendo (%s)',
	1 => 'Siguiendo (%s)',
];
$a->strings['Mutual friend (%s)'] = [
	0 => 'Amigo mutuo (%s)',
	1 => 'Amigos mutuos (%s)',
];
$a->strings['These contacts both follow and are followed by <strong>%s</strong>.'] = 'Estos contactos siguen y son seguidos por <strong>%s</strong>.';
$a->strings['Common contact (%s)'] = [
	0 => 'Common contact (%s)',
	1 => 'Common contacts (%s)',
];
$a->strings['Both <strong>%s</strong> and yourself have publicly interacted with these contacts (follow, comment or likes on public posts).'] = 'Tanto <strong>%s</strong>  como usted han interactuado públicamente con estos contactos (seguir, comentar o dar me gusta en publicaciones públicas).';
$a->strings['Contact (%s)'] = [
	0 => 'Contacto (%s)',
	1 => 'Contactos (%s)',
];
$a->strings['Installed addons/apps:'] = 'Añadidos/apps Instalados:';
$a->strings['No installed addons/apps'] = 'Añadidos/apps no instalados';
$a->strings['Read about the <a href="%1$s/tos">Terms of Service</a> of this node.'] = 'Leer acerca de <a href="%1$s/tos">Términos de Servicio</a> del nodo.';
$a->strings['On this server the following remote servers are blocked.'] = 'En este servidor los siguientes servidores remotos están bloqueados.';
$a->strings['Blocked domain'] = 'Dominio bloqueado';
$a->strings['Reason for the block'] = 'Razón para el bloqueo';
$a->strings['This is Friendica, version %s that is running at the web location %s. The database version is %s, the post update version is %s.'] = 'Este es Friendica, version %s ejecutándose en ubicación %s. Versión de la BD es %s, la versión después de actualización es %s.';
$a->strings['Please visit <a href="https://friendi.ca">Friendi.ca</a> to learn more about the Friendica project.'] = 'Visite <a href="https://friendi.ca">Friendi.ca</a> para aprender más sobre el proyecto Friendica, por favor.';
$a->strings['Bug reports and issues: please visit'] = 'Reporte de fallos y problemas: por favor visita';
$a->strings['the bugtracker at github'] = 'aviso de fallas (bugs) en github';
$a->strings['Suggestions, praise, etc. - please email "info" at "friendi - dot - ca'] = 'Sugerencias, agradecimientos, etc. - envie correo  "info" at "friendi - dot - ca';
$a->strings['Could not create group.'] = 'Imposible crear el grupo.';
$a->strings['Group not found.'] = 'Grupo no encontrado.';
$a->strings['Group name was not changed.'] = 'Nombre de Grupo no modificado.';
$a->strings['Unknown group.'] = 'Grupo no existe.';
$a->strings['Contact is deleted.'] = 'El contacto se borra.';
$a->strings['Unable to add the contact to the group.'] = 'No es posible añadir contacto al grupo.';
$a->strings['Contact successfully added to group.'] = 'Se añadió el contacto el grupo.';
$a->strings['Unable to remove the contact from the group.'] = 'No es posible borrar contacto del grupo.';
$a->strings['Contact successfully removed from group.'] = 'Contacto borrado del grupo.';
$a->strings['Unknown group command.'] = 'Comando de grupo desconocido.';
$a->strings['Bad request.'] = 'Petición no reconocida';
$a->strings['Save Group'] = 'Guardar grupo';
$a->strings['Filter'] = 'Filtro';
$a->strings['Create a group of contacts/friends.'] = 'Crea un grupo de contactos/amigos.';
$a->strings['Group Name: '] = 'Nombre del grupo: ';
$a->strings['Contacts not in any group'] = 'Contactos sin grupo';
$a->strings['Unable to remove group.'] = 'No se puede eliminar el grupo.';
$a->strings['Delete Group'] = 'Borrar grupo';
$a->strings['Edit Group Name'] = 'Editar nombre de grupo';
$a->strings['Members'] = 'Miembros';
$a->strings['All Contacts'] = 'Todos los contactos';
$a->strings['Group is empty'] = 'Grupo está vacío';
$a->strings['Remove contact from group'] = 'Borrar contacto del grupo';
$a->strings['Click on a contact to add or remove.'] = 'Pulsa en un contacto para añadirlo o eliminarlo.';
$a->strings['Add contact to group'] = 'Añadir contacto a grupo';
$a->strings['Notifications'] = 'Notificaciones';
$a->strings['Method Not Allowed.'] = 'Método no Permitido';
$a->strings['Welcome to %s'] = 'Bienvenido a %s';
$a->strings['People Search - %s'] = 'Buscar personas - %s';
$a->strings['Forum Search - %s'] = 'Búsqueda de Foros - %s';
$a->strings['No matches'] = 'Sin resultados';
$a->strings['Show Ignored Requests'] = 'Mostrar peticiones ignoradas';
$a->strings['Hide Ignored Requests'] = 'Ocultar peticiones ignoradas';
$a->strings['Notification type:'] = 'Tipo de Notificación:';
$a->strings['Suggested by:'] = 'Sugerido por:';
$a->strings['Profile URL'] = 'URL del Perfil';
$a->strings['Approve'] = 'Aprobar';
$a->strings['Ignore'] = 'Ignorar';
$a->strings['Discard'] = 'Descartar';
$a->strings['Claims to be known to you: '] = 'Dice conocerte: ';
$a->strings['Yes'] = 'Sí';
$a->strings['No'] = 'No';
$a->strings['Shall your connection be bidirectional or not?'] = '¿Debe la conexión ser bidireccional o no?';
$a->strings['Accepting %s as a friend allows %s to subscribe to your posts, and you will also receive updates from them in your news feed.'] = 'Aceptar a %s como amigo le permite a %s suscribirse a sus publicaciones, y usted también recibirá actualizaciones de ellos en sus noticias.';
$a->strings['Accepting %s as a subscriber allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'Aceptar a %s como suscriptor les permite suscribirse a sus publicaciones, pero usted no recibirá actualizaciones de ellos en sus noticias.';
$a->strings['Friend'] = 'Amigo';
$a->strings['Subscriber'] = 'Suscriptor';
$a->strings['Location:'] = 'Localización:';
$a->strings['About:'] = 'Acerca de:';
$a->strings['Tags:'] = 'Etiquetas:';
$a->strings['Hide this contact from others'] = 'Ocultar el contacto a los demás.';
$a->strings['Network:'] = 'Red:';
$a->strings['No introductions.'] = 'Sin presentaciones.';
$a->strings['No more %s notifications.'] = 'No más notificaciones de %s.';
$a->strings['Network Notifications'] = 'Notificaciones de Red';
$a->strings['System Notifications'] = 'Notificaciones del sistema';
$a->strings['Personal Notifications'] = 'Notificaciones personales';
$a->strings['Home Notifications'] = 'Notificaciones de Inicio';
$a->strings['Show unread'] = 'Mostrar no leído';
$a->strings['Show all'] = 'Mostrar todo';
$a->strings['You must be logged in to show this page.'] = 'Debes ingresar para ver esa pagina.';
$a->strings['Wrong type "%s", expected one of: %s'] = 'Tipo erróneo "%s", se esperaba uno: %s';
$a->strings['Model not found'] = 'Modelo no encontrado';
$a->strings['Remote privacy information not available.'] = 'Privacidad de la información remota no disponible.';
$a->strings['Visible to:'] = 'Visible para:';
$a->strings['A Decentralized Social Network'] = 'Una Red Social Descentralizada';
$a->strings['Please login to continue.'] = 'Inicia sesión para continuar.';
$a->strings['You don\'t have access to administration pages.'] = 'No tienes acceso a las páginas de administración.';
$a->strings['Submanaged account can\'t access the administration pages. Please log back in as the main account.'] = 'La cuenta subadministrada no puede acceder a las páginas de administración. Vuelva a iniciar sesión como cuenta principal.';
$a->strings['Information'] = 'Información';
$a->strings['Overview'] = 'Resumen';
$a->strings['Federation Statistics'] = 'Estadísticas de federación';
$a->strings['Configuration'] = 'Configuración';
$a->strings['Site'] = 'Sitio';
$a->strings['Users'] = 'Usuarios';
$a->strings['Addons'] = 'Añadidos';
$a->strings['Themes'] = 'Temas';
$a->strings['Additional features'] = 'Características adicionales';
$a->strings['Terms of Service'] = 'Términos de Servicio';
$a->strings['Database'] = 'Base de Datos';
$a->strings['DB updates'] = 'Actualizaciones de la Base de Datos';
$a->strings['Inspect Deferred Workers'] = 'Workers diferidos Inspeccionados';
$a->strings['Inspect worker Queue'] = 'Inspeccionar Cola de Workers';
$a->strings['Tools'] = 'Herramientas';
$a->strings['Contact Blocklist'] = 'Lista de Contactos Bloqueados';
$a->strings['Server Blocklist'] = 'Lista de Bloqueo del Servidor';
$a->strings['Delete Item'] = 'Eliminar Artículo';
$a->strings['Logs'] = 'Registros';
$a->strings['View Logs'] = 'Ver registro de depuración';
$a->strings['Diagnostics'] = 'Diagnósticos';
$a->strings['PHP Info'] = 'Información PHP';
$a->strings['probe address'] = 'probar direccion';
$a->strings['check webfinger'] = 'Verificar webfinger';
$a->strings['Item Source'] = 'Artículo fuente';
$a->strings['Babel'] = 'Babel';
$a->strings['ActivityPub Conversion'] = 'Conversión a ActivityPub';
$a->strings['Admin'] = 'Admin';
$a->strings['Addon Features'] = 'Funciones de los Añadidos';
$a->strings['User registrations waiting for confirmation'] = 'Registro de usuarios esperando la confirmación';
$a->strings['User not found.'] = 'Usuario no encontrado.';
$a->strings['%s\'s timeline'] = 'Estado de %s';
$a->strings['%s\'s posts'] = 'Artículos de %s';
$a->strings['%s\'s comments'] = 'Comentarios de %s';
$a->strings['Access to this profile has been restricted.'] = 'El acceso a este perfil ha sido restringido.';
$a->strings['No contacts.'] = 'Sin contactos.';
$a->strings['Profile not found.'] = 'Perfil no encontrado.';
$a->strings['You\'re currently viewing your profile as <b>%s</b> <a href="%s" class="btn btn-sm pull-right">Cancel</a>'] = 'Actualmente estás viendo tu perfil como <b>%s</b> <a href="%s" class="btn btn-sm pull-right">Cancelar</a>';
$a->strings['Full Name:'] = 'Nombre Completo:';
$a->strings['Member since:'] = 'Miembro desde:';
$a->strings['j F, Y'] = 'j F, Y';
$a->strings['j F'] = 'j F';
$a->strings['Description:'] = 'Descripción:';
$a->strings['XMPP:'] = 'XMPP:';
$a->strings['Homepage:'] = 'Inicio:';
$a->strings['Forums:'] = 'Foros:';
$a->strings['Profile'] = 'Perfil';
$a->strings['View profile as:'] = 'Ver perfil como:';
$a->strings['Basic'] = 'Basic';
$a->strings['Advanced'] = 'Avanzado';
$a->strings['Edit profile'] = 'Editar perfil';
$a->strings['View as'] = 'Ver como';
$a->strings['Only parent users can create additional accounts.'] = 'Solo usuarios superiores pueden crear mas cuentas.';
$a->strings['This site has exceeded the number of allowed daily account registrations. Please try again tomorrow.'] = 'Este sitio ha excedido el número de registros diarios permitidos. Inténtalo de nuevo mañana por favor.';
$a->strings['You may (optionally) fill in this form via OpenID by supplying your OpenID and clicking "Register".'] = 'Puede (opcionalmente) llenar el formulario vía OpenID proporcionando su OpenID y haciendo clic en "Registrarse".';
$a->strings['If you are not familiar with OpenID, please leave that field blank and fill in the rest of the items.'] = 'Si no estás familiarizado con OpenID, por favor deja ese campo en blanco y rellena el resto de los elementos.';
$a->strings['Your OpenID (optional): '] = 'Tu OpenID (opcional): ';
$a->strings['Include your profile in member directory?'] = '¿Incluir tu perfil en el directorio de miembros?';
$a->strings['Note for the admin'] = 'Nota para el administrador';
$a->strings['Leave a message for the admin, why you want to join this node'] = 'Deje un mensaje para el administrador sobre por qué quiere unirse a este nodo';
$a->strings['Required'] = 'Obligatorio';
$a->strings['Membership on this site is by invitation only.'] = 'Sitio solo accesible mediante invitación.';
$a->strings['Your invitation code: '] = 'Tu código de Invitación: ';
$a->strings['Registration'] = 'Registro';
$a->strings['Your Full Name (e.g. Joe Smith, real or real-looking): '] = 'Nombre completo (ej. Juan Perez, real o apariencia real):';
$a->strings['Your Email Address: (Initial information will be send there, so this has to be an existing address.)'] = 'Tu Correo electrónico: (Información inicial se enviará allí, por lo que debeser una dirección existente.)';
$a->strings['Please repeat your e-mail address:'] = 'Repite tu correo:';
$a->strings['New Password:'] = 'Contraseña Nueva:';
$a->strings['Leave empty for an auto generated password.'] = 'Dejar vacío para autogenerar una contraseña';
$a->strings['Confirm:'] = 'Confirmar:';
$a->strings['Choose a profile nickname. This must begin with a text character. Your profile address on this site will then be "<strong>nickname@%s</strong>".'] = 'Elija un apodo de perfil. Que comience con un carácter de texto. Tu dirección de perfil en este sitio será "<strong>nickname@%s</strong>".';
$a->strings['Choose a nickname: '] = 'Escoge un apodo: ';
$a->strings['Register'] = 'Registro';
$a->strings['Import'] = 'Importar';
$a->strings['Import your profile to this friendica instance'] = 'Importar tu perfil a esta instancia de friendica';
$a->strings['Note: This node explicitly contains adult content'] = 'Nota: Este nodo contiene material adulto explicito';
$a->strings['Parent Password:'] = 'Contraseña principal:';
$a->strings['Please enter the password of the parent account to legitimize your request.'] = 'Ingrese la contraseña de la cuenta principal para conformar la solicitud.';
$a->strings['Password doesn\'t match.'] = 'Contraseñas diferentes.';
$a->strings['Please enter your password.'] = 'Ingresa tu contraseña.';
$a->strings['You have entered too much information.'] = 'Demasiada información.';
$a->strings['Please enter the identical mail address in the second field.'] = 'Ingresa la misma cuenta de correo en el segundo campo';
$a->strings['The additional account was created.'] = 'La cuenta adicional fue creada.';
$a->strings['Registration successful. Please check your email for further instructions.'] = 'Te has registrado con éxito. Consulta tu correo para más información.';
$a->strings['Failed to send email message. Here your accout details:<br> login: %s<br> password: %s<br><br>You can change your password after login.'] = 'Error al intentar de enviar mensaje de correo. Aquí los detalles de tu cuenta: <br> Usuario: %s<br> Contraseña: %s<br><br>Puede cambiar tu contraseña después de ingresar al sitio.';
$a->strings['Registration successful.'] = 'Registro exitoso.';
$a->strings['Your registration can not be processed.'] = 'Tu registro no se puede procesar.';
$a->strings['You have to leave a request note for the admin.'] = 'Debes dejar una solicitud al Administrador.';
$a->strings['Your registration is pending approval by the site owner.'] = 'Tu registro queda pendiente de aprobación por el dueño del sitio.';
$a->strings['%d contact edited.'] = [
	0 => '%d contacto editado.',
	1 => '%d contactos editados.',
];
$a->strings['Could not access contact record.'] = 'No se pudo acceder a los datos del contacto.';
$a->strings['Failed to update contact record.'] = 'Error al actualizar el contacto.';
$a->strings['Follow'] = 'Seguir';
$a->strings['Unfollow'] = 'Dejar de Seguir';
$a->strings['Message'] = 'Mensaje';
$a->strings['Contact has been blocked'] = 'Contacto ha sido bloqueado';
$a->strings['Contact has been unblocked'] = 'Contacto ha sido desbloqueado';
$a->strings['Contact has been ignored'] = 'Contacto ha sido ignorado';
$a->strings['Contact has been unignored'] = 'El contacto ya no está ignorado';
$a->strings['Contact has been archived'] = 'El contacto ha sido archivado';
$a->strings['Contact has been unarchived'] = 'El contacto ya no está archivado';
$a->strings['Drop contact'] = 'Eliminar contacto';
$a->strings['Do you really want to delete this contact?'] = '¿Estás seguro de que quieres eliminar este contacto?';
$a->strings['Cancel'] = 'Cancelar';
$a->strings['Contact has been removed.'] = 'El contacto ha sido eliminado';
$a->strings['You are mutual friends with %s'] = 'Ahora tienes una amistad mutua con %s';
$a->strings['You are sharing with %s'] = 'Estás compartiendo con %s';
$a->strings['%s is sharing with you'] = '%s está compartiendo contigo';
$a->strings['Private communications are not available for this contact.'] = 'Las comunicaciones privadas no está disponibles para este contacto.';
$a->strings['Never'] = 'Nunca';
$a->strings['(Update was not successful)'] = '(La actualización no se completo)';
$a->strings['(Update was successful)'] = '(Actualización exitosa)';
$a->strings['Suggest friends'] = 'Sugerir amigos';
$a->strings['Network type: %s'] = 'Tipo de red: %s';
$a->strings['Communications lost with this contact!'] = '¡Se ha perdido la comunicación con este contacto!';
$a->strings['Fetch further information for feeds'] = 'Recaudar información complementaria de los feeds';
$a->strings['Fetch information like preview pictures, title and teaser from the feed item. You can activate this if the feed doesn\'t contain much text. Keywords are taken from the meta header in the feed item and are posted as hash tags.'] = 'Obtener información como vistas previas, título e intro del artículo. Puedes desactivarlo si el artículo no contiene mucho texto. Etiquetas se toman de la cabecera del artículo y se publican como #etiquetas.';
$a->strings['Disabled'] = 'Deshabilitado';
$a->strings['Fetch information'] = 'Recuperar información';
$a->strings['Fetch keywords'] = 'Recuperar etiquetas';
$a->strings['Fetch information and keywords'] = 'Recuperar información y palabras claves';
$a->strings['No mirroring'] = 'No copiar';
$a->strings['Mirror as forwarded posting'] = 'Copiar como reenvío';
$a->strings['Mirror as my own posting'] = 'Copiar como publicación propia';
$a->strings['Native reshare'] = 'Reenviar (nativo)';
$a->strings['Contact Information / Notes'] = 'Información del Contacto / Notas';
$a->strings['Contact Settings'] = 'Ajustes del contacto';
$a->strings['Contact'] = 'Contacto';
$a->strings['Their personal note'] = 'Su nota personal';
$a->strings['Edit contact notes'] = 'Editar notas del contacto';
$a->strings['Visit %s\'s profile [%s]'] = 'Ver el perfil de %s [%s]';
$a->strings['Block/Unblock contact'] = 'Boquear/Desbloquear contacto';
$a->strings['Ignore contact'] = 'Ignorar contacto';
$a->strings['View conversations'] = 'Ver conversaciones';
$a->strings['Last update:'] = 'Última actualización:';
$a->strings['Update public posts'] = 'Actualizar publicaciones públicas';
$a->strings['Update now'] = 'Actualizar ahora';
$a->strings['Unblock'] = 'Desbloquear';
$a->strings['Block'] = 'Bloquear';
$a->strings['Unignore'] = 'Quitar de Ignorados';
$a->strings['Currently blocked'] = 'Bloqueados';
$a->strings['Currently ignored'] = 'Ignorados';
$a->strings['Currently archived'] = 'Archivados';
$a->strings['Awaiting connection acknowledge'] = 'Esperando respuesta de conexión';
$a->strings['Replies/likes to your public posts <strong>may</strong> still be visible'] = 'Los comentarios o "me gusta" en tus publicaciones públicas todavía <strong>pueden</strong> ser visibles.';
$a->strings['Notification for new posts'] = 'Notificación de nuevos temas.';
$a->strings['Send a notification of every new post of this contact'] = 'Enviar una notificacion por nuevos temas de este contacto.';
$a->strings['Keyword Deny List'] = 'Lista de Etiquetas Prohibidas';
$a->strings['Comma separated list of keywords that should not be converted to hashtags, when "Fetch information and keywords" is selected'] = 'Lista separada por comas de palabras claves que no deberían ser convertidas en #etiquetas cuando "Recaudar información y palabras claves" es seleccionado';
$a->strings['Actions'] = 'Acciones';
$a->strings['Status'] = 'Estado';
$a->strings['Mirror postings from this contact'] = 'Espejar publicaciones de este contacto';
$a->strings['Mark this contact as remote_self, this will cause friendica to repost new entries from this contact.'] = 'Marcar este contacto como perfil_remoto, esto generara que friendica reenvía nuevas publicaciones desde esta cuenta.';
$a->strings['Show all contacts'] = 'Mostrar todos los contactos';
$a->strings['Pending'] = 'Pendiente';
$a->strings['Only show pending contacts'] = 'Solo mostrar contactos pendientes';
$a->strings['Blocked'] = 'Bloqueados';
$a->strings['Only show blocked contacts'] = 'Mostrar solo contactos bloqueados';
$a->strings['Ignored'] = 'Ignorados';
$a->strings['Only show ignored contacts'] = 'Mostrar solo contactos ignorados';
$a->strings['Archived'] = 'Archivados';
$a->strings['Only show archived contacts'] = 'Mostrar solo contactos archivados';
$a->strings['Hidden'] = 'Ocultos';
$a->strings['Only show hidden contacts'] = 'Mostrar solo contactos ocultos';
$a->strings['Groups'] = 'Grupos';
$a->strings['Organize your contact groups'] = 'Organizar tus grupos de contactos';
$a->strings['Following'] = 'Siguiendo';
$a->strings['Mutual friends'] = 'Amigos mutuos';
$a->strings['Contacts'] = 'Contactos';
$a->strings['Search your contacts'] = 'Buscar en tus contactos';
$a->strings['Results for: %s'] = 'Resultados para: %s';
$a->strings['Find'] = 'Buscar';
$a->strings['Update'] = 'Actualizar';
$a->strings['Archive'] = 'Archivo';
$a->strings['Unarchive'] = 'Sin archivar';
$a->strings['Delete'] = 'Eliminar';
$a->strings['Batch Actions'] = 'Acciones en lote';
$a->strings['Conversations started by this contact'] = 'Se iniciaron conversaciones con el contacto';
$a->strings['Posts and Comments'] = 'Artículos y Comentarios';
$a->strings['Status Messages and Posts'] = 'Mensajes de Estado y Artículos';
$a->strings['Profile Details'] = 'Detalles del Perfil';
$a->strings['View all known contacts'] = 'Ver contactos conocidos';
$a->strings['Advanced Contact Settings'] = 'Configuración avanzada';
$a->strings['Mutual Friendship'] = 'Amistad común';
$a->strings['is a fan of yours'] = 'es tu seguidor';
$a->strings['you are a fan of'] = 'eres seguidor de';
$a->strings['Pending outgoing contact request'] = 'Solicitud de Contacto pendiente';
$a->strings['Pending incoming contact request'] = 'Solicitud de Contacto pendiente';
$a->strings['This is you'] = 'Este eres tú';
$a->strings['Refetch contact data'] = 'Recuperar datos del contacto.';
$a->strings['Toggle Blocked status'] = 'Cambiar Estatus de Bloqueado';
$a->strings['Toggle Ignored status'] = 'Cambiar ignorados';
$a->strings['Toggle Archive status'] = 'Cambiar archivados';
$a->strings['Delete contact'] = 'Eliminar contacto';
$a->strings['Source URL'] = 'URL Fuente';
$a->strings['Item not found.'] = 'Elemento no encontrado.';
$a->strings['Source input'] = 'Entrada fuente';
$a->strings['BBCode::toPlaintext'] = 'BBCode::toPlaintext';
$a->strings['BBCode::convert (raw HTML)'] = 'BBCode::convert (raw HTML)';
$a->strings['BBCode::convert (hex)'] = 'BBCode::convert (hex)';
$a->strings['BBCode::convert'] = 'BBCode::convert';
$a->strings['BBCode::convert => HTML::toBBCode'] = 'BBCode::convert => HTML::toBBCode';
$a->strings['BBCode::toMarkdown'] = 'BBCode::toMarkdown';
$a->strings['BBCode::toMarkdown => Markdown::convert (raw HTML)'] = 'BBCode::toMarkdown => Markdown::convert (raw HTML)';
$a->strings['BBCode::toMarkdown => Markdown::convert'] = 'BBCode::toMarkdown => Markdown::convert';
$a->strings['BBCode::toMarkdown => Markdown::toBBCode'] = 'BBCode::toMarkdown => Markdown::toBBCode';
$a->strings['BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode'] = 'BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode';
$a->strings['Item Body'] = 'Cuerpo';
$a->strings['Item Tags'] = 'Etiquetas';
$a->strings['PageInfo::appendToBody'] = 'PageInfo::appendToBody';
$a->strings['PageInfo::appendToBody => BBCode::convert (raw HTML)'] = 'PageInfo::appendToBody => BBCode::convert (raw HTML)';
$a->strings['PageInfo::appendToBody => BBCode::convert'] = 'PageInfo::appendToBody => BBCode::convert';
$a->strings['Source input (Diaspora format)'] = 'Entrada fuente (Formato Diaspora)';
$a->strings['Source input (Markdown)'] = 'Entrada fuente (Markdown)';
$a->strings['Markdown::convert (raw HTML)'] = 'Markdown::convert (raw HTML)';
$a->strings['Markdown::convert'] = 'Markdown::convert';
$a->strings['Markdown::toBBCode'] = 'Markdown::toBBCode';
$a->strings['Raw HTML input'] = 'Entrada RAW HTML';
$a->strings['HTML Input'] = 'Entrada HTML';
$a->strings['HTML Purified (raw)'] = 'HTML purificado (raw)';
$a->strings['HTML Purified (hex)'] = 'HTML purificado (hex)';
$a->strings['HTML Purified'] = 'HTML purificado';
$a->strings['HTML::toBBCode'] = 'HTML::toBBCode';
$a->strings['HTML::toBBCode => BBCode::convert'] = 'HTML::toBBCode => BBCode::convert';
$a->strings['HTML::toBBCode => BBCode::convert (raw HTML)'] = 'HTML::toBBCode => BBCode::convert (raw HTML)';
$a->strings['HTML::toBBCode => BBCode::toPlaintext'] = 'HTML::toBBCode => BBCode::toPlaintext';
$a->strings['HTML::toMarkdown'] = 'HTML::toMarkdown';
$a->strings['HTML::toPlaintext'] = 'HTML::toPlaintext';
$a->strings['HTML::toPlaintext (compact)'] = 'HTML::toPlaintext (compact)';
$a->strings['Decoded post'] = 'Articulo decodificado';
$a->strings['Post array before expand entities'] = 'Arreglo sin expandir entidades';
$a->strings['Post converted'] = 'Convertido';
$a->strings['Converted body'] = 'Cuerpo convertido';
$a->strings['Error'] = [
	0 => 'Error',
	1 => 'Errores',
];
$a->strings['Twitter addon is absent from the addon/ folder.'] = 'El Addon de Twitter no existe en folder addon/ .';
$a->strings['Babel Diagnostic'] = 'Diagnóstico Babel';
$a->strings['Source text'] = 'Texto fuente';
$a->strings['BBCode'] = 'BBCode';
$a->strings['Diaspora'] = 'Diaspora*';
$a->strings['Markdown'] = 'Markdown';
$a->strings['HTML'] = 'HTML';
$a->strings['Twitter Source / Tweet URL (requires API key)'] = 'Fuente Twitter / Tweet URL (requiere API key)';
$a->strings['Only logged in users are permitted to perform a probing.'] = 'Sólo usuarios registrados pueden realizar exploración.';
$a->strings['Public access denied.'] = 'Acceso público denegado.';
$a->strings['Webfinger Diagnostic'] = 'Diagnóstico Webfinger';
$a->strings['Lookup address:'] = 'Buscar Dirección:';
$a->strings['l F d, Y \@ g:i A'] = 'l F d, Y \@ g:i A';
$a->strings['Time Conversion'] = 'Conversión horária';
$a->strings['Friendica provides this service for sharing events with other networks and friends in unknown timezones.'] = 'Friendica ofrece este servicio para compartir eventos con otros servidores de Red friendica y amigos en zonas horarias desconocidas.';
$a->strings['UTC time: %s'] = 'Tiempo UTC: %s';
$a->strings['Current timezone: %s'] = 'Zona horaria actual: %s';
$a->strings['Converted localtime: %s'] = 'Hora local convertida: %s';
$a->strings['Please select your timezone:'] = 'Selecciona tu zona horaria:';
$a->strings['Formatted'] = 'Formateado';
$a->strings['Source'] = 'Fuente';
$a->strings['Activity'] = 'Actividad';
$a->strings['Object data'] = 'Dato de Objeto';
$a->strings['Result Item'] = 'Artículo resultado';
$a->strings['Source activity'] = 'Actividad fuente';
$a->strings['Probe Diagnostic'] = 'Prueba Diagnóstico';
$a->strings['Output'] = 'Salida';
$a->strings['Lookup address'] = 'Buscar Dirección';
$a->strings['Please enter a post body.'] = 'Ingresa un contenido.';
$a->strings['This feature is only available with the frio theme.'] = 'Esta opción solo disponible con Tema Frio.';
$a->strings['Compose new personal note'] = 'Generar nueva nota personal';
$a->strings['Compose new post'] = 'Generar nuevo artículo';
$a->strings['Visibility'] = 'Visibilidad';
$a->strings['Bold'] = 'Negrita';
$a->strings['Italic'] = 'Cursiva';
$a->strings['Underline'] = 'Subrayado';
$a->strings['Quote'] = 'Cita';
$a->strings['Code'] = 'Código';
$a->strings['Image'] = 'Imagen';
$a->strings['Link'] = 'Enlace';
$a->strings['Link or Media'] = 'Enlace o Multimedia';
$a->strings['Please enter a image/video/audio/webpage URL:'] = 'Escoja una dirección de imágen/video/audio/sitio:';
$a->strings['Preview'] = 'Vista previa';
$a->strings['Set your location'] = 'Selecciona tu ubicación';
$a->strings['Clear the location'] = 'Borrar ubicación';
$a->strings['Location services are unavailable on your device'] = 'Servicios de ubicación no disponibles en tu dispositivo';
$a->strings['Location services are disabled. Please check the website\'s permissions on your device'] = 'Servicios de ubicación no habilitados. Checa los permisos del sitio en tu dispositivo';
$a->strings['Please wait'] = 'Espere';
$a->strings['Set title'] = 'Establecer título';
$a->strings['Categories (comma-separated list)'] = 'Categorías (lista separada por comas)';
$a->strings['Unable to follow this item.'] = 'Imposible seguir este artículo.';
$a->strings['System down for maintenance'] = 'Servicio suspendido por mantenimiento';
$a->strings['This Friendica node is currently in maintenance mode, either automatically because it is self-updating or manually by the node administrator. This condition should be temporary, please come back in a few minutes.'] = 'Este nodo de Friendica se encuentra actualmente en modo de mantenimiento, ya sea automáticamente porque se actualiza automáticamente o manualmente por el administrador del nodo. Esta condición debería ser temporal, vuelva en unos minutos.';
$a->strings['Switch between your accounts'] = 'Cambiar entre tus cuentas';
$a->strings['Manage your accounts'] = 'Administrar tus cuentas';
$a->strings['Toggle between different identities or community/group pages which share your account details or which you have been granted "manage" permissions'] = 'Cambia entre diferentes identidades o páginas de Comunidad/Grupos que comparten los detalles de tu cuenta o sobre los que tienes permisos para administrar';
$a->strings['Select an identity to manage: '] = 'Selecciona una identidad a gestionar:';
$a->strings['Login'] = 'Ingreso';
$a->strings['This page is missing a url parameter.'] = 'A la página le falta URL.';
$a->strings['The post was created'] = 'El Artículo fue creada';
$a->strings['Local Community'] = 'Comunidad Local';
$a->strings['Posts from local users on this server'] = 'Artículos de usuarios charla! MX';
$a->strings['Global Community'] = 'Comunidad Global';
$a->strings['Posts from users of the whole federated network'] = 'Artículos de usuarios del Fediverso';
$a->strings['Own Contacts'] = 'Contactos propios';
$a->strings['Include'] = 'Incluir';
$a->strings['Hide'] = 'Ocultar';
$a->strings['No results.'] = 'Sin resultados.';
$a->strings['This community stream shows all public posts received by this node. They may not reflect the opinions of this node’s users.'] = 'Este hilo de la comunidad muestra todas las publicaciones públicas recibidas por este nodo. Puede no reflejar las opiniones de los usuarios de este nodo.';
$a->strings['Community option not available.'] = 'Fediverso no disponible';
$a->strings['Not available.'] = 'No disponible';
$a->strings['No such group'] = 'No existe grupo';
$a->strings['Group: %s'] = 'Grupo: %s';
$a->strings['Latest Activity'] = 'Actividad Reciente';
$a->strings['Sort by latest activity'] = 'Ordenar por actividad reciente';
$a->strings['Latest Posts'] = 'Artículos Recientes';
$a->strings['Sort by post received date'] = 'Ordenar por fecha de artículo';
$a->strings['Personal'] = 'Personal';
$a->strings['Posts that mention or involve you'] = 'Publicaciones que te mencionan o involucran';
$a->strings['Starred'] = 'Destacados';
$a->strings['Favourite Posts'] = 'Artículos favoritos';
$a->strings['Friendica Communications Server - Setup'] = 'Servidor de Comunicaciones Friendica - Instalación';
$a->strings['System check'] = 'Verificación del sistema';
$a->strings['Requirement not satisfied'] = 'Requerimiento no satisfactorio';
$a->strings['Optional requirement not satisfied'] = 'Requerimiento Opcional no satisfactorio';
$a->strings['OK'] = 'OK';
$a->strings['Next'] = 'Siguiente';
$a->strings['Check again'] = 'Comprobar Nuevamente';
$a->strings['No SSL policy, links will track page SSL state'] = 'No existe una política de SSL, los vínculos harán un seguimiento del estado de SSL en la página';
$a->strings['Force all links to use SSL'] = 'Forzar todos los enlaces a utilizar SSL';
$a->strings['Self-signed certificate, use SSL for local links only (discouraged)'] = 'Certificación personal, usa SSL solo para enlaces locales (no recomendado)';
$a->strings['Base settings'] = 'Configuración Base';
$a->strings['SSL link policy'] = 'Política de enlaces SSL';
$a->strings['Determines whether generated links should be forced to use SSL'] = 'Determina si los enlaces generados deben ser forzados a utilizar SSL';
$a->strings['Host name'] = 'Nombre de Dominio';
$a->strings['Overwrite this field in case the determinated hostname isn\'t right, otherweise leave it as is.'] = 'Sobre escriba este valor en caso de que el Dominio no sea correcto, caso contrario déjelo así.';
$a->strings['Base path to installation'] = 'Ruta base para la instalación';
$a->strings['If the system cannot detect the correct path to your installation, enter the correct path here. This setting should only be set if you are using a restricted system and symbolic links to your webroot.'] = 'Si el sistema no puede detectar el acceso correcto a la instalación, ingrese la dirección correcta aquí. Esta configuración solo debería utilizarse si si usa un sistema restringido y enlaces simbolicos a su webroot.';
$a->strings['Sub path of the URL'] = 'Ruta inferior del URL';
$a->strings['Overwrite this field in case the sub path determination isn\'t right, otherwise leave it as is. Leaving this field blank means the installation is at the base URL without sub path.'] = 'Sobrescriba en caso de que la ruta secundaria no sea correcta,de lo contrario, déjelo así. Si lo deja en blanco significará que la instalación esta en la URL base sin ruta secundaria.';
$a->strings['Database connection'] = 'Conexión con Base de Datos';
$a->strings['In order to install Friendica we need to know how to connect to your database.'] = 'Con el fin de poder instalar Friendica, necesitamos saber cómo conectar con tu base de datos.';
$a->strings['Please contact your hosting provider or site administrator if you have questions about these settings.'] = 'Por favor, contacta con tu proveedor de servicios o con el administrador de la página si tienes alguna pregunta sobre estas configuraciones.';
$a->strings['The database you specify below should already exist. If it does not, please create it before continuing.'] = 'La base de datos que especifiques a continuación debería existir ya. Si no es el caso, debes crearla antes de continuar.';
$a->strings['Database Server Name'] = 'Nombre del servidor de la base de datos';
$a->strings['Database Login Name'] = 'Usuario de la base de datos';
$a->strings['Database Login Password'] = 'Contraseña de la base de datos';
$a->strings['For security reasons the password must not be empty'] = 'Por razones de seguridad la contraseña no debe estar vacía';
$a->strings['Database Name'] = 'Nombre de la base de datos';
$a->strings['Please select a default timezone for your website'] = 'Por favor, selecciona la zona horaria predeterminada para tu web';
$a->strings['Site settings'] = 'Configuración de la página web';
$a->strings['Site administrator email address'] = 'Dirección de correo del administrador de la web';
$a->strings['Your account email address must match this in order to use the web admin panel.'] = 'La dirección de correo de tu cuenta debe coincidir con esta para poder usar el panel de administración de la web.';
$a->strings['System Language:'] = 'Sistema de idioma:';
$a->strings['Set the default language for your Friendica installation interface and to send emails.'] = 'Seleccione el idioma por defecto para su interfaz de instalación de Friendica y para enviar correos.';
$a->strings['Your Friendica site database has been installed.'] = 'La base de datos de su sitio web de Friendica ha sido instalada.';
$a->strings['Installation finished'] = 'Instalación completa';
$a->strings['<h1>What next</h1>'] = '<h1>¿Que sigue?</h1>';
$a->strings['IMPORTANT: You will need to [manually] setup a scheduled task for the worker.'] = 'IMPORTANTE: Debe configurar [manualmente] una Tarea Programada para eltrabajador(Worker).';
$a->strings['Go to your new Friendica node <a href="%s/register">registration page</a> and register as new user. Remember to use the same email you have entered as administrator email. This will allow you to enter the site admin panel.'] = 'Ve a la <a href="%s/register">Página de Registro</a> de tu nuevo nodo de Friendicay registrate como nuevo usuario. Recuerda utilizar el mismo correo electrónico que ingresaste como correo del administrador. Esto te permitirá ingresar al Panel de Administración del Sitio.';
$a->strings['No profile'] = 'Ningún perfil';
$a->strings['Credits'] = 'Créditos';
$a->strings['Friendica is a community project, that would not be possible without the help of many people. Here is a list of those who have contributed to the code or the translation of Friendica. Thank you all!'] = 'Friendica es un proyecto comunitario, que no seria posible sin la ayuda de mucha gente. Aquí una lista de de aquellos que aportaron al código o la traducción de friendica.
Gracias a todos! ';
$a->strings['Search term was not saved.'] = 'Término de búsqueda no se grabó.';
$a->strings['Search term already saved.'] = 'Término de búsqueda ya ha sido grabado.';
$a->strings['Search term was not removed.'] = 'Término de búsqueda no fue borrado.';
$a->strings['Only logged in users are permitted to perform a search.'] = 'Solo usuarios activos tienen permiso para ejecutar búsquedas.';
$a->strings['Only one search per minute is permitted for not logged in users.'] = 'Se permite solo una búsqueda por minuto para usuarios no identificados.';
$a->strings['Search'] = 'Buscar';
$a->strings['Items tagged with: %s'] = 'Objetos taggeado con: %s';
$a->strings['Profile unavailable.'] = 'Perfil no disponible.';
$a->strings['Invalid locator'] = 'Localizador no válido';
$a->strings['The provided profile link doesn\'t seem to be valid'] = 'Link del perfil no parece válido.';
$a->strings['Remote subscription can\'t be done for your network. Please subscribe directly on your system.'] = 'La subscripción remota no se podrá hacer para tu red. Por favor contacta directamente desde tu sistema.';
$a->strings['Friend/Connection Request'] = 'Solicitud de Amistad/Conexión';
$a->strings['Enter your Webfinger address (user@domain.tld) or profile URL here. If this isn\'t supported by your system, you have to subscribe to <strong>%s</strong> or <strong>%s</strong> directly on your system.'] = 'Digite dirección Webfinger (user@domain.tld) o URL de perfil. Si no fuera aceptado por tu sistema, debes suscribirte a <strong>%s</strong> o <strong>%s</strong> directo en tu sistema.';
$a->strings['If you are not yet a member of the free social web, <a href="%s">follow this link to find a public Friendica node and join us today</a>.'] = 'Si aún no eres miembro de la web social gratuita, <a href="%s">Sígue este enlace para encontrar un nodo Friendica público y únete hoy</a>.';
$a->strings['Your Webfinger address or profile URL:'] = 'Tu dirección Webfinger o URL de Perfil:';
$a->strings['Please answer the following:'] = 'Por favor responde lo siguiente:';
$a->strings['Submit Request'] = 'Enviar Solicitud';
$a->strings['Total invitation limit exceeded.'] = 'Límite de invitaciones excedido.';
$a->strings['%s : Not a valid email address.'] = '%s : No es un correo válido.';
$a->strings['Please join us on Friendica'] = 'Únete a nosotros en Friendica';
$a->strings['Invitation limit exceeded. Please contact your site administrator.'] = 'Límite de invitaciones sobrepasado. Contacta con el administrador del sitio.';
$a->strings['%s : Message delivery failed.'] = '%s : Ha fallado la entrega del mensaje.';
$a->strings['%d message sent.'] = [
	0 => '%d mensaje enviado.',
	1 => '%d mensajes enviados.',
];
$a->strings['You have no more invitations available'] = 'No tienes más invitaciones disponibles';
$a->strings['Visit %s for a list of public sites that you can join. Friendica members on other sites can all connect with each other, as well as with members of many other social networks.'] = 'Visita %s para ver una lista de servidores públicos donde puedes darte de alta. Los miembros de otros servidores de Friendica pueden conectarse entre ellos, así como con miembros de otras redes sociales diferentes.';
$a->strings['To accept this invitation, please visit and register at %s or any other public Friendica website.'] = 'Para aceptar la invitación visita y regístrate en %s o en cualquier otro servidor público de Friendica.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks. See %s for a list of alternate Friendica sites you can join.'] = 'Los servidores de Friendica están interconectados para crear una enorme red social centrada en la privacidad y controlada por sus miembros. También se puede conectar con muchas redes sociales tradicionales. Mira en %s para poder ver un listado de servidores alternativos de Friendica donde puedes darte de alta.';
$a->strings['Our apologies. This system is not currently configured to connect with other public sites or invite members.'] = 'Discúlpanos. Este sistema no está configurado actualmente para conectar con otros servidores públicos o invitar nuevos miembros.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks.'] = 'Los sitios de Friendica se conectan entre sí para crear una gran red social con privacidad mejorada que es propiedad y está controlada por sus miembros. También pueden conectarse con muchas redes sociales tradicionales.';
$a->strings['To accept this invitation, please visit and register at %s.'] = 'Para aceptar esta invitación, visite y regístrese en%s, por favor.';
$a->strings['Send invitations'] = 'Enviar invitaciones';
$a->strings['Enter email addresses, one per line:'] = 'Introduce las direcciones de correo, una por línea:';
$a->strings['Your message:'] = 'Tu mensaje:';
$a->strings['You are cordially invited to join me and other close friends on Friendica - and help us to create a better social web.'] = 'Estás cordialmente invitado a unirte a mi y a otros amigos en Friendica, creemos juntos una red social mejor.';
$a->strings['You will need to supply this invitation code: $invite_code'] = 'Tienes que proporcionar el siguiente código: $invite_code';
$a->strings['Once you have registered, please connect with me via my profile page at:'] = 'Una vez registrado, por favor contacta conmigo a través de mi página de perfil en:';
$a->strings['For more information about the Friendica project and why we feel it is important, please visit http://friendi.ca'] = 'Para más información sobre el proyecto Friendica y por qué sentimos que es importante, visite http://friendi.ca, por favor';
$a->strings['No entries (some entries may be hidden).'] = 'Sin entradas (algunas pueden que estén ocultas).';
$a->strings['Global Directory'] = 'Directorio Global';
$a->strings['Find on this site'] = 'Buscar en este sitio';
$a->strings['Results for:'] = 'Resultados para:';
$a->strings['Site Directory'] = 'Directorio del sitio';
$a->strings['View Profile'] = 'Ver Perfil';
$a->strings['At the time of registration, and for providing communications between the user account and their contacts, the user has to provide a display name (pen name), an username (nickname) and a working email address. The names will be accessible on the profile page of the account by any visitor of the page, even if other profile details are not displayed. The email address will only be used to send the user notifications about interactions, but wont be visibly displayed. The listing of an account in the node\'s user directory or the global user directory is optional and can be controlled in the user settings, it is not necessary for communication.'] = 'En el momento del registro, y para proporcionar comunicaciones entre la cuenta de usuario y sus contactos, el usuario debe proporcionar un nombre para mostrar (seudónimo), un nombre de usuario (apodo) y una dirección de correo que funcione. Los nombres seran visibles en tu página de perfil de la cuenta por cualquier visitante de la página, incluso si no se muestran otros detalles del perfil. La dirección de correo solo se usará para enviar notificaciones al usuario sobre interacciones, pero no será visible. La lista de una cuenta en el directorio de usuarios del nodo o el directorio de usuarios global es opcional y se puede controlar en los Ajustes de Configuración, no es necesario para la comunicación.';
$a->strings['This data is required for communication and is passed on to the nodes of the communication partners and is stored there. Users can enter additional private data that may be transmitted to the communication partners accounts.'] = 'Estos datos son necesarios para la comunicación y se transmiten a los nodos de los socios de comunicación y se almacena allí. Los usuarios pueden ingresar datos privados que pueden ser transmitidos a las cuentas de los socios de comunicación.';
$a->strings['At any point in time a logged in user can export their account data from the <a href="%1$s/settings/userexport">account settings</a>. If the user wants to delete their account they can do so at <a href="%1$s/removeme">%1$s/removeme</a>. The deletion of the account will be permanent. Deletion of the data will also be requested from the nodes of the communication partners.'] = 'En cualquier momento, un usuario que haya iniciado sesión puede exportar los datos de su cuenta desde la <a href="%1$s/settings/userexport">Configuración de Cuenta</a>. Si el usuario desea eliminar su cuenta, puede hacerlo en <a href="%1$s/removeme">%1$s/Borrarme</a>. La eliminación de la cuenta será permanente. La eliminación de los datos también se solicitará desde los nodos de los interlocutores.';
$a->strings['Privacy Statement'] = 'Declaración de Privacidad';
$a->strings['Welcome to Friendica'] = 'Bienvenido a Friendica';
$a->strings['New Member Checklist'] = 'Nuevos miembros';
$a->strings['We would like to offer some tips and links to help make your experience enjoyable. Click any item to visit the relevant page. A link to this page will be visible from your home page for two weeks after your initial registration and then will quietly disappear.'] = 'Nos gustaría ofrecerte algunos consejos y enlaces para ayudar a hacer tu experiencia más amena. Pulsa en cualquier elemento para visitar la página correspondiente. Un enlace a esta página será visible desde tu página de inicio durante las dos semanas siguientes a tu inscripción y luego desaparecerá.';
$a->strings['Getting Started'] = 'Iniciando..';
$a->strings['Friendica Walk-Through'] = 'Visita guiada a Friendica';
$a->strings['On your <em>Quick Start</em> page - find a brief introduction to your profile and network tabs, make some new connections, and find some groups to join.'] = 'En tu página de <em>Inicio Rápido</em> - busca una introducción breve para tus pestañas de perfil y red, haz algunas conexiones nuevas, y busca algunos grupos a los que unirte.';
$a->strings['Settings'] = 'Configuración';
$a->strings['Go to Your Settings'] = 'Ir a tus Ajustes';
$a->strings['On your <em>Settings</em> page -  change your initial password. Also make a note of your Identity Address. This looks just like an email address - and will be useful in making friends on the free social web.'] = 'En la página de <em>Configuración</em> puedes cambiar tu contraseña inicial. También aparece tu ID (Identity Address). Es parecida a una dirección de correo y te servirá para conectar con gente de redes sociales libres.';
$a->strings['Review the other settings, particularly the privacy settings. An unpublished directory listing is like having an unlisted phone number. In general, you should probably publish your listing - unless all of your friends and potential friends know exactly how to find you.'] = 'Revisa las otras configuraciones, especialmente la configuración de privacidad. Un listado de directorio sin publicar es como tener un número de teléfono sin publicar. Normalmente querrás publicar tu listado, a menos que tus amigos y amigos potenciales sepan cómo ponerse en contacto contigo.';
$a->strings['Upload Profile Photo'] = 'Subir foto del Perfil';
$a->strings['Upload a profile photo if you have not done so already. Studies have shown that people with real photos of themselves are ten times more likely to make friends than people who do not.'] = 'Sube una foto para tu perfil si no lo has hecho aún. Los estudios han demostrado que la gente que usa fotos suyas reales tienen diez veces más éxito a la hora de entablar amistad que las que no.';
$a->strings['Edit Your Profile'] = 'Editar tu perfil';
$a->strings['Edit your <strong>default</strong> profile to your liking. Review the settings for hiding your list of friends and hiding the profile from unknown visitors.'] = 'Edita tu perfil <strong>predeterminado</strong> como quieras. Revisa la configuración para ocultar tu lista de amigos o tu perfil a los visitantes desconocidos.';
$a->strings['Profile Keywords'] = 'Palabras clave del perfil';
$a->strings['Set some public keywords for your profile which describe your interests. We may be able to find other people with similar interests and suggest friendships.'] = 'Establece algunas palabras clave públicas para tu perfil que describan tus intereses. Podremos encontrar a otras personas con intereses similares y sugerir amistades.';
$a->strings['Connecting'] = 'Conectando';
$a->strings['Importing Emails'] = 'Importando correos electrónicos';
$a->strings['Enter your email access information on your Connector Settings page if you wish to import and interact with friends or mailing lists from your email INBOX'] = 'Introduce la información para acceder a tu correo en la página de Configuración del conector si quieres importar e interactuar con amigos o listas de correos del buzón de entrada de tu correo electrónico.';
$a->strings['Go to Your Contacts Page'] = 'Ir a tu página de contactos';
$a->strings['Your Contacts page is your gateway to managing friendships and connecting with friends on other networks. Typically you enter their address or site URL in the <em>Add New Contact</em> dialog.'] = 'Tu página de Contactos es el portal desde donde podrás manejar tus amistades y conectarte con amigos de otras redes. Normalmente introduces su dirección o la dirección de su sitio web en el recuadro "Añadir contacto nuevo".';
$a->strings['Go to Your Site\'s Directory'] = 'Ir al directorio de tu sitio';
$a->strings['The Directory page lets you find other people in this network or other federated sites. Look for a <em>Connect</em> or <em>Follow</em> link on their profile page. Provide your own Identity Address if requested.'] = 'El Directorio te permite encontrar otras personas en esta red o en cualquier otro sitio federado. Busca algún enlace de <em>Conectar</em> o <em>Seguir</em> en su perfil. Proporciona tu direción personal si es necesario.';
$a->strings['Finding New People'] = 'Encontrando nueva gente';
$a->strings['On the side panel of the Contacts page are several tools to find new friends. We can match people by interest, look up people by name or interest, and provide suggestions based on network relationships. On a brand new site, friend suggestions will usually begin to be populated within 24 hours.'] = 'En el panel lateral de la página de Contactos existen varias herramientas para encontrar nuevos amigos. Podemos filtrar personas por sus intereses, buscar personas por nombre o por sus intereses, y ofrecerte sugerencias basadas en sus relaciones de la red. En un sitio nuevo, las sugerencias de amigos por lo general comienzan pasadas las 24 horas.';
$a->strings['Group Your Contacts'] = 'Agrupa tus contactos';
$a->strings['Once you have made some friends, organize them into private conversation groups from the sidebar of your Contacts page and then you can interact with each group privately on your Network page.'] = 'Una vez que tengas algunos amigos, puedes organizarlos en grupos privados de conversación mediante el memnú en tu página de Contactos y luego puedes interactuar con cada grupo por separado desde tu página de Red.';
$a->strings['Why Aren\'t My Posts Public?'] = '¿Por qué mis publicaciones no son públicas?';
$a->strings['Friendica respects your privacy. By default, your posts will only show up to people you\'ve added as friends. For more information, see the help section from the link above.'] = 'Friendica respeta tu privacidad. Por defecto, tus publicaciones solo se mostrarán a personas que hayas añadido como amistades. Para más información, mira la sección de ayuda en el enlace de más arriba.';
$a->strings['Getting Help'] = 'Consiguiendo ayuda';
$a->strings['Go to the Help Section'] = 'Ir a la sección de ayuda';
$a->strings['Our <strong>help</strong> pages may be consulted for detail on other program features and resources.'] = 'Puedes consultar nuestra página de <strong>Ayuda</strong> para más información y recursos de ayuda.';
$a->strings['The theme you chose isn\'t available.'] = 'El tema seleccionado no disponible.';
$a->strings['No special theme for mobile devices'] = 'No hay tema especial para dispositivos móviles';
$a->strings['%s - (Unsupported)'] = '%s – (No puede usarse)';
$a->strings['%s - (Experimental)'] = '%s - (Experimental)';
$a->strings['Display Settings'] = 'Configuración Tema/Visualización';
$a->strings['Save Settings'] = 'Guardar configuración';
$a->strings['General Theme Settings'] = 'Ajustes generales de tema';
$a->strings['Custom Theme Settings'] = 'Ajustes personalizados de tema';
$a->strings['Content Settings'] = 'Ajustes de contenido';
$a->strings['Theme settings'] = 'Configuración del Tema';
$a->strings['Calendar'] = 'Calendario';
$a->strings['Display Theme:'] = 'Utilizar tema:';
$a->strings['Mobile Theme:'] = 'Tema móvil:';
$a->strings['Number of items to display per page:'] = 'Número de elementos a mostrar por página:';
$a->strings['Maximum of 100 items'] = 'Máximo 100 elementos';
$a->strings['Number of items to display per page when viewed from mobile device:'] = 'Cantidad de objetos a visualizar cuando se usa un móvil';
$a->strings['Update browser every xx seconds'] = 'Actualizar navegador cada xx segundos';
$a->strings['Minimum of 10 seconds. Enter -1 to disable it.'] = 'Minimo 10 segundos. Ingrese -1 para deshabilitar.';
$a->strings['Automatic updates only at the top of the post stream pages'] = 'Actualizaciones automáticas solo el inicio de las páginas';
$a->strings['Auto update may add new posts at the top of the post stream pages, which can affect the scroll position and perturb normal reading if it happens anywhere else the top of the page.'] = 'Auto actualizar puede añadir nuevos artículos por encima de las páginas, pudiendo afectar la posición de visualización y afectar tu lectura si sucede en algún punto por encima de la página.';
$a->strings['Don\'t show emoticons'] = 'No mostrar emoticones';
$a->strings['Normally emoticons are replaced with matching symbols. This setting disables this behaviour.'] = 'Los emoticones pueden ser reemplazados por códigos similares. Esto lo deshabilita.';
$a->strings['Infinite scroll'] = 'Pagina infinita (scroll)';
$a->strings['Automatic fetch new items when reaching the page end.'] = 'Obtener nuevos artículos cuando alcance el final de página.';
$a->strings['Disable Smart Threading'] = 'Deshabilitar hilos inteligentes';
$a->strings['Disable the automatic suppression of extraneous thread indentation.'] = 'Deshabilitar la supresión automática de identación de hilos extras.';
$a->strings['Hide the Dislike feature'] = 'Ocultar botón de (Disgusta)';
$a->strings['Hides the Dislike button and dislike reactions on posts and comments.'] = 'Oculta botón (Disgusta) y sus reacciones en artículos y comentarios.';
$a->strings['Display the resharer'] = 'Desplegar reenviar';
$a->strings['Display the first resharer as icon and text on a reshared item.'] = 'Desplegar primer reenvío con un icono y texto en artículo reenviado.';
$a->strings['Stay local'] = 'Quedarse Local';
$a->strings['Don\'t go to a remote system when following a contact link.'] = 'No ir a sistema remoto cuando siga a un link de un contacto.';
$a->strings['Beginning of week:'] = 'Principio de la semana:';
$a->strings['Please enter your password to access this page.'] = 'Ingresa tu contraseña para acceder a la página.';
$a->strings['Two-factor authentication successfully activated.'] = 'Se activó autenticación de 2 Factores.';
$a->strings['Invalid code, please retry.'] = 'Código inválido, reinténtelo';
$a->strings['<p>Or you can submit the authentication settings manually:</p>
<dl>
	<dt>Issuer</dt>
	<dd>%s</dd>
	<dt>Account Name</dt>
	<dd>%s</dd>
	<dt>Secret Key</dt>
	<dd>%s</dd>
	<dt>Type</dt>
	<dd>Time-based</dd>
	<dt>Number of digits</dt>
	<dd>6</dd>
	<dt>Hashing algorithm</dt>
	<dd>SHA-1</dd>
</dl>'] = '<p>O puedes ajustar manualmente la autenticación:</p>
<dl>
	<dt>Solicitante</dt>
	<dd>%s</dd>
	<dt>Cuenta</dt>
	<dd>%s</dd>
	<dt>Clave Secreta</dt>
	<dd>%s</dd>
	<dt>Tipo</dt>
	<dd>Basado en tiempo</dd>
	<dt>No. dígitos</dt>
	<dd>6</dd>
	<dt>Algoritmo de encriptación</dt>
	<dd>SHA-1</dd>
</dl>';
$a->strings['Two-factor code verification'] = 'Verificación de código de 2 Factores';
$a->strings['Help'] = 'Ayuda';
$a->strings['<p>Please scan this QR Code with your authenticator app and submit the provided code.</p>'] = '<p>Escanee este código QR con su aplicación de autenticación y envíe el código proporcionado.</p>';
$a->strings['<p>Or you can open the following URL in your mobile device:</p><p><a href="%s">%s</a></p>'] = '<p>O puede abrir la siguiente URL en su dispositivo móvil:</p><p><a href="%s">%s</a></p>';
$a->strings['Please enter a code from your authentication app'] = 'Ingresa un código de ingreso desde tu app';
$a->strings['Verify code and enable two-factor authentication'] = 'Verifica código y habilita autenticación de 2 Factores';
$a->strings['Two-factor authentication successfully disabled.'] = 'La autenticación de dos factores se ha desactivado correctamente.';
$a->strings['Wrong Password'] = 'Contraseña incorrecta';
$a->strings['Two-factor authentication'] = 'Ingreso de 2 factores';
$a->strings['<p>Use an application on a mobile device to get two-factor authentication codes when prompted on login.</p>'] = '<p>Usa una aplicación en un móvil para obtener códigos de autentificación de 2 factores cuando ingreses.</p>';
$a->strings['Authenticator app'] = 'Autenticador';
$a->strings['Configured'] = 'Configurado';
$a->strings['Not Configured'] = 'Sin configurar';
$a->strings['<p>You haven\'t finished configuring your authenticator app.</p>'] = '<p>No has concluido de configurar tu app Autentificador.</p>';
$a->strings['<p>Your authenticator app is correctly configured.</p>'] = '<p>Tu autenticador está configurado correctamente.</p>';
$a->strings['Recovery codes'] = 'Códigos de recuperación';
$a->strings['Remaining valid codes'] = 'Códigos válidos restantes';
$a->strings['<p>These one-use codes can replace an authenticator app code in case you have lost access to it.</p>'] = '<p>Estos códigos de una sola vez pueden reemplazar la app Autenticador si perdieras acceso a ella.</p>';
$a->strings['App-specific passwords'] = 'Contraseñas específicas de la App';
$a->strings['Generated app-specific passwords'] = 'Generadas contraseñas específicas de App';
$a->strings['<p>These randomly generated passwords allow you to authenticate on apps not supporting two-factor authentication.</p>'] = '<p>Estas contraseñas generadas automáticamente te permiten entrar con apps que no permitan Autenticación de 2 factores.</p>';
$a->strings['Current password:'] = 'Contraseña actual';
$a->strings['You need to provide your current password to change two-factor authentication settings.'] = 'necesitas tu contraseña actual para cambiar los ajustes de autenticación de 2 factores.';
$a->strings['Enable two-factor authentication'] = 'Habilitar Autenticación de 2 factores';
$a->strings['Disable two-factor authentication'] = 'Deshabilitar Autenticación de 2 factores';
$a->strings['Show recovery codes'] = 'Mostrar códigos de recuperación';
$a->strings['Manage app-specific passwords'] = 'Administrar contraseñas de la app';
$a->strings['Manage trusted browsers'] = 'Administrar navegadores confiables';
$a->strings['Finish app configuration'] = 'Completar configuración de la App';
$a->strings['App-specific password generation failed: The description is empty.'] = 'Generación de Contraseña de la App fallida: Sin explicación';
$a->strings['App-specific password generation failed: This description already exists.'] = 'Generación de contraseña de App fallida: Ya existe descripción.';
$a->strings['New app-specific password generated.'] = 'Nueva contraseña de la App generada.';
$a->strings['App-specific passwords successfully revoked.'] = 'Contraseñas de la App fueron revocadas.';
$a->strings['App-specific password successfully revoked.'] = 'Contraseña de la App revocada.';
$a->strings['Two-factor app-specific passwords'] = 'Contraseña de la App de 2 Factores';
$a->strings['<p>App-specific passwords are randomly generated passwords used instead your regular password to authenticate your account on third-party applications that don\'t support two-factor authentication.</p>'] = '<p>Contraseñas de la App son contraseñas aleatorias que se usan en lugar de la contraseña normal para autenticarte usando Apps de 3ras compañías que no soportan autenticación de 2 factores.</p>';
$a->strings['Make sure to copy your new app-specific password now. You won’t be able to see it again!'] = 'Asegurate de copiar tu contraseña de la App ahora. No podrás verla de nuevo!';
$a->strings['Description'] = 'Descripción';
$a->strings['Last Used'] = 'Usada desde';
$a->strings['Revoke'] = 'Revocar';
$a->strings['Revoke All'] = 'Revocar todo';
$a->strings['When you generate a new app-specific password, you must use it right away, it will be shown to you once after you generate it.'] = 'Cuando generas nueva contraseña de la App, debes verla de inmediato, se te  mostrará solo una vez cuando la generes.';
$a->strings['Generate new app-specific password'] = 'Generar nueva contraseña de la App';
$a->strings['Friendiqa on my Fairphone 2...'] = 'Friendica en mimóvil 2';
$a->strings['Generate'] = 'Generar';
$a->strings['New recovery codes successfully generated.'] = 'Nuevos códigos de recuperación generados.';
$a->strings['Two-factor recovery codes'] = 'Códigos de recuperación de 2 factores';
$a->strings['<p>Recovery codes can be used to access your account in the event you lose access to your device and cannot receive two-factor authentication codes.</p><p><strong>Put these in a safe spot!</strong> If you lose your device and don’t have the recovery codes you will lose access to your account.</p>'] = '<p>Puedes usar los códigos de recuperación si perdieras acceso al móvil y no pudieras recibir códigos de autenticación de 2 Factores. </p><p><strong>Guarda esto de manera segura!</strong> Si perdieras tu móvil sin tener los códigos de recuperación perderías el acceso a tu cuenta.</p>';
$a->strings['When you generate new recovery codes, you must copy the new codes. Your old codes won’t work anymore.'] = 'Cuando generas nuevos códigos de recuperación, debes copiar los nuevos códigos. los anteriores ya no funcionarán.';
$a->strings['Generate new recovery codes'] = 'Generar nuevos códigos de recuperación';
$a->strings['Next: Verification'] = 'Siguiente: Verificación';
$a->strings['Trusted browsers successfully removed.'] = 'Los navegadores de confianza se eliminaron correctamente.';
$a->strings['Trusted browser successfully removed.'] = 'Navegador de confianza se eliminó correctamente.';
$a->strings['Two-factor Trusted Browsers'] = 'Navegadores de confianza de dos factores';
$a->strings['Trusted browsers are individual browsers you chose to skip two-factor authentication to access Friendica. Please use this feature sparingly, as it can negate the benefit of two-factor authentication.'] = 'Los navegadores de confianza son navegadores individuales que eligió para omitir la autenticación de dos factores para acceder a Friendica. Utilice esta función con moderación, ya que puede anular el beneficio de la autenticación de dos factores.';
$a->strings['Device'] = 'Dispositivo';
$a->strings['OS'] = 'OS/SO';
$a->strings['Browser'] = 'Navegador';
$a->strings['Trusted'] = 'Confiable';
$a->strings['Last Use'] = 'Usada desde';
$a->strings['Remove'] = 'Eliminar';
$a->strings['Remove All'] = 'Borrar todo';
$a->strings['Profile Photos'] = 'Fotos del perfil';
$a->strings['Image size reduction [%s] failed.'] = 'Ha fallado la reducción de las dimensiones de la imagen [%s].';
$a->strings['Shift-reload the page or clear browser cache if the new photo does not display immediately.'] = 'Recarga la página o limpia la caché del navegador si la foto nueva no aparece inmediatamente.';
$a->strings['Unable to process image'] = 'Imposible procesar la imagen';
$a->strings['Photo not found.'] = 'No se encontró foto.';
$a->strings['Profile picture successfully updated.'] = 'Foto de perfil actualizado.';
$a->strings['Crop Image'] = 'Recortar imagen';
$a->strings['Please adjust the image cropping for optimum viewing.'] = 'Por favor, ajusta el recorte de la imagen para optimizarla.';
$a->strings['Use Image As Is'] = 'Usar imagen como esta';
$a->strings['Missing uploaded image.'] = 'Falta la imágen subida';
$a->strings['Image exceeds size limit of %s'] = 'Imagen excede el tamaño de %s';
$a->strings['Unable to process image.'] = 'Imposible procesar la imagen.';
$a->strings['Image upload failed.'] = 'Error al subir la imagen.';
$a->strings['Profile Picture Settings'] = 'Ajustes de Foto del Perfil';
$a->strings['Current Profile Picture'] = 'Foto de Perfil Actual';
$a->strings['Upload Profile Picture'] = 'Subir foto del Perfil';
$a->strings['Upload Picture:'] = 'Subir foto:';
$a->strings['Upload'] = 'Subir';
$a->strings['or'] = 'o';
$a->strings['skip this step'] = 'saltar este paso';
$a->strings['select a photo from your photo albums'] = 'elige una foto de tus álbumes';
$a->strings['Profile Name is required.'] = 'Se necesita un nombre de perfil.';
$a->strings['Profile couldn\'t be updated.'] = 'No puede actualizarse perfil.';
$a->strings['Label:'] = 'Etiqueta:';
$a->strings['Value:'] = 'Valor:';
$a->strings['Field Permissions'] = 'Permisos del campo';
$a->strings['(click to open/close)'] = '(pulsa para abrir/cerrar)';
$a->strings['Add a new profile field'] = 'Añadir campo de perfil';
$a->strings['Profile Actions'] = 'Acciones de perfil';
$a->strings['Edit Profile Details'] = 'Editar detalles de tu perfil';
$a->strings['Change Profile Photo'] = 'Cambiar imagen del Perfil';
$a->strings['Profile picture'] = 'Imagen del perfil';
$a->strings['Location'] = 'Ubicación';
$a->strings['Custom Profile Fields'] = 'Campos personalizados de perfil';
$a->strings['Display name:'] = 'Nombre desplegable:';
$a->strings['Street Address:'] = 'Dirección';
$a->strings['Locality/City:'] = 'Localidad/Ciudad:';
$a->strings['Region/State:'] = 'Región/Estado:';
$a->strings['Postal/Zip Code:'] = 'Código/Zona postal:';
$a->strings['Country:'] = 'País';
$a->strings['XMPP (Jabber) address:'] = 'Dirección XMPP (Jabber):';
$a->strings['The XMPP address will be propagated to your contacts so that they can follow you.'] = 'La dirección XMPP será propagada entre sus contactos para que puedan seguirle.';
$a->strings['Homepage URL:'] = 'Dirección de tu página:';
$a->strings['Public Keywords:'] = 'Palabras clave públicas:';
$a->strings['(Used for suggesting potential friends, can be seen by others)'] = '(Utilizadas para sugerir amigos potenciales, otros pueden verlo)';
$a->strings['Private Keywords:'] = 'Palabras clave privadas:';
$a->strings['(Used for searching profiles, never shown to others)'] = '(Utilizadas para buscar perfiles, nunca se muestra a otros)';
$a->strings['<p>Custom fields appear on <a href="%s">your profile page</a>.</p>
				<p>You can use BBCodes in the field values.</p>
				<p>Reorder by dragging the field title.</p>
				<p>Empty the label field to remove a custom field.</p>
				<p>Non-public fields can only be seen by the selected Friendica contacts or the Friendica contacts in the selected groups.</p>'] = '<p>Campos personalizados aparecen en <a href="%s">tu perfil</a>.</p>
				<p>Puedes usar BBCode en los campos.</p>
				<p>Reordenar para arrastrar campo título.</p>
				<p>Vacie la etiqueta para quitar un campo personalizado.</p>
				<p>Campos no públicos solo pueden verse por contactos Friendica seleccionados o contactos Friendica en grupos selecionados.</p>';
$a->strings['Delegation successfully granted.'] = 'Se autorizó delegación.';
$a->strings['Parent user not found, unavailable or password doesn\'t match.'] = 'Usuario padre no encontrado, o no coincide contraseña.';
$a->strings['Delegation successfully revoked.'] = 'Delegación revocada con éxito.';
$a->strings['Delegated administrators can view but not change delegation permissions.'] = 'Administradores delegados pueden ver pero no cambiar permisos delegados.';
$a->strings['Delegate user not found.'] = 'Usuario delegado no encontrado.';
$a->strings['No parent user'] = 'No hay usuario padre';
$a->strings['Parent User'] = 'Usuario Padre';
$a->strings['Additional Accounts'] = 'Cuentas adicionales';
$a->strings['Register additional accounts that are automatically connected to your existing account so you can manage them from this account.'] = 'Registre cuentas adicionales que son automáticamente conectadas con tu cuenta existente de forma que puedas manejarlas desde aquí.';
$a->strings['Register an additional account'] = 'Registrar cuenta adicional';
$a->strings['Parent users have total control about this account, including the account settings. Please double check whom you give this access.'] = 'Usuarios padres tendrán control total en esta cuenta, incluyendo ajustes. Cheque doblemente a quien le das acceso.';
$a->strings['Manage Accounts'] = 'Gestionar cuentas';
$a->strings['Delegates'] = 'Delegados';
$a->strings['Delegates are able to manage all aspects of this account/page except for basic account settings. Please do not delegate your personal account to anybody that you do not trust completely.'] = 'Los delegados tienen la capacidad de gestionar todos los aspectos de esta cuenta/página, excepto los ajustes básicos de la cuenta. Por favor, no delegues tu cuenta personal a nadie en quien no confíes completamente.';
$a->strings['Existing Page Delegates'] = 'Delegados actuales de la página';
$a->strings['Potential Delegates'] = 'Delegados potenciales';
$a->strings['Add'] = 'Añadir';
$a->strings['No entries.'] = 'Sin entradas.';
$a->strings['Export account'] = 'Exportar cuenta';
$a->strings['Export your account info and contacts. Use this to make a backup of your account and/or to move it to another server.'] = 'Exporta la información de tu cuenta y tus contactos. Úsalo para guardar una copia de seguridad de tu cuenta y/o moverla a otro servidor.';
$a->strings['Export all'] = 'Exportar todo';
$a->strings['Export your account info, contacts and all your items as json. Could be a very big file, and could take a lot of time. Use this to make a full backup of your account (photos are not exported)'] = 'Exportar tu info de cuenta, contactos y artículos en formato JSON. Podría ser un archivo grande, y tomar mucho tiempo. Solo usalo para respaldo completo de tu cuenta (fotos no se exportan)';
$a->strings['Export Contacts to CSV'] = 'Exportar Contactos como archivo CSV';
$a->strings['Export the list of the accounts you are following as CSV file. Compatible to e.g. Mastodon.'] = 'Exportar la lista de cuentas que sigues como archivo CSV. Compatible con ej. Mastodon.';
$a->strings['Export personal data'] = 'Exportación de datos personales';
$a->strings['Lock feature %s'] = 'Bloquear opción %s ';
$a->strings['Manage Additional Features'] = 'Administrar opciones adicionales';
$a->strings['Update has been marked successful'] = 'La actualización se ha completado con éxito';
$a->strings['Database structure update %s was successfully applied.'] = 'Actualización de base de datos %s fue aplicada con éxito.';
$a->strings['Executing of database structure update %s failed with error: %s'] = 'El paso de actualización de la estructura de la base de datos %s fallo con el mensaje de error: %s';
$a->strings['Executing %s failed with error: %s'] = 'Paso %s fallo con el error: %s';
$a->strings['Update %s was successfully applied.'] = 'Actualización %s aplicada con éxito.';
$a->strings['Update %s did not return a status. Unknown if it succeeded.'] = 'La actualización %s no ha informado, se desconoce el estado.';
$a->strings['There was no additional update function %s that needed to be called.'] = 'No había función adicional de actualización %s que necesitaba ser requerida.';
$a->strings['No failed updates.'] = 'Actualizaciones sin fallos.';
$a->strings['Check database structure'] = 'Revisar estructura de la base de datos';
$a->strings['Failed Updates'] = 'Actualizaciones fallidas';
$a->strings['This does not include updates prior to 1139, which did not return a status.'] = 'No se incluyen las anteriores a la 1139, que no indicaban su estado.';
$a->strings['Mark success (if update was manually applied)'] = 'Marcar como correcta (si actualizaste manualmente)';
$a->strings['Attempt to execute this update step automatically'] = 'Intentando ejecutar este paso automáticamente';
$a->strings['Addon not found.'] = 'Añadido no encontrado.';
$a->strings['Addon %s disabled.'] = 'Añadido %s deshabilitado.';
$a->strings['Addon %s enabled.'] = 'Añadido %s habilitado.';
$a->strings['Disable'] = 'Desactivar';
$a->strings['Enable'] = 'Activar';
$a->strings['Administration'] = 'Administración';
$a->strings['Toggle'] = 'Activar';
$a->strings['Author: '] = 'Autor: ';
$a->strings['Maintainer: '] = 'Mantenedor: ';
$a->strings['Addons reloaded'] = 'Añadidos re cargados';
$a->strings['Addon %s failed to install.'] = 'Instalación de Añadido %s falló';
$a->strings['Reload active addons'] = 'Añadidos activos re cargados';
$a->strings['There are currently no addons available on your node. You can find the official addon repository at %1$s and might find other interesting addons in the open addon registry at %2$s'] = 'No hay añadidos disponibles en el nodo. Puedes encontrar el repositorio oficial en %1$s y puedes encontrar otros interesantes en el registro de añadidos en %2$s';
$a->strings['Error trying to open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s exist and is readable.'] = 'Error al intentar abrir <strong>%1$s</strong> archivo del log.\r\n<br/>Checar si el archivo %1$s existe y se puede leer.';
$a->strings['Couldn\'t open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s is readable.'] = 'No se pudo abrir <strong>%1$s</strong> archivo del log.\r\n<br/>Cheque si el archivo %1$s puede leerse.';
$a->strings['The logfile \'%s\' is not writable. No logging possible'] = 'El archivo de Log \'%s\' no es escriturable. No puede registrar Log.';
$a->strings['PHP log currently enabled.'] = 'Registro PHP actualmente disponible.';
$a->strings['PHP log currently disabled.'] = 'Registro PHP actualmente deshabilitado.';
$a->strings['Clear'] = 'Limpiar';
$a->strings['Enable Debugging'] = 'Habilitar debugging';
$a->strings['Log file'] = 'Archivo de registro';
$a->strings['Must be writable by web server. Relative to your Friendica top-level directory.'] = 'Debes tener permiso de escritura en el servidor. Relacionado con tu directorio de inicio de Friendica.';
$a->strings['Log level'] = 'Nivel de registro';
$a->strings['PHP logging'] = 'PHP logging';
$a->strings['To temporarily enable logging of PHP errors and warnings you can prepend the following to the index.php file of your installation. The filename set in the \'error_log\' line is relative to the friendica top-level directory and must be writeable by the web server. The option \'1\' for \'log_errors\' and \'display_errors\' is to enable these options, set to \'0\' to disable them.'] = 'Para habilitar temporalmente el registro de errores y advertencias de PHP, puede anteponer lo siguiente al archivo index.php de su instalación. El nombre de archivo establecido en la línea \'error_log\' es relativo al directorio de nivel superior de Friendica y debe poder escribirse por el servidor. La opción \'1\' para \'log_errors\' y \'display_errors\' es para habilitar estas opciones, establezca en \'0\' para deshabilitarlas.';
$a->strings['Inspect Deferred Worker Queue'] = 'Inspeccionar Cola diferida de Workers';
$a->strings['This page lists the deferred worker jobs. This are jobs that couldn\'t be executed at the first time.'] = 'Esta página enumera los jobs de los Workers diferidos. Estos son jobs que no se pudieron ejecutar la primera vez.';
$a->strings['Inspect Worker Queue'] = 'Inspeccionar Cola de Workers';
$a->strings['This page lists the currently queued worker jobs. These jobs are handled by the worker cronjob you\'ve set up during install.'] = 'Esta página enumera los jobs de workers actualmente en cola. Estos Jobs son manejados por el cronjob de trabajador que configuró durante la instalación.';
$a->strings['ID'] = 'ID';
$a->strings['Job Parameters'] = 'Parámetros del Job';
$a->strings['Created'] = 'Creado';
$a->strings['Priority'] = 'Prioridad';
$a->strings['Template engine (%s) error: %s'] = 'Error (%s) en Motor de plantilla: %s';
$a->strings['Your DB still runs with MyISAM tables. You should change the engine type to InnoDB. As Friendica will use InnoDB only features in the future, you should change this! See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'Tu BD corre con tablas MyISAM. Debes cambiar al motor InnoDB. Pues Friendica usará solo InnoDB en el futuro, debes cambiarlo! Ver <a href="%s">esto</a> como guía de ayuda para convertir el motor de tablas. Podrías usar también el comando <tt>php bin/console.php dbstructure toinnodb</tt> de tu instalación Friendica para conversión automática.<br />';
$a->strings['Your DB still runs with InnoDB tables in the Antelope file format. You should change the file format to Barracuda. Friendica is using features that are not provided by the Antelope format. See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'Tu BD corre con tablas InnoDB. En formato de archivo Antelope. Debes cambiar al formato de archivos Barracuda. Friendica usa opciones que no provee el formato Antelope. Ver <a href="%s">esto</a> como guía de ayuda para convertir el motor de tablas. Podrías usar también el comando <tt>php bin/console.php dbstructure toinnodb</tt> de tu instalación Friendica para conversión automática.<br />';
$a->strings['Your table_definition_cache is too low (%d). This can lead to the database error "Prepared statement needs to be re-prepared". Please set it at least to %d. See <a href="%s">here</a> for more information.<br />'] = 'El \'table_definition_cache\' es muy corto (%d). puede acarrear error de BD "Sentencia preparada debe ser Re-preparada". Setealo al menos a %d. Ver <a href="%s">here</a> para mas información.<br />';
$a->strings['There is a new version of Friendica available for download. Your current version is %1$s, upstream version is %2$s'] = 'Hay una nueva versión de Friendica disponible para descargar. Su versión actual es %1$s, la versión ascendente es %2$s';
$a->strings['The database update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear.'] = 'Actualización de la BD Falló. Ejecute "php bin/console.php dbstructure update" desde línea de comandos y revise los errores que puedan haber ocurrido.';
$a->strings['The last update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear. (Some of the errors are possibly inside the logfile.)'] = 'La última actualización falló. Ejecute "php bin/console.php dbstructure update" desde línea de comandos y revise los errores que puedan haber ocurrido. (Algunos aparecerán en archivo de log.)';
$a->strings['The worker was never executed. Please check your database structure!'] = 'El worker nunca fue ejecutado. ¡Revise la estructura de su BD!';
$a->strings['The last worker execution was on %s UTC. This is older than one hour. Please check your crontab settings.'] = 'La última ejecución del trabajador fue a las %s UTC. Anterior a una hora. Revise su configuración de crontab.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>.htconfig.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Configuración Friendica ahora se almacena en config/local.config.php, copie config/local-sample.config.php y mueva su configuración de <code>.htconfig.php</code>. Ver <a href="%s">página de ayuda</a> como ayuda en la transición.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>config/local.ini.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Configuración Friendica ahora se almacena en config/local.config.php, copie config/local-sample.config.php y mueva su configuración de <code>config/local.ini.php</code>. Ver <a href="%s">página de ayuda </a> como ayuda en la transición.';
$a->strings['<a href="%s">%s</a> is not reachable on your system. This is a severe configuration issue that prevents server to server communication. See <a href="%s">the installation page</a> for help.'] = '<a href="%s">%s</a> no se alcanza en tu sistema. Es un error grave en la configuración que evita la comunicación de servidor a servidor. Ver <a href="%s">la página de instalación</a> como ayuda.';
$a->strings['The logfile \'%s\' is not usable. No logging possible (error: \'%s\')'] = 'Tl archivo de log \'%s\' no se puede usar. No es posible el registro (error: \'%s\')';
$a->strings['The debug logfile \'%s\' is not usable. No logging possible (error: \'%s\')'] = 'El archivo de log de debugg \'%s\' no puede usarse. No es posible el registro (error: \'%s\')';
$a->strings['Friendica\'s system.basepath was updated from \'%s\' to \'%s\'. Please remove the system.basepath from your db to avoid differences.'] = 'La ruta Friendica system.basepath se actualizó de \'%s\' a \'%s\'. Quite la  system.basepath de tu BD para evitar diferencias.';
$a->strings['Friendica\'s current system.basepath \'%s\' is wrong and the config file \'%s\' isn\'t used.'] = 'Ruta actual Friendica system.basepath \'%s\' es errónea y el archivo de configuración \'%s\' no se usa.';
$a->strings['Friendica\'s current system.basepath \'%s\' is not equal to the config file \'%s\'. Please fix your configuration.'] = 'Ruta actual de Friendica system.basepath \'%s\' no es igual al archivo config \'%s\'. Corrija su configuración.';
$a->strings['Normal Account'] = 'Cuenta normal';
$a->strings['Automatic Follower Account'] = 'Cuenta de Seguimiento Automático';
$a->strings['Public Forum Account'] = 'Cuenta del Foro Pública';
$a->strings['Automatic Friend Account'] = 'Cuenta de amistad automática';
$a->strings['Blog Account'] = 'Cuenta de blog';
$a->strings['Private Forum Account'] = 'Cuenta del Foro Privada';
$a->strings['Message queues'] = 'Cola de mensajes';
$a->strings['Server Settings'] = 'Ajustes del Servidor';
$a->strings['Summary'] = 'Resumen';
$a->strings['Registered users'] = 'Usuarios registrados';
$a->strings['Pending registrations'] = 'Pendientes de registro';
$a->strings['Version'] = 'Versión';
$a->strings['Active addons'] = 'Añadidos Activos';
$a->strings['Item Guid'] = 'Clave Guid';
$a->strings['Item Id'] = 'Id de Artículo';
$a->strings['Item URI'] = 'Item URI';
$a->strings['Terms'] = 'Términos';
$a->strings['Tag'] = 'Etiqueta';
$a->strings['Type'] = 'Tipo';
$a->strings['Term'] = 'Término';
$a->strings['URL'] = 'Ruta URL';
$a->strings['Mention'] = 'Mención';
$a->strings['Implicit Mention'] = 'Mención Implicita';
$a->strings['Item marked for deletion.'] = 'Artículo marcado para eliminación.';
$a->strings['Delete this Item'] = 'Eliminar este artículo';
$a->strings['On this page you can delete an item from your node. If the item is a top level posting, the entire thread will be deleted.'] = 'En esta página, puede eliminar un artículo de su nodo. Si el artículo es una publicación de nivel superior, se eliminará todo el hilo.';
$a->strings['You need to know the GUID of the item. You can find it e.g. by looking at the display URL. The last part of http://example.com/display/123456 is the GUID, here 123456.'] = 'Usted debe conocer el GUID del artículo. Puedes encontrarlo, por ejemplo. mirando la URL visible. La última parte de http://example.com/display/123456 es el GUID, aquí 123456.';
$a->strings['GUID'] = 'GUID';
$a->strings['The GUID of the item you want to delete.'] = 'El GUID del artículo que quiere eliminar.';
$a->strings['Can not parse base url. Must have at least <scheme>://<domain>'] = 'No se puede resolver la direccion URL base.
Deberá tener al menos <scheme>://<domain>';
$a->strings['Relocation started. Could take a while to complete.'] = 'Relocación iniciada. Podría tomar algo de tiempo completar.';
$a->strings['Invalid storage backend setting value.'] = 'Valor de configuración de backend de almacenamiento no válido.';
$a->strings['No community page for local users'] = 'No hay página de Comunidad para usuarios locales';
$a->strings['No community page'] = 'No hay pagina de comunidad';
$a->strings['Public postings from users of this site'] = 'Temas públicos de perfiles de este sitio.';
$a->strings['Public postings from the federated network'] = 'Artículos públicos de Redes Federadas';
$a->strings['Public postings from local users and the federated network'] = 'Artículos públicos de Usuarios Locales y Redes Federadas';
$a->strings['Multi user instance'] = 'Sesión multi usuario';
$a->strings['Closed'] = 'Cerrado';
$a->strings['Requires approval'] = 'Requiere aprobación';
$a->strings['Open'] = 'Abierto';
$a->strings['Don\'t check'] = 'No verificar';
$a->strings['check the stable version'] = 'verifique la versión estable';
$a->strings['check the development version'] = 'verifica la versión de desarrollo';
$a->strings['none'] = 'ninguno';
$a->strings['Local contacts'] = 'Contactos Locales';
$a->strings['Interactors'] = 'Interactores';
$a->strings['Database (legacy)'] = 'Base de Datos (legada)';
$a->strings['General Information'] = 'Información General';
$a->strings['Republish users to directory'] = 'Republicar usuarios al Directorio';
$a->strings['File upload'] = 'Subida de archivo';
$a->strings['Policies'] = 'Políticas';
$a->strings['Auto Discovered Contact Directory'] = 'Directorio de contactos descubierto automáticamente';
$a->strings['Performance'] = 'Rendimiento';
$a->strings['Worker'] = 'Worker';
$a->strings['Message Relay'] = 'Retransmisión de Mensajes';
$a->strings['Relocate Instance'] = 'Relocalizar Instancia';
$a->strings['<strong>Warning!</strong> Advanced function. Could make this server unreachable.'] = '<strong>Advertencia!</strong> Función avanzada. Podría hacer al servidor inalcanzable.';
$a->strings['Site name'] = 'Nombre del sitio';
$a->strings['Sender Email'] = 'Correo que Envía';
$a->strings['The email address your server shall use to send notification emails from.'] = 'La dirección de correo electrónico que el servidor debería usar como dirección de envío.';
$a->strings['Name of the system actor'] = 'Nombre del actor del Sistema';
$a->strings['Name of the internal system account that is used to perform ActivityPub requests. This must be an unused username. If set, this can\'t be changed again.'] = 'Nombre de la cuenta del sistema interno que se utiliza para realizar solicitudes de ActivityPub. Debe ser un nombre de usuario no utilizado. Si se establece, esto no se puede volver a cambiar.';
$a->strings['Banner/Logo'] = 'Imagen/Logotipo';
$a->strings['Email Banner/Logo'] = 'Logo del Correo';
$a->strings['Shortcut icon'] = 'Icono del Enlace';
$a->strings['Link to an icon that will be used for browsers.'] = 'Enlace hacia un icono que sera usado para el navegador.';
$a->strings['Touch icon'] = 'Icono Tocar';
$a->strings['Link to an icon that will be used for tablets and mobiles.'] = 'Enlace a un icono que sera usado para tablets y moviles.';
$a->strings['Additional Info'] = 'Información Adicional';
$a->strings['For public servers: you can add additional information here that will be listed at %s/servers.'] = 'Servidores Públicos: Puedes añadir información adicional aqui que será listada por los servidores %s/servers.';
$a->strings['System language'] = 'Lenguaje del Sistema';
$a->strings['System theme'] = 'Tema del Sistema';
$a->strings['Default system theme - may be over-ridden by user profiles - <a href="/admin/themes" id="cnftheme">Change default theme settings</a>'] = 'Tema Default del Sistema – puede sobre escribirse por usuarios - <a href="/admin/themes" id="cnftheme">Cambiar ajustes de tema default</a>';
$a->strings['Mobile system theme'] = 'Tema de sistema móvil';
$a->strings['Theme for mobile devices'] = 'Tema para dispositivos móviles';
$a->strings['Force SSL'] = 'Forzar SSL';
$a->strings['Force all Non-SSL requests to SSL - Attention: on some systems it could lead to endless loops.'] = 'Forzar todos las consultas No-SSL a SSL. - ATENCIÓN: en algunos sistemas esto puede generar comportamiento recursivo interminable.';
$a->strings['Hide help entry from navigation menu'] = 'Ocultar la ayuda en el menú de navegación';
$a->strings['Hides the menu entry for the Help pages from the navigation menu. You can still access it calling /help directly.'] = 'Oculta la entrada de las páginas de Ayuda en el menú de navegación. Todavía se puede acceder escribiendo /ayuda directamente.';
$a->strings['Single user instance'] = 'Sesión de usuario único';
$a->strings['Make this instance multi-user or single-user for the named user'] = 'Haz esta sesión multi-usuario o usuario único para el usuario';
$a->strings['File storage backend'] = 'Almacén de archivos backend';
$a->strings['The backend used to store uploaded data. If you change the storage backend, you can manually move the existing files. If you do not do so, the files uploaded before the change will still be available at the old backend. Please see <a href="/help/Settings#1_2_3_1">the settings documentation</a> for more information about the choices and the moving procedure.'] = 'El backend utilizado para almacenar los datos cargados. Si cambia el backend de almacenamiento, puede mover manualmente los archivos existentes. Si no lo hace, los archivos subidos antes del cambio seguirán estando disponibles en el backend anterior. Consulte <a href="/help/Settings#1_2_3_1">la documentación de configuración </a> para obtener más información sobre las opciones y el procedimiento de traslado.';
$a->strings['Maximum image size'] = 'Tamaño máximo de la imagen';
$a->strings['Maximum size in bytes of uploaded images. Default is 0, which means no limits.'] = 'Tamaño máximo en bytes de las imágenes a subir. Por defecto es 0, que quiere decir que no hay límite.';
$a->strings['Maximum image length'] = 'Largo máximo de imagen';
$a->strings['Maximum length in pixels of the longest side of uploaded images. Default is -1, which means no limits.'] = 'Longitud máxima en píxeles del lado más largo de las imágenes subidas. Por defecto es -1, que significa que no hay límites.';
$a->strings['JPEG image quality'] = 'Calidad de imagen JPEG';
$a->strings['Uploaded JPEGS will be saved at this quality setting [0-100]. Default is 100, which is full quality.'] = 'Los archivos JPEG subidos se guardarán con este ajuste de calidad [0-100]. Por defecto es 100, que es calidad máxima.';
$a->strings['Register policy'] = 'Política de registros';
$a->strings['Maximum Daily Registrations'] = 'Registros Máximos Diarios';
$a->strings['If registration is permitted above, this sets the maximum number of new user registrations to accept per day.  If register is set to closed, this setting has no effect.'] = 'Si anteriormente se ha permitido el registro, esto establece el número máximo de registro de nuevos usuarios aceptados por día. Si el registro se establece como cerrado, esta opción no tiene efecto.';
$a->strings['Register text'] = 'Términos';
$a->strings['Will be displayed prominently on the registration page. You can use BBCode here.'] = 'Se mostrará de forma destacada en la página de registro. Puede utilizar BBCode aquí.';
$a->strings['Forbidden Nicknames'] = 'Apodos Prohibidos';
$a->strings['Comma separated list of nicknames that are forbidden from registration. Preset is a list of role names according RFC 2142.'] = 'Lista separada por comas de apodos cuyo registro está prohibido. Lo Preestablecido es una lista de nombres de roles según RFC 2142.';
$a->strings['Accounts abandoned after x days'] = 'Cuentas abandonadas después de x días';
$a->strings['Will not waste system resources polling external sites for abandonded accounts. Enter 0 for no time limit.'] = 'No gastará recursos del sistema creando sondeos a sitios externos para cuentas abandonadas. Introduce 0 para ningún límite temporal.';
$a->strings['Allowed friend domains'] = 'Dominios amigos permitidos';
$a->strings['Comma separated list of domains which are allowed to establish friendships with this site. Wildcards are accepted. Empty to allow any domains'] = 'Lista separada por comas de los dominios que están autorizados para establecer conexiones con este sitio. Se aceptan comodines. Dejar en blanco para permitir cualquier dominio';
$a->strings['Allowed email domains'] = 'Dominios de correo permitidos';
$a->strings['Comma separated list of domains which are allowed in email addresses for registrations to this site. Wildcards are accepted. Empty to allow any domains'] = 'Lista separada por comas de los dominios que están autorizados en las direcciones de correo para registrarse en este sitio. Se aceptan comodines. Dejar en blanco para permitir cualquier dominio';
$a->strings['No OEmbed rich content'] = 'No hay contenido enriquecido OEmbed';
$a->strings['Don\'t show the rich content (e.g. embedded PDF), except from the domains listed below.'] = 'No muestre el contenido enriquecido (por ejemplo, PDF incrustado), excepto de los dominios que se enumeran a continuación.';
$a->strings['Trusted third-party domains'] = 'Dominios terceros de confianza';
$a->strings['Comma separated list of domains from which content is allowed to be embedded in posts like with OEmbed. All sub-domains of the listed domains are allowed as well.'] = 'Lista separada por comas de dominios de los que se permite incrustar contenido en publicaciones como con OEmbed. También se permiten todos los subdominios de los dominios enumerados.';
$a->strings['Block public'] = 'Bloqueo público';
$a->strings['Check to block public access to all otherwise public personal pages on this site unless you are currently logged in.'] = 'Marca para bloquear el acceso público a todas las páginas personales, aún siendo públicas, hasta que no hayas iniciado tu sesión.';
$a->strings['Force publish'] = 'Forzar publicación';
$a->strings['Check to force all profiles on this site to be listed in the site directory.'] = 'Marca para forzar que todos los perfiles de este sitio sean listados en el directorio del sitio.';
$a->strings['Enabling this may violate privacy laws like the GDPR'] = 'Habilitar esto puede violar leyes de privacidad como GDPR';
$a->strings['Global directory URL'] = 'URL del directorio global.';
$a->strings['URL to the global directory. If this is not set, the global directory is completely unavailable to the application.'] = 'URL del directorio global. Si se deja este campo vacío, el directorio global sera completamente inaccesible para la instancia.';
$a->strings['Private posts by default for new users'] = 'Publicaciones privadas por defecto para usuarios nuevos';
$a->strings['Set default post permissions for all new members to the default privacy group rather than public.'] = 'Ajusta los permisos de publicación por defecto a los miembros nuevos al grupo privado por defecto en vez del público.';
$a->strings['Don\'t include post content in email notifications'] = 'No incluir el contenido del post en las notificaciones de correo electrónico';
$a->strings['Don\'t include the content of a post/comment/private message/etc. in the email notifications that are sent out from this site, as a privacy measure.'] = 'No incluye el contenido de un mensaje/comentario/mensaje privado/etc. en las notificaciones de correo electrónico que se envían desde este sitio, como una medida de privacidad.';
$a->strings['Disallow public access to addons listed in the apps menu.'] = 'Deshabilitar acceso a addons listados en el menú de aplicaciones.';
$a->strings['Checking this box will restrict addons listed in the apps menu to members only.'] = 'Habilitando esta opción restringe el acceso a addons en el menú de aplicaciones a usuarios identificados.';
$a->strings['Don\'t embed private images in posts'] = 'No agregar imágenes privados en las publicaciones';
$a->strings['Don\'t replace locally-hosted private photos in posts with an embedded copy of the image. This means that contacts who receive posts containing private photos will have to authenticate and load each image, which may take a while.'] = 'No reemplazar imágenes privadas guardadas localmente en el servidor con imágenes integrados en los envíos. Esto significa que contactos que reciben publicaciones tendrán que autenticarse y cargar cada imagen, lo que puede demorar.';
$a->strings['Explicit Content'] = 'Contenido Explicito';
$a->strings['Set this to announce that your node is used mostly for explicit content that might not be suited for minors. This information will be published in the node information and might be used, e.g. by the global directory, to filter your node from listings of nodes to join. Additionally a note about this will be shown at the user registration page.'] = 'Configure esto para anunciar si su nodo se usa principalmente para contenido explícito que podría no ser adecuado para menores. Esta información se publicaría en la información del nodo y podría ser utilizada, por ejemplo, por el Directorio Global, para filtrar su nodo de las listas de nodos. Para unirse. Además, se mostrará una nota sobre esto en la página de registro del usuario.';
$a->strings['Allow Users to set remote_self'] = 'Permitir a los usuarios de definir remote_self (yo-remoto)';
$a->strings['With checking this, every user is allowed to mark every contact as a remote_self in the repair contact dialog. Setting this flag on a contact causes mirroring every posting of that contact in the users stream.'] = 'Al habilitar esta opción, cada perfil tiene el permiso de marcar cualquiera de sus contactos como un perfil_remoto. Habilitar la opción perfil_remoto para un contacto genera que todas las publicaciones  de este contacto seran re-publicado  en el muro del perfil.';
$a->strings['Block multiple registrations'] = 'Bloquear registros multiples';
$a->strings['Disallow users to register additional accounts for use as pages.'] = 'Impedir que los usuarios registren cuentas adicionales para su uso como páginas.';
$a->strings['Disable OpenID'] = 'Deshabilitar OpenID';
$a->strings['Disable OpenID support for registration and logins.'] = 'Deshabilitar soporte OpenID para registro e ingresos.';
$a->strings['No Fullname check'] = 'No checar nombre completo';
$a->strings['Allow users to register without a space between the first name and the last name in their full name.'] = 'Permitir que los usuarios se registren sin un espacio entre el nombre y el apellido en su nombre completo.';
$a->strings['Community pages for visitors'] = 'Paginas de Comunidad para Visitantes';
$a->strings['Which community pages should be available for visitors. Local users always see both pages.'] = 'Que comunidades deben estar disponibles para visitantes. Usuarios locales siempre ven ambas páginas.';
$a->strings['Posts per user on community page'] = 'Publicaciones por usuario en la pagina de comunidad';
$a->strings['The maximum number of posts per user on the community page. (Not valid for "Global Community")'] = 'Número máximo de artículos por usuario de página Fediverso. (No válido para "Fediverso Global")';
$a->strings['Disable OStatus support'] = 'Deshabilitar soporte OStatus';
$a->strings['Disable built-in OStatus (StatusNet, GNU Social etc.) compatibility. All communications in OStatus are public, so privacy warnings will be occasionally displayed.'] = 'Deshabilitar compatibilidad OStatus (StatusNet, GNU Social etc.).  Todas las comunicaciones de OStatus son públicas, advertencias de privacidad serán ocasionalmente mostradas.';
$a->strings['OStatus support can only be enabled if threading is enabled.'] = 'Solo se puede habilitar el soporte OStatus  si threading (comentarios en fila) se encuentra habilitado.';
$a->strings['Diaspora support can\'t be enabled because Friendica was installed into a sub directory.'] = 'El soporte para Diaspora* no se puede habilitar porque friendica se instalo en un directorio subalterno (sub directory).';
$a->strings['Enable Diaspora support'] = 'Habilitar el soporte para Diaspora*';
$a->strings['Provide built-in Diaspora network compatibility.'] = 'Provee una compatibilidad con la red de Diaspora.';
$a->strings['Only allow Friendica contacts'] = 'Permitir solo contactos de Friendica';
$a->strings['All contacts must use Friendica protocols. All other built-in communication protocols disabled.'] = 'Todos los contactos deben usar protocolos de Friendica. El resto de protocolos serán desactivados.';
$a->strings['Verify SSL'] = 'Verificar SSL';
$a->strings['If you wish, you can turn on strict certificate checking. This will mean you cannot connect (at all) to self-signed SSL sites.'] = 'Si quieres puedes activar la comprobación estricta de certificados. Esto significa que serás incapaz de conectar con ningún sitio que use certificados SSL autofirmados.';
$a->strings['Proxy user'] = 'Usuario proxy';
$a->strings['Proxy URL'] = 'Dirección proxy';
$a->strings['Network timeout'] = 'Tiempo de espera de red';
$a->strings['Value is in seconds. Set to 0 for unlimited (not recommended).'] = 'Valor en segundos. Usar 0 para dejarlo sin límites (no se recomienda).';
$a->strings['Maximum Load Average'] = 'Promedio de carga máxima';
$a->strings['Maximum system load before delivery and poll processes are deferred - default %d.'] = 'Carga máxima del sistema antes de entrega y envío son retrasados - default %d.';
$a->strings['Maximum Load Average (Frontend)'] = 'Carga máxima promedio (frontend)';
$a->strings['Maximum system load before the frontend quits service - default 50.'] = 'Carga máxima del sistema antes de que el frontend cancele el servicio - por defecto 50.';
$a->strings['Minimal Memory'] = 'Memoria Mínima';
$a->strings['Minimal free memory in MB for the worker. Needs access to /proc/meminfo - default 0 (deactivated).'] = 'Memoria mínima en MB del worker. Necesita acceso a /proc/meminfo - default 0 (desactivado).';
$a->strings['Periodically optimize tables'] = 'Periodicamente optimizar tablas';
$a->strings['Periodically optimize tables like the cache and the workerqueue'] = 'Periódicamente optimizar tablas como Cache y cola de worker';
$a->strings['Discover followers/followings from contacts'] = 'Descubrir seguidores/seguimientos de contactos';
$a->strings['If enabled, contacts are checked for their followers and following contacts.'] = 'Si lo habilita, se checan contactos por sus seguidores y sus contactos.';
$a->strings['None - deactivated'] = 'Ninguno - desactivado';
$a->strings['Local contacts - contacts of our local contacts are discovered for their followers/followings.'] = 'Contactos locales - contactos de nuestros contactos locales buscados por seguidores/seguimientos.';
$a->strings['Interactors - contacts of our local contacts and contacts who interacted on locally visible postings are discovered for their followers/followings.'] = 'Interactores - contactos de contactos locales y contactos que interactuan en artículos locales son buscados por sus seguidores/seguimientos.';
$a->strings['Synchronize the contacts with the directory server'] = 'Sincronizar los contactos con el servidor de directorio';
$a->strings['if enabled, the system will check periodically for new contacts on the defined directory server.'] = 'Si habilta, el sistema checará periodicamente por nuevos contactos en el servidor de directorio definido.';
$a->strings['Days between requery'] = 'Días entre búsquedas';
$a->strings['Number of days after which a server is requeried for his contacts.'] = 'Cantidad de días hasta que un servidor es consultado por sus contactos.';
$a->strings['Discover contacts from other servers'] = 'Descubrir contactos de otros servidores';
$a->strings['Periodically query other servers for contacts. The system queries Friendica, Mastodon and Hubzilla servers.'] = 'Periodicamente buscar contactos en servidores. Buscar en Friendica, Mastodon y Hubzilla.';
$a->strings['Search the local directory'] = 'Buscar el directorio local';
$a->strings['Search the local directory instead of the global directory. When searching locally, every search will be executed on the global directory in the background. This improves the search results when the search is repeated.'] = 'Buscar en el directorio local en vez del directorio global. Cuando se busca localmente, cada búsqueda sera efectuada en el directorio global en el background. Esto mejora los resultados de la búsqueda cuando la misma es repetida.';
$a->strings['Publish server information'] = 'Publicar información del servidor';
$a->strings['If enabled, general server and usage data will be published. The data contains the name and version of the server, number of users with public profiles, number of posts and the activated protocols and connectors. See <a href="http://the-federation.info/">the-federation.info</a> for details.'] = 'Si se habilita, se publicarán datos de uso y servidor. Contiene nombre y versión del servidor, usuarios con perfiles públicos, no. de artículos, protocolos activos y conectores. Ver <a href="http://the-federation.info/">the-federation.info</a> para mas detalles.';
$a->strings['Check upstream version'] = 'Verifique la versión ascendente';
$a->strings['Enables checking for new Friendica versions at github. If there is a new version, you will be informed in the admin panel overview.'] = 'Permite verificar nuevas versiones de Friendica en Github. Si hay una nueva versión, se le informará en el panel de administración.';
$a->strings['Suppress Tags'] = 'Suprimir etiquetas';
$a->strings['Suppress showing a list of hashtags at the end of the posting.'] = 'Suprimir la lista de tags al final de una publicación.';
$a->strings['Clean database'] = 'Limpiar Base de Datos';
$a->strings['Remove old remote items, orphaned database records and old content from some other helper tables.'] = 'Borrar artículos viejos remotos, registros de BD huerfanos y algunos viejos de tablas auxiliares.';
$a->strings['Lifespan of remote items'] = 'Tiempo de vida de artículos remotos';
$a->strings['When the database cleanup is enabled, this defines the days after which remote items will be deleted. Own items, and marked or filed items are always kept. 0 disables this behaviour.'] = 'Cuando habilita limpieza de BD, define los días en que artículos remotos serán borrados. Propios, marcados o archivados son siempre conservados. 0 deshabilita este comportamiento.';
$a->strings['Lifespan of unclaimed items'] = 'Tiempo de vida de artículos no reclamados';
$a->strings['When the database cleanup is enabled, this defines the days after which unclaimed remote items (mostly content from the relay) will be deleted. Default value is 90 days. Defaults to the general lifespan value of remote items if set to 0.'] = 'Cuando se habilita limpieza de BD, esto define los dias en que los articulos ignorados remotos (mas que nada contenido del Relay) serán borrados. Valor Default es 90 días. Es default del tiempo de vida general de artículos remotos se setea en 0.';
$a->strings['Lifespan of raw conversation data'] = 'Tiempo de vida de datos de conversación ';
$a->strings['The conversation data is used for ActivityPub and OStatus, as well as for debug purposes. It should be safe to remove it after 14 days, default is 90 days.'] = 'Los datos de conversación son usados por ActivityPub y OStatus, también por propósito de Debugg. Debe ser seguro borrarlos después de 14 dias, default es 90 días.';
$a->strings['Path to item cache'] = 'Ruta a la caché del objeto';
$a->strings['The item caches buffers generated bbcode and external images.'] = 'El buffer de cache de items generado para bbcodes e imágenes externas. ';
$a->strings['Cache duration in seconds'] = 'Duración de la caché en segundos';
$a->strings['How long should the cache files be hold? Default value is 86400 seconds (One day). To disable the item cache, set the value to -1.'] = '¿Por cuanto tiempo deberían los archivos ser almacenados en el cache? Valor por defecto 86400 segundos (un día). Para deshabilita el item cache, ajuste el valor a -1.';
$a->strings['Maximum numbers of comments per post'] = 'Numero máximo de respuestas por tema';
$a->strings['How much comments should be shown for each post? Default value is 100.'] = '¿Cuantos comentarios deberían ser mostrados por tema? Valor por defecto es 100.';
$a->strings['Maximum numbers of comments per post on the display page'] = 'Maximo numero de comentarios por artículo de página de despliegue';
$a->strings['How many comments should be shown on the single view for each post? Default value is 1000.'] = 'Cuantos comentarios deben ser mostrados en una sola vista por cada uno? Valor default es 1000.';
$a->strings['Temp path'] = 'Ruta a los temporales';
$a->strings['If you have a restricted system where the webserver can\'t access the system temp path, enter another path here.'] = 'Si tiene un sistema restringido en donde el servidor web no puede acceder la dirección del sistema temp, ingrese una dirección alternativa aquí. ';
$a->strings['Disable picture proxy'] = 'Deshabilitar proxy de imagen';
$a->strings['The picture proxy increases performance and privacy. It shouldn\'t be used on systems with very low bandwidth.'] = 'La imagen proxy aumenta el performance y la privacidad. No debe usarse en sistemas con bajo ancho de banda.';
$a->strings['Only search in tags'] = 'Solo buscar en tags';
$a->strings['On large systems the text search can slow down the system extremely.'] = 'En sistemas grandes, la búsqueda de texto puede enlentecer el sistema gravemente.';
$a->strings['New base url'] = 'Nueva URL base';
$a->strings['Change base url for this server. Sends relocate message to all Friendica and Diaspora* contacts of all users.'] = 'Cambiar la URL base para este servidor. Envía un mensaje de reubicación a todos los contactos de Friendica y Diaspora* de todos los usuarios.';
$a->strings['RINO Encryption'] = 'Encryptado RINO';
$a->strings['Encryption layer between nodes.'] = 'Capa de encriptación entre nodos.';
$a->strings['Enabled'] = 'Habilitado';
$a->strings['Maximum number of parallel workers'] = 'Numero máximo de trabajos paralelos de fondo.';
$a->strings['On shared hosters set this to %d. On larger systems, values of %d are great. Default value is %d.'] = 'En hosts compartidos ponga a %d. En sistemas grandes, valores de %d estan bien. Valor Default es %d.';
$a->strings['Enable fastlane'] = 'Habilitar ascenso rápido';
$a->strings['When enabed, the fastlane mechanism starts an additional worker if processes with higher priority are blocked by processes of lower priority.'] = 'Cuando está habilitado, el mecanismo ascenso rápido inicia un trabajador adicional si los procesos de mayor prioridad son bloqueados por prcesos de menor prioridad.';
$a->strings['Use relay servers'] = 'Usar servidores de reenvío';
$a->strings['Enables the receiving of public posts from relay servers. They will be included in the search, subscribed tags and on the global community page.'] = 'Habilita la recepción de publicaciones públicas desde servidores de retransmisión. Se incluirán en la búsqueda, en las etiquetas suscritas y en la página de la comunidad global.';
$a->strings['"Social Relay" server'] = 'Servidor de "Social Relay" ';
$a->strings['Address of the "Social Relay" server where public posts should be send to. For example %s. ActivityRelay servers are administrated via the "console relay" command line command.'] = 'Dirección del servidor "Social Relay" donde se deben enviar las publicaciones públicas. Por ejemplo %s. Los servidores ActivityRelay se administran a través del comando de línea de comando "Console Relay".';
$a->strings['Direct relay transfer'] = 'Transferencia directa del Reenvío';
$a->strings['Enables the direct transfer to other servers without using the relay servers'] = 'Habilita transferencia directa a otros servidores sin usar servidores de reenvío';
$a->strings['Relay scope'] = 'Enfoque del Reenvío';
$a->strings['Can be "all" or "tags". "all" means that every public post should be received. "tags" means that only posts with selected tags should be received.'] = 'Puede ser "all" o "tags". "all" significa que cada artículo público será recibido. "tags" sólo artículos de esas etiquetas deben ser recibidos.';
$a->strings['all'] = 'todas';
$a->strings['tags'] = 'etiquetas';
$a->strings['Server tags'] = 'Etiquetas del Servidor';
$a->strings['Comma separated list of tags for the "tags" subscription.'] = 'Lista separada por comas de etiquetas de suscripción "tags".';
$a->strings['Deny Server tags'] = 'Denegar etiquetas de Servidor';
$a->strings['Comma separated list of tags that are rejected.'] = 'Lista separada por comas de etiquetas denegadas.';
$a->strings['Allow user tags'] = 'Permitir etiquetas de Usuario';
$a->strings['If enabled, the tags from the saved searches will used for the "tags" subscription in addition to the "relay_server_tags".'] = 'Si se habilita, etiquetas de las búsquedas grabadas serán usadas para suscripción de "tags" además de "relay_server_tags".';
$a->strings['Start Relocation'] = 'Iniciar Relocación';
$a->strings['Server domain pattern added to blocklist.'] = 'Patrón del Servidor de Dominio añadido a bloqueados';
$a->strings['Blocked server domain pattern'] = 'Patrón de Servidor de Dominio Bloqueado';
$a->strings['Delete server domain pattern'] = 'Borrar Patrón de Servidor de Dominio';
$a->strings['Check to delete this entry from the blocklist'] = 'Marca para eliminar esta entrada de Lista de bloqueo';
$a->strings['Server Domain Pattern Blocklist'] = 'Lista de Bloqueo del Patrón de Servidor de Dominio';
$a->strings['This page can be used to define a blocklist of server domain patterns from the federated network that are not allowed to interact with your node. For each domain pattern you should also provide the reason why you block it.'] = 'Esta página puede servir para definir una lista de bloqueos de patrones de Servidor de Dominios de la Red Federada que no podrán interactuar con el nodo. Por cada patrón de Dominio debes dar la razón de porqué se bloquea.';
$a->strings['The list of blocked server domain patterns will be made publically available on the <a href="/friendica">/friendica</a> page so that your users and people investigating communication problems can find the reason easily.'] = 'La lista de Patrones de Servidores de Dominio bloqueados será pública en  <a href="/friendica">/friendica</a> para que tus usuarios y personas que consulten problemas de comunicación puedan encontrar fácilmente el motivo.';
$a->strings['<p>The server domain pattern syntax is case-insensitive shell wildcard, comprising the following special characters:</p>
<ul>
	<li><code>*</code>: Any number of characters</li>
	<li><code>?</code>: Any single character</li>
	<li><code>[&lt;char1&gt;&lt;char2&gt;...]</code>: char1 or char2</li>
</ul>'] = '<p>La sintaxis del patrón de dominio de servidor no es sensible a mayusculas, conformada de los sig. caracteres:</p>
<ul>
	<li><code>*</code>: Cualquier número de caracteres</li>
	<li><code>?</code>: Cualquier caracter</li>
	<li><code>[&lt;char1&gt;&lt;char2&gt;...]</code>: car1 o car2 </li>
</ul>';
$a->strings['Add new entry to block list'] = 'Agregar nueva entrada a la lista de bloqueo';
$a->strings['Server Domain Pattern'] = 'Patrón de Servidor de Dominio';
$a->strings['The domain pattern of the new server to add to the block list. Do not include the protocol.'] = 'El patrón de Dominio del nuevo servidor a añadir a lista de bloqueo. No incluya el protocolo.';
$a->strings['Block reason'] = 'Razón del bloqueo';
$a->strings['The reason why you blocked this server domain pattern.'] = 'La razón por la que bloqueó este patrón de servidor de dominio.';
$a->strings['Add Entry'] = 'Añadir Entrada';
$a->strings['Save changes to the blocklist'] = 'Guardar cambios en la lista de bloqueo';
$a->strings['Current Entries in the Blocklist'] = 'Entradas actuales en la lista de bloqueo';
$a->strings['Delete entry from blocklist'] = 'Eliminar entrada de la lista de bloqueo';
$a->strings['Delete entry from blocklist?'] = '¿Eliminar entrada de la lista de bloqueo?';
$a->strings['The contact has been blocked from the node'] = 'El contacto ha sido blockeado del nodo';
$a->strings['Could not find any contact entry for this URL (%s)'] = 'No se ha encontrado ninguna entrada de contacto para esta URL (%s)';
$a->strings['%s contact unblocked'] = [
	0 => '%s Contacto desbloqueado',
	1 => '%s Contactos desbloqueados',
];
$a->strings['Remote Contact Blocklist'] = 'Lista de bloqueo de contactos remotos';
$a->strings['This page allows you to prevent any message from a remote contact to reach your node.'] = 'Esta página le permite evitar que cualquier mensaje de un contacto remoto llegue a su nodo. ';
$a->strings['Block Remote Contact'] = 'Bloquear Contacto Remoto';
$a->strings['select all'] = 'seleccionar todo';
$a->strings['select none'] = 'deseleccionar';
$a->strings['No remote contact is blocked from this node.'] = 'No se bloquea ningún contacto remoto de este nodo.';
$a->strings['Blocked Remote Contacts'] = 'Contactos remotos bloqueados';
$a->strings['Block New Remote Contact'] = 'Bloquear nuevo contacto remoto';
$a->strings['Photo'] = 'Foto';
$a->strings['Reason'] = 'Motivo';
$a->strings['%s total blocked contact'] = [
	0 => '%s contacto bloqueado en total',
	1 => '%s contactos bloqueados en total',
];
$a->strings['URL of the remote contact to block.'] = 'URL del contacto remoto a bloquear.';
$a->strings['Block Reason'] = 'Razón de bloqueo';
$a->strings['Display Terms of Service'] = 'Mostrar los Términos de Servicio';
$a->strings['Enable the Terms of Service page. If this is enabled a link to the terms will be added to the registration form and the general information page.'] = 'Habilitar la página de los Términos de Servicio. Si esto está activo un enlace a los términos será adicionado al formulario de registro y en la página de información general.';
$a->strings['Display Privacy Statement'] = 'Mostrar las Directivas de Privacidad';
$a->strings['Show some informations regarding the needed information to operate the node according e.g. to <a href="%s" target="_blank" rel="noopener noreferrer">EU-GDPR</a>.'] = 'Muestre información en cuanto a información requerida para operar el nodo de acuerdo ej. para <a href="%s" target="_blank" rel="noopener noreferrer">EU-GDPR</a>.';
$a->strings['Privacy Statement Preview'] = 'Vista previa de Política de Privacidad';
$a->strings['The Terms of Service'] = 'Los Términos de Servicio';
$a->strings['Enter the Terms of Service for your node here. You can use BBCode. Headers of sections should be [h2] and below.'] = 'Introduzca los Términos de Servicio para tu nodo aquí. Puedes usar BBCode. Cabeceras de sección deberían ser [2] e inferior.';
$a->strings['Other'] = 'Otro';
$a->strings['unknown'] = 'desconocido';
$a->strings['This page offers you some numbers to the known part of the federated social network your Friendica node is part of. These numbers are not complete but only reflect the part of the network your node is aware of.'] = 'Esta pagina ofrece algunos datos sobre la red conocida a la que tu nodo friendica esta conectado. Estos nummeros no son completos respecto a las redes federadas, si no refleja los nodos esta instancia conoce.';
$a->strings['Currently this node is aware of %d nodes with %d registered users from the following platforms:'] = 'Actualmente, este nodo tiene conocimiento de %d nodos con %d usuarios registrados de las siguientes plataformas:';
$a->strings['New User'] = 'Nuevo usuario';
$a->strings['Add User'] = 'Agregar usuario';
$a->strings['Name of the new user.'] = 'Nombre del nuevo usuario';
$a->strings['Nickname'] = 'Apodo';
$a->strings['Nickname of the new user.'] = 'Apodo del nuevo perfil.';
$a->strings['Email'] = 'Correo';
$a->strings['Email address of the new user.'] = 'Dirección de correo del nuevo perfil.';
$a->strings['%s user blocked'] = [
	0 => '%s usuario bloqueado',
	1 => '%s usuarios bloqueados',
];
$a->strings['You can\'t remove yourself'] = 'No puedes borrar tu usuario';
$a->strings['%s user deleted'] = [
	0 => '%s usuario eliminado',
	1 => '%s usuarios eliminados',
];
$a->strings['User "%s" deleted'] = 'Usuario "%s" borrado';
$a->strings['User "%s" blocked'] = 'Usuario "%s" bloqueado';
$a->strings['Register date'] = 'Fecha de registro';
$a->strings['Last login'] = 'Último acceso';
$a->strings['Last public item'] = 'Último artículo público';
$a->strings['Active Accounts'] = 'Cuentas Activas';
$a->strings['User blocked'] = 'Usuario bloqueado';
$a->strings['Site admin'] = 'Administrador del Sitio';
$a->strings['Account expired'] = 'Cuenta caducada';
$a->strings['Create a new user'] = 'Crear nuevo usuario';
$a->strings['Selected users will be deleted!\n\nEverything these users had posted on this site will be permanently deleted!\n\nAre you sure?'] = '¡Los usuarios seleccionados serán eliminados!\n\n¡Todo lo que hayan publicado en este sitio se borrará para siempre!\n\n¿Estás seguro?';
$a->strings['The user {0} will be deleted!\n\nEverything this user has posted on this site will be permanently deleted!\n\nAre you sure?'] = '¡El usuario {0} será eliminado!\n\n¡Todo lo que haya publicado en este sitio se borrará para siempre!\n\n¿Estás seguro?';
$a->strings['%s user unblocked'] = [
	0 => '%s usuario desbloqueado',
	1 => '%s usuarios desbloqueados',
];
$a->strings['User "%s" unblocked'] = 'Usuario "%s" desbloqueado';
$a->strings['User waiting for permanent deletion'] = 'Usuario esperando anulación permanente.';
$a->strings['Permanent deletion'] = 'Borrado Permanente';
$a->strings['Blocked Users'] = 'Usuarios bloqueados';
$a->strings['Users awaiting permanent deletion'] = 'Usuarios en espera de borrado permanente';
$a->strings['%s user approved'] = [
	0 => '%s usuario aprobado',
	1 => '%s usuarios aprobados',
];
$a->strings['%s registration revoked'] = [
	0 => '%s registro revocado',
	1 => '%s registros revocados',
];
$a->strings['Account approved.'] = 'Cuenta aprobada.';
$a->strings['Registration revoked'] = 'Registro revocado';
$a->strings['User registrations awaiting review'] = 'Registro de usuarios en espera de revisión';
$a->strings['Request date'] = 'Solicitud de fecha';
$a->strings['No registrations.'] = 'Sin registros.';
$a->strings['Note from the user'] = 'Nota para el usuario';
$a->strings['Deny'] = 'Denegado';
$a->strings['All'] = 'Todos';
$a->strings['List of all users'] = 'Lista de todos los usuarios';
$a->strings['Active'] = 'Activos';
$a->strings['List of active accounts'] = 'Lista de Cuentas Activas';
$a->strings['List of pending registrations'] = 'Lista de Registros Pendientes';
$a->strings['List of blocked users'] = 'Lista de usuarios bloqueados';
$a->strings['Deleted'] = 'Borrados';
$a->strings['List of pending user deletions'] = 'Lista de borrados de usuario pendientes';
$a->strings['Normal Account Page'] = 'Página de Cuenta Normal';
$a->strings['Soapbox Page'] = 'Página de Tribuna';
$a->strings['Public Forum'] = 'Foro Público';
$a->strings['Automatic Friend Page'] = 'Página de Amistad Autómatica';
$a->strings['Private Forum'] = 'Foro Privado';
$a->strings['Personal Page'] = 'Página personal';
$a->strings['Organisation Page'] = 'Página de Organización';
$a->strings['News Page'] = 'Página de Noticias';
$a->strings['Community Forum'] = 'Foro de la Comunidad';
$a->strings['Relay'] = 'Retransmisión';
$a->strings['Theme %s disabled.'] = 'Tema %s desactivado';
$a->strings['Theme %s successfully enabled.'] = 'Tema %s activado con éxito.';
$a->strings['Theme %s failed to install.'] = 'El Tema %s no se pudo instalar.';
$a->strings['Screenshot'] = 'Captura de pantalla';
$a->strings['Themes reloaded'] = 'Temas reacargados';
$a->strings['Reload active themes'] = 'Recargar Temas activos';
$a->strings['No themes found on the system. They should be placed in %1$s'] = 'No hay Temas en el Sistema, Deben situarse en %1$s';
$a->strings['[Experimental]'] = '[Experimental]';
$a->strings['[Unsupported]'] = '[No soportado]';
$a->strings['Unknown theme.'] = 'Tema desconocido.';
$a->strings['Item was not found.'] = 'Elemento no encontrado.';
$a->strings['No installed applications.'] = 'Sin aplicaciones instaladas';
$a->strings['Applications'] = 'Aplicaciones';
$a->strings['Help:'] = 'Ayuda:';
$a->strings['Photos'] = 'Fotos';
$a->strings['Photo Albums'] = 'Álbum de Fotos';
$a->strings['Videos'] = 'Videos';
$a->strings['Events'] = 'Eventos';
$a->strings['Events and Calendar'] = 'Eventos y Calendario';
$a->strings['Personal Notes'] = 'Notas Personales';
$a->strings['Only You Can See This'] = 'Únicamente tú puedes ver esto';
$a->strings['Tips for New Members'] = 'Consejos para nuevos miembros';
$a->strings['The Photo with id %s is not available.'] = 'La foto con id %s no esta disponible.';
$a->strings['Invalid photo with id %s.'] = 'Foto no válida de Id %s.';
$a->strings['everybody'] = 'todos';
$a->strings['Account'] = 'Cuenta';
$a->strings['Display'] = 'Interfaz del usuario';
$a->strings['Social Networks'] = 'Redes sociales';
$a->strings['Connected apps'] = 'Aplicaciones conectadas';
$a->strings['Remove account'] = 'Eliminar cuenta';
$a->strings['Logged out.'] = 'Desconectado.';
$a->strings['OpenID protocol error. No ID returned'] = 'Error de protocolo OpenID. No encuentra ID';
$a->strings['Account not found. Please login to your existing account to add the OpenID to it.'] = 'Cuenta no encontrada. Ingresa en tu cuenta existente para agregarle OpenID.';
$a->strings['Account not found. Please register a new account or login to your existing account to add the OpenID to it.'] = 'Cuenta no encontrada. Registra una nueva cuenta o ingresa en su cuenta existentepara agregarle OpenID.';
$a->strings['<p>Open the two-factor authentication app on your device to get an authentication code and verify your identity.</p>'] = '<p> Abra la app de ingreso de 2 factores en su dispositivo y obtenga un código de ingreso para verificar su identidad.</p>';
$a->strings['Don’t have your phone? <a href="%s">Enter a two-factor recovery code</a>'] = 'No tienes el teléfono? <a href="%s">Ingresa código de recuperación</a>';
$a->strings['This is my two-factor authenticator app device'] = 'Este es mi app de autenticador de 2 factores en dispositivo';
$a->strings['Verify code and complete login'] = 'Verificar código y completar ingreso';
$a->strings['Remaining recovery codes: %d'] = 'Códigos de recuperación restantes: %d';
$a->strings['Two-factor recovery'] = 'Recuperación de 2 factores';
$a->strings['<p>You can enter one of your one-time recovery codes in case you lost access to your mobile device.</p>'] = '<p>puedes usar uno de tus códigos de recuperación si pierdes el acceso a tu movil.</p>';
$a->strings['Please enter a recovery code'] = 'Ingresa código de recuperación';
$a->strings['Submit recovery code and complete login'] = 'Enviar código de recuperación e ingresar';
$a->strings['Create a New Account'] = 'Crear Nueva Cuenta';
$a->strings['Your OpenID: '] = 'Tu OpenID: ';
$a->strings['Please enter your username and password to add the OpenID to your existing account.'] = 'Ingresa tu Usuario y Contraseña para añadir el OpenID a tu cuentaexistente.';
$a->strings['Or login using OpenID: '] = 'O ingresa usando OpenID: ';
$a->strings['Logout'] = 'Salir';
$a->strings['Nickname or Email: '] = 'Apodo o Correo electrónico: ';
$a->strings['Password: '] = 'Contraseña: ';
$a->strings['Remember me'] = 'Recordarme';
$a->strings['Forgot your password?'] = '¿Olvidaste la contraseña?';
$a->strings['Password Reset'] = 'Restablecer la contraseña';
$a->strings['Website Terms of Service'] = 'Términos de Servicio del Sitio';
$a->strings['terms of service'] = 'Términos de Servicio';
$a->strings['Website Privacy Policy'] = 'Política de Privacidad del Sitio';
$a->strings['privacy policy'] = 'Política de Privacidad';
$a->strings['[no subject]'] = '[sin asunto]';
$a->strings['Detected languages in this post:\n%s'] = 'Lenguajes detectados en artículo:\n%s';
$a->strings['event'] = 'evento';
$a->strings['photo'] = 'foto';
$a->strings['activity'] = 'Actividad';
$a->strings['comment'] = [
	0 => 'Comentario',
	1 => 'Comentarios',
];
$a->strings['post'] = 'Publicación';
$a->strings['Content warning: %s'] = 'Advertencia de contenido: %s';
$a->strings['View Video'] = 'Ver Video';
$a->strings['bytes'] = 'bytes';
$a->strings['View on separate page'] = 'Ver en pagina aparte';
$a->strings['view on separate page'] = 'ver en pagina aparte';
$a->strings['link to source'] = 'Enlace al original';
$a->strings['Starts:'] = 'Inicio:';
$a->strings['Finishes:'] = 'Final:';
$a->strings['all-day'] = 'todo el día';
$a->strings['Sept'] = 'Sept';
$a->strings['today'] = 'hoy';
$a->strings['No events to display'] = 'No hay eventos a mostrar';
$a->strings['l, F j'] = 'l, F j';
$a->strings['Edit event'] = 'Editar evento';
$a->strings['Duplicate event'] = 'Duplicar evento';
$a->strings['Delete event'] = 'Borrar evento';
$a->strings['D g:i A'] = 'D g:i A';
$a->strings['g:i A'] = 'g:i A';
$a->strings['Show map'] = 'Mostrar mapa';
$a->strings['Hide map'] = 'Ocultar mapa';
$a->strings['%s\'s birthday'] = 'Cumpleaños de %s';
$a->strings['Happy Birthday %s'] = 'Feliz cumpleaños %s';
$a->strings['A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.'] = 'Un grupo eliminado con este nombre fue restablecido. Los permisos existentes <strong>pueden</strong> aplicarse a este grupo y a sus futuros miembros. Si esto no es lo que pretendes, por favor, crea otro grupo con un nombre diferente.';
$a->strings['Default privacy group for new contacts'] = 'Grupo por defecto para nuevos contactos';
$a->strings['Everybody'] = 'Todo el mundo';
$a->strings['edit'] = 'editar';
$a->strings['add'] = 'añadir';
$a->strings['Edit group'] = 'Editar grupo';
$a->strings['Create a new group'] = 'Crear un nuevo grupo';
$a->strings['Edit groups'] = 'Editar grupo';
$a->strings['Network Posts'] = 'Artículos de Red';
$a->strings['View Contact'] = 'Ver contacto';
$a->strings['Connect/Follow'] = 'Conectar/Seguir';
$a->strings['UnFollow'] = 'Dejar de seguir';
$a->strings['View Status'] = 'Ver Estado';
$a->strings['View Photos'] = 'Ver Fotos';
$a->strings['Drop Contact'] = 'Eliminar contacto';
$a->strings['Send PM'] = 'Enviar Privado';
$a->strings['Poke'] = 'Empujar';
$a->strings['Organisation'] = 'Organización';
$a->strings['News'] = 'Noticias';
$a->strings['Forum'] = 'Foro';
$a->strings['Disallowed profile URL.'] = 'Dirección de perfil no permitida.';
$a->strings['Connect URL missing.'] = 'Falta el conector URL.';
$a->strings['The contact could not be added. Please check the relevant network credentials in your Settings -> Social Networks page.'] = 'No pudo añadirse el contacto. Consulte las credenciales de red en Ajustes -> Redes Sociales.';
$a->strings['This site is not configured to allow communications with other networks.'] = 'Este sitio no está configurado para permitir la comunicación con otras redes.';
$a->strings['No compatible communication protocols or feeds were discovered.'] = 'No se ha descubierto protocolos de comunicación o fuentes compatibles.';
$a->strings['The profile address specified does not provide adequate information.'] = 'La dirección del perfil especificado no proporciona información adecuada.';
$a->strings['An author or name was not found.'] = 'No se ha encontrado un autor o nombre.';
$a->strings['No browser URL could be matched to this address.'] = 'Ninguna dirección concuerda con la suministrada.';
$a->strings['Unable to match @-style Identity Address with a known protocol or email contact.'] = 'Imposible identificar la Identidad @-style con algún protocolo conocido o dirección de contacto.';
$a->strings['Use mailto: in front of address to force email check.'] = 'Escribe mailto: al principio de la dirección para forzar el envío.';
$a->strings['The profile address specified belongs to a network which has been disabled on this site.'] = 'La dirección del perfil especificada pertenece a una red que ha sido deshabilitada en este sitio.';
$a->strings['Limited profile. This person will be unable to receive direct/personal notifications from you.'] = 'Perfil limitado. Esta persona no podrá recibir notificaciones directas/personales tuyas.';
$a->strings['Unable to retrieve contact information.'] = 'No ha sido posible recibir la información del contacto.';
$a->strings['Filesystem storage failed to create "%s". Check you write permissions.'] = 'Sistema de Archivo falló creando "%s". Checa los permisos.';
$a->strings['Filesystem storage failed to save data to "%s". Check your write permissions'] = 'Sistema de archivo falló al grabar datos a "%s". Checa los permisos de escritura';
$a->strings['Storage base path'] = 'Ruta base de Almacenamiento';
$a->strings['Folder where uploaded files are saved. For maximum security, This should be a path outside web server folder tree'] = 'Carpeta para subir archivos guardada. Para mayor seguridad, Deberá ser una ruta fuera del folder del árbol web';
$a->strings['Enter a valid existing folder'] = 'Ingresa un folder válido existente';
$a->strings['Database storage failed to update %s'] = 'Almacén de BD falló en actualizar %s';
$a->strings['Database storage failed to insert data'] = 'Almacén de BD falló al insertar info';
$a->strings['SERIOUS ERROR: Generation of security keys failed.'] = 'ERROR GRAVE: Generación de claves de seguridad falló.';
$a->strings['Login failed'] = 'Ingreso fallido';
$a->strings['Not enough information to authenticate'] = 'Falta información para autenticación';
$a->strings['Password can\'t be empty'] = 'La contraseña es requerida';
$a->strings['Empty passwords are not allowed.'] = 'No se permiten contraseñas vacias';
$a->strings['The new password has been exposed in a public data dump, please choose another.'] = 'La nueva contraseña ya se ha usado muchas veces, escoja otro.';
$a->strings['The password can\'t contain accentuated letters, white spaces or colons (:)'] = 'Contraseña no puede contener acentos, espacios ni dos puntos (:)';
$a->strings['Passwords do not match. Password unchanged.'] = 'Las contraseñas no coinciden. La contraseña no ha sido modificada.';
$a->strings['An invitation is required.'] = 'Se requiere de invitación.';
$a->strings['Invitation could not be verified.'] = 'No se puede verificar la invitación.';
$a->strings['Invalid OpenID url'] = 'Dirección OpenID no válida';
$a->strings['We encountered a problem while logging in with the OpenID you provided. Please check the correct spelling of the ID.'] = 'Se ha encontrado un problema para acceder con el OpenID que has escrito. Verifica que lo hayas escrito correctamente.';
$a->strings['The error message was:'] = 'El mensaje del error fue:';
$a->strings['Please enter the required information.'] = 'Por favor, introduce la información necesaria.';
$a->strings['system.username_min_length (%s) and system.username_max_length (%s) are excluding each other, swapping values.'] = 'system.username_min_length (%s) y system.username_max_length (%s) son mutuamente excluyentes, los valores se sobreponen.';
$a->strings['Username should be at least %s character.'] = [
	0 => 'Usuario debe ser al menos %s caracter.',
	1 => 'Usuario debe ser al menos %s caracteres.',
];
$a->strings['Username should be at most %s character.'] = [
	0 => 'Usuario debe ser máximo %s caracter.',
	1 => 'Usuario debe ser máximo %s caracteres.',
];
$a->strings['That doesn\'t appear to be your full (First Last) name.'] = 'No parece que ese sea tu nombre completo.';
$a->strings['Your email domain is not among those allowed on this site.'] = 'Tu dominio de correo no se encuentra entre los permitidos en este sitio.';
$a->strings['Not a valid email address.'] = 'No es una dirección de correo electrónico válida.';
$a->strings['The nickname was blocked from registration by the nodes admin.'] = 'Ese nombre se bloquea a solicitud del administrador.';
$a->strings['Cannot use that email.'] = 'No puede usarse ese correo electrónico.';
$a->strings['Your nickname can only contain a-z, 0-9 and _.'] = 'Tu apodo solo puede contener a-z, 0 al 9 y guión bajo (_).';
$a->strings['Nickname is already registered. Please choose another.'] = 'Apodo ya registrado. Por favor, elije otro.';
$a->strings['An error occurred during registration. Please try again.'] = 'Se produjo un error durante el registro. Por favor, inténtalo de nuevo.';
$a->strings['An error occurred creating your default profile. Please try again.'] = 'Error al crear tu perfil predeterminado. Por favor, inténtalo de nuevo.';
$a->strings['An error occurred creating your self contact. Please try again.'] = 'Ocurrió un error creando el contacto. Vuelve a intentar.';
$a->strings['Friends'] = 'Amigos';
$a->strings['An error occurred creating your default contact group. Please try again.'] = 'Ocurrió un error creando el grupo Default. Vuleve a intentar.';
$a->strings['
		Dear %1$s,
			the administrator of %2$s has set up an account for you.'] = '
		Estimado %1$s,
			el administrador de %2$s te ha establecido una cuenta.';
$a->strings['
		The login details are as follows:

		Site Location:	%1$s
		Login Name:		%2$s
		Password:		%3$s

		You may change your password from your account "Settings" page after logging
		in.

		Please take a few moments to review the other account settings on that page.

		You may also wish to add some basic information to your default profile
		(on the "Profiles" page) so that other people can easily find you.

		We recommend setting your full name, adding a profile photo,
		adding some profile "keywords" (very useful in making new friends) - and
		perhaps what country you live in; if you do not wish to be more specific
		than that.

		We fully respect your right to privacy, and none of these items are necessary.
		If you are new and do not know anybody here, they may help
		you to make some new and interesting friends.

		If you ever want to delete your account, you can do so at %1$s/removeme

		Thank you and welcome to %4$s.'] = '
		La información de autenticación es:

		Sitio - Localidad:	%1$s
		Usuario:		%2$s
		Contraseña:		%3$s

		Puedes cambiar la contraseña en página "Settings" cuando ingreses

		Tómate unos momentos en revisar los ajustes en esa página.

		Podrias añadir información básica en tu Perfil
		(En página "Profiles" ) para que puedan encontrarte.

		Te recomendamos usar nombre completo, añadir foto del Perfil,
		añadir algunas "keywords" (muy útil para hacer amistades) - y
		quizá en que pais resides; si no quieres ser mas específico
		que eso.

		Respetamos ampliamente tu privacidad, ningána opción es requerida.
		Si eres nuevo y no conoces a nadie, eso puede ayudarte a hacer
		nuevas amistades interesantes.

		Si quisieras borrar tu cuenta, lo podrás hacer en %1$s/removeme

		Gracias y Bienvenido a %4$s !.';
$a->strings['Registration details for %s'] = 'Detalles de registro para %s';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account is pending for approval by the administrator.

			Your login details are as follows:

			Site Location:	%3$s
			Login Name:		%4$s
			Password:		%5$s
		'] = '
			Estimado %1$s,
				Gracias por registrarte en %2$s. Tu cuenta esta en aprobación por los Administradores.

			Tus datos de ingreso son:

			Sitio - ubicación:	%3$s
			Usuario:		%4$s
			Contraseña:		%5$s
		';
$a->strings['Registration at %s'] = 'Registro en %s';
$a->strings['
				Dear %1$s,
				Thank you for registering at %2$s. Your account has been created.
			'] = '
				Estimado %1$s,
				Gracias por registrarte en %2$s. Tu cuenta fue creada.
			';
$a->strings['
			The login details are as follows:

			Site Location:	%3$s
			Login Name:		%1$s
			Password:		%5$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %3$s/removeme

			Thank you and welcome to %2$s.'] = '
			Los datos de ingreso son:

			Sitio - ubicación:	%3$s
			Usuario:		%1$s
			Contraseña:		%5$s

			Puedes cambiar la contraseña en página "Settings" cuando ingreses.

			Tómate unos momentos en revisar las otras opciones.

			podrías agregar mas información a tu perfil
			(en la página "Profiles" ) Para que puedan encontrarte.

			Podemos recomendar nombre completo, foto de perfil,
			añadir algunos "keywords" al perfil (muy útil para hacer amistades) - 
			y quizá pais en el que vives; si no quieres ser muy específico
			que eso.

			Respetamos ampliamente tu privacidad, ninguno de ellos es requerido.
			Si eres nuevo y no conoces a nadie, podrían ayudarte
			a conseguir amistades interesantes.

			Si quisieras borrar tu cuenta, podrás hacerlo en %3$s/removeme

			Gracias y bienvenido a %2$s.';
$a->strings['Change profile photo'] = 'Cambiar foto del perfil';
$a->strings['Atom feed'] = 'Atom feed';
$a->strings['g A l F d'] = 'g A l F d';
$a->strings['F d'] = 'F d';
$a->strings['[today]'] = '[hoy]';
$a->strings['Birthday Reminders'] = 'Recordatorios de cumpleaños';
$a->strings['Birthdays this week:'] = 'Cumpleaños esta semana:';
$a->strings['[No description]'] = '[Sin descripción]';
$a->strings['Event Reminders'] = 'Recordatorios de eventos';
$a->strings['Upcoming events the next 7 days:'] = 'Eventos de los próximos 7 dias:';
$a->strings['OpenWebAuth: %1$s welcomes %2$s'] = 'OpenWebAuth: %1$s te da la bienvenida %2$s';
$a->strings['Legacy module file not found: %s'] = 'Modulo legado no encontrado: %s';
$a->strings['The folder view/smarty3/ must be writable by webserver.'] = 'El folder view/smarty3/ debe ser de escritura';
$a->strings['Could not find any unarchived contact entry for this URL (%s)'] = 'No se encontró contacto sin archivar en esa URL (%s)';
$a->strings['The contact entries have been archived'] = 'Entradas del contacto archivadas';
$a->strings['Post update version number has been set to %s.'] = 'Número de versión actualizado es %s.';
$a->strings['Check for pending update actions.'] = 'Checar acciones de actualización pendientes.';
$a->strings['Done.'] = 'Hecho.';
$a->strings['Execute pending post updates.'] = 'Ejecutar actualizaciones pendientes.';
$a->strings['All pending post updates are done.'] = 'Todas las actualizaciones hechas.';
$a->strings['Enter new password: '] = 'Ingrese nueva contraseña: ';
$a->strings['Password update failed. Please try again.'] = 'Actualización de contraseña falló. Intente de nuevo.';
$a->strings['Password changed.'] = 'Contraseña modificada.';
$a->strings['Enter user name: '] = 'Ingrese usuario: ';
$a->strings['Enter user nickname: '] = 'Ingrese apodo: ';
$a->strings['Enter user email address: '] = 'Ingrese corréo electrónco: ';
$a->strings['Enter a language (optional): '] = 'Ingrese lenguaje (pcional): ';
$a->strings['User is not pending.'] = 'Usuario no pendiente.';
$a->strings['User has already been marked for deletion.'] = 'Usuario ya fue marcado para borrado.';
$a->strings['Type "yes" to delete %s'] = 'Escribe "si" para borrar %s';
$a->strings['Deletion aborted.'] = 'Borrado cancelado.';
$a->strings['Export'] = 'Exportar';
$a->strings['Export calendar as ical'] = 'Exportar calendario como ical';
$a->strings['Export calendar as csv'] = 'Exportar calendario como csv';
$a->strings['Remove term'] = 'Eliminar término';
$a->strings['Saved Searches'] = 'Búsquedas guardadas';
$a->strings['No contacts'] = 'Sin contactos';
$a->strings['%d Contact'] = [
	0 => '%d Contacto',
	1 => '%d Contactos',
];
$a->strings['View Contacts'] = 'Ver contactos';
$a->strings['Trending Tags (last %d hour)'] = [
	0 => 'Etiquetas tendencia (última %d hora)',
	1 => 'Etiquetas tendencia (últimas %d horas)',
];
$a->strings['More Trending Tags'] = 'Mas tendencias';
$a->strings['Tags'] = 'Etiquetas';
$a->strings['Forums'] = 'Foros';
$a->strings['External link to forum'] = 'Enlace externo al foro';
$a->strings['show less'] = 'mostrar menos';
$a->strings['show more'] = 'Mostrar más';
$a->strings['Nothing new here'] = 'No hay nada nuevo';
$a->strings['Clear notifications'] = 'Borrar notificaciones';
$a->strings['@name, !forum, #tags, content'] = '@name, !forum, #tags, contenido';
$a->strings['End this session'] = 'Cerrar sesión';
$a->strings['Sign in'] = 'Ingresar';
$a->strings['Your posts and conversations'] = 'Tus publicaciones y conversaciones';
$a->strings['Your profile page'] = 'Tu página de perfil';
$a->strings['Your photos'] = 'Tus fotos';
$a->strings['Your videos'] = 'Tus videos';
$a->strings['Your events'] = 'Tus eventos';
$a->strings['Personal notes'] = 'Notas personales';
$a->strings['Your personal notes'] = 'Tus notas personales';
$a->strings['Home'] = 'Inicio';
$a->strings['Home Page'] = 'Página de Inicio';
$a->strings['Create an account'] = 'Crea una cuenta';
$a->strings['Help and documentation'] = 'Ayuda y documentación';
$a->strings['Apps'] = 'Aplicaciones';
$a->strings['Addon applications, utilities, games'] = 'Aplicaciones, utilidades, juegos';
$a->strings['Search site content'] = 'Buscar contenido en el sitio';
$a->strings['Full Text'] = 'Texto completo';
$a->strings['Community'] = 'Comunidad';
$a->strings['Conversations on this and other servers'] = 'Conversaciones aquí y en otros servidores';
$a->strings['Directory'] = 'Directorio';
$a->strings['People directory'] = 'Directorio de usuarios';
$a->strings['Information about this friendica instance'] = 'Información sobre esta instancia Friendica';
$a->strings['Terms of Service of this Friendica instance'] = 'Términos de Servicio de la Instancia Friendica';
$a->strings['Network'] = 'Red';
$a->strings['Conversations from your friends'] = 'Conversaciones de tus amigos';
$a->strings['Introductions'] = 'Presentaciones';
$a->strings['Friend Requests'] = 'Solicitudes de amistad';
$a->strings['See all notifications'] = 'Ver todas las notificaciones';
$a->strings['Mark as seen'] = 'Marcar como leído';
$a->strings['Mark all system notifications seen'] = 'Marcar todas las notificaciones del sistema como leídas';
$a->strings['Messages'] = 'Mensajes';
$a->strings['Private mail'] = 'Correo privado';
$a->strings['Inbox'] = 'Entrada';
$a->strings['Outbox'] = 'Enviados';
$a->strings['New Message'] = 'Nuevo Mensaje';
$a->strings['Accounts'] = 'Cuentas';
$a->strings['Manage other pages'] = 'Administrar otras páginas';
$a->strings['Account settings'] = 'Configurar la cuenta';
$a->strings['Manage/edit friends and contacts'] = 'Administrar/editar amigos y contactos';
$a->strings['Site setup and configuration'] = 'Opciones y configuración del sitio';
$a->strings['Navigation'] = 'Navegación';
$a->strings['Site map'] = 'Mapa del sitio';
$a->strings['Frequently'] = 'Frecuentemente';
$a->strings['Hourly'] = 'Cada hora';
$a->strings['Twice daily'] = 'Dos veces al dia';
$a->strings['Daily'] = 'Diariamente';
$a->strings['Weekly'] = 'Semanal';
$a->strings['Monthly'] = 'Mensual';
$a->strings['DFRN'] = 'DFRN';
$a->strings['OStatus'] = 'OStatus';
$a->strings['RSS/Atom'] = 'RSS/Atom';
$a->strings['Zot!'] = 'Zot!';
$a->strings['LinkedIn'] = 'LinkedIn';
$a->strings['XMPP/IM'] = 'XMPP/IM';
$a->strings['MySpace'] = 'MySpace';
$a->strings['Google+'] = 'Google+';
$a->strings['pump.io'] = 'pump.io';
$a->strings['Twitter'] = 'Twitter';
$a->strings['Discourse'] = 'Discourse';
$a->strings['Diaspora Connector'] = 'Conectos Diaspora';
$a->strings['GNU Social Connector'] = 'Conector GNU Social';
$a->strings['ActivityPub'] = 'ActivityPub';
$a->strings['pnut'] = 'pnut';
$a->strings['%s (via %s)'] = '%s (a través %s)';
$a->strings['newer'] = 'más nuevo';
$a->strings['older'] = 'más antiguo';
$a->strings['Add New Contact'] = 'Añadir nuevo contacto';
$a->strings['Enter address or web location'] = 'Escribe la dirección o página web';
$a->strings['Example: bob@example.com, http://example.com/barbara'] = 'Ejemplo: miguel@ejemplo.com, http://ejemplo.com/miguel';
$a->strings['Connect'] = 'Conectar';
$a->strings['%d invitation available'] = [
	0 => '%d invitación disponible',
	1 => '%d invitaviones disponibles',
];
$a->strings['Find People'] = 'Buscar Personas';
$a->strings['Enter name or interest'] = 'Introduce nombre o interés';
$a->strings['Examples: Robert Morgenstein, Fishing'] = 'Ejemplos: Robert Morgenstein, Pesca';
$a->strings['Friend Suggestions'] = 'Sugerencias de Amistad';
$a->strings['Similar Interests'] = 'Intereses Similares';
$a->strings['Random Profile'] = 'Perfil Al Azar';
$a->strings['Invite Friends'] = 'Invitar Amigos';
$a->strings['Local Directory'] = 'Directorio Local';
$a->strings['Everyone'] = 'Todos';
$a->strings['Relationships'] = 'Relaciones';
$a->strings['Protocols'] = 'Protocolos';
$a->strings['All Protocols'] = 'Todos los Protocolos';
$a->strings['Saved Folders'] = 'Directorios guardados';
$a->strings['Everything'] = 'Todo';
$a->strings['Categories'] = 'Categorías';
$a->strings['%d contact in common'] = [
	0 => '%d contacto en común',
	1 => '%d contactos en común',
];
$a->strings['Archives'] = 'Archivos';
$a->strings['Persons'] = 'Personas';
$a->strings['Organisations'] = 'Organizaciones';
$a->strings['Account Types'] = 'Tipos de cuenta';
$a->strings['first'] = 'primera';
$a->strings['prev'] = 'previo';
$a->strings['next'] = 'sig.';
$a->strings['last'] = 'última';
$a->strings['Embedding disabled'] = 'Contenido incrustrado desabilitado';
$a->strings['Embedded content'] = 'Contenido integrado';
$a->strings['Loading more entries...'] = 'Cargar mas artículos..';
$a->strings['The end'] = 'Final';
$a->strings['Click to open/close'] = 'Pulsa para abrir/cerrar';
$a->strings['Image/photo'] = 'Imagen/Foto';
$a->strings['<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s'] = '<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s';
$a->strings['$1 wrote:'] = '$1 escribió:';
$a->strings['Encrypted content'] = 'Contenido cifrado';
$a->strings['Invalid source protocol'] = 'Protocolo de fuente inválido';
$a->strings['Invalid link protocol'] = 'Protocolo de enlace inválido';
$a->strings['General Features'] = 'Opciones generales';
$a->strings['Photo Location'] = 'Ubicación de foto';
$a->strings['Photo metadata is normally stripped. This extracts the location (if present) prior to stripping metadata and links it to a map.'] = 'Normalmente los meta datos de las imágenes son eliminados. Esto extraerá la localización si presente antes de eliminar los meta datos y enlaza la misma con el mapa.';
$a->strings['Trending Tags'] = 'Etiquetas tendencia';
$a->strings['Show a community page widget with a list of the most popular tags in recent public posts.'] = 'Mostrar un widget de comunidad con las etiquetas populares en recientes artículos.';
$a->strings['Post Composition Features'] = 'Opciones de edición de publicaciones.';
$a->strings['Auto-mention Forums'] = 'Auto-mencionar foros';
$a->strings['Add/remove mention when a forum page is selected/deselected in ACL window.'] = 'Añadir/eliminar mención cuando un foro es seleccionado/deseleccionado en la ventana ACL.';
$a->strings['Explicit Mentions'] = 'Menciones explicitas';
$a->strings['Add explicit mentions to comment box for manual control over who gets mentioned in replies.'] = 'Añadir menciones explicitas a cuadro de comentarios para control manual sobre quien se menciona en respuestas.';
$a->strings['Post/Comment Tools'] = 'Herramienta de publicaciones/respuestas';
$a->strings['Post Categories'] = 'Categorías de publicaciones';
$a->strings['Add categories to your posts'] = 'Agregue categorías a sus publicaciones. Las mismas serán visualizadas en su pagina de inicio.';
$a->strings['Advanced Profile Settings'] = 'Ajustes avanzados del perfil';
$a->strings['List Forums'] = 'Listar foros';
$a->strings['Show visitors public community forums at the Advanced Profile Page'] = 'Mostrar a los visitantes foros públicos en las que se esta participando en el pagina avanzada de perfiles.';
$a->strings['Tag Cloud'] = 'Nube de etiquetas';
$a->strings['Provide a personal tag cloud on your profile page'] = 'Dar una etiqueta personal en tu página de perfil';
$a->strings['Display Membership Date'] = 'Desplegar fecha de membresía';
$a->strings['Display membership date in profile'] = 'Desplegar fecha de membresía en perfil';
$a->strings['Hometown:'] = 'Ciudad de origen:';
$a->strings['Marital Status:'] = 'Estado civil:';
$a->strings['With:'] = 'Con:';
$a->strings['Since:'] = 'Desde:';
$a->strings['Sexual Preference:'] = 'Preferencia sexual:';
$a->strings['Political Views:'] = 'Ideas políticas:';
$a->strings['Religious Views:'] = 'Creencias religiosas:';
$a->strings['Likes:'] = 'Me gustan:';
$a->strings['Dislikes:'] = 'No me gustan:';
$a->strings['Title/Description:'] = 'Título/Descripción:';
$a->strings['Musical interests'] = 'Gustos musicales';
$a->strings['Books, literature'] = 'Libros, literatura';
$a->strings['Television'] = 'Televisión';
$a->strings['Film/dance/culture/entertainment'] = 'Películas/baile/cultura/entretenimiento';
$a->strings['Hobbies/Interests'] = 'Aficiones/Intereses';
$a->strings['Love/romance'] = 'Amor/Romance';
$a->strings['Work/employment'] = 'Trabajo/ocupación';
$a->strings['School/education'] = 'Escuela/estudios';
$a->strings['Contact information and Social Networks'] = 'Informacioń de contacto y Redes sociales';
$a->strings['This message was sent to you by %s, a member of the Friendica social network.'] = 'El mensaje te lo ha enviado %s, miembro de Friendica Red Social.';
$a->strings['You may visit them online at %s'] = 'Puedes visitarlos en línea en %s';
$a->strings['Please contact the sender by replying to this post if you do not wish to receive these messages.'] = 'Por favor contacta con el remitente respondiendo a este mensaje si no deseas recibir estos mensajes.';
$a->strings['%s posted an update.'] = '%s publicó una actualización.';
$a->strings['This entry was edited'] = 'Esta entrada fue editada';
$a->strings['Private Message'] = 'Mensaje privado';
$a->strings['Edit'] = 'Editar';
$a->strings['pinned item'] = 'Mensaje fijado';
$a->strings['Delete globally'] = 'Borrar Globalmente';
$a->strings['Remove locally'] = 'Borrar localmente';
$a->strings['Select'] = 'Seleccionar';
$a->strings['Block %s'] = 'Bloquear %s';
$a->strings['save to folder'] = 'guardar en directorio';
$a->strings['I will attend'] = 'Asistiré';
$a->strings['I will not attend'] = 'No asistiré';
$a->strings['I might attend'] = 'Podría asistir';
$a->strings['ignore thread'] = 'ignorar hilo';
$a->strings['unignore thread'] = 'dejar de ignorar hilo';
$a->strings['toggle ignore status'] = 'cambiar ignorar estado';
$a->strings['ignored'] = 'ignorado';
$a->strings['pin'] = 'fijar';
$a->strings['unpin'] = 'borrar fijado';
$a->strings['toggle pin status'] = 'cambiar estado fijado';
$a->strings['pinned'] = 'fijado';
$a->strings['add star'] = 'Añadir destacado';
$a->strings['remove star'] = 'Quitar destacado';
$a->strings['toggle star status'] = 'cambiar estado destacado';
$a->strings['starred'] = 'destacado';
$a->strings['add tag'] = 'añadir etiqueta';
$a->strings['I like this (toggle)'] = 'Me gusta esto (cambiar)';
$a->strings['like'] = 'me gusta';
$a->strings['I don\'t like this (toggle)'] = 'No me gusta esto (cambiar)';
$a->strings['dislike'] = 'no me gusta';
$a->strings['Quote share this'] = 'Compartir Comentado esto';
$a->strings['Quote Share'] = 'Compartir comentado';
$a->strings['Reshare this'] = 'Compartir esto';
$a->strings['Reshare'] = 'Compartir';
$a->strings['Cancel your Reshare'] = 'Cancelar Compartir';
$a->strings['Unshare'] = 'Dejar de Compartir';
$a->strings['%s (Received %s)'] = '%s (Recibido %s)';
$a->strings['Comment this item on your system'] = 'Comentarlo en mi estado';
$a->strings['remote comment'] = 'quitar comentario';
$a->strings['Pushed'] = 'Empujado';
$a->strings['Pulled'] = 'Jalado';
$a->strings['Languages'] = 'Lenguajes';
$a->strings['Categories:'] = 'Categorías:';
$a->strings['Filed under:'] = 'Archivado en:';
$a->strings['View %s\'s profile @ %s'] = 'Ver perfil de %s @ %s';
$a->strings['to'] = 'a';
$a->strings['via'] = 'vía';
$a->strings['Wall-to-Wall'] = 'Perfil-a-Perfil';
$a->strings['via Wall-To-Wall:'] = 'via Perfil-a-Perfil:';
$a->strings['%s from %s'] = '%s de %s';
$a->strings['Comment'] = 'Comentar';
$a->strings['Reply to %s'] = 'Responder a %s';
$a->strings['More'] = 'Mas';
$a->strings['Notifier task is pending'] = 'Notificador tarea pendiente';
$a->strings['Delivery to remote servers is pending'] = 'Entrega remota pendiente';
$a->strings['Delivery to remote servers is underway'] = 'Entrega remota en camino';
$a->strings['Delivery to remote servers is mostly done'] = 'Entrega remota casi completada';
$a->strings['Delivery to remote servers is done'] = 'Entrega remota completada';
$a->strings['%d comment'] = [
	0 => '%d comentario',
	1 => '%d comentarios',
];
$a->strings['Show more'] = 'Mostrar mas';
$a->strings['Show fewer'] = 'Mostrar menos';
$a->strings['The form security token was not correct. This probably happened because the form has been opened for too long (>3 hours) before submitting it.'] = 'Token de la ficha de seguridad incorrecto. Seguramente haya ocurrido por haber dejado el formulario abierto demasiado tiempo (>3 horas) antes de enviarlo.';
$a->strings['All contacts'] = 'Todos los Contactos';
$a->strings['Common'] = 'Común';
$a->strings['Attachments:'] = 'Archivos adjuntos:';
$a->strings['%s is now following %s.'] = '%s sigue ahora a %s.';
$a->strings['following'] = 'siguiendo';
$a->strings['%s stopped following %s.'] = '%s dejó de seguir a %s.';
$a->strings['stopped following'] = 'dejó de seguir';
$a->strings['No system theme config value set.'] = 'No hay tema configurado.';
$a->strings['Login failed.'] = 'Accesso fallido.';
$a->strings['Login failed. Please check your credentials.'] = 'Acceso falló. Checa tus credenciales.';
$a->strings['Welcome %s'] = 'Bienvenido %s';
$a->strings['Please upload a profile photo.'] = 'Por favor sube una foto para el perfil.';
$a->strings['default'] = 'predeterminado';
$a->strings['greenzero'] = 'greenzero';
$a->strings['purplezero'] = 'purplezero';
$a->strings['easterbunny'] = 'easterbunny';
$a->strings['darkzero'] = 'darkzero';
$a->strings['comix'] = 'comix';
$a->strings['slackr'] = 'slackr';
$a->strings['Variations'] = 'Variaciones';
$a->strings['Top Banner'] = 'Anuncio superior';
$a->strings['Resize image to the width of the screen and show background color below on long pages.'] = 'Cambiar tamaño de la imagen al ancho de pantalla y mostrar color de fondodebajo en Páginas largas.';
$a->strings['Full screen'] = 'Pantalla completa';
$a->strings['Resize image to fill entire screen, clipping either the right or the bottom.'] = 'Ajustar imagen a pantalla completa, recortando a la derecha o debajo..';
$a->strings['Single row mosaic'] = 'Mosaico en renglón';
$a->strings['Resize image to repeat it on a single row, either vertical or horizontal.'] = 'Ajustar imagen y repetir en una sola fila, ya sea vertical u horizontal.';
$a->strings['Mosaic'] = 'Mosaico';
$a->strings['Repeat image to fill the screen.'] = 'Repetir imagen hasta llenar pantalla.';
$a->strings['Skip to main content'] = 'Saltar a contenido principal';
$a->strings['Back to top'] = 'Ir al Inicio';
$a->strings['Light (Accented)'] = 'Luminoso (Acentuado)';
$a->strings['Dark (Accented)'] = 'Oscuro (Acentuado)';
$a->strings['Black (Accented)'] = 'Negro (Acentuado)';
$a->strings['Note'] = 'Nota';
$a->strings['Check image permissions if all users are allowed to see the image'] = 'Checa si todos los usuarios podrían ver esta imágen';
$a->strings['Custom'] = 'Personalizado';
$a->strings['Legacy'] = 'Legado';
$a->strings['Accented'] = 'Acentuado';
$a->strings['Select color scheme'] = 'Seleccionar esquema de color';
$a->strings['Select scheme accent'] = 'Selecciona esquema de Acentuado';
$a->strings['Blue'] = 'Azul';
$a->strings['Red'] = 'Rojo';
$a->strings['Purple'] = 'Púrpura';
$a->strings['Green'] = 'Verde';
$a->strings['Pink'] = 'Rosa';
$a->strings['Copy or paste schemestring'] = 'Copiar o pegar esquema';
$a->strings['You can copy this string to share your theme with others. Pasting here applies the schemestring'] = 'Puede copiar esta cadena para compartir su tema con otros. Pegando aquíAplica el Esquema';
$a->strings['Navigation bar background color'] = 'Color de fondo de barra de navegación';
$a->strings['Navigation bar icon color '] = 'Color de icono de barra de navegación';
$a->strings['Link color'] = 'Color de enlace';
$a->strings['Set the background color'] = 'Selecciona color de fondo';
$a->strings['Content background opacity'] = 'Opacidad del Fondo del Contenido';
$a->strings['Set the background image'] = 'Selecciona imagen de fondo';
$a->strings['Background image style'] = 'Estilo de imagen de fondo';
$a->strings['Login page background image'] = 'Imagen de fondo del Ingreso';
$a->strings['Login page background color'] = 'Color de fondo del Ingreso';
$a->strings['Leave background image and color empty for theme defaults'] = 'Deja imagen de fondo y color vacíos para el estándar';
$a->strings['Guest'] = 'Invitado';
$a->strings['Visitor'] = 'Visitante';
$a->strings['Follow Thread'] = 'Seguir el hilo';
$a->strings['Alignment'] = 'Alineación';
$a->strings['Left'] = 'Izquierda';
$a->strings['Center'] = 'Centrado';
$a->strings['Color scheme'] = 'Esquema de color';
$a->strings['Posts font size'] = 'Tamaño de letra de artículos';
$a->strings['Textareas font size'] = 'Tamaño de letra de áreas de texto';
$a->strings['Comma separated list of helper forums'] = 'Lista separada por comas de foros de ayuda.';
$a->strings['don\'t show'] = 'no mostrar';
$a->strings['show'] = 'mostrar';
$a->strings['Set style'] = 'Definir estilo';
$a->strings['Community Pages'] = 'Páginas de Comunidad';
$a->strings['Community Profiles'] = 'Perfiles de la Comunidad';
$a->strings['Help or @NewHere ?'] = '¿Ayuda o @NewHere?';
$a->strings['Connect Services'] = 'Conectar Servicios';
$a->strings['Find Friends'] = 'Buscar amistades';
$a->strings['Last users'] = 'Últimos usuarios';
$a->strings['Quick Start'] = 'Inicio rápido';
$a->strings['[Friendica:Notify]'] = '[Friendica:Notificar]';
$a->strings['%s New mail received at %s'] = '%s Nuevo correo recibido %s';
$a->strings['%1$s sent you a new private message at %2$s.'] = '%1$s te envió mensaje privado a las %2$s.';
$a->strings['a private message'] = 'un mensaje privado';
$a->strings['%1$s sent you %2$s.'] = '%1$s te envió %2$s.';
$a->strings['Please visit %s to view and/or reply to your private messages.'] = 'Visita %s para ver y/o responder a tus mensajes privados.';
$a->strings['%1$s replied to you on %2$s\'s %3$s %4$s'] = '%1$s te respondió %2$s %3$s %4$s';
$a->strings['%1$s tagged you on %2$s\'s %3$s %4$s'] = '%1$s te etiquetó en %2$s %3$s %4$s';
$a->strings['%1$s commented on %2$s\'s %3$s %4$s'] = '%1$s comentó en %2$s %3$s %4$s';
$a->strings['%1$s replied to you on your %2$s %3$s'] = '%1$s respondió en tu %2$s %3$s';
$a->strings['%1$s tagged you on your %2$s %3$s'] = '%1$s te etiquetó en %2$s %3$s';
$a->strings['%1$s commented on your %2$s %3$s'] = '%1$s comentó en %2$s %3$s';
$a->strings['%1$s replied to you on their %2$s %3$s'] = '%1$s respondió en su %2$s %3$s';
$a->strings['%1$s tagged you on their %2$s %3$s'] = '%1$s te etiquetó en su %2$s %3$s';
$a->strings['%1$s commented on their %2$s %3$s'] = '%1$s comentó en su %2$s %3$s';
$a->strings['%s %s tagged you'] = '%s %s te etiquetó';
$a->strings['%1$s tagged you at %2$s'] = '%1$s te etiquetó en %2$s';
$a->strings['%1$s Comment to conversation #%2$d by %3$s'] = '%1$s Comentó sobre #%2$d by %3$s';
$a->strings['%s commented on an item/conversation you have been following.'] = '%s comentó en una artículo/elemento que sigues.';
$a->strings['Please visit %s to view and/or reply to the conversation.'] = 'Por favor, visita %s para ver y/o responder a la conversación.';
$a->strings['%s %s posted to your profile wall'] = '%s %s publicó en tu perfil';
$a->strings['%1$s posted to your profile wall at %2$s'] = '%1$s publicó en tu perfil a las %2$s';
$a->strings['%1$s posted to [url=%2$s]your wall[/url]'] = '%1$s publicó en [url=%2$s]tu perfil[/url]';
$a->strings['%s %s shared a new post'] = '%s %s compartió nuevo artículo';
$a->strings['%1$s shared a new post at %2$s'] = '%1$s compartió un nuevo artículo a las %2$s';
$a->strings['%1$s [url=%2$s]shared a post[/url].'] = '%1$s [url=%2$s]compartió nuevo artículo[/url].';
$a->strings['%s %s shared a post from %s'] = '%s %s compartió artículo de %s';
$a->strings['%1$s shared a post from %2$s at %3$s'] = '%1$s compartió artículo de %2$s en %3$s';
$a->strings['%1$s [url=%2$s]shared a post[/url] from %3$s.'] = '%1$s [url=%2$s]compartió artículo[/url] de %3$s.';
$a->strings['%1$s %2$s poked you'] = '%1$s %2$s te empujó';
$a->strings['%1$s poked you at %2$s'] = '%1$s te empujó a las %2$s';
$a->strings['%1$s [url=%2$s]poked you[/url].'] = '%1$s [url=%2$s]te empujó[/url].';
$a->strings['%s %s tagged your post'] = '%s %s etiquetó tu artículo';
$a->strings['%1$s tagged your post at %2$s'] = '%1$s etiquetó tu artículo a las %2$s';
$a->strings['%1$s tagged [url=%2$s]your post[/url]'] = '%1$s etiquetó [url=%2$s]tu artículo[/url]';
$a->strings['%s Introduction received'] = '%s presentación recibida';
$a->strings['You\'ve received an introduction from \'%1$s\' at %2$s'] = 'Recibiste una presentación de \'%1$s\' en %2$s';
$a->strings['You\'ve received [url=%1$s]an introduction[/url] from %2$s.'] = 'Recibiste [url=%1$s]una presentación de [/url] de %2$s.';
$a->strings['You may visit their profile at %s'] = 'Puedes visitar su perfil en %s';
$a->strings['Please visit %s to approve or reject the introduction.'] = 'Visita %s para aceptar o rechazar la presentación';
$a->strings['%s A new person is sharing with you'] = '%s  Una nueva persona comparte contigo';
$a->strings['%1$s is sharing with you at %2$s'] = '%1$s comparte contigo en %2$s';
$a->strings['%s You have a new follower'] = '%s Tienes nuevo seguidor';
$a->strings['You have a new follower at %2$s : %1$s'] = 'Tienes nuevo seguidor en %2$s : %1$s';
$a->strings['%s Friend suggestion received'] = '%s Sugerencia de amistad recibida';
$a->strings['You\'ve received a friend suggestion from \'%1$s\' at %2$s'] = 'Recibiste una sugerencia de amistad de \'%1$s\' en %2$s';
$a->strings['You\'ve received [url=%1$s]a friend suggestion[/url] for %2$s from %3$s.'] = 'Recibiste [url=%1$s]una sugerencia de amistad[/url] en %2$s de %3$s.';
$a->strings['Name:'] = 'Nombre: ';
$a->strings['Photo:'] = 'Foto: ';
$a->strings['Please visit %s to approve or reject the suggestion.'] = 'Visita %s para aceptar o rechazar la sugerencia.';
$a->strings['%s Connection accepted'] = '%s Conexión aceptada';
$a->strings['\'%1$s\' has accepted your connection request at %2$s'] = '\'%1$s\' aceptó tu solicitud de conexión en %2$s';
$a->strings['%2$s has accepted your [url=%1$s]connection request[/url].'] = '%2$s aceptó tu [url=%1$s]solicitud de conexión[/url].';
$a->strings['You are now mutual friends and may exchange status updates, photos, and email without restriction.'] = 'Ahora son amigos mutuos y puede intercambiar actualizaciones, fotos e email sin restricción.';
$a->strings['Please visit %s if you wish to make any changes to this relationship.'] = 'Por favor visite %s si desea hacer algún cambio a su relación.';
$a->strings['\'%1$s\' has chosen to accept you a fan, which restricts some forms of communication - such as private messaging and some profile interactions. If this is a celebrity or community page, these settings were applied automatically.'] = '\'%1$s\' te ha aceptado como fan, eso restringe algunas formas de comunicación - como mensajes privados e interacciones de perfil. Si es un famoso o página comunitaria, esos son ajustes automáticos.';
$a->strings['\'%1$s\' may choose to extend this into a two-way or more permissive relationship in the future.'] = '\'%1$s\' puede elegirte para una relación cercana o bidireccional en el futuro.';
$a->strings['Please visit %s  if you wish to make any changes to this relationship.'] = 'Visita %s si deseas hacer algún cambio con este contacto.';
$a->strings['[Friendica System Notify]'] = '[Friendica Sistema de Notificaciones]';
$a->strings['registration request'] = 'petición de registro';
$a->strings['You\'ve received a registration request from \'%1$s\' at %2$s'] = 'Recibiste una solicitud de registro de \'%1$s\' en %2$s';
$a->strings['You\'ve received a [url=%1$s]registration request[/url] from %2$s.'] = 'Recibiste una [url=%1$s]solicitud de registro[/url] de %2$s.';
$a->strings['Full Name:	%s
Site Location:	%s
Login Name:	%s (%s)'] = 'Nombre Completo:	%s
Ubicación:	%s
Nombre de Usuario:	%s (%s)';
$a->strings['Please visit %s to approve or reject the request.'] = 'Visita %s para aprobar o rechazar la solicitud.';
$a->strings['Daily posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Limite diario de %d publicación alcanzado. La publicación fue rechazada.',
	1 => 'Limite diario de %d publicaciones alcanzado. La publicación fue rechazada.',
];
$a->strings['Weekly posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Limite semanal de %d publicación alcanzado. La publicación fue rechazada.',
	1 => 'Limite semanal de %d publicaciones alcanzado. La publicación fue rechazada.',
];
$a->strings['Monthly posting limit of %d post reached. The post was rejected.'] = 'Limite mensual de %d publicaciones alcanzado. La publicación fue rechazada.';
$a->strings['%1$s poked %2$s'] = '%1$s empujó %2$s';
$a->strings['status'] = 'estado';
$a->strings['%1$s tagged %2$s\'s %3$s with %4$s'] = '%1$s etiquetó %3$s %2$s con %4$s';
$a->strings['View in context'] = 'Verlo en contexto';
$a->strings['remove'] = 'eliminar';
$a->strings['Delete Selected Items'] = 'Eliminar los seleccionados';
$a->strings['You had been addressed (%s).'] = 'Has sido mencionado (%s).';
$a->strings['You are following %s.'] = 'Estas siguiendo %s.';
$a->strings['Tagged'] = 'Etiquetado';
$a->strings['%s reshared this.'] = '%s reenvió esto.';
$a->strings['Reshared'] = 'Compartido';
$a->strings['Reshared by %s'] = 'Compartido por %s';
$a->strings['%s is participating in this thread.'] = '%s participa en el hilo.';
$a->strings['Stored'] = 'Almacenado';
$a->strings['Global'] = 'Global';
$a->strings['Relayed'] = 'Reenviado';
$a->strings['Relayed by %s.'] = 'Reenviado por %s.';
$a->strings['Fetched'] = 'Recuperado';
$a->strings['Fetched because of %s'] = 'Recuperado por %s';
$a->strings['%s likes this.'] = 'A %s le agrada.';
$a->strings['%s doesn\'t like this.'] = 'A %s no le agrada.';
$a->strings['%s attends.'] = '%s asiste.';
$a->strings['%s doesn\'t attend.'] = '%s no asiste.';
$a->strings['%s attends maybe.'] = '%s quizá asistirá';
$a->strings['and'] = 'y';
$a->strings['and %d other people'] = 'y a otras %d personas';
$a->strings['<span  %1$s>%2$d people</span> like this'] = '<span  %1$s>%2$d personas</span> les agrada';
$a->strings['%s like this.'] = 'A %s le agrada.';
$a->strings['<span  %1$s>%2$d people</span> don\'t like this'] = '<span  %1$s>%2$d personas</span> no les agrada';
$a->strings['%s don\'t like this.'] = 'A %s no le agrada.';
$a->strings['<span  %1$s>%2$d people</span> attend'] = '<span  %1$s>%2$d personas</span> asisten';
$a->strings['%s attend.'] = '%s asiste.';
$a->strings['<span  %1$s>%2$d people</span> don\'t attend'] = '<span  %1$s>%2$d personas</span>no asiste.';
$a->strings['%s don\'t attend.'] = '%s no asiste.';
$a->strings['<span  %1$s>%2$d people</span> attend maybe'] = '<span  %1$s>%2$d personas </span> quizá asistan.';
$a->strings['%s attend maybe.'] = '%s quizás asistirá.';
$a->strings['<span  %1$s>%2$d people</span> reshared this'] = '<span  %1$s>%2$d personas </span> reenviaron esto.';
$a->strings['Visible to <strong>everybody</strong>'] = 'Visible para <strong>cualquiera</strong>';
$a->strings['Tag term:'] = 'Etiqueta:';
$a->strings['Where are you right now?'] = '¿Dónde estás ahora?';
$a->strings['Delete item(s)?'] = '¿Borrar artículo(s)?';
$a->strings['New Post'] = 'Nuevo artículo';
$a->strings['Share'] = 'Compartir';
$a->strings['Upload photo'] = 'Subir foto';
$a->strings['upload photo'] = 'subir foto';
$a->strings['Attach file'] = 'Añadir archivo';
$a->strings['attach file'] = 'añadir archivo';
$a->strings['set location'] = 'establecer ubicación';
$a->strings['Clear browser location'] = 'Borrar ubicación del navegador';
$a->strings['clear location'] = 'borrar ubicación';
$a->strings['Permission settings'] = 'Configuración de permisos';
$a->strings['Permissions'] = 'Permisos';
$a->strings['Public post'] = 'Artículo público';
$a->strings['Open Compose page'] = 'Abrir página de publicación';
$a->strings['Invalid request.'] = 'Consulta invalida';
$a->strings['Wall Photos'] = 'Foto del Perfil';
$a->strings['User deleted their account'] = 'Usuario borró su cienta';
$a->strings['On your Friendica node an user deleted their account. Please ensure that their data is removed from the backups.'] = 'En tu nodo de Friendica, un usuario eliminó su cuenta. Asegúrese de quesus datos se eliminan de los respaldos.';
$a->strings['The user id is %d'] = 'El Id de Usuario es %d';
$a->strings['Remove My Account'] = 'Eliminar mi cuenta';
$a->strings['This will completely remove your account. Once this has been done it is not recoverable.'] = 'Esto eliminará por completo tu cuenta. Una vez hecho no puede deshacerse.';
$a->strings['Please enter your password for verification:'] = 'Introduce tu contraseña para verificación:';
$a->strings['Subscribing to OStatus contacts'] = 'Subscribir a Contactos de OStatus';
$a->strings['No contact provided.'] = 'No se suministra contacto.';
$a->strings['Couldn\'t fetch information for contact.'] = 'No se encuentra la información del contacto.';
$a->strings['Couldn\'t fetch friends for contact.'] = 'No se encuentran datos de amigos de contacto.';
$a->strings['Done'] = 'Hecho';
$a->strings['success'] = 'éxito!';
$a->strings['failed'] = 'fallido';
$a->strings['Keep this window open until done.'] = 'Manténer la ventana abierta hasta que finalice.';
$a->strings['Recent Photos'] = 'Fotos Recientes';
$a->strings['Upload New Photos'] = 'Subir Nuevas Fotos';
$a->strings['Contact information unavailable'] = 'Información del contacto no disponible';
$a->strings['Album not found.'] = 'Álbum no encontrado.';
$a->strings['Album successfully deleted'] = 'Album borrado con éxito';
$a->strings['Album was empty.'] = 'El Álbum estaba vacío.';
$a->strings['Failed to delete the photo.'] = 'Error al borrar la Foto';
$a->strings['a photo'] = 'una foto';
$a->strings['%1$s was tagged in %2$s by %3$s'] = '%1$s fue etiquetado en %2$s por %3$s';
$a->strings['Image upload didn\'t complete, please try again'] = 'Subida de imagen no completa, vuelve a intentar';
$a->strings['Image file is missing'] = 'Falta el archivo de imagen';
$a->strings['Server can\'t accept new file upload at this time, please contact your administrator'] = 'El servidor no puede aceptar la carga de archivos nuevos en este momento, comuníquese con el Administrador';
$a->strings['Image file is empty.'] = 'El archivo de imagen está vacío.';
$a->strings['No photos selected'] = 'Ninguna foto seleccionada';
$a->strings['Access to this item is restricted.'] = 'Acceso a este elemento está restringido.';
$a->strings['Upload Photos'] = 'Subir fotos';
$a->strings['New album name: '] = 'Nombre del nuevo álbum: ';
$a->strings['or select existing album:'] = 'o seleccione un Álbum:';
$a->strings['Do not show a status post for this upload'] = 'No actualizar tu estado con este envío';
$a->strings['Do you really want to delete this photo album and all its photos?'] = '¿Estás seguro de quieres borrar este álbum y todas sus fotos?';
$a->strings['Delete Album'] = 'Eliminar álbum';
$a->strings['Edit Album'] = 'Modificar álbum';
$a->strings['Drop Album'] = 'Suelte un Álbum';
$a->strings['Show Newest First'] = 'Mostrar más nuevos primero';
$a->strings['Show Oldest First'] = 'Mostrar más antiguos primero';
$a->strings['View Photo'] = 'Ver foto';
$a->strings['Permission denied. Access to this item may be restricted.'] = 'Permiso denegado. El acceso a este elemento puede estar restringido.';
$a->strings['Photo not available'] = 'Foto no disponible';
$a->strings['Do you really want to delete this photo?'] = '¿Estás seguro de que quieres borrar esta foto?';
$a->strings['Delete Photo'] = 'Eliminar foto';
$a->strings['View photo'] = 'Ver foto';
$a->strings['Edit photo'] = 'Modificar foto';
$a->strings['Delete photo'] = 'Borrar foto';
$a->strings['Use as profile photo'] = 'Usar como foto del perfil';
$a->strings['Private Photo'] = 'Foto privada';
$a->strings['View Full Size'] = 'Ver a tamaño completo';
$a->strings['Tags: '] = 'Etiquetas: ';
$a->strings['[Select tags to remove]'] = '[Seleccionar etiquetas a borrar]';
$a->strings['New album name'] = 'Nuevo nombre del álbum';
$a->strings['Caption'] = 'Título';
$a->strings['Add a Tag'] = 'Añadir una etiqueta';
$a->strings['Example: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping'] = 'Ejemplo: @juan, @Barbara_Ruiz, @julia@example.com, #California, #camping';
$a->strings['Do not rotate'] = 'No rotar';
$a->strings['Rotate CW (right)'] = 'Girar a la derecha';
$a->strings['Rotate CCW (left)'] = 'Girar a la izquierda';
$a->strings['Like'] = 'Me gusta';
$a->strings['Dislike'] = 'No me gusta';
$a->strings['Map'] = 'Mapa';
$a->strings['View Album'] = 'Ver Álbum';
$a->strings['This may occasionally happen if contact was requested by both persons and it has already been approved.'] = 'Esto puede ocurrir a veces si fuera solicitado por ambas personas y ya hubiera sido aprobada.';
$a->strings['Response from remote site was not understood.'] = 'Respuesta del sitio remoto no se entendió.';
$a->strings['Unexpected response from remote site: '] = 'Respuesta inesperada del sitio remoto: ';
$a->strings['Confirmation completed successfully.'] = 'Confirmación completada con éxito.';
$a->strings['Temporary failure. Please wait and try again.'] = 'Falla temporal. Por favor espere y vuelva a intentar.';
$a->strings['Introduction failed or was revoked.'] = 'La presentación fallida o ha sido anulada.';
$a->strings['Remote site reported: '] = 'Sitio remoto reportó: ';
$a->strings['No user record found for \'%s\' '] = 'No hay registros de \'%s\' ';
$a->strings['Our site encryption key is apparently messed up.'] = 'Nuestro clave de cifrado del sitio aparentemente falló.';
$a->strings['Empty site URL was provided or URL could not be decrypted by us.'] = 'Se proporcionó una URL vacía o no podemos descrifrarla.';
$a->strings['Contact record was not found for you on our site.'] = 'Tu contacto no se ha encontrado en nuestra base de datos.';
$a->strings['Site public key not available in contact record for URL %s.'] = 'Clave pública del sitio no disponible en datos del contacto %s.';
$a->strings['The ID provided by your system is a duplicate on our system. It should work if you try again.'] = 'El ID de tu sistema es un duplicado en nuestro sistema. Debería funcionar si intentas de nuevo.';
$a->strings['Unable to set your contact credentials on our system.'] = 'Imposible establecer tu contacto en nuestro sistema.';
$a->strings['Unable to update your contact profile details on our system'] = 'Imposible actualizar tus detalles del perfil en nuestro sistema';
$a->strings['Missing some important data!'] = '¡Información importante faltante!';
$a->strings['Failed to connect with email account using the settings provided.'] = 'Error al conectar con el Correo mediante esa configuración.';
$a->strings['Contact CSV file upload error'] = 'Error al subir archivo CSV';
$a->strings['Importing Contacts done'] = 'Importación del contacto completada';
$a->strings['Relocate message has been send to your contacts'] = 'Mensaje de reubicación enviado a sus contactos.';
$a->strings['Passwords do not match.'] = 'No coinciden los passwords';
$a->strings['Password unchanged.'] = 'Contraseña no modificada';
$a->strings['Please use a shorter name.'] = 'Utiliza un nombre mas corto';
$a->strings['Name too short.'] = 'Nombre muy corto';
$a->strings['Wrong Password.'] = 'Password erróneo';
$a->strings['Invalid email.'] = 'Corréo no válido.';
$a->strings['Cannot change to that email.'] = 'Imposible cambiar a ese correo.';
$a->strings['Private forum has no privacy permissions. Using default privacy group.'] = 'Foro privado sin permisos de privacidad. Grupo de privacidad por defecto.';
$a->strings['Private forum has no privacy permissions and no default privacy group.'] = 'Foro privado sin permisos ni grupo de privacidad por defecto.';
$a->strings['Settings were not updated.'] = 'Configuración no actualizada';
$a->strings['Add application'] = 'Agregar aplicación';
$a->strings['Consumer Key'] = 'Clave de Consumidor';
$a->strings['Consumer Secret'] = 'Secreto de Consumidor';
$a->strings['Redirect'] = 'Redirigir';
$a->strings['Icon url'] = 'Dirección del ícono';
$a->strings['You can\'t edit this application.'] = 'No puedes editar esta aplicación.';
$a->strings['Connected Apps'] = 'Aplicaciones conectadas';
$a->strings['Client key starts with'] = 'Clave de cliente comienza con';
$a->strings['No name'] = 'Sin nombre';
$a->strings['Remove authorization'] = 'Quitar autorización';
$a->strings['No Addon settings configured'] = 'Ningún Añadido configurado';
$a->strings['Addon Settings'] = 'Configuración de Añadidos';
$a->strings['Additional Features'] = 'Opciones Adicionales';
$a->strings['Diaspora (Socialhome, Hubzilla)'] = 'Diaspora (Socialhome, Hubzilla)';
$a->strings['enabled'] = 'habilitado';
$a->strings['disabled'] = 'deshabilitado';
$a->strings['Built-in support for %s connectivity is %s'] = 'Soporte integrado de conexión con %s %s';
$a->strings['OStatus (GNU Social)'] = 'OStatus (GNU Social)';
$a->strings['Email access is disabled on this site.'] = 'Acceso por correo deshabilitado en este sitio.';
$a->strings['None'] = 'Ninguno';
$a->strings['General Social Media Settings'] = 'Configuración General de Medios Sociales';
$a->strings['Accept only top level posts by contacts you follow'] = 'Sólo artículos principales de contactos que sigo';
$a->strings['The system does an auto completion of threads when a comment arrives. This has got the side effect that you can receive posts that had been started by a non-follower but had been commented by someone you follow. This setting deactivates this behaviour. When activated, you strictly only will receive posts from people you really do follow.'] = 'El sistema auto finaliza los hilos cuando llega un comentario. Esto Tiene el efecto secundario que puedes recibir artículos iniciados por un no seguidor, pero han sido comentados por alguien que sigues. Esta configuración lo desactiva. Cuando lo actives, solo recibirásartículos de personas que realmente sigues.';
$a->strings['Disable Content Warning'] = 'Deshabilitar advertencia de contenido';
$a->strings['Users on networks like Mastodon or Pleroma are able to set a content warning field which collapse their post by default. This disables the automatic collapsing and sets the content warning as the post title. Doesn\'t affect any other content filtering you eventually set up.'] = 'Usuarios de Mastodon o Pleroma pueden establecer una advertencias de contenido para colapsar la publicación por default. Esto desactiva el colapso y establece la advertencia de contenido como  título posterior. No afecta otro contenido de filtros que se haya configurado.';
$a->strings['Disable intelligent shortening'] = 'Deshabilitar recorte inteligente';
$a->strings['Normally the system tries to find the best link to add to shortened posts. If this option is enabled then every shortened post will always point to the original friendica post.'] = 'El sistema intenta encontrar el mejor enlace para agregar a artículos recortados Si habilita la opción, cada envío recortado apuntara siempre al artículo original en Friendica.';
$a->strings['Attach the link title'] = 'Agregar título del link';
$a->strings['When activated, the title of the attached link will be added as a title on posts to Diaspora. This is mostly helpful with "remote-self" contacts that share feed content.'] = 'Si se activa, el título del link se añade como titulo en artículos de Diaspora. Esto es bueno con contactos "remote-self" que comparten contenido.';
$a->strings['Automatically follow any GNU Social (OStatus) followers/mentioners'] = 'Automáticamente seguir seguidores/menciones de GNUsocial (OStatus)';
$a->strings['If you receive a message from an unknown OStatus user, this option decides what to do. If it is checked, a new contact will be created for every unknown user.'] = 'Si recibes un mensaje de un perfil desconocido de OStatus, esta opción decide que hacer. Si es habilitado, un nuevo contacto sera creado para cada usuario.';
$a->strings['Default group for OStatus contacts'] = 'Grupo por defecto para contactos OStatus';
$a->strings['Your legacy GNU Social account'] = 'Tu cuenta GNU social origen';
$a->strings['If you enter your old GNU Social/Statusnet account name here (in the format user@domain.tld), your contacts will be added automatically. The field will be emptied when done.'] = 'Si usas tu nombre de perfil GNUsocial/Statusnet aqui (en el formato de usuario@dominio.tld), sus contactos serán añadidos automáticamente. El campo se vaciará cuando termine. ';
$a->strings['Repair OStatus subscriptions'] = 'Reparar subscripciones OStatus';
$a->strings['Email/Mailbox Setup'] = 'Configuración de Correo/Buzón';
$a->strings['If you wish to communicate with email contacts using this service (optional), please specify how to connect to your mailbox.'] = 'Si quieres comunicarte con contactos de correo con este servicio (opcional), especifica cómo conectar con tu buzón.';
$a->strings['Last successful email check:'] = 'Última comprobación de correo éxitosa:';
$a->strings['IMAP server name:'] = 'Nombre del servidor IMAP:';
$a->strings['IMAP port:'] = 'Puerto IMAP:';
$a->strings['Security:'] = 'Seguridad:';
$a->strings['Email login name:'] = 'Usuario de Correo:';
$a->strings['Email password:'] = 'Contraseña de Correo:';
$a->strings['Reply-to address:'] = 'Dirección de respuesta:';
$a->strings['Send public posts to all email contacts:'] = 'Enviar notificaciones públicas a todos los correos:';
$a->strings['Action after import:'] = 'Acción al importar:';
$a->strings['Move to folder'] = 'Mover a un folder';
$a->strings['Move to folder:'] = 'Mover al folder:';
$a->strings['Unable to find your profile. Please contact your admin.'] = 'No se encontró tu perfil. Contacta al Administrador.';
$a->strings['Personal Page Subtypes'] = 'Subtipos de Página Personal';
$a->strings['Community Forum Subtypes'] = 'Subtipos de Foro de Comunidad';
$a->strings['Account for a personal profile.'] = 'Cuenta para un perfil personal.';
$a->strings['Account for an organisation that automatically approves contact requests as "Followers".'] = 'Cuenta para una organización que aprueba automáticamente solicitudes de "Seguidores".';
$a->strings['Account for a news reflector that automatically approves contact requests as "Followers".'] = 'Cuenta Reflector de noticias que aprueba automáticamente solicitudes de contacto como "Seguidores".';
$a->strings['Account for community discussions.'] = 'Cuenta para discusiones de la comunidad.';
$a->strings['Account for a regular personal profile that requires manual approval of "Friends" and "Followers".'] = 'Cuenta para perfil personal regular que requiere aprobación manual de "Amigos" and "Seguidores".';
$a->strings['Account for a public profile that automatically approves contact requests as "Followers".'] = 'Cuenta para un perfil público que aprueba automáticamente las solicitudes de contacto como «Seguidores».';
$a->strings['Automatically approves all contact requests.'] = 'Aprueba automáticamente las solicitudes de contacto.';
$a->strings['Account for a popular profile that automatically approves contact requests as "Friends".'] = 'Cuenta para un perfil popular que aprueba automáticamente solicitudes de contacto como "Amigos".';
$a->strings['Private Forum [Experimental]'] = 'Foro privado [Experimental]';
$a->strings['Requires manual approval of contact requests.'] = 'Requiere aprobación manual de solicitudes de contacto.';
$a->strings['OpenID:'] = 'OpenID:';
$a->strings['(Optional) Allow this OpenID to login to this account.'] = '(Opcional) Permitir a este OpenID acceder a esta cuenta.';
$a->strings['Publish your profile in your local site directory?'] = 'Publicar tu perfil en tu Directorio Local?';
$a->strings['Your profile will be published in this node\'s <a href="%s">local directory</a>. Your profile details may be publicly visible depending on the system settings.'] = 'Tu perfil se publicará en el directorio de nodo  <a href="%s">local </a>. Los detalles de tu perfil pueden ser públicos según los ajustes del sistema.';
$a->strings['Your profile will also be published in the global friendica directories (e.g. <a href="%s">%s</a>).'] = 'Tu perfil también será publicado en Directorios Globales Friendica (ej. <a href="%s">%s</a>).';
$a->strings['Your Identity Address is <strong>\'%s\'</strong> or \'%s\'.'] = 'Tu dirección de Identidad es <strong>\'%s\'</strong> o \'%s\'.';
$a->strings['Account Settings'] = 'Configuración de Cuenta';
$a->strings['Password Settings'] = 'Configuración de Contraseña';
$a->strings['Allowed characters are a-z, A-Z, 0-9 and special characters except white spaces, accentuated letters and colon (:).'] = 'Caracteres permitidos de a-z, A-Z, 0-9 y signos especiales excepto espacios, letras con acento y Dos Puntos (:).';
$a->strings['Leave password fields blank unless changing'] = 'Deja la contraseña en blanco si no quieres cambiarla';
$a->strings['Current Password:'] = 'Contraseña actual:';
$a->strings['Your current password to confirm the changes'] = 'Tu contraseña actual para confirmar los cambios.';
$a->strings['Password:'] = 'Contraseña:';
$a->strings['Your current password to confirm the changes of the email address'] = 'Tu contraseña actual para confirmar los cambios de cuenta de corréo.';
$a->strings['Delete OpenID URL'] = 'Borrar URL de OpenID';
$a->strings['Basic Settings'] = 'Configuración Básica';
$a->strings['Email Address:'] = 'Dirección de Correo:';
$a->strings['Your Timezone:'] = 'Zona horaria:';
$a->strings['Your Language:'] = 'Tu idioma:';
$a->strings['Set the language we use to show you friendica interface and to send you emails'] = 'Selecciona el idioma que usará la interfaz Friendica y para enviarte correos.';
$a->strings['Default Post Location:'] = 'Ubicación predeterminada:';
$a->strings['Use Browser Location:'] = 'Usar localización del navegador:';
$a->strings['Security and Privacy Settings'] = 'Configuración de Seguridad y Privacidad';
$a->strings['Maximum Friend Requests/Day:'] = 'Número máximo de solicitudes de amistad/día:';
$a->strings['(to prevent spam abuse)'] = '(para prevenir abuso de basura)';
$a->strings['Allow your profile to be searchable globally?'] = '¿Permitir tu perfil ser encontrado globalmente?';
$a->strings['Activate this setting if you want others to easily find and follow you. Your profile will be searchable on remote systems. This setting also determines whether Friendica will inform search engines that your profile should be indexed or not.'] = 'Activa esta configuración si quieres que otros te encuentren y sigan fácilmente. Tu perfil se podrá buscar en sistemas remotos. Esta configuración también determina si Friendica informará a los motores de búsqueda que tu perfil debe ser indexado o no.';
$a->strings['Hide your contact/friend list from viewers of your profile?'] = 'Esconde tu lista de contactos/amistades de otros a tu perfil?';
$a->strings['A list of your contacts is displayed on your profile page. Activate this option to disable the display of your contact list.'] = 'Se muestra una lista de tus contactos en tu Perfil. Activar esta opción para deshabilitar la visualización de tu lista de contactos.';
$a->strings['Hide your profile details from anonymous viewers?'] = '¿Esconder tus detalles de Perfil de usuarios anónimos?';
$a->strings['Anonymous visitors will only see your profile picture, your display name and the nickname you are using on your profile page. Your public posts and replies will still be accessible by other means.'] = 'Visitantes anónimos solo verán tu foto de perfil, tu nombre para mostrar y el apodo que usas en tu página de perfil. Tus publicaciones públicas y Las respuestas seguirán accesibles por otros medios.';
$a->strings['Make public posts unlisted'] = 'No listar mis artículos públicos';
$a->strings['Your public posts will not appear on the community pages or in search results, nor be sent to relay servers. However they can still appear on public feeds on remote servers.'] = 'Tus publicaciones públicas no aparecerán en páginas de la comunidad ni en búsquedas, ni se enviaran a servidores de retransmisión. Sin embargo, aparecerán en artículos públicos de servidores remotos.';
$a->strings['Make all posted pictures accessible'] = 'Hacer accesibles todas las fotos';
$a->strings['This option makes every posted picture accessible via the direct link. This is a workaround for the problem that most other networks can\'t handle permissions on pictures. Non public pictures still won\'t be visible for the public on your photo albums though.'] = 'Esta opción hace accesibles todas las imágenes a través del enlace directo. Este es una solución al problema que la mayoría de las redes no pueden manejar permisos en las imágenes. Las imágenes no públicas aún no serán visibles para elpúblico en tus álbumes de fotos.';
$a->strings['Allow friends to post to your profile page?'] = '¿Permitir que tus amigos publiquen en tu página de perfil?';
$a->strings['Your contacts may write posts on your profile wall. These posts will be distributed to your contacts'] = 'Tus contactos pueden escribir artículos en tu perfil. Estas publicaciones se distribuirán a tus contactos';
$a->strings['Allow friends to tag your posts?'] = '¿Permitir a los amigos etiquetar tus publicaciones?';
$a->strings['Your contacts can add additional tags to your posts.'] = 'Tus contactos pueden añadir etiquetas adicionales a tus artículos.';
$a->strings['Permit unknown people to send you private mail?'] = '¿Permitir que desconocidos te manden correos privados?';
$a->strings['Friendica network users may send you private messages even if they are not in your contact list.'] = 'Usuarios de Friendica pueden enviarte mensajes privados incluso si no están en tu lista de contactos.';
$a->strings['Maximum private messages per day from unknown people:'] = 'Número máximo de mensajes diarios para desconocidos:';
$a->strings['Default Post Permissions'] = 'Permisos por defecto para publicaciones';
$a->strings['Expiration settings'] = 'Configuración de Expiración';
$a->strings['Automatically expire posts after this many days:'] = 'Publicaciones caducarán solas después de estos días:';
$a->strings['If empty, posts will not expire. Expired posts will be deleted'] = 'Si dejas vacío no caducarán. Publicaciones caducadas serán borradas';
$a->strings['Expire posts'] = 'Caducar artículos';
$a->strings['When activated, posts and comments will be expired.'] = 'Cuando se activa, artículos y comentarios caducarán.';
$a->strings['Expire personal notes'] = 'Caducar Anotaciones';
$a->strings['When activated, the personal notes on your profile page will be expired.'] = 'Si se activa, las Anotaciones en tu Perfil caducarán.';
$a->strings['Expire starred posts'] = 'Caducar artículos Destacados';
$a->strings['Starring posts keeps them from being expired. That behaviour is overwritten by this setting.'] = 'Destacar las publicaciones evita que caduquen. Ese comportamiento cambiacon este ajuste.';
$a->strings['Expire photos'] = 'Caducar fotos';
$a->strings['When activated, photos will be expired.'] = 'Cuando se activa, las fotos expirarán.';
$a->strings['Only expire posts by others'] = 'Solo caducar artículos de otros';
$a->strings['When activated, your own posts never expire. Then the settings above are only valid for posts you received.'] = 'Cuando se activa, publicaciones propias nunca caducan. Esta configuración solo es válida para las artículos recibidas.';
$a->strings['Notification Settings'] = 'Configuración de Notificaciones';
$a->strings['Send a notification email when:'] = 'Enviar notificación por correo cuando:';
$a->strings['You receive an introduction'] = 'Recibas una presentación';
$a->strings['Your introductions are confirmed'] = 'Tu presentación sea confirmada';
$a->strings['Someone writes on your profile wall'] = 'Alguien escriba en tu perfil';
$a->strings['Someone writes a followup comment'] = 'Alguien escriba en un comentario que sigo';
$a->strings['You receive a private message'] = 'Recibas un mensaje privado';
$a->strings['You receive a friend suggestion'] = 'Recibas una sugerencia de amistad';
$a->strings['You are tagged in a post'] = 'Seas etiquetado en un artículo';
$a->strings['You are poked/prodded/etc. in a post'] = 'Te han tocado/empujado/etc. en una publicación';
$a->strings['Activate desktop notifications'] = 'Activar notificaciones';
$a->strings['Show desktop popup on new notifications'] = 'Mostrar notificaciones emergentes en caso de nuevos eventos.';
$a->strings['Text-only notification emails'] = 'Notificaciones de correo solo en texto';
$a->strings['Send text only notification emails, without the html part'] = 'Enviar correo de notificación en formato Solo Texto sin html';
$a->strings['Show detailled notifications'] = 'Mostrar notificaciones detalladas';
$a->strings['Per default, notifications are condensed to a single notification per item. When enabled every notification is displayed.'] = 'Por default, notificaciones se condensan en una sola notificación por artículo. Cuando se habilita se muestran cada notificación.';
$a->strings['Show notifications of ignored contacts'] = 'Mostrar notificación de Contactos Ignorados';
$a->strings['You don\'t see posts from ignored contacts. But you still see their comments. This setting controls if you want to still receive regular notifications that are caused by ignored contacts or not.'] = 'No ves publicaciones de contactos ignorados. Pero todavía ves sus comentarios. Esta configuración controla si aún desea recibir notificaciones regulares causadas por contactos ignorados o no.';
$a->strings['Advanced Account/Page Type Settings'] = 'Configuración avanzada de tipo de Cuenta/Página';
$a->strings['Change the behaviour of this account for special situations'] = 'Cambiar el comportamiento de esta cuenta para situaciones especiales';
$a->strings['Import Contacts'] = 'Importar contactos';
$a->strings['Upload a CSV file that contains the handle of your followed accounts in the first column you exported from the old account.'] = 'Subir archivo CSV que contenga identificador de tus cuentas seguidas en elprimera columna que exportó desde la cuenta anterior.';
$a->strings['Upload File'] = 'Subir archivo';
$a->strings['Relocate'] = 'Relocalizar';
$a->strings['If you have moved this profile from another server, and some of your contacts don\'t receive your updates, try pushing this button.'] = 'Si migró este perfil desde otro servidor y algunos contactos no reciben sus publicaciones intente oprimiendo esta opción.';
$a->strings['Resend relocate message to contacts'] = 'Reenviar mensaje de relocalización a contactos';
$a->strings['Item not found'] = 'Elemento no encontrado';
$a->strings['Edit post'] = 'Editar publicación';
$a->strings['Insert web link'] = 'Insertar enlace';
$a->strings['web link'] = 'enlace web';
$a->strings['Insert video link'] = 'Insertar enlace del vídeo';
$a->strings['video link'] = 'enlace de video';
$a->strings['Insert audio link'] = 'Insertar vínculo del audio';
$a->strings['audio link'] = 'enlace de audio';
$a->strings['No suggestions available. If this is a new site, please try again in 24 hours.'] = 'No hay sugerencias disponibles. Si el sitio web es nuevo inténtalo de nuevo en 24 horas.';
$a->strings['Files'] = 'Archivos';
$a->strings['{0} wants to be your friend'] = '{0} Quiere ser tu amigo';
$a->strings['{0} requested registration'] = '{0} solicita registro';
$a->strings['{0} and %d others requested registration'] = '{0} y %d otros solicitaron registro';
$a->strings['Authorize application connection'] = 'Autorizar la conexión de la aplicación';
$a->strings['Return to your app and insert this Securty Code:'] = 'Regresa a tu aplicación e introduce este código de seguridad:';
$a->strings['Do you want to authorize this application to access your posts and contacts, and/or create new posts for you?'] = '¿Quieres autorizar a esta aplicación el acceso a tus mensajes y contactos, y/o crear nuevas publicaciones para ti?';
$a->strings['The requested item doesn\'t exist or has been deleted.'] = 'El artículo solicitado no existe o fue borrado.';
$a->strings['The feed for this item is unavailable.'] = 'El hilo de este artículo no se encontró';
$a->strings['Sorry, maybe your upload is bigger than the PHP configuration allows'] = 'Disculpa, posiblemente archivo mas grande que lo permitido por PHP.';
$a->strings['Or - did you try to upload an empty file?'] = 'O - intentó subir un archivo vacío?';
$a->strings['File exceeds size limit of %s'] = 'El archivo excede Tamaño de %s';
$a->strings['File upload failed.'] = 'Ha fallado la subida del archivo.';
$a->strings['No keywords to match. Please add keywords to your profile.'] = 'No hay etiquetas, añade etiquetas a tu perfil.';
$a->strings['Profile Match'] = 'Coincidencia de Perfil';
$a->strings['You already added this contact.'] = 'Ya has añadido este contacto.';
$a->strings['The network type couldn\'t be detected. Contact can\'t be added.'] = 'No se pudo detectar el tipo de red. Contacto no puede ser agregado.';
$a->strings['Diaspora support isn\'t enabled. Contact can\'t be added.'] = 'El soporte de Diaspora* no esta habilitado, el contacto no puede ser agregado.';
$a->strings['OStatus support is disabled. Contact can\'t be added.'] = 'El soporte de OStatus no esta habilitado, el contacto no puede ser agregado.';
$a->strings['Your Identity Address:'] = 'Dirección de tu Identidad:';
$a->strings['%s knows you'] = '%s te conoce';
$a->strings['Add a personal note:'] = 'Añade una nota personal:';
$a->strings['The contact could not be added.'] = 'El contacto no puede añadirse.';
$a->strings['Unable to locate original post.'] = 'No se encontró la publicación original.';
$a->strings['Empty post discarded.'] = 'Publicación vacía descartada.';
$a->strings['Post updated.'] = 'Artículo actualizado.';
$a->strings['Item wasn\'t stored.'] = 'Artículo no almacenado.';
$a->strings['Item couldn\'t be fetched.'] = 'Artículo no pudo recuperarse.';
$a->strings['This introduction has already been accepted.'] = 'Esta presentación ya ha sido aceptada.';
$a->strings['Profile location is not valid or does not contain profile information.'] = 'La dirección del perfil no es válida o no contiene información del perfil.';
$a->strings['Warning: profile location has no identifiable owner name.'] = 'Aviso: La dirección del perfil no tiene un nombre de propietario identificable.';
$a->strings['Warning: profile location has no profile photo.'] = 'Aviso: la dirección del perfil no tiene foto de perfil.';
$a->strings['%d required parameter was not found at the given location'] = [
	0 => 'no se encontró %d parámetro requerido en el lugar determinado',
	1 => 'no se encontraron %d parámetros requeridos en el lugar determinado',
];
$a->strings['Introduction complete.'] = 'Presentación completa.';
$a->strings['Unrecoverable protocol error.'] = 'Error de protocolo irrecuperable.';
$a->strings['%s has received too many connection requests today.'] = '%s ha recibido demasiadas solicitudes de conexión hoy.';
$a->strings['Spam protection measures have been invoked.'] = 'Han sido activadas las medidas de protección de Spam.';
$a->strings['Friends are advised to please try again in 24 hours.'] = 'Se avisará a tus amigos para que intenten de nuevo en 24 horas.';
$a->strings['You have already introduced yourself here.'] = 'Ya te has presentado aquí.';
$a->strings['Apparently you are already friends with %s.'] = 'Al parecer, ya eres amigo de %s.';
$a->strings['Invalid profile URL.'] = 'Dirección de perfil no válida.';
$a->strings['Your introduction has been sent.'] = 'Tu presentación ha sido enviada.';
$a->strings['Please login to confirm introduction.'] = 'Inicia sesión para confirmar la presentación.';
$a->strings['Incorrect identity currently logged in. Please login to <strong>this</strong> profile.'] = 'Sesión iniciada con la identificación incorrecta. Entra en <strong>este</strong> perfil.';
$a->strings['Confirm'] = 'Confirmar';
$a->strings['Hide this contact'] = 'Ocultar este contacto';
$a->strings['Welcome home %s.'] = 'Bienvenido de nuevo %s';
$a->strings['Please confirm your introduction/connection request to %s.'] = 'Por favor, confirma tu solicitud de presentación/conexión con %s.';
$a->strings['Enter your Webfinger address (user@domain.tld) or profile URL here. If this isn\'t supported by your system (for example it doesn\'t work with Diaspora), you have to subscribe to <strong>%s</strong> directly on your system'] = 'Ingresa tu dirección Webfinger (usuario@dominio.tld) o URL de Perfil aquí. Si noes compatible con su sistema (por ejemplo, no funciona con Diaspora),tienes que suscribirte a <strong>%s</strong> directamente en tu sistema';
$a->strings['View'] = 'Vista';
$a->strings['Previous'] = 'Previo';
$a->strings['list'] = 'lista';
$a->strings['This calendar format is not supported'] = 'Este formato de calendario no se soporta';
$a->strings['No exportable data found'] = 'No hay información exportable';
$a->strings['calendar'] = 'calendario';
$a->strings['User imports on closed servers can only be done by an administrator.'] = 'Importar usuarios en sitios cerrados solo lo hace el Administrador.';
$a->strings['Move account'] = 'Mover cuenta';
$a->strings['You can import an account from another Friendica server.'] = 'Puedes importar una cuenta desde otro servidor de Friendica.';
$a->strings['You need to export your account from the old server and upload it here. We will recreate your old account here with all your contacts. We will try also to inform your friends that you moved here.'] = 'Necesitas exportar tu cuenta del antiguo servidor y subirla aquí. Volveremos a crear tu antigua cuenta con todos tus contactos aquí. También intentaremos de informar a tus amigos de que te has mudado.';
$a->strings['This feature is experimental. We can\'t import contacts from the OStatus network (GNU Social/Statusnet) or from Diaspora'] = 'Característica experimental. No podemos importar contactos desde la red OStatus (statusnet/identi.ca) o desde Diaspora*';
$a->strings['Account file'] = 'Archivo de la cuenta';
$a->strings['To export your account, go to "Settings->Export your personal data" and select "Export account"'] = 'Para exportar el perfil vaya a "Configuración -> Exportar sus datos personales" y seleccione "Exportar cuenta"';
$a->strings['No valid account found.'] = 'No se encontró cuenta válida';
$a->strings['Password reset request issued. Check your email.'] = 'Contraseña reestablecida enviada. Revisa tu correo.';
$a->strings['
		Dear %1$s,
			A request was recently received at "%2$s" to reset your account
		password. In order to confirm this request, please select the verification link
		below or paste it into your web browser address bar.

		If you did NOT request this change, please DO NOT follow the link
		provided and ignore and/or delete this email, the request will expire shortly.

		Your password will not be changed unless we can verify that you
		issued this request.'] = '
		Estimado %1$s,
			Se recibió una solicitud "%2$s" para resetear el password
		de tu cuenta. Para confirmar la solicitud, selecciona el link
		debajo o cópialo en la dirección de tu navegador.

		Si no lo solicitaste, NO ABRAS el VÍNCULO
		e ignoralo o borra este correo, la solicitud expirará pronto.

		y tu contraseña no cambiará a menos que verifiquemos que tu
		hiciste la petición.';
$a->strings['
		Follow this link soon to verify your identity:

		%1$s

		You will then receive a follow-up message containing the new password.
		You may change that password from your account settings page after logging in.

		The login details are as follows:

		Site Location:	%2$s
		Login Name:	%3$s'] = '
		Sigue este vínculo para verificar tu identidad:

		%1$s

		Recibirás un mensaje de seguimiento con la nueva contraseña.
		Podrás cambiar la contraseña desde la configuración de tu cuenta al ingresar.

		Los detalles de ingreso son:

		Sitio:	%2$s
		Nombre de Usuario:	%3$s';
$a->strings['Password reset requested at %s'] = 'Contraseña restablecida enviada a %s';
$a->strings['Request could not be verified. (You may have previously submitted it.) Password reset failed.'] = 'La solicitud no puede ser verificada (deberías haberla proporcionado antes). Falló el restablecimiento de la contraseña.';
$a->strings['Request has expired, please make a new one.'] = 'La solicitud expiró, solicite una nueva.';
$a->strings['Forgot your Password?'] = '¿Olvidaste tu contraseña?';
$a->strings['Enter your email address and submit to have your password reset. Then check your email for further instructions.'] = 'Introduce tu correo para restablecer tu contraseña. Luego comprueba tu correo para las instrucciones adicionales.';
$a->strings['Reset'] = 'Restablecer';
$a->strings['Your password has been reset as requested.'] = 'Tu contraseña ha sido restablecida como solicitaste.';
$a->strings['Your new password is'] = 'Tu nueva contraseña es';
$a->strings['Save or copy your new password - and then'] = 'Guarda o copia tu nueva contraseña y luego';
$a->strings['click here to login'] = 'pulsa aquí para acceder';
$a->strings['Your password may be changed from the <em>Settings</em> page after successful login.'] = 'Puedes cambiar tu contraseña desde la página de <em>Configuración</em> después de acceder con éxito.';
$a->strings['Your password has been reset.'] = 'Tu contraseña fue restablecida.';
$a->strings['
			Dear %1$s,
				Your password has been changed as requested. Please retain this
			information for your records (or change your password immediately to
			something that you will remember).
		'] = '
			Estimado %1$s,
				Tu contraseña ha sido cambiada como solicitaste. Manten esta
			información en tu registro (o cambia tu contraseña inmediatamente a
			una que puedas recordar).
		';
$a->strings['
			Your login details are as follows:

			Site Location:	%1$s
			Login Name:	%2$s
			Password:	%3$s

			You may change that password from your account settings page after logging in.
		'] = '
			Tus datos de acceso son los siguientes:

			Sitio de Acceso:	%1$s
			Nombre de Usuario:	%2$s
			Contraseña:	%3$s

			Puedes cambiar la contraseña desde configuración de la cuenta al ingresar.
		';
$a->strings['Your password has been changed at %s'] = 'Tu contraseña se ha cambiado por %s';
$a->strings['Event can not end before it has started.'] = 'Un evento no puede terminar antes de su inicio.';
$a->strings['Event title and start time are required.'] = 'Título del evento y hora de inicio requeridas.';
$a->strings['Create New Event'] = 'Crea un evento nuevo';
$a->strings['Event details'] = 'Detalles del evento';
$a->strings['Starting date and Title are required.'] = 'Se requiere fecha de comienzo y titulo';
$a->strings['Event Starts:'] = 'Inicio del evento:';
$a->strings['Finish date/time is not known or not relevant'] = 'La fecha/hora de finalización no es conocida o es irrelevante.';
$a->strings['Event Finishes:'] = 'Finalización del evento:';
$a->strings['Adjust for viewer timezone'] = 'Ajuste de zona horaria';
$a->strings['Title:'] = 'Título:';
$a->strings['Share this event'] = 'Comparte este evento';
$a->strings['Failed to remove event'] = 'Error al eliminar el evento';
$a->strings['Number of daily wall messages for %s exceeded. Message failed.'] = 'Excedido el número máximo de mensajes para %s. Mensaje fallido.';
$a->strings['No recipient selected.'] = 'Ningún destinatario seleccionado';
$a->strings['Unable to check your home location.'] = 'Imposible comprobar tu servidor de inicio.';
$a->strings['Message could not be sent.'] = 'El mensaje no ha podido ser enviado.';
$a->strings['Message collection failure.'] = 'Fallo en recolección de mensajes.';
$a->strings['No recipient.'] = 'Sin receptor.';
$a->strings['Please enter a link URL:'] = 'Introduce una dirección URL:';
$a->strings['Send Private Message'] = 'Enviar Mensaje Privado';
$a->strings['If you wish for %s to respond, please check that the privacy settings on your site allow private mail from unknown senders.'] = 'Si quieres que %s te responda, verifica que la configuración de privacidad permite enviar correo privado de desconocidos.';
$a->strings['To:'] = 'Para:';
$a->strings['Subject:'] = 'Asunto:';
$a->strings['No videos selected'] = 'Ningún vídeo seleccionado';
$a->strings['Recent Videos'] = 'Vídeos Recientes';
$a->strings['Upload New Videos'] = 'Subir Nuevos Videos';
$a->strings['Unable to locate contact information.'] = 'No se encuentra información del contacto.';
$a->strings['Conversation not found.'] = 'Conversación no encontrada.';
$a->strings['Message was not deleted.'] = 'Mensaje no borrado.';
$a->strings['Conversation was not removed.'] = 'Conversación no borrada.';
$a->strings['No messages.'] = 'No hay mensajes.';
$a->strings['Message not available.'] = 'Mensaje no disponibile.';
$a->strings['Delete message'] = 'Borrar mensaje';
$a->strings['D, d M Y - g:i A'] = 'D, d M A - g:i A';
$a->strings['Delete conversation'] = 'Eliminar conversación';
$a->strings['No secure communications available. You <strong>may</strong> be able to respond from the sender\'s profile page.'] = 'No hay comunicaciones seguras disponibles. <strong>Podrías</strong> responder desde la página de perfil del remitente. ';
$a->strings['Send Reply'] = 'Enviar respuesta';
$a->strings['Unknown sender - %s'] = 'Remitente desconocido - %s';
$a->strings['You and %s'] = 'Tú y %s';
$a->strings['%s and You'] = '%s y Tú';
$a->strings['%d message'] = [
	0 => '%d mensaje',
	1 => '%d mensajes',
];
$a->strings['Remove Item Tag'] = 'Eliminar etiqueta';
$a->strings['Select a tag to remove: '] = 'Selecciona etiqueta a eliminar: ';
$a->strings['Bad Request.'] = 'Petición errónea';
$a->strings['%1$s welcomes %2$s'] = '%1$s te da la bienvenida a %2$s';
$a->strings['Resubscribing to OStatus contacts'] = 'Resubscribir a contactos de OStatus';
$a->strings['You aren\'t following this contact.'] = 'No sigues a este contacto.';
$a->strings['Unfollowing is currently not supported by your network.'] = 'Dejar de Seguir no es compatible con tu red.';
$a->strings['Disconnect/Unfollow'] = 'Desconectar/Dejar de seguir';
$a->strings['Personal notes are visible only by yourself.'] = 'Notas personales solo puedes verlas tu.';
