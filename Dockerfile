FROM richarvey/nginx-php-fpm:3.1.6

# 1. Salin seluruh kode proyek Laravel ke dalam server
COPY . /var/www/html

# 2. Atur konfigurasi dasar server
ENV WEBROOT /var/www/html/public
ENV APP_ENV production

# 3. Install semua package vendor Laravel otomatis
RUN composer install --no-dev --allow-plugins --optimize-autoloader

# 4. Berikan izin hak akses folder agar Laravel bisa menulis cache/log
RUN chown -R memcached:memcached /var/www/html/storage /var/www/html/bootstrap/cache