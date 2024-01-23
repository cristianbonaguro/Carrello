<?php
    session_start();


    $email = $_POST['email'];

    setcookie("email", $_POST['email'], time() + (86400 * 30), "/");
    setcookie("address", $_POST['adress'], time() + (86400 * 30), "/");
    setcookie("numcivico", $_POST['numcivico'], time() + (86400 * 30), "/");
    setcookie("cap", $_POST['cap'], time() + (86400 * 30), "/");
    setcookie("nc", $_POST['nc'], time() + (86400 * 30), "/");
    setcookie("nsc", $_POST['nsc'], time() + (86400 * 30), "/");
    setcookie("ds", $_POST['ds'], time() + (86400 * 30), "/");
    setcookie("cds", $_POST['cds'], time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- ? google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Nova+Square&family=Roboto+Mono:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ricevuta.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricevuta</title>
</head>
<body>
<div class="hero-cont">
    <div class="hero">
                <h2>Ricevuta Pagamento</h1>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>
<div class="contenitore">
    <div class="cart">
        <div class="tot red">
        <div class="prezzo">
            <h2>LA RINGRAZIAMO PER IL SUO ACQUISTO LE VERRA' INVIATA UN EMAIL DI CONFERMA ALL' INDIRIZZO : <?php echo $email?></h2>
            <br>
        <h1> <?php echo "SPESA TOTALE : ".$_SESSION['spesa']." €"; ?> </h1>
        </div>
        <div class="btns">
            <div class="btn">
        <button><a href="index.php?action=svuota&nome=$prodotti[id]">CONTINUA ACQUISTI</a></button>
        </div>
        </div>
    </div>
    <?php
if(isset($_SESSION['carrello'])){

 foreach($_SESSION['carrello'] as $prodotti )
 {
    $quantità = $_SESSION['cart'][$prodotti["id"]];

    $costo = $quantità*$prodotti['prezzo'];

    $cart = <<<HTML
        
    <div class="tot cont">
        <div class="img cont">
            <img src=$prodotti[image] alt="book">
        </div>
        <div class="other cont">
        <div class="nome">
                <h2 class="$prodotti[genere]"> $prodotti[name]</h2>
                <h1>$prodotti[autore]</h1>
        </div>
        <div class="qty cont">
            <div class="elem">
              <h1>QUANTITA' : $quantità</h1>  
            </div> 
        </div>
        <div class="val cont">
            <div class="fifty cont">
            <h1>COSTO : $costo €</h1>
        </div>
        </div>


        </div>
    </div>
    HTML;
    echo $cart;
}
}
    ?>
</div>
</div>
</body>
</html>