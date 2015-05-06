<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Tu cuenta no ha sido activada aún. Por favor confírmala desde el enlace enviado a tu correo.");
define("MESSAGE_CAPTCHA_WRONG", "Error de Captcha !");
define("MESSAGE_COOKIE_INVALID", "Cookie inválido");
define("MESSAGE_DATABASE_ERROR", "Problema con la conexión a la base de datos.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Dirección de email ya registrada. Por favor use \"Olvidé contraseña\" si no la recuerda.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Disculpa, falló el cambio de su correo.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Tu dirección de correo cambió exitosamente. Su nueva dirección de correo es ");
define("MESSAGE_EMAIL_EMPTY", "Dirección de correo no puede estár vacío");
define("MESSAGE_EMAIL_INVALID", "Tu dirección de correo tiene un formáto inválido");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Disculpa, esa dirección de correo ya existe. Por favor, elija otra.");
define("MESSAGE_EMAIL_TOO_LONG", "Dirección de correo no puede tener más de 64 caracteres");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Parámetros de enlace vacío.");
define("MESSAGE_LOGGED_OUT", "Has salido del sistema.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Ingreso fallido.");
define("MESSAGE_OLD_PASSWORD_WRONG", "Tu última contraseña no es la correcta .");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Contraseñas no concuerdan");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Disculpa, ha fallado el cambio de contraseña.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Tu contraseña fue cambiada exitosamente!");
define("MESSAGE_PASSWORD_EMPTY", "El campo contraseña estaba vacío");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "El correo para reestablecer su contraseña no pudo ser enviado! Error: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "El correo para reestablecer su contraseña fue envido!");
define("MESSAGE_PASSWORD_TOO_SHORT", "La contraseña debe tener un mínimo de 6 caracteres");
define("MESSAGE_PASSWORD_WRONG", "Contraseña inválida. Ingrese de nuevo.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Has ingresado una contraseña inválida 3 o más veces. Espere 30 segundos para repetir la operación.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Disculpe, combinación usuario/contraseña no son la correcta...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Se ha activado exitosamente su cuenta! Ahora puede ingresar!");
define("MESSAGE_REGISTRATION_FAILED", "Disculpe, el registro falló. Por favor intente de nuevo.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "El link para reestablecer su cuenta ha expirado. Por favor use el link para recuperar su contraseña dentro de una hora.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Disculpa, no pudimos enviar un correo de verificación. Tu cuenta no pudo ser creada.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "Verificación de correo no pudo ser enviada! Error: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Tu cuenta fue creada exitosamente y te enviamos un correo. Por favor haz click en el enlace de verificación enviada a su correo.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Este usuario no existe");
define("MESSAGE_USERNAME_BAD_LENGTH", "Usuario no puede tener menos de 2 o más de 64 caracteres");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Disculpa, falló el cambio de usuario");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "El usuario ha sido cambiado exitosamente. Su nuevo usuario es ");
define("MESSAGE_USERNAME_EMPTY", "Campo de usuario estaba vacío");
define("MESSAGE_USERNAME_EXISTS", "Disculpa, ese nombre de usuario ya ha sido tomado. Porfavor, elija otro.");
define("MESSAGE_USERNAME_INVALID", "Usuario no concuerda con el esquema : Solo a-Z y números son permitidos, 2 a 64 caracteres");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Disculpa, ese usuario es el mismo que el actual. Porfavor elija otro.");

// views
define("WORDING_BACK_TO_LOGIN", "Regresa a la página de ingreso");
define("WORDING_CHANGE_EMAIL", "Cambio de correo");
define("WORDING_CHANGE_PASSWORD", "Cambio de contraseña");
define("WORDING_CHANGE_USERNAME", "Cambio de usuario");
define("WORDING_CURRENTLY", "actualmente");
define("WORDING_EDIT_USER_DATA", "Edita la cuenta");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Has ingresado y puedes editar tus credenciales aquí");
define("WORDING_FORGOT_MY_PASSWORD", "Olvidé mi contraseña");
define("WORDING_LOGIN", "Ingresar");
define("WORDING_LOGOUT", "Salir");
define("WORDING_NEW_EMAIL", "Nuevo correo");
define("WORDING_NEW_PASSWORD", "Nueva contraseña");
define("WORDING_NEW_PASSWORD_REPEAT", "Repite la nueva contraseña");
define("WORDING_NEW_USERNAME", "Nuevo usuario (usuario no puede estar vacío y debe contener solo azAZ09 y 2-64 caracteres)");
define("WORDING_OLD_PASSWORD", "Tu antigua contraseña");
define("WORDING_PASSWORD", "Contraseña");
define("WORDING_PROFILE_PICTURE", "Tu avatar (desde gravatar):");
define("WORDING_REGISTER", "Registro");
define("WORDING_REGISTER_NEW_ACCOUNT", "Registro de nueva cuenta");
define("WORDING_REGISTRATION_CAPTCHA", "Por favor ingrese los caracteres del Captcha");
define("WORDING_REGISTRATION_EMAIL", "Correo de usuario (ingrese un correo real, te enviaremos un correo de verificación para la activación de cuenta)");
define("WORDING_REGISTRATION_PASSWORD", "Contraseña (min. 6 caracteres!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Repita contraseña");
define("WORDING_REGISTRATION_USERNAME", "Usuario (solo letras y números, 2 a 64 caracteres)");
define("WORDING_REMEMBER_ME", "Manténme registrado (por 2 semanas)");
define("WORDING_REQUEST_PASSWORD_RESET", "Reestablecimiento de contraseña. Ingrese su usuario y le enviaremos las instrucciones por correo:");
define("WORDING_RESET_PASSWORD", "Reestablecimiento de contraseña");
define("WORDING_SUBMIT_NEW_PASSWORD", "Ingresa una nueva contraseña");
define("WORDING_USERNAME", "Usuario");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Has ingresado como ");
?>
