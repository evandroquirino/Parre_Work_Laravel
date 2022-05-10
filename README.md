para subir o container, entre na pasta laradock:
    docker-compose up -d nginx mysql phpmyadmin
para entrar na imagem e rodar os comandos php:
    docker-compose exec --user=laradock workspace bash
        php artisan migrate