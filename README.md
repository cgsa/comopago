# admin-laravel
Sistema administrador de usuarios realizado con el framework Laravel

################### Configurar Variables de Entorno Global ###############


1 desde la raíz del proyecto entrar al archivo .env

2 modificar los datos de conexión

	DB_CONNECTION=mysql
	DB_HOST=localhost
	DB_PORT=3306
	DB_DATABASE=db_base_de_datos
	DB_USERNAME=root
	DB_PASSWORD=clave



################### Configurar Dominio Local  ###############

1 Entrar a la carpeta sites-available

	cd /etc/apache2/sites-available/
	
2 Hacer una copia del archivo 000-default.conf

	cp 000-default.conf nombre-nroyecto.conf
	
3 Entrar al archivo creado Nombre-Proyecto.conf y modificar las siguientes lineas con la información del proyecto, luego guardar y salir:

	ServerName nombre-proyecto.dev

	DocumentRoot /var/www/html/nombre-proyecto/public/
	
4 Habilitar la configuración 

	a2ensite nombre-nroyecto.conf
	
5 Publicar el dominio entrando al archivo hosts y luego agregar la información correspondiente al dominio que se desea publicar

	nano /etc/hosts
	
agregar:
	
	127.0.1.1       nombre-proyecto.dev
	
6 Reiniciar el servidor Apache

	service apache2 reload
	
7 Entrar a la raíz del proyecto y ejecutar el siguiente comando:
	
	php artisan key:generate
	
	php artisan config:clear

	php artisan migrate:refresh --seed
	
	
	


	
 
	
	
