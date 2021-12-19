<?php

$login = '$2a$12$MbZL9LMXTeZkjf7avm6gcuv.WQZtQ4PTSZ0ylhd744f.6SXPB7dRy';
// admin
$password = '$2a$12$F3OcdpRn5..oSFcx5LDzduw2J8lko7o9Zoqtsm2jzJZuiIt6Xb.wG';
// admine
// var_dump($_POST);


if (!empty($_POST)) {
    if (empty($_POST["login"]) || empty($_POST["password"])) {
        $arrayError["error"] = "Veuillez saisir votre mot de passe et/ou pseudo";
    } elseif (!password_verify($_POST["login"], $login) || !password_verify($_POST["password"], $password)) {
        $arrayError["error"] = "Mot de passe ou pseudo invalide";
    } else {
        header("Location: welcome.php");
        exit;
    }
}
