<?php
# public/index.php 
/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';

/*******************
 * Routage entre les
 * diverses vues
 *******************/

// si non existence de la variable
// $_GET nommée 'p'
if(!isset($_GET['p'])){

    // Nous sommes sur l'accueil
    // chargement de view/accueil.php
    include ROOT_PATH."/view/accueil.php";

// sinon si la variable get 'p' existe et se trouve
// dans le tableau des pages acceptées (voir config.php)
}elseif(in_array($_GET['p'], ARRAY_VALID_PAGES)){

    // Nous chargeons la vue que nous
    // devrons créer au péalable, ou par la suite
    include ROOT_PATH."/view/".$_GET['p'].".php";
 
// 'p' existe mais n'est pas valide    
}else{

    // appel de l'erreur 404
    include ROOT_PATH."/view/erreur404.php";
}
