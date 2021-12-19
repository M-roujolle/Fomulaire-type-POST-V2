<?php
require("controllers/controllerindex.php");
// var_dump($_POST);
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

<body>
    <?php
    if (!empty($_POST) && empty($arrayError)) { ?>

        <div class="bg-dark text-white text-center">

            <img src="https://media.giphy.com/media/xT0xezQGU5xCDJuCPe/giphy.gif">
            <h1>Félicitations, vous êtes inscrit ! Veuillez vous connecter</h1>

            <div>
                <a class="btn btn-success mt-5 mb-5" href="connexion.php">Connexion</a>
            </div>
        </div>
    <?php
    } else {
    ?>

        <h1 class="text-center">Inscription</h1>

        <!-- NOM------------------------------------------------------- -->

        <form action="index.php" method="POST" class="row g-3 bg-dark text-white ps-4 pe-4 m-0">
            <div class="col-md-4">
                <label for="nom" class="form-label">Nom : </label><span class="text-danger">
                    <?=
                    $arrayError["nom"] ?? " ";
                    ?>
                </span>
                <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" name="nom" type="text" class="form-control" id="nom" placeholder="Ex : Dupont...">
            </div>

            <!-- PRENOM------------------------------------------------------- -->

            <div class="col-md-4">
                <label for="prenom" class="form-label">Prénom : </label><span class="text-danger">
                    <?=
                    $arrayError["prenom"] ?? "";
                    ?>
                </span>
                <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" name="prenom" type="text" class="form-control" id="inputPassword4" placeholder="Ex : Jean...">
            </div>

            <!-- PSEUDO------------------------------------------------------- -->


            <div class="col-md-4">
                <label for="pseudo" class="form-label">Pseudo : </label><span class="text-danger">
                    <?=
                    $arrayError["pseudo"] ?? "";
                    ?>
                </span>
                <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" name="pseudo" type="text" class="form-control" id="inputPassword4" placeholder="Ex : DupontJean4747...">
            </div>

            <!-- MDP------------------------------------------------------- -->

            <div class="col-md-6">
                <label for="mdp" class="form-label">Mot de passe : </label><span class="text-danger">
                    <?=
                    $arrayError["mdp"] ?? "";
                    ?>
                </span>
                <input name="mdp" type="password" class="form-control" id="inputCity">
            </div>

            <!-- CONFMDP------------------------------------------------------- -->

            <div class="col-md-6">
                <label for="confMdp" class="form-label">Confirmation du mot de passe : </label><span class="text-danger">
                    <?=
                    $arrayError["confMdp"] ?? "";
                    ?>
                </span>
                <input name="confMdp" type="password" class="form-control" id="inputCity">
            </div>

            <!-- URL------------------------------------------------------- -->

            <div class="col-md-12">
                <label for="url" class="form-label">URL Github</label><span class="text-danger">
                    <?=
                    $arrayError["url"] ?? "";
                    ?>
                </span>
                <input value="<?= isset($_POST["url"]) ? htmlspecialchars($_POST["url"]) : "" ?>" name="url" type="text" class="form-control" id="inputZip">
            </div>

            <!-- CHECKBOX------------------------------------------------------- -->

            <div class="col-12">
                <div class="form-check">
                    <label for="checkBox" class="form-check-label">
                        Accepter les CGU
                    </label><span class="text-danger">
                        <?=
                        $arrayError["checkBox"] ?? "";
                        ?>
                    </span>
                    <input name="checkBox" class="form-check-input" type="checkbox" id="gridCheck">

                </div>
            </div>

            <!-- BUTTON------------------------------------------------------- -->

            <div class="col-12">
                <button type="submit" class="btn btn-primary mb-5">S'inscrire</button>
            </div>
        </form>
    <?php } ?>

</body>

</html>