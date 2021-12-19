<?php
require "controllers/controllerconnexion.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulaire en POST</title>
</head>

<body class="bg-dark text-white">

    <h1 class="text-center text-success">Connexion</h1>

    <form method="POST" action="">
        <div class="row mt-5 ps-5 pe-5 m-0">

            <div class="col">
                <label for="login" class="form-label">Pseudo : </label>
                <input name="login" type="text" class="form-control" placeholder="Ex : Pierre4545">
            </div>
            <div class="col">
                <label for="password" class="form-label">Mot de passe : </label>
                <input name="password" type="password" class="form-control" placeholder="Mot de passe">
            </div>
            <span class="text-danger text-center mt-5"><?= $arrayError["error"] ?? "" ?></span>

            <div class="col-12 text-center pt-5">
                <button type="submit" class="btn btn-primary mb-5">Connexion</button>
            </div>
        </div>
    </form>

</body>

</html>