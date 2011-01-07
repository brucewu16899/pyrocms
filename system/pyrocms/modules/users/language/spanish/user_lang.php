<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang['user_register_header']			= 'Registro';
$lang['user_register_step1']			= '<strong>Paso 1:</strong> Registro';
$lang['user_register_step2']			= '<strong>Paso 2:</strong> Activación';

$lang['user_login_header']			= 'Login';

# titles
$lang['user_add_title']				= 'Crear usuario';
$lang['user_inactive_title']			= 'Usuarios inactivos';
$lang['user_active_title']			= 'Usuarios activos';
$lang['user_registred_title']			= 'Usuarios registrados';

# labels
$lang['user_edit_title']			= 'Editar usuario "%s"';
$lang['user_details_label']			= 'Detalles';
$lang['user_first_name_label']			= 'Nombre';
$lang['user_last_name_label']			= 'Apellido';
$lang['user_email_label']			= 'E-mail';
$lang['user_group_label']			= 'Grupo';
$lang['user_activate_label'] 			= 'Activar';
$lang['user_password_label'] 			= 'Contraseña';
$lang['user_password_confirm_label']		= 'Confirmar contraseña';
$lang['user_name_label']			= 'Nombre';
$lang['user_joined_label']			= 'Fecha de creación';
$lang['user_last_visit_label']			= 'Última visita';
$lang['user_actions_label']			= 'Acciones';
$lang['user_never_label']			= 'Nunca';
$lang['user_delete_label']			= 'Eliminar';
$lang['user_edit_label']			= 'Editar';
$lang['user_view_label']			= 'Ver';

$lang['user_no_inactives']			= 'No hay usuarios inactivos.';
$lang['user_no_registred']			= 'No hay usuarios registrados.';
$lang['account_changes_saved']			= 'Los cambios a tu cuenta han sido grabados exitosamente.';
$lang['indicates_required'] 			= 'Indica campos necesarios';

# Registration / Activation / Reset Password

$lang['user_register_title']			= 'Registrar';
$lang['user_activate_account_title']		= 'Activar cuenta';
$lang['user_activate_label']			= 'Activar';
$lang['user_activated_account_title']		= 'Cuenta activada';
$lang['user_reset_password_title']		= 'Reestablecer contraseña';
$lang['user_password_reset_title']		= 'Reestablecer contraseña';

$lang['user_full_name']				= 'Nombre completo';
$lang['user_first_name']			= 'Nombre';
$lang['user_last_name']				= 'Apellido';
$lang['user_email']				= 'E-mail';
$lang['user_confirm_email']			= 'Confirmar E-mail';
$lang['user_password']				= 'Contraseña';
$lang['user_confirm_password']			= 'Confirmar contraseña';

$lang['user_level']				= 'Rol de usuario';
$lang['user_active']				= 'Activar';
$lang['user_lang']				= 'Idioma';

$lang['user_activation_code']			= 'Código de activación';

$lang['user_reset_password_link']		= 'Olvidaste tu contraseña?';

$lang['user_activation_code_sent_notice']	= 'Se te ha enviado un e-mail con tu código de activación.';
$lang['user_activation_by_admin_notice']	= 'Tu registro esta esperando la aprobación de un administrador.';

# Settings

$lang['user_details_section']			= 'Nombre';
$lang['user_password_section']			= 'Cambiar contraseña';
$lang['user_other_settings_section'] 		= 'Otras configuraciones';

$lang['user_settings_saved_success']		= 'La configuración para tu cuenta han sido grabadas.';
$lang['user_settings_saved_error']		= 'Ha ocurrido un error.';

# Buttons

$lang['user_register_btn']			= 'Registrar';
$lang['user_activate_btn']			= 'Activar';
$lang['user_reset_pass_btn']			= 'Reestablecer contraseña';
$lang['user_login_btn']				= 'Login';
$lang['user_settings_btn']			= 'Actualizar configuración';

## Errors & Messages

# Create
$lang['user_added_and_activated_success'] 	= 'El nuevo usuario ha sido creado y activado.';
$lang['user_added_not_activated_success'] 	= 'El nuevo usuario ha sido creado, la cuenta necesita ser activada.';

# Edit
$lang['user_edit_user_not_found_error'] 	= 'No se ha encontrado el usuario.';
$lang['user_edit_success'] 			= 'Usuario actualizado exitosamente.';
$lang['user_edit_error'] 			= 'Ha ocurrido un error al tratar de actualizar el usuario.';

# Activate
$lang['user_activate_success'] 			= '%s usuarios de %s han sido activados.';
$lang['user_activate_error'] 			= 'Necesitas seleccionar algunos usuarios primero.';

# Delete
$lang['user_delete_self_error'] 		= 'No puedes borrarte a ti mismo!';
$lang['user_mass_delete_success'] 		= '%s usuarios de %s han sido borrados.';
$lang['user_mass_delete_error'] 		= 'Necesitas seleccionar algunos usuarios primero.';

# Register
$lang['user_email_pass_missing'] 		= 'Campos del Email o contraseña no estan completos.';
$lang['user_email_exists'] 			= 'El correo electrónico que has escogido esta siendo utilizado por otro usuario.';
$lang['user_register_reasons'] 			= 'Registrate para acceder a áreas especiales que normalmente están restringidas. Esto quiere decir que tu configuración será recordada, más contenido y menos publicidad.';

# Activation
$lang['user_activation_incorrect']   		= 'Activación fallida. Por favor, revisa tus detalles y asegúrate que el BLOQ MAYUS no está activado.';
$lang['user_activated_message']   		= 'Tu cuenta ha sido activada, ahora puedes ingresar con tu cuenta.';

# Login
$lang['user_logged_in']				= 'You have logged in successfully.'; #translate
$lang['user_already_logged_in'] 		= 'Ya te encuentras logueado. Por favor, sal de tu cuente antes de tratar nuevamente.';
$lang['user_login_incorrect'] 			= 'E-mail o contraseña no coinciden. Por favor, revisa tus detalles y asegúrate que el BLOQ MAYUS no está activado.';
$lang['user_inactive']   			= 'La cuenta a la que tratas de acceder se encuentra inactiva.<br />Revisa tu e-mail para instrucciones de como activar tu cuenta - <em>puede estar en tu correo no deseado</em>.';

# Logged Out
$lang['user_logged_out']   			= 'Has salido de tu cuenta.';

# Forgot Pass
$lang['user_forgot_incorrect']   		= "No se han encontrado cuentas con estos detalles.";

$lang['user_password_reset_message']   		= "Tu contraseña ha sido reestablecida. Deberías recibir un correo dentro de las próximas 2 horas. Si no lo recibes, puede que se haya recibido en tu correo no deseado por accidente.";

# Emails

# Activation
$lang['user_activation_email_subject'] 		= 'Activación necesaria.';
$lang['user_activation_email_body'] 		= 'Gracias por activar tu cuenta con %s. Para entrar con tu cuenta en el sitio, por favor sigue el vínculo debajo:';


$lang['user_activated_email_subject'] 		= 'Activación completada';
$lang['user_activated_email_content_line1'] 	= 'Gracias por registrarte en %s. Antes de que podamos activar tu cuenta, por favor completa el procedimiento de activación haciendo click en el link siguiente:';
$lang['user_activated_email_content_line2'] 	= 'En caso que no puedas ingresar haciendo click sobre el link, copia la dirección en tu explorador y utiliza el siguiente código de activación:';

# Reset Pass
$lang['user_reset_pass_email_subject'] 		= 'Contraseña reestablecida';
$lang['user_reset_pass_email_body'] 		= 'Tu contraseña en %s ha sido reestablecido. Si no pediste este cambio, por favor escribe a %s y resolveremos esta situación por ti.';