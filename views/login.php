<?php  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/custom.sass">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/_variables.scss">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <h1 class="bumpy" >Welcome! To ITI Cafeteria</h1>
    </div>
<div class="col-md-4 col-md-offset-4 login">
    <form class="form-signin login-form" method="POST">
        <div class="text-center mb-4">
		<h1 class="h3 mb-3 font-weight-normal">Please LogIn</h1>
        </div>
        <div class="form-label-group login-label">
        <input class="form-control" type="email" name="email" placeholder="Email-Address">
        </div>
        <div class="form-label-group login-label">
        <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="logIn">Log In</button>
    </form>
    </div>
</body>
</html>

<?php
require_once('/opt/lampp/htdocs/cafeteria_system/models/Users.php');
if (isset($_POST['logIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userName = users::read("SELECT u.* FROM users u WHERE email = $email AND password = $password");
    var_dump($userName);
    if ($userName) {
        echo "valid username";
        if($userName['admin'] == 1){
        // header('Location: /cafeteria_system/views/AdminHome.php');
        echo "true";
        }
        elseif ($userName['admin'] == 0) {
        // header('Location: /cafeteria_system/views/userHome.php');
        echo "false";
        }
    }
    else {
        echo 'Email or Password is invalid ';
    }
}
?>