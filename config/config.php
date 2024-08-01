<?php

// définition d'une constante pour le fichier de données "data.php"
define('DATAJSON', 'data.json');

function getProduts()
{
    $data = json_decode(file_get_contents(DATAJSON), true);
    return $data;
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
