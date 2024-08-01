<?php

// définition d'une constante pour le fichier de données "data.php"
define('DATA', 'data.php');

// inclusion du fichier de données 
require_once DATA;

// definir une image par défaut
define('DEFAULT_IMAGE', './img/default-article-image.png');

// Fonction qui permet de retourner l'ensemble des articles dans le fichier data.php
function getArticles()
{
    // récupération du contenu du fichier
    $allArticles = file_get_contents(DATA);

    // transformation du contenu en tableau associatif
    $allArticlesArray = unserialize($allArticles);

    return $allArticlesArray;
}

// Fonction qui permet de retourner les détails d'un article  'id','image', 'designation','modele', 'categorie', 'promotion',

function getDetail($title)
{
    $datas = getArticles();
    $dataFound = '';

    foreach ($datas as $data) {
        if ($data['designation'] === ucfirst($title)) {
            $dataFound = "ID: " . $data['id'] . " Image: " . $data['image'] . " Designation: " . $data['designation'] . " Modèle: " . $data['modele'] . " Catégorie: " . $data['categorie'] . " Promotion: " . $data['promotion'];
            break;
        }
    }
    return $dataFound;
}
