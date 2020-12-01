<?php
require 'film.class.php';
//nouvelle instance de notre class film
//chaque fois que j'instancie une class je peux modifié l'instance sans changer la class
//un objet est automatiquement créé

//une autre solution
$autre = new Film (21,'omg','autre','2000');



echo '<br>';
echo $autre->getNomFilm(); 
echo '<br>';



/** 
 * Exercice 1 : 
 * créez une classe Film avec les attributs :
 * id, nom, realisateur, annee
 * un constructeur
 * les getters et setters associés
 */



 /**
  * Exercice 2 : 
  * créez une classe Calculatrice,
  * celle-ci pourra faire une addition, une soustraction, une division, une multiplication et un modulo de 2 chiffres qui lui seront passés en paramètre de ses méthodes
  * en revanche je dois pouvoir me servir de ses méthodes sans instancier la classe Calculatrice, trouvez comment
  */






  /**
   * Exercice 3 :
   * créez une classe Animal qui ne contiendra qu'une méhode respire() qui fera un simple echo
   * puis créez une classe Oiseau et une classe Reptile qui hériteront de la classe Animale, elles auront comme attribut un nom et un age et des méthodes spécifiqiues pour chacune qui feront des echos (comme voler() pour les oiseaux ou avoirDesEcailles() pour les reptiles)
   * puis créez une classe Aigle et Faucon, ainsi qu'une classe Tortue et Crocodile ; ses classes hériteront respecivement d'Oiseau et de Reptile.
   * vous instancierez un nouvel Aigle, Faucon, Tortue et Crocodile et ferez en sorte que leur constructeur appelle le constructeur de leur parent afin d'y préciser leur nom et age. Vérifiez ensuite les méthodes de vos instances. 
   */
