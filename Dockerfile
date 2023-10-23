FROM php:apache
RUN docker-php-ext-install mysqli
# Instale a extensão PDO para MySQL
RUN docker-php-ext-install pdo pdo_mysql