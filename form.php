<?php
    session_start();


    if(isset($_SESSION['spesa']))
    if($_SESSION['spesa']==0)
    header("Location: carrello.php");

    
    if(!isset($_SESSION['active_login']))
        header("Location: login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="form.css">
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Nova+Square&family=Roboto+Mono:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
</head>
<body>
<div class="hero-cont">
    <div class="hero">
                <h2>DATI PER L'ACQUISTO</h1>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>
<div class="formcont">
<div id="contenitore">
        <div class="form" >

            <div class="contenuto">
            <h1>INSERISCI I TUOI DATI</h1>
            <form action="ricevuta.php" method="post">
            <div class="input">
            <input type="email" name="email"placeholder="EMAIL"required>
            </div>
            <div class="input">
            <input type="text"name="adress"placeholder="INDIRIZZO"required>
            </div>
            <div class="input">
            <input type="text" name="numcivico"placeholder="NUM. CIVICO"required>
            </div>
            <div class="input">
            <input type="text"name="cap"placeholder="CAP"required>
            </div>
            <div class="input">
            <input type="text"name="nc"placeholder="NUMERO DI CARTA"required>
            </div>
            <div class="input">
            <input type="text"name="nsc"placeholder="NOME SULLA CARTA"required>
            </div>
            <div class="input">
            <input type="text"name="ds"placeholder="DATA DI SCADENZA mm/yy"required>
            </div>
            <div class="input">
            <input type="text"name="cds"placeholder="CODICE DI SICUREZZA"required>
            </div>
            <div class="input" id="login">
            <input type="reset"value="RESET">
        </div>
            <div class="input" id="login">
            <input type="submit"name="submit"value="INVIA">
        </div>
            </form>
         </div>
        </div>
    </div>
</div>
</body>
</html>