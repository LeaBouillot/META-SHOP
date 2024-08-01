<?php
define('DATAJSON', __DIR__ . '/data.json');

function getProducts()
{
    $allArticles = file_get_contents(DATAJSON);
    $allArticlesArray = json_decode($allArticles, true);
    return $allArticlesArray;
}

function getPromotions()
{
    $datas = json_decode(file_get_contents(DATAJSON), true);
    $promotions = [];
    foreach ($datas as $data) {
        if ($data['promotion'] === true) {
            $promotions[] = [
                'id' => $data['id'],
                'image' => $data['image'],
                'designation' => $data['designation'],
                'modele' => $data['modele'],
                'prix' => $data['prix'],
                'categorie' => $data['categorie'],
            ];
        }
    }
    return $promotions;
}
