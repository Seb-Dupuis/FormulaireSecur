<?php
$errorMessages = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_firstname"])) {
        $errorMessages ['firstnameErr'] = "Firstname is required";
    }
    if (empty($_POST["user_lastname"])) {
        $errorMessages['lastnameErr'] = "Lastname is required";
    }
    if (empty($_POST["user_mail"])) {
        $errorMessages['emailErr'] = "Email is required";
    } elseif (!filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL)) {
        $errorMessages['emailErr'] = "Enter a valid mail";
    }
    if (empty($_POST["user_phone"])) {
        $errorMessages['phoneErr'] = "Phone number is required";
    }
    if (empty($_POST["user_message"])) {
        $errorMessages['messageErr'] = "Message is required";
    }
}


if (!empty($errorMessages)){
    foreach ($errorMessages as $errorMessage) {
        echo $errorMessage . "<br>";
    }
}else {
    $firstname = $lastname = $mail = $phone = $sujet = $message = '';

    if (isset($_POST['user_firstname'])) {
        $firstname = $_POST['user_firstname'];
    }
    if (isset($_POST['user_lastname'])) {
        $lastname = $_POST['user_lastname'];
    }
    if (isset($_POST['user_mail'])) {
        $mail = $_POST['user_mail'];
    }
    if (isset($_POST['user_phone'])) {
        $phone = $_POST['user_phone'];
    }
    if (isset($_POST['user_sujet'])) {
        $sujet = $_POST['user_sujet'];
    }
    if (isset($_POST['user_message'])) {
        $message = $_POST['user_message'];
    }
    $sentence = 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos ' . $sujet . '<br>' .
        'Un de nos conseiller vous contactera soit à l’adresse ' . $mail .
        ' ou par téléphone au ' . $phone .
        ' dans les plus brefs délais pour traiter votre demande : '
        . $message;

    echo $sentence;
}

