<?php
require_once '../config/config.php';
require_once '../inc/header.php';

//session qui va permettre echanger dans tout les pages
session_start();
if (isset($_POST['valider'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo_defaut = "admin";
        $mdp_defaut = "admin1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);
        if ($pseudo_saisi == $pseudo_defaut && $mdp_saisi == $mdp_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php'); // redirection vers la page index.php si mdp est correct
        } else {
            echo "Pseudo ou mot de passe incorrect";
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}

?>
<link rel="stylesheet" href="../css/contact.css" />

<div class="contact-container">
    <form class="contact-left" method="POST" action="">
        <div class="contact-left-title">
            <h2>Login</h2>
            <hr />
        </div>
        <div>
            <input type="text" placeholder="Etrez votre nom" name="pseudo" class="contact-inputs" />
        </div>
        <div>
            <input type="text" placeholder="Etrez votre password" name="mdp" class="contact-inputs" />
        </div>
        <div class="submit-container">
            <button type="submit" name="valider">Connecter</button>
        </div>
    </form>
</div>