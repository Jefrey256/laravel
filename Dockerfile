# Use uma imagem PHP oficial como base
FROM php:8.1-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Instale o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copie o código do aplicativo para o contêiner
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Instale as dependências do Composer
RUN composer install --optimize-autoloader --no-dev

# Execute as migrações
RUN php artisan migrate --force

# Exponha a porta 9000
EXPOSE 9000

# Comando para iniciar o servidor PHP-FPM
CMD ["php-fpm"]
