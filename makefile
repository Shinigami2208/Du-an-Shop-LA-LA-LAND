start:
	- sudo docker-compose up -d
	- sudo docker-compose run npm run watch
clear-config:
	- sudo docker-compose run php php artisan config:cache
composer:
	- sudo docker-compose run composer composer
migrate:
	- sudo docker-compose run php php artisan migrate
php-container:
	-
php:
	- sudo docker-compose run php sh
install:
	- sudo docker-compose up -d
	- sudo docker-compose run npm install
	- sudo docker-compose run composer composer install
	- sudo docker-compose run php php artisan migrate
	- sudo docker-compose run php php artisan db:seed
	- sudo docker-compose run php php artisan config:cache
	- sudo docker-compose run npm run watch
stop:
	- sudo docker stop
autoload:
	- sudo docker-compose run composer dump-autoload
controller:
    -sudo docker-compose run php php artisan make:controller
