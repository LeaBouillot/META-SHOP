<?php

// inclure le fichier de configuration du projet
require_once './config/config.php';

# EN-TETE DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de header.php
require_once './inc/header.php';

# Méthode n°2 : ?? (opérateur de fusion null)
$page = $_GET['pg'] ?? 'home';

# Alternative n°2 : enregistrer toutes les pages dans un tableau, si la page n’est pas contenu dans le tableau rediriger sur un page par défaut (404) ou home
$authorizedPages = ['home', 'products', 'categories', 'sales', 'contact', 'login', '404'];
$page = in_array($page, $authorizedPages) ? $page : '404';


// Inclusion de la page demandée
require_once './pages/' . $page . '.php';


# PIED DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de footer.php
// require_once './inc/footer.php';
