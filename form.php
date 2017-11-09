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
    <title>Starter Template - Materialize</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Red Hat OpenShift Démonstration</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="welcome.php">Home</a></li>
            <li><a href="form.php">Register</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
        <form class="col s8 offset-s2" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
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
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="confirmpassword" autocomplete="new-password" required >
                <label for="password">Confirm password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4 offset-s4">
                <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
            </div>
        </div>
        </form>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Démonstration OpenShift</h5>
            <p class="grey-text text-lighten-4"></p>
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Liens</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © Red Hat
        <a class="grey-text text-lighten-4 right" href="#!"></a>
        </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>