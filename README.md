# Étapes d'installation

### Cloner le dépôt Git
```sh
git clone https://github.com/lakrounehamza/GrandTaxiGo.git
cd GrandTaxiGo
### Installer les dépendances
sh
Copier
Modifier
composer install
npm install
Configurer l'environnement
sh
Copier
Modifier
cp .env.example .env
php artisan key:generate
Modifiez le fichier .env pour configurer la base de données PostgreSQL.

Lancer le serveur
sh
Copier
Modifier
php artisan serve