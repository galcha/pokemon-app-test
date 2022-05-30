## Pokemon list app

Petite application permettant d'afficher une liste de pokemon obtenue de pokeapi.co.

Backend : Laravel

Frontend : Vuejs

## Tester le site

Le site est disponible à [cette url](https://fast-sands-37701.herokuapp.com/).

## Installation en local

- Cloner le projet
- Préparer l'environnement local avec Laravel sail `vendor/bin/sail up`
- Préparer la base de données avec `vendor/bin/sail php artisan migrate` et `vendor/bin/sail php artisan app:sync-from-api`
- Build les assets JS avec `vendor/bin/sail npm run watch`

## Notes sur le développement

Au niveau de l'architecture, le front et le back sont empaquetés dans un même projet, mais ne communiquent que par API. 

Pour le backend, on a quelque chose de basique, avec:
- Quelques modèles pour stocker les infos de l'API pokeapi.co
- Un script console pour hydrater et sauvegarder ces données venant de l'API
- Un controller servant les données sous forme de JSON, qui seront consommées par le Frontend VueJS

Pour le front:
- VueJS + VueRouter
- Bootstrap 5
- Axios pour récupérer les données du backend
- 2 routes : une pour la liste, une pour le détail d'un pokemon

Le tout est hébergé sur Heroku, avec une ressource Cleardb Mysql pour stocker les données.

## Améliorations possibles

Etant donné que nous sommes en monolithique, Une autre solution serait d'utiliser InertiaJS, qui permet de passer des informations à VueJS directement depuis le controller Laravel.

Avec l'architecture actuelle, il serait bon de pouvoir mettre en cache les données fetchées par Axios.

Etant donnée la structure très simple de l'application, il n'a pas été nécessaire d'utiliser un gestionnaire de State (VueX).

