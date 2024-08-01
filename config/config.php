<?php
// définition d'une constante pour le fichier de données "data.php"
define('DATA', 'data.php');

// inclusion du fichier de données 
require_once DATA;

// définition d'une constante pour le fichier de données "data.json"
define('DATAJSON', __DIR__ . '/data.json');

function getProducts()
{
    // récupération au format JSON
    $allArticles = file_get_contents(DATAJSON);

    // Afin d'exploiter les données, il faut les récupérer sous forme de tableau associatif
    $allArticlesArray = json_decode($allArticles, true);

    return $allArticlesArray;
}


// definir une image par défaut
define('DEFAULT_IMAGE', './img/default-article-image.png');

// Fonction qui permet de retourner les détails d'un article  'id','image', 'designation','modele', 'categorie', 'promotion',

function getDetail()
{
    $datas = json_decode(file_get_contents(DATAJSON), true);
    $dataFound = [];

    foreach ($datas as $data) {
        if ($data['designation'] === ucfirst($id)) {
            $dataFound[] =
                [
                    'id' => $data['id'],
                    'image' => $data['image'] ?? DEFAULT_IMAGE,
                    'designation' => $data['designation'],
                    'modele' => $data['modele'],
                    "prix" => $data['prix'],
                    'categorie' => $data['categorie'],
                    'promotion' => $data['promotion'] ? 'true' : 'false'
                ];
        }
    }
    return $dataFound;
}

// categories
function getCategories()
{
    $datas = json_decode(file_get_contents(DATAJSON), true);
    $categories = array_unique(array_column($datas, 'categorie'));
    return $categories;
}


function getPromotions()
{
    $datas = json_decode(file_get_contents(DATAJSON), true);
    $promotions = array_filter($datas, function ($data) {
        return $data['promotion'] == true;
        $dataFound[] =
            [
                'id' => $data['id'],
                'image' => $data['image'] ?? DEFAULT_IMAGE,
                'designation' => $data['designation'],
                'modele' => $data['modele'],
                "prix" => $data['prix'],
                'categorie' => $data['categorie'],
                'promotion' => $data['promotion'] ? 'true' : 'false'
            ];
    });
    return $dataFound;
}
