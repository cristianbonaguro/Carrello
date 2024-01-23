<?php
$error = "";
session_start();
    // unset($_SESSION['active_login']);
    if(isset($_SESSION['active_login']))
        header("Location: index.php");
    if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $psw = $_POST["password"];


    if($username == "Cristian" && $psw =="password")
    {
        $_SESSION["active_login"] = $username;
        header("Location: index.php");
    }
    else{
        $error= "username o passward errati";
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
        <!-- ? google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Nova+Square&family=Roboto+Mono:wght@600&display=swap"
      rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div class="hero-cont">
    <div class="hero">
        <nav>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li class="margin"><a href="">CARRELLO</a></li>
            </ul>
        </nav>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>
<div class="formcont">
<div id="contenitore">
        <div class="form">

            <div class="contenuto">
            <h1>Accedi</h1>
            <form method="post">
            <div class="input">
            <input type="text" name="username"placeholder="username">
            </div>
            <div class="input">
            <input type="password"name="password"placeholder="password">
            </div>
            <div class="input" id="login">
            <input type="submit"name="submit"value="Login">
            <?php
            
            if($error!="")
            {
                echo "<h1 id='error'>".$error."<h1>";
            }
        ?>
        </div>
            </form>
         </div>
        </div>
    </div>
</div>
</body>
</html>