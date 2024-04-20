<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Presentación de la prueba técnica para la empresa [INXAIT](https://www.inxaitcorp.com/)

****

## ¿Como instalar en una maquina local?

Requisitos previos:
- PHP 8.2
- Composer 2
- NodeJs igual o superior a la version 16
<p>
Una vez tenga instalado PHP y Composer, y tenga los archivos del proyecto en un directorio de su equipo local.
</p>
<p>
Deberá ejecutar una serie de comandos en el orden que se indica a continuación
</p>

1. Este comando instalara las dependencias necesarias para el funcionamiento de Laravel.
``composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-req=ext-zip``

2. Se genera una copia del archivo *.env.example* al archivo *.env*
``php -r "file_exists('.env') || copy('.env.example', '.env');"``

3. Se genera una llave de seguridad para la aplicación de Laravel.
``php artisan key:generate``

4. En el caso del ejercicio tomé la alternativa de utilizar SQLite como Base de Datos, para hacer una instalación más sencilla y no requerir de más instalaciones como lo es para el caso de MySQL o PostgreSQL, omitir este paso si desea utilizar MySQL o PostgrSQL y realizar previa configuración al archivo *.env* , si toma la alternativa SQLite, recuerde que debe habilitar la *extensión pdo_sqlite* en el archivo de configuración de su PHP llamado *php.ini* 
``php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"``

5. Se genera la migración de tablas a la Base de Datos y un seeder que genera la creación de departamentos con sus ciudades y municipios del país y un usuario *(correo: administrador@example.com password: administrador)*
``php artisan migrate --seed``

6. Instalará las dependecias para NodeJs
``npm install``

7. Compila los archivos js, css y Taildwind
``npm run build``

8. Por último, para ver el resultado se ejecuta este comando en donde PHP iniciará un servidor local, por defecto usará el puerto 8000 *http://localhost:8000* pero si se desea cambiar el puerto en donde se ejecuta el proyecto, basta con agregar por ejemplo *--post=8001* 
``php artisan serve``

Este último comando será suficiente para volver a iniciar el servidor local


*[20-04-2024]*
