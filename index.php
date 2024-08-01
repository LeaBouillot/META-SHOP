<?php

require_once './config/config.php';

require_once './inc/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'product':
        include 'products.php';
        break;
    case 'products':
        // Inclure une page qui affiche tous les produits (si elle existe)
        include 'products.php';
        break;
    case 'promotions':
        // Inclure une page qui affiche les promotions (si elle existe)
        include 'sales.php';
        break;
    case 'categories':
        // Inclure une page qui affiche les catégories (si elle existe)
        include 'categories.php';
        break;
    case 'contact':
        // Inclure une page de contact (si elle existe)
        include 'contact.php';
        break;
    case 'login':
        // Inclure une page de login (si elle existe)
        include 'login.php';
        break;
    default:
        include 'home.php';
        break;
}


// $authorizedPages = ['home', 'products', 'categories', 'sales', 'contact', 'login', '404'];
// $page = in_array($page, $authorizedPages) ? $page : '404';

// require_once './pages/' . $page . '.php';


# PIED DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de footer.php
// require_once './inc/footer.php';
