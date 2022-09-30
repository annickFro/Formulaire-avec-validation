<?php

$fieldValidation = true;

// Tous les champs sont-ils non vides ?
// email conforme ?
if (empty($_POST['user_firstname']))  {
    $errorMessage = "Prénom vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
}

if (empty($_POST['user_name']))  {
    $errorMessage = "Nom vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
}

if (empty($_POST['user_sujet']))  {
    $errorMessage = "Sujet vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
}

if (empty($_POST['user_email']))  {
    $errorMessage = "Email vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
} else {
    // validation avec filter_var
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Email non valide ! " ;
        echo "<p>$errorMessage</p>";
        $fieldValidation = false;
    }
    
}

if (empty($_POST['user_phone']))  {
    $errorMessage = "Téléphone vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
}

if (empty($_POST['user_message']))  {
    $errorMessage = "Message vide ! " ;
    echo "<p>$errorMessage</p>";
    $fieldValidation = false;
}

?>