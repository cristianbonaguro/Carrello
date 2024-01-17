<?php
$libri = array();
$gialli = array();
$fantasy = array();
$fantascienza = array();
$horror = array();
$formazione = array();
$classici = array();
$storici = array();
$bestseller = array();



$libri['gialli']=['name'=>'Gialli','image'=>'images/gialli.png' ,'p1'=>'Detective','p2'=>'Omicidio','p3'=>'Suspense','voce'=>'Via a Gialli','id'=>'#2'];
$libri['fantascienza']=['name'=>'Fantascienza','image'=>'images/fantascientifico.png' ,'p1'=>'Robot','p2'=>'Futuro','p3'=>'Tecnologia','voce'=>'Via a Fantascienza','id'=>'#3'];
$libri['fantasy']=['name'=>'Fantasy','image'=>'images/fantasy.png' ,'p1'=>'Immaginazione','p2'=>'Avventura','p3'=>'Mondi fantstici','voce'=>'Via a Fantasy','id'=>'#4'];
$libri['horror']=['name'=>'Horror','image'=>'images/horror.png' ,'p1'=>'Paura','p2'=>'Terrore','p3'=>'Mostri','voce'=>'Via a Horror','id'=>'#5'];
$libri['formazione']=['name'=>'R.D.Formazione','image'=>'images/formazione.png' ,'p1'=>'Cresce','p2'=>'Impara','p3'=>'Cambia','voce'=>'Romanzi Di Formazione','id'=>'#6'];
$libri['classici']=['name'=>'Classici','image'=>'images/classici.png' ,'p1'=>'Eternità','p2'=>'Umanità','p3'=>'Ispirazione','voce'=>'Via a Classici','id'=>'#7'];
$libri['storici']=['name'=>'Storici','image'=>'images/storico.png' ,'p1'=>'Passato','p2'=>'Personaggi','p3'=>'Eventi','voce'=>'Via a Storici','id'=>'#8'];
$libri['best seller']=['name'=>'Best Seller','image'=>'images/bestseller.png' ,'p1'=>'Popolari','p2'=>'Divertenti','p3'=>'Coinvolgenti','voce'=>'Vai a Best Seller','id'=>'#9'];

// ? gialli
$gialli['1']=['name'=>'Uno studio in rosso','autore'=>'A.C.Doyle' ,'anteprima'=>'1887','editore'=>'Feltrinelli','pagine'=>'176','prezzo'=>'€9.50'];
$gialli['2']=['name'=>'Il valzer dei traditori','autore'=>'Rosa Teruzzi' ,'anteprima'=>'02/04/2023','editore'=>'Sonzogno','pagine'=>'160','prezzo'=>'€15.20'];
$gialli['3']=['name'=>'Tracce dal passato','autore'=>'Louise Penny' ,'anteprima'=>'28/11/2023','editore'=>'Einaudi','pagine'=>'568','prezzo'=>'€15.20'];
$gialli['4']=['name'=>'Nulla si distrugge','autore'=>'Marco Vichi' ,'anteprima'=>'20/06/2023','editore'=>'Guanda','pagine'=>'560','prezzo'=>'€19.00'];
$gialli['5']=['name'=>'La morra cinese','autore'=>'M. Mavaldi' ,'anteprima'=>'19/09/2023','editore'=>'Sellerio','pagine'=>'264','prezzo'=>'€14.25'];
$gialli['6']=['name'=>'La scomparsa di Stephanie Mailer','autore'=>'Joel Dicker' ,'anteprima'=>'04/07/2023','editore'=>'L.n.di Teseo','pagine'=>'708','prezzo'=>'€14.25'];
$gialli['7']=['name'=>'A fuoco lento','autore'=>'Philip Kerr' ,'anteprima'=>'10/10/2023','editore'=>'Fazi','pagine'=>'468','prezzo'=>'€16.15'];
$gialli['8']=['name'=>'I selvatici','autore'=>'S. Savioli' ,'anteprima'=>'06/06/2023','editore'=>'Feltrinelli','pagine'=>'272','prezzo'=>'€16.15'];

// ? fantascienza
$fantascienza['1']=['name'=>'Ready Player One','autore'=>'Ernest CLine' ,'anteprima'=>'16/08/2011','editore'=>'Deagostini','pagine'=>'443','prezzo'=>'€12'];
$fantascienza['2']=['name'=>'Le guide del tramonto','autore'=>'A.C.Clarke' ,'anteprima'=>'24/08/2020','editore'=>'Mondadori','pagine'=>'264','prezzo'=>'€12.35'];
$fantascienza['3']=['name'=>'Il condominio','autore'=>'J.G.Ballard' ,'anteprima'=>'09/07/2014','editore'=>'Feltrinelli','pagine'=>'189','prezzo'=>'€10.00'];
$fantascienza['4']=['name'=>'Cronache Marziane','autore'=>'Ray Bradbury' ,'anteprima'=>'03/06/2020','editore'=>'Mondadori','pagine'=>'276','prezzo'=>'€13.77'];
$fantascienza['5']=['name'=>'Fondazione I','autore'=>'I.Asimov' ,'anteprima'=>'15/09/2020','editore'=>'Mondari','pagine'=>'720','prezzo'=>'€17.57'];
$fantascienza['6']=['name'=>'Guida galattica per autostoppisti','autore'=>'D.Adams' ,'anteprima'=>'24/04/2016','editore'=>'Mondadori','pagine'=>'844','prezzo'=>'€16.15'];
$fantascienza['7']=['name'=>'DUNE: Il ciclo di Dune 1','autore'=>'F.Helbert' ,'anteprima'=>'14/11/2019','editore'=>'Fanucci','pagine'=>'640','prezzo'=>'€19.00'];
$fantascienza['8']=['name'=>'Fahrenheit 451','autore'=>'R.Bradbury' ,'anteprima'=>'23/08/2023','editore'=>'Mondadori','pagine'=>'180','prezzo'=>'€11.87'];

// ? fantasy
$fantasy['1']=['name'=>"La Compagnia dell'anello",'autore'=>'J.R.R.Tolkien' ,'anteprima'=>'24/07/1954','editore'=>'Bompiani','pagine'=>'606','prezzo'=>'€15.20'];
$fantasy['2']=['name'=>'Il canto del leviatano','autore'=>'A.R.Rednic','anteprima'=>'04/01/2022','editore'=>'Fanucci','pagine'=>'576','prezzo'=>'€23.75'];
$fantasy['3']=['name'=>'La casa sul mare celeste','autore'=>'T.J.Klune' ,'anteprima'=>'13/07/2021','editore'=>'Mondadori','pagine'=>'348','prezzo'=>'€17.10'];
$fantasy['4']=['name'=>'Fairy tale','autore'=>'S.King' ,'anteprima'=>'06/09/2022','editore'=>'Pandora','pagine'=>'677','prezzo'=>'€20.80'];
$fantasy['5']=['name'=>"H.P. e l'ordine della fenice",'autore'=>'J.K.Rowling' ,'anteprima'=>'21/06/20073','editore'=>'Salani','pagine'=>'880','prezzo'=>'€15.20'];
$fantasy['6']=['name'=>'Sotto la porta dei sussurri','autore'=>'T.J. Klune' ,'anteprima'=>'17/04/2022','editore'=>'Mondadori','pagine'=>'408','prezzo'=>'€18.05'];
$fantasy['7']=['name'=>'La via dei re','autore'=>'B.Sanderson' ,'anteprima'=>'1/12/2011','editore'=>'Fanucci','pagine'=>'1146','prezzo'=>'€12.00'];
$fantasy['8']=['name'=>'The Witcher: il guardiano degli innocenti','autore'=>'A.Sapkowski' ,'anteprima'=>'1993','editore'=>'L.s.d.Nord','pagine'=>'372','prezzo'=>'€15.20'];

// ? horror
$horror['1']=['name'=>'It','autore'=>'S.King' ,'anteprima'=>'15/09/1986','editore'=>'Pickwick Big','pagine'=>'1216','prezzo'=>'€18.00'];
$horror['2']=['name'=>'Teddy','autore'=>'J.Rekulak' ,'anteprima'=>'07/09/2022','editore'=>'Giunti','pagine'=>'416','prezzo'=>'16.20'];
$horror['3']=['name'=>'Notturno','autore'=>'M.Ashley' ,'anteprima'=>'17/10/2023','editore'=>'Vallardi A.','pagine'=>'256','prezzo'=>'€12.90'];
$horror['4']=['name'=>'La stazione','autore'=>'J.D.Michelis' ,'anteprima'=>'05/01/2022','editore'=>'Giunti','pagine'=>'876','prezzo'=>'€19.00'];
$horror['5']=['name'=>'La casa in fondo alla strada','autore'=>'K.McQuestion' ,'anteprima'=>'25/07/2023','editore'=>'Newton','pagine'=>'352','prezzo'=>'€9.90'];
$horror['6']=['name'=>"L'educazione delle farfalle",'autore'=>'D.Carrisi' ,'anteprima'=>'07/11/2023','editore'=>'Longanesi','pagine'=>'432','prezzo'=>'€21.85'];
$horror['7']=['name'=>'Io non ho paura','autore'=>'N.Ammaniti' ,'anteprima'=>'2001','editore'=>'Einaudi','pagine'=>'230','prezzo'=>'€13.30'];
$horror['8']=['name'=>'Holly','autore'=>'S.King' ,'anteprima'=>'05/09/2023','editore'=>'Sperling','pagine'=>'512','prezzo'=>'€20.80'];

// ? formazione
$formazione['1']=['name'=>'Sulla strada','autore'=>'J.Kerouac','anteprima'=>'24/05/2016','editore'=>'Mondadori','pagine'=>'403','prezzo'=>'€9.42'];
$formazione['2']=['name'=>'Martin Eden','autore'=>'Jack London' ,'anteprima'=>'22/05/2019','editore'=>'Mondadori','pagine'=>'448','prezzo'=>'€11.00'];
$formazione['3']=['name'=>'Il signore delle mosche','autore'=>'W.Golding' ,'anteprima'=>'31/05/2016','editore'=>'Mondadori','pagine'=>'293','prezzo'=>'€12.00'];
$formazione['4']=['name'=>'Un giorno questo dolore ti sarà utile','autore'=>'P.Cameron' ,'anteprima'=>'09/06/2010','editore'=>'Adelphi','pagine'=>'206','prezzo'=>'€12.00'];
$formazione['5']=['name'=>'Il giovane Holden','autore'=>'J.D.Salinger' ,'anteprima'=>'06/05/2014','editore'=>'Einaudi','pagine'=>'251','prezzo'=>'€12.35'];
$formazione['6']=['name'=>'Molto forte, incredibilmente vicino','autore'=>'J.S.Foer' ,'anteprima'=>'28/01/2016','editore'=>'Guanda','pagine'=>'400','prezzo'=>'€15.20'];
$formazione['7']=['name'=>'Appredistato di Duddy Kravitz','autore'=>'M.Richler' ,'anteprima'=>'31/08/2010','editore'=>'Adelphi','pagine'=>'360','prezzo'=>'€9.60'];
$formazione['8']=['name'=>'Il buio oltre la siepe','autore'=>'Harper Lee' ,'anteprima'=>'26/02/2013','editore'=>'Feltrinelli','pagine'=>'304','prezzo'=>'€9.50'];

// ? classici
$classici['1']=['name'=>'I promessi sposi','autore'=>'A.Manzoni' ,'anteprima'=>'1827','editore'=>'Rizzoli','pagine'=>'1328','prezzo'=>'€17.10'];
$classici['2']=['name'=>'La divina commedia','autore'=>'Dante' ,'anteprima'=>'1472','editore'=>'Bur','pagine'=>'656','prezzo'=>'€14.00'];
$classici['3']=['name'=>'Guerra e pace','autore'=>'Tolstoj' ,'anteprima'=>'1868','editore'=>'Garzanti','pagine'=>'1472','prezzo'=>'€18.05'];
$classici['4']=['name'=>'Il barone rampante','autore'=>'Italo Calvino' ,'anteprima'=>'1957','editore'=>'Mondadori','pagine'=>'234','prezzo'=>'€11.00'];
$classici['5']=['name'=>'Don Chisciotte della Mancia','autore'=>'M.D.Cervantes' ,'anteprima'=>'1605','editore'=>'Einaudi','pagine'=>'1440','prezzo'=>'€24.70'];
$classici['6']=['name'=>'I Miserabili','autore'=>'Victor Hugo' ,'anteprima'=>'1862','editore'=>'Rizzoli','pagine'=>'1635','prezzo'=>'€18.05'];
$classici['7']=['name'=>'Il conte di Montecristo','autore'=>'A.Dumas' ,'anteprima'=>'15/01/1846','editore'=>'Rizzoli','pagine'=>'1249','prezzo'=>'€15.66'];
$classici['8']=['name'=>'Delitto e castigo','autore'=>'F.Dostoevskij' ,'anteprima'=>'1866','editore'=>'Feltrinelli','pagine'=>'608','prezzo'=>'€12.00'];

// ? storici
$storici['1']=['name'=>'Alabama','autore'=>'A.Barbero' ,'anteprima'=>'22/04/2021','editore'=>'Sellero','pagine'=>'272','prezzo'=>'€14.50'];
$storici['2']=['name'=>"La ragazza con l'orecchino di perla",'autore'=>'T.Chevalier' ,'anteprima'=>'03/09/2020','editore'=>'Neri Pozza','pagine'=>'238','prezzo'=>'€11.80'];
$storici['3']=['name'=>'I Medici, una dinastia al potere','autore'=>'M.Strukul' ,'anteprima'=>'01/10/2020','editore'=>'Newton','pagine'=>'384','prezzo'=>'€3.12'];
$storici['4']=['name'=>'Memorie di Adriano','autore'=>'M.Yourcenar' ,'anteprima'=>'10/02/2014','editore'=>'Einaudi','pagine'=>'354','prezzo'=>'€12.80'];
$storici['5']=['name'=>'Il nome della rosa','autore'=>'Umberto Eco' ,'anteprima'=>'1980','editore'=>'L.n.d.Teseo','pagine'=>'624','prezzo'=>'€18.50'];
$storici['6']=['name'=>'Notre-Dame de Paris','autore'=>'Victor Hugo' ,'anteprima'=>'16/03/1831','editore'=>'Mondadori','pagine'=>'512','prezzo'=>'€23.75'];
$storici['7']=['name'=>'Lo scudo di Talos','autore'=>'V.M.Manfredi' ,'anteprima'=>'1988','editore'=>'Mondadori','pagine'=>'318','prezzo'=>'€13.70'];
$storici['8']=['name'=>'Gli occhi di Venezia','autore'=>'A.Barbero' ,'anteprima'=>'23/12/2020','editore'=>'Mondadori','pagine'=>'432','prezzo'=>'€12.35'];

// ? best seller
$bestseller['1']=['name'=>'Il codice Da Vinci','autore'=>'Dan Brown' ,'anteprima'=>'2009','editore'=>'Mondadori','pagine'=>'516','prezzo'=>'€14.72'];
$bestseller['2']=['name'=>'H.P. e la pietra filosofale','autore'=>'J.K.Rowling' ,'anteprima'=>'26/06/1997','editore'=>'Salani','pagine'=>'304','prezzo'=>'€7.00'];
$bestseller['3']=['name'=>'Lo Hobbit','autore'=>'J.R.R.Tolkien' ,'anteprima'=>'1937','editore'=>'Adelphi','pagine'=>'342','prezzo'=>'€12.00'];
$bestseller['4']=['name'=>"l'alchimista",'autore'=>'Paul Coelho' ,'anteprima'=>'1988','editore'=>'L.n.d.Teseo','pagine'=>'182','prezzo'=>'€14.25'];
$bestseller['5']=['name'=>"Il leone, la strega e l'armadio",'autore'=>'C.S.Lewis' ,'anteprima'=>'2005','editore'=>'Mondadori','pagine'=>'523','prezzo'=>'€33.25'];
$bestseller['6']=['name'=>'Cinquanta sfumature di grigio','autore'=>'E.L.James' ,'anteprima'=>'2000','editore'=>'Mondadori','pagine'=>'560','prezzo'=>'€12.82'];
$bestseller['7']=['name'=>'Le due città','autore'=>'C.Dickens' ,'anteprima'=>'30/04/1859','editore'=>'Rizzoli','pagine'=>'454','prezzo'=>'€10.92'];
$bestseller['8']=['name'=>'Il piccolo principe','autore'=>'A.D.S.Exupéry' ,'anteprima'=>'06/04/1943','editore'=>'Rizzoli','pagine'=>'141','prezzo'=>'€5.90'];
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
    <!--? header -->
    <link rel="stylesheet" href="index.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="hero-cont">
    <div class="hero">
        <nav>
            <ul>
                <li><a href="" >LOGIN</a></li>
                <li class="margin"><a href="#1">GENERI</a></li>
                <li class="margin"><a href="">CARRELLO</a></li>
            </ul>
        </nav>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>
<!-- ? generi -->
<div id="1" class="contenitore">
<?php

foreach($libri as $generi) { 

    $libri = <<<HTML
         <div class="card">
        <div class="border">
          <div class="up_g">
            <div class="nome generi">
            <img src= $generi[image] alt="image">
            </div>
          </div>
          <div class="down_g">
           <div class="text">
            <div class="gen">
            <h2>$generi[name]</h2>
        </div>
            <div class="description">
            <div class="keyword">
                <h1>Parole chiave</h1>
            </div>
            <div class="key">
            <h3>$generi[p1]</h3>
            </div>
            <div class="key">
            <h3>$generi[p2]</h3>
            </div>
            <div class="key">
            <h3>$generi[p3]</h3>
           </div>
        </div>
        </div>
        <div class="bottonig">
            <div class="btn">
                <button class="generibnt"><a href=$generi[id]>$generi[voce]</a></button>
            </div>
        </div>
          </div>
        </div>
      </div>
    HTML;
    echo $libri;
}
?>
</div>

<div id ="2" class="content">
    <div class="gifts">
    <div class="gift ggift">
            <img src="images/bgiallo.png">
        </div>
    </div>

</div>


<div  class="contenitore">
    <?php
foreach($gialli as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome giallo">
                <h2>Gialli</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="giallo">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="giallo">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="3"class="content">
    <div class="gifts">
    <div class="gift fgift">
            <img src="images/fbaule.png">
        </div>
    </div>

</div>

<!--Fantascienza -->
<div  class="contenitore">
    <?php
foreach($fantascienza as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome fantascienza">
                <h2>Fantascienza</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="fantascienza">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="fantascienza">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="4"class="content">
    <div class="gifts">
    <div class="gift fagift">
            <img src="images/fabaule.png">
        </div>
    </div>

</div>

<!--Fantasy -->
<div  class="contenitore">
    <?php
foreach($fantasy as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome fantasy">
                <h2>Fantasy</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="fantasy">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="fantasy">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div  id ="5"class="content">
    <div class="gifts">
    <div class="gift hgift">
            <img src="images/hbaule.png">
        </div>
    </div>

</div>
<!--horror -->
<div class="contenitore">
    <?php
foreach($horror as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome horror">
                <h2>Horror</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="horror">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="horror">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="6" class="content">
    <div class="gifts">
    <div class="gift fogift">
            <img src="images/fobaule.png">
        </div>
    </div>
</div>

<!--formazione -->
<div class="contenitore">
    <?php
foreach($formazione as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome formazione">
                <h2>Formazione</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="formazione">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="formazione">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="7"class="content">
    <div class="gifts">
    <div class="gift cgift">
            <img src="images/cbaule.png">
        </div>
    </div>
</div>

<!--classici -->
<div  class="contenitore">
    <?php
foreach($classici as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome classici">
                <h2>Classici</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="classici">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="classici">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="8"  class="content">
    <div class="gifts">
    <div class="gift sgift">
            <img src="images/sbaule.png">
        </div>
    </div>
</div>

<!--storici -->
<div class="contenitore">
    <?php
foreach($storici as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome storico">
                <h2>Storici</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="storico">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="storico">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

<div id ="9" class="content">
    <div class="gifts">
    <div class="gift bsgift">
            <img src="images/bsbaule.png">
        </div>
    </div>
</div>

<!--best seller -->
<div class="contenitore">
    <?php
foreach($bestseller as $book) { 

$libri = <<<HTML
<div class="card">
        <div class="border">
          <div class="up">
            <div class="nome best">
                <h2>Best Seller</h2>
              <h1>$book[name]</h1>
            </div>
          </div>
          <div class="down">
            <div class="voci">
            <div class="voce">
                <div class="info">
                    <h2>Autore</h2>
                </div>
                <div class="risp">
                    <h2>$book[autore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Anteprima</h2>
                </div>
                <div class="risp">
                    <h2>$book[anteprima]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Editore</h2>
                </div>
                <div class="risp">
                    <h2>$book[editore]</h2>
                </div>
            </div>
            <div class="voce">
                <div class="info">
                    <h2>Pagine</h2>
                </div>
                <div class="risp">
                    <h2>$book[pagine]</h2>
                </div>
            </div>
            <div  class="voce">
                <div class="info">
                    <h2>Costo</h2>
                </div>
                <div class="risp">
                    <h2>$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="best">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="best">Aggiungi carrello</button>
            </div>
        </div>
          </div>
        </div>
      </div>
HTML;
echo $libri;
}
?>

</div>

    <!-- ? btn scroll -->
    <button id="btnscroll" onclick="topFunction()"><img src="images/upload.png" alt="arrow"></button>
  </body>
  <script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 300) {
            document.getElementById("btnscroll").style.display = "block";
        }
        else{
            document.getElementById("btnscroll").style.display = "none";
        }
    }

    function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
  </script>
</html>
