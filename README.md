# Etapes d'Installation
### Cloner le dépôt Git
https://github.com/lakrounehamza/GrandTaxiGo.git
cd grandtaxigo
### Installer les dépendances
composer install
npm install
### Configurer l'environnement
cp .env.example .env
php artisan key:generate
Modifier .env pour configurer la base de données PostgreSQL.
### Lancer le serveur
php artisan serve