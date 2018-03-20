# Challenge 1

Créer une base de donnée, puis une classe Connexion avec :
* un constructeur pour une connexion PDO à la base
* une méthode countTable qui prend une requête SQL en paramètre
et retourne le résultat

Ensuite dans un fichier .php, créez un nouvel objet en instanciant
Connexion et appelez la méthode en envoyant une requête sql avec
COUNT ...

> Bonus perso : utiliser le MVC

# Challenge 2

- Créer une base de donnée en utilisant une classe Connexion et une
méthode statique pour se connecter (utiliser PDO).

- Créer une classe Post avec les propriétés suivantes :
* id_post, title_post, content_post
et les méthodes suivantes :
*  addPost, removePost, findAllPost

- Créer les pages index.php qui affiche les Posts contenus dans la base
de donnée, ajouter.php qui affiche un formulaire d’ajout d’un post
