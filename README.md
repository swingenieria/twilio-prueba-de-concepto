# Prueba de concepto de Twilio

Para ejecutar el script `test.php` se debe, previamente, instalar la biblioteca de Twilio para PHP, tal como se especifica en su [documentación](https://www.twilio.com/docs/libraries/php "documentación"). 

En caso de ser necesario, se debe cambiar la siguiente línea perteneciente a la clase TwilioSender: 
`require __DIR__ .'/../vendors/twilio-php-main/src/Twilio/autoload.php';`

Además, es necesario estar registrado en Twilio para obtener las credenciales necesarias para el funcionamiento de la SDK. Las mismas deben configurarse dentro del archivo `src/config/constants.php`

## Requisitos del entorno de desarrollo
- PHP 7.2 o superior