<h1>Livres</h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. Un auteur comporte un nom et un prénom.
Une méthode toString() sera appréciée dans chacune de vos classes.
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur :</p>

<h2>Resultat</h2>

<?php

spl_autoload_register(function($class_name){
    require_once 'Classes/'. $class_name .'.php';
});

$ecrivain1 = new Auteur ("King", "Stephen");

// echo $ecrivain1;

$roman1 = new Livres ("CA", 1138,"21-12-1986", 20, $ecrivain1);

// echo $roman1;

echo $roman1->afficherBibliographie();