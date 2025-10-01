# ベースイメージ
FROM php:7.4-apache

# 作業ディレクトリを FuelPHP プロジェクトルートに設定
WORKDIR /var/www/fuelphp

# 必要な PHP 拡張とツールをインストール
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    vim \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring zip mysqli \
    && a2enmod rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# PHP拡張の追加（Dockerfile の既存 RUN に追加）
RUN pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug

# Apache 設定: .htaccess の利用を許可
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Apache DocumentRoot を FuelPHP の public 配下に変更
RUN sed -i 's|/var/www/html|/var/www/fuelphp/public|g' /etc/apache2/sites-available/000-default.conf

# Composer インストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# FuelPHP の権限を Apache ユーザーに変更
# RUN chown -R www-data:www-data /var/www/fuelphp \
#    && chmod -R 775 /var/www/fuelphp/fuel/vendor

# ポート
EXPOSE 80

# デフォルトコマンド
CMD ["apache2-foreground"]
