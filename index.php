<?php
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("mysql", "root", "mysql", "accounts");

    require 'validate.php';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>PHP Sample - OpenShift Démonstration</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Inscription J-Réda</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="welcome.php">Accueil</a></li>
            <li><a href="index.php">S'inscrire</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
        <form class="col s8 offset-s2" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
            <h1 class="center-align">Bienvenue, inscrivez-vous ! </h1>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Nom" id="first_name" type="text" class="validate" name="username" required>
                <label for="first_name">Nom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password" autocomplete="new-password" required>
                <label for="password">Mot de passe</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="confirmpassword" autocomplete="new-password" required >
                <label for="password">Confirmer le mot de passe</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 offset-s4">
                <input type="submit" value="S'inscrire" name="register" class="btn btn-block btn-primary" />
            </div>
        </div>
        </form>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>