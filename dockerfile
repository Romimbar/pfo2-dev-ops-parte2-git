# Imagen base: PHP con Apache
FROM php:8.1-apache

# Instalar extensión mysqli para conectar PHP con MySQL
RUN docker-php-ext-install mysqli

# Copiar el código del proyecto (la carpeta www/) al servidor Apache
COPY ./www/ /var/www/html/

# Exponer el puerto 80 (Apache)
EXPOSE 80
