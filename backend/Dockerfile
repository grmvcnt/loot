# Utilisation de l'image officielle PHP avec Apache pour Laravel
FROM php:7.4-apache

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql zip \
    && a2enmod rewrite

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html

# Fixer les permissions des fichiers d'application
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Exposer le port 8000 et démarrer Apache
EXPOSE 8000

CMD apache2-foreground
