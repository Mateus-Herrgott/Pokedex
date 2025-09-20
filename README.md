# Pokédex

Un pokédex est une sorte de dictionnaire de tous les pokémon. Ces derniers peuvent se battre et disposent de caractéristiques de combat appelées statistiques. Chaque pokémon possède aussi un ou deux types (plante, roche, feu…).

## Les outils suivants ont été utilisés
PHP
MySQL
HTML et CSS
Composer
AltoRouter

Une base de données contenant l’ensemble des caractéristiques des pokémons. La BDD possède 3 tables, une table avec les pokémons avec leur numéro utile ceux-ci étant identifier dans le pokédex par un numéro, puis des champs pour les statistiques attaque, point de vie, défense etc… On retrouve ensuite une table avec une liste des types (plante, spectre, feu…) et un champ avec une couleur associé au type. Puis pour finir une table de jointure pour associé chacun des pokémons à leur types correspondant.

### Contenu du site

Une page d’accueil qui liste tous les pokémon de la base
Une page détail d’un pokémon qui affiche son type et ses stats
Une page permettant de filtrer les pokémons selon leur types.
