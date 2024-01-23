<?php
    session_start();

    if(!isset($_SESSION['active_login']))
        header("Location: login.php");

        if(isset($_GET['action'])){
            if ($_GET['action']=="svuota"){
                unset($_SESSION['carrello']);
                $_SESSION['spesa'] = 0;
                unset($_SESSION['cart']);
            }
            else if($_GET['action']=="meno"){
                $id = $_GET['id'];
                $_SESSION['spesa'] -= $_SESSION['carrello'][$id]['prezzo'];
                if($_SESSION['cart'][$id]==1){
                    unset($_SESSION['cart'][$id]);
                    unset($_SESSION['carrello'][$id]);
                   
                }
                else{
                    $_SESSION['cart'][$id]--;
                } 
                
            }
            else if($_GET['action']=="rimuovi"){
                $id = $_GET['id'];
                $_SESSION['spesa'] -= $_SESSION['cart'][$id]*$_SESSION['carrello'][$id]['prezzo'];
                unset($_SESSION['cart'][$id]);
                unset($_SESSION['carrello'][$id]);
                
            }

            else if($_GET['action']=="add"){
                $id = $_GET['id'];
                $_SESSION['cart'][$id]++;
                $_SESSION['spesa'] += $_SESSION['carrello'][$id]['prezzo'];
                
            }
        }

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
    <link rel="stylesheet" href="carrello.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il tuo Carrello</title>
</head>
<body>
<div class="hero-cont">
    <div class="hero">
                <h2>il tuo Carrello</h1>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>

<div class="contenitore">
    <div class="cart">
        <div class="tot red">
        <div class="prezzo">
        <h1> <?php if(isset($_SESSION['spesa'])&&$_SESSION['spesa']>0) echo "TOTALE : ".$_SESSION['spesa']." €"; else echo "IL CARRELLO E' VUOTO";?></h1>
        </div>
        <div class="btns">
            <div class="btn">
        <button><a href="index.php">CONTINUA ACQUISTI</a></button>
        </div>
        <div class="btn">
        <button><a href="carrello.php?action=svuota">SVUOTA IL CARRELLO</a></button>
        </div>
        <div class="btn">
        <button><a href="ricevuta.php">COMPLETA ACQUISTO</a></button>
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
           <button><a href="carrello.php?action=meno&id=$prodotti[id]"><img src="images/remove.png" alt="meno"></a></button>  
            </div>
            <div class="elem">
              <h1>$quantità</h1>  
            </div>
            <div class="elem cont"> 
              <button><a href="carrello.php?action=add&id=$prodotti[id]"><img src="images/add.png" alt="più"></a></button>
            </div>   
        </div>
        <div class="val cont">

            <div class="fifty cont $prodotti[genere]">
            <button ><a href="carrello.php?action=rimuovi&id=$prodotti[id]">Rimuovi</a></button>
            </div>
            <div class="fifty cont">
            <h1>$costo €</h1>
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