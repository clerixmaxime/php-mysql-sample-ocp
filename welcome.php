<?php 
//$_SESSION variables become available on this page
session_start(); 
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
        <div class="row s8 offset-s2">
            <h3 class="center-align">Bienvenue <?= $_SESSION['username'] ?></h3>
        </div>

        <?php
            $mysqli = new mysqli("mysql", "root", "mysql", "accounts");
            $sql = "SELECT username, email, avatar FROM users";
            //$result = mysqli_result object
            $result = $mysqli->query( $sql ); 
        ?>
        <div class="row s8 offset-s2">
            <h5 class="center-align">Personnes enregistrées à l'évènement</h5>
        </div>
        <div class="row s8 offset-s2">
            <ul class="collection">
        <?php
            //returns associative array of fetched row
            while( $row = $result->fetch_assoc() ){ 
                echo "<li class='collection-item avatar'>";
                echo "<img src='".$row['avatar']."' alt='' class='circle'>";
                echo "<span class='title'>".$row['username']."</span>";
                echo "<p>".$row['email']."</p>";
                echo "</li>";
            }
        ?>  
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