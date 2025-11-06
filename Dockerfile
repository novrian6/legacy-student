# Dockerfile
FROM php:5.6-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Aktifkan modul Apache rewrite (opsional, untuk app lebih kompleks)
RUN a2enmod rewrite

# Copy project ke dalam container
COPY . /var/www/html/
