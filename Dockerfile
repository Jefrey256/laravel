# Use uma imagem PHP oficial como base
FROM php:8.1-fpm

# Instale extensões PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Copie o código do aplicativo para o contêiner
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instale as dependências do Composer
RUN composer install --optimize-autoloader --no-dev

# Execute as migrações
RUN php artisan migrate --force

# Exponha a porta 9000
EXPOSE 9000

# Comando para iniciar o servidor PHP-FPM
CMD ["php-fpm"]
