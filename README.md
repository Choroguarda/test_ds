Prueba Técnica

Requisitos Previos

Asegúrate de tener instalados los siguientes requisitos en tu sistema:

PHP 8.x o superior

Composer (Administrador de dependencias de PHP)

Slim Framework

Guzzle (Cliente HTTP para PHP)

Instalación

1. Instalar PHP 8.x

Si no tienes PHP instalado, descárgalo desde php.net o usa un gestor de paquetes:

Ubuntu/Debian:

sudo apt update && sudo apt install php-cli php-xml php-mbstring unzip

Windows:
Descarga el instalador desde https://windows.php.net/download/

2. Instalar Composer

Si no tienes Composer instalado, sigue las instrucciones en getcomposer.org.

Para verificar la instalación, ejecuta:

composer -V

3. Instalar dependencias del proyecto

Dentro del directorio del proyecto, ejecuta:

composer install

Si Slim y Guzzle no están en composer.json, instálalos manualmente:

composer require slim/slim guzzlehttp/guzzle

Ejecución del Proyecto

Para ejecutar el servidor de desarrollo, usa el siguiente comando en la terminal dentro del directorio del proyecto:

php -S localhost:8000 -t public

Esto iniciará un servidor en http://localhost:8000/.

Acceso a la Aplicación

Una vez iniciado el servidor, puedes acceder a la prueba técnica en:

http://localhost:8000/index.html

Notas

Asegúrate de que el puerto 8000 esté libre en tu máquina.

Para detener el servidor, presiona CTRL + C en la terminal.