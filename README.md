# CineJourney

## Description
CineJourney est une application web sous *Laravel* dont la fonctionnalité est d'offrir des propositions de voyages sur le
thème du cinéma. L'utilisateur peut choisir une licence de film et obtenir des propositions de voyages en lien avec ce film.
Découvrez des lieux de tournages, et participez à la création de voyages en proposant vos propres lieux de tournages.

## Installation
1. Cloner le projet
```bash
git clone https://gitlab.univ-artois.fr/theo_delaude/web-24-h.git
```
2. Configurer le projet
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
```
3. Créer une base de données   
(Si vous utilisez SQLite)
```bash
php artisan migrate
php artisan db:seed
```
(si vous possédez déjà une base de données, vous pouvez la rafraichir)
```bash
php artisan migrate:refresh --seed
```
4. Configurer vite   
Si vous n'avez pas [Node.js](https://nodejs.org/en/download/package-manager), 
installez le. N'oubliez pas de vérifier que vous avez bien installé npm (`npm -v`).
Si ce n'est pas le cas, vérifiez en premier lieu votre **variable d'environnement système**.
```bash
npm install
npm run build
```
Si ça ne fonctionne pas, laissez tourner npm en arrière plan avec
```bash
npm run dev
```
5. Lancer le serveur
```bash
php artisan serve
```

## Équipe   
| Infos                                                              | MMI                                                                      |
|--------------------------------------------------------------------|--------------------------------------------------------------------------|
| [Théo Delaude](https://gitlab.univ-artois.fr/theo_delaude)         | [Louan Necki](https://gitlab.univ-artois.fr/louan_necki)                 |
| [Etienne Focquet](https://gitlab.univ-artois.fr/etienne_focquet)   | [Kilian Kwiczor](https://gitlab.univ-artois.fr/kilian_kwiczor)           |
| [Nathan Cheam](https://gitlab.univ-artois.fr/nathan_cheam)         | [Lio Vinchent-Urbain](https://gitlab.univ-artois.fr/lio_vinchent-urbain) |
| [Louis Derancourt](https://gitlab.univ-artois.fr/louis_derancourt) | [Anna Chekalova](https://gitlab.univ-artois.fr/anna_chekalova)           |


