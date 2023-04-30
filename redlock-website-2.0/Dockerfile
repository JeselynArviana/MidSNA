# membuat image menggunakan PHP 8.1.x + Web Server
FROM php:8.1-apache

# membuat directory yang akan dijalankan
WORKDIR /var/www/html

# mengcopy konten dari web
COPY ./website/ /var/www/html/

# mengubah akses kepemilikan ‘u’ dan ‘g’ sudah di set ke www-data, dan menghilangkan permission ‘w’ and ‘x’ untuk others
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R u=rwX,g=rX,o= /var/www/html/

# menginstall mysqli
RUN apt-get update -y && apt-get install -y libmariadb-dev 
RUN docker-php-ext-install mysqli
