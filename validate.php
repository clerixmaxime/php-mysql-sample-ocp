<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) 
    {
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);

        //md5 hash password for security
        $password = md5($_POST['password']);

        //set session variables to display on welcome page
        $_SESSION['username'] = $username;
        //$_SESSION['avatar'] = $avatar_path;

        //create SQL query string for inserting data into the database
        $sql = "INSERT INTO users (username, email, password, avatar) "
        . "VALUES ('$username', '$email', '$password', 'images/shadowman.png')";

        if ($mysqli->query($sql) === true)
        {
            $_SESSION[ 'message' ] = "Registration succesful! Added $username to the database!";
            //redirect the user to welcome.php
            header( "location: welcome.php" );
        }
        else {
            $_SESSION['message'] = 'User could not be added to the database!';
        }
        $mysqli->close();  
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>