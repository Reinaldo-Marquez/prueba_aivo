<h1>Documentacion para prueba de Aivo:</h1>

<p> El presente proyecto se encuentra realizado usando <b>php 7.2.5</b> y su framework <b>Laravel 7.0</b>.
Los pasos para su ejecuion son los siguientes:

1)Clonar el proyecto usando GIT clone + ruta del repositorio.

2)Ir a consola, y en la ruta del proyecto ejecutar el comando <b>composer install</b>.

3)Crear un archivo <b>.env</b> en la carpeta raiz del proyecto, usando como referencia el archivo ".env.example". Una vez creado se procedera a realizar la configuracion para conectarse a la base de datos deseada.

4)Ejecutar el comando <b>php artisan migrate --seed</b> (este comando lo usaremos de esta forma para obviar la ejecucion de un comando posterior que seria "php artisan db:seed").

5)Ejecutar el comando <b>php artisan serve</b> para levantar el servidor que trae integrado laravel. Si no se desea usar este servidor se puede obviar este paso.

Una vez funcionando correctamente el proyecto en el servidor se procedera a acceder a la ruta del endpoint que en este caso sera <b<api/youtube</b>. Para hacer una busqueda en esta api por medio del titulo de un archivo, se pasara como parametro <b>api/youtube?title=nombre_del_video</b>.
</p>
