<?php
session_start();


$libri = array();
$gialli = array();
$fantasy = array();
$fantascienza = array();
$horror = array();
$formazione = array();
$classici = array();
$storici = array();
$bestseller = array();


if(!isset($_SESSION['carrello']))
$_SESSION['spesa'] = 0;


$libri['gialli']=['name'=>'Gialli','image'=>'images/gialli.png' ,'p1'=>'Detective','p2'=>'Omicidio','p3'=>'Suspense','voce'=>'Vai a Gialli','id'=>'#2'];
$libri['fantascienza']=['name'=>'Fantascienza','image'=>'images/fantascientifico.png' ,'p1'=>'Robot','p2'=>'Futuro','p3'=>'Tecnologia','voce'=>'Vai a Fantascienza','id'=>'#3'];
$libri['fantasy']=['name'=>'Fantasy','image'=>'images/fantasy.png' ,'p1'=>'Immaginazione','p2'=>'Avventura','p3'=>'Mondi fantstici','voce'=>'Vai a Fantasy','id'=>'#4'];
$libri['horror']=['name'=>'Horror','image'=>'images/horror.png' ,'p1'=>'Paura','p2'=>'Terrore','p3'=>'Mostri','voce'=>'Vai a Horror','id'=>'#5'];
$libri['formazione']=['name'=>'R.D.Formazione','image'=>'images/formazione.png' ,'p1'=>'Cresce','p2'=>'Impara','p3'=>'Cambia','voce'=>'Romanzi Di Formazione','id'=>'#6'];
$libri['classici']=['name'=>'Classici','image'=>'images/classici.png' ,'p1'=>'Eternità','p2'=>'Umanità','p3'=>'Ispirazione','voce'=>'Vai a Classici','id'=>'#7'];
$libri['storici']=['name'=>'Storici','image'=>'images/storico.png' ,'p1'=>'Passato','p2'=>'Personaggi','p3'=>'Eventi','voce'=>'Vai a Storici','id'=>'#8'];
$libri['best seller']=['name'=>'Best Seller','image'=>'images/bestseller.png' ,'p1'=>'Popolari','p2'=>'Divertenti','p3'=>'Coinvolgenti','voce'=>'Vai a Best Seller','id'=>'#9'];

// ? gialli
$gialli['1g']=['id'=>'1g','name'=>'Uno studio in rosso','autore'=>'A.C.Doyle' ,'anteprima'=>'1887','editore'=>'Feltrinelli','pagine'=>'176','prezzo'=> 9.50 , 'link'=>"https://books.google.it/books?id=cvSsBwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/lo_studio_in_rosso.jpg'];//1
$gialli['2g']=['id'=>'2g','name'=>'Il valzer dei traditori','autore'=>'Rosa Teruzzi' ,'anteprima'=>'02/04/2023','editore'=>'Sonzogno','pagine'=>'160','prezzo'=> 15.20,'link'=>"https://books.google.it/books?id=yHe6EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/il_valzer.jpg'];//2
$gialli['3g']=['id'=>'3g','name'=>'Tracce dal passato','autore'=>'Louise Penny' ,'anteprima'=>'28/11/2023','editore'=>'Einaudi','pagine'=>'568','prezzo'=> 15.20 , 'link'=>"https://books.google.it/books?id=I0nkEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/tracce_dal_passato.jpg'];//3
$gialli['4g']=['id'=>'4g','name'=>'Nulla si distrugge','autore'=>'Marco Vichi' ,'anteprima'=>'20/06/2023','editore'=>'Guanda','pagine'=>'560','prezzo'=> 19.00, 'link'=>"https://books.google.it/books?id=bvjEEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/nulla_si_distrugge.jpg'];//4
$gialli['5g']=['id'=>'5g','name'=>'La morra cinese','autore'=>'M. Mavaldi' ,'anteprima'=>'19/09/2023','editore'=>'Sellerio','pagine'=>'264','prezzo'=> 14.25, 'link'=>"https://books.google.it/books?id=1ZrWEAAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'giallo','image'=>'images/la_morra_cinese.jpg'];//5
$gialli['6g']=['id'=>'6g','name'=>'La scomparsa di Stephanie Mailer','autore'=>'Joel Dicker' ,'anteprima'=>'04/07/2023','editore'=>'L.n.di Teseo','pagine'=>'708','prezzo'=>14.25, 'link'=>"https://books.google.it/books?id=E75ZDwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/la_scoperta.jpg'];//6
$gialli['7g']=['id'=>'7g','name'=>'A fuoco lento','autore'=>'Philip Kerr' ,'anteprima'=>'10/10/2023','editore'=>'Fazi','pagine'=>'468','prezzo'=> 16.15, 'link'=>"https://books.google.it/books?id=NwbXEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/a_fuoco_lento.png'];//7
$gialli['8g']=['id'=>'8g','name'=>'I selvatici','autore'=>'S. Savioli' ,'anteprima'=>'06/06/2023','editore'=>'Feltrinelli','pagine'=>'272','prezzo'=> 16.15, 'link'=>"https://books.google.it/books?id=ZCnCEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'giallo','image'=>'images/i_selvatici.jpeg'];//8

// ? fantascienza
$fantascienza['1f']=['id'=>'1f','name'=>'Ready Player One','autore'=>'Ernest CLine' ,'anteprima'=>'16/08/2011','editore'=>'Deagostini','pagine'=>'443','prezzo'=>12, 'link'=>"https://books.google.it/books?id=Pg1EDwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantascienza','image'=>'images/reasy_player.jpg'];
$fantascienza['2f']=['id'=>'2f','name'=>'Le guide del tramonto','autore'=>'A.C.Clarke' ,'anteprima'=>'24/08/2020','editore'=>'Mondadori','pagine'=>'264','prezzo'=>12.35, 'link'=>"https://books.google.it/books?id=KpTtDAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantascienza','image'=>'images/le_guide.jpg'];
$fantascienza['3f']=['id'=>'3f','name'=>'Il condominio','autore'=>'J.G.Ballard' ,'anteprima'=>'09/07/2014','editore'=>'Feltrinelli','pagine'=>'189','prezzo'=>10.00, 'link'=>"https://books.google.it/books?id=CLKOCgAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'fantascienza','image'=>'images/il_condominio.jpg'];
$fantascienza['4f']=['id'=>'4f','name'=>'Cronache Marziane','autore'=>'Ray Bradbury' ,'anteprima'=>'03/06/2020','editore'=>'Mondadori','pagine'=>'276','prezzo'=>13.77, 'link'=>"https://books.google.it/books?id=A_tCDAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantascienza','image'=>'images/cronache_marziane.jpg'];
$fantascienza['5f']=['id'=>'5f','name'=>'Fondazione','autore'=>'I.Asimov' ,'anteprima'=>'1951','editore'=>'Mondari','pagine'=>'255','prezzo'=>17.57, 'link'=>"https://books.google.it/books?id=AfjDEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantascienza','image'=>'images/fondazione.jpg'];
$fantascienza['6f']=['id'=>'6f','name'=>'Guida galattica per autostoppisti','autore'=>'D.Adams' ,'anteprima'=>'24/04/2016','editore'=>'Mondadori','pagine'=>'844','prezzo'=>16.15, 'link'=>"https://books.google.it/books?id=-wJ1ACI7ooAC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantascienza','image'=>'images/guida_galattica.jpg'];
$fantascienza['7f']=['id'=>'7f','name'=>'DUNE: Il ciclo di Dune 1','autore'=>'F.Helbert' ,'anteprima'=>'14/11/2019','editore'=>'Fanucci','pagine'=>'640','prezzo'=>19.00, 'link'=>"https://books.google.it/books?id=RrxlAwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PR1&output=embed", 'genere' => 'fantascienza','image'=>'images/dune.jpg'];
$fantascienza['8f']=['id'=>'8f','name'=>'Neuromante','autore'=>'W.Gibson' ,'anteprima'=>'03/03/2017','editore'=>'Mondadori','pagine'=>'266','prezzo'=>12.35, 'link'=>"https://books.google.it/books?id=UEXMEAAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'fantascienza','image'=>'images/necromante.jpg'];

// ? fantasy
$fantasy['1fa']=['id'=>'1fa','name'=>"La Compagnia dell'anello",'autore'=>'J.R.R.Tolkien' ,'anteprima'=>'24/07/1954','editore'=>'Bompiani','pagine'=>'606','prezzo'=>15.20, 'link'=>"https://books.google.it/books?id=jb-4DwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/la_compagnia.jpg'];
$fantasy['2fa']=['id'=>'2fa','name'=>'Il canto del leviatano','autore'=>'A.R.Rednic','anteprima'=>'04/01/2022','editore'=>'Fanucci','pagine'=>'576','prezzo'=>23.75, 'link'=>"https://books.google.it/books?id=yyhVEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/canto_del_leviatano.png'];
$fantasy['3fa']=['id'=>'3fa','name'=>'La casa sul mare celeste','autore'=>'T.J.Klune' ,'anteprima'=>'13/07/2021','editore'=>'Mondadori','pagine'=>'348','prezzo'=>17.10, 'link'=>"https://books.google.it/books?id=bIgzEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/casa-sul-mare.jpg'];
$fantasy['4fa']=['id'=>'4fa','name'=>'Fairy tale','autore'=>'S.King' ,'anteprima'=>'06/09/2022','editore'=>'Sperling','pagine'=>'677','prezzo'=>20.80, 'link'=>"https://books.google.it/books?id=i5Z-EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/fairy_tale.jpg'];
$fantasy['5fa']=['id'=>'5fa','name'=>"H.P. e l'ordine della fenice",'autore'=>'J.K.Rowling' ,'anteprima'=>'21/06/20073','editore'=>'Salani','pagine'=>'880','prezzo'=>15.20, 'link'=>"https://books.google.it/books?id=pUc1swouaGYC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/hp5.jpg'];
$fantasy['6fa']=['id'=>'6fa','name'=>'Sotto la porta dei sussurri','autore'=>'T.J. Klune' ,'anteprima'=>'17/04/2022','editore'=>'Mondadori','pagine'=>'408','prezzo'=>18.05, 'link'=>"https://books.google.it/books?id=CaNrEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/sotto_la_porta.jpg'];
$fantasy['7fa']=['id'=>'7fa','name'=>'Le armi della luce','autore'=>'Ken Follet' ,'anteprima'=>'26/09/2023','editore'=>'Mondadori','pagine'=>'712','prezzo'=>25.65, 'link'=>"https://books.google.it/books?id=Lsq8EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/le_armi.jpg'];
$fantasy['8fa']=['id'=>'8fa','name'=>'The Witcher: La torre della rondine','autore'=>'A.Sapkowski' ,'anteprima'=>'1997','editore'=>'L.s.d.Nord','pagine'=>'516','prezzo'=>15.20, 'link'=>"https://books.google.it/books?id=BewwBQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'fantasy','image'=>'images/torre_della_rondine.jpg'];

// ? horror
$horror['1h']=['id'=>'1h','name'=>'Carrie','autore'=>'S.King' ,'anteprima'=>'15/09/1986','editore'=>'Bompiani','pagine'=>'224','prezzo'=>13.00, 'link'=>"https://books.google.it/books?id=BEBvDwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/carrie.jpg'];
$horror['2h']=['id'=>'2h','name'=>'Teddy','autore'=>'J.Rekulak' ,'anteprima'=>'07/09/2022','editore'=>'Giunti','pagine'=>'416','prezzo'=>16.20, 'link'=>"https://books.google.it/books?id=-yqGEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/teddy.jpg'];
$horror['3h']=['id'=>'3h','name'=>'Notturno','autore'=>'M.Ashley' ,'anteprima'=>'17/10/2023','editore'=>'Vallardi A.','pagine'=>'256','prezzo'=>12.90, 'link'=>"https://books.google.it/books?id=xVrcEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/notturno.jpeg'];
$horror['4h']=['id'=>'4h','name'=>'La stazione','autore'=>'J.D.Michelis' ,'anteprima'=>'05/01/2022','editore'=>'Giunti','pagine'=>'876','prezzo'=>19.00, 'link'=>"https://books.google.it/books?id=Mi1VEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/stazione.jpg'];
$horror['5h']=['id'=>'5h','name'=>'La casa in fondo alla strada','autore'=>'K.McQuestion' ,'anteprima'=>'25/07/2023','editore'=>'Newton','pagine'=>'352','prezzo'=>9.90, 'link'=>"https://books.google.it/books?id=SkTIEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/la_casa_in_fondo.jpg'];
$horror['6h']=['id'=>'6h','name'=>"L'educazione delle farfalle",'autore'=>'D.Carrisi' ,'anteprima'=>'07/11/2023','editore'=>'Longanesi','pagine'=>'432','prezzo'=>21.85, 'link'=>"https://books.google.it/books?id=M3_gEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/farfalle.jpg'];
$horror['7h']=['id'=>'7h','name'=>'Io non ho paura','autore'=>'N.Ammaniti' ,'anteprima'=>'2001','editore'=>'Einaudi','pagine'=>'230','prezzo'=>13.30, 'link'=>"https://books.google.it/books?id=HbhbQLl3-R0C&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'horror','image'=>'images/non_paura.jpg'];
$horror['8h']=['id'=>'8h','name'=>'Holly','autore'=>'S.King' ,'anteprima'=>'05/09/2023','editore'=>'Sperling','pagine'=>'512','prezzo'=>20.80, 'link'=>"https://books.google.it/books?id=R_i8EAAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'horror','image'=>'images/holly.jpg'];

// ? formazione
$formazione['1fo']=['id'=>'1fo','name'=>'Sulla strada','autore'=>'J.Kerouac','anteprima'=>'24/05/2016','editore'=>'Mondadori','pagine'=>'403','prezzo'=>9.42, 'link'=>"https://books.google.it/books?id=uhOCBYN-3TAC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/sulla_strada.jpg'];
$formazione['2fo']=['id'=>'2fo','name'=>'Martin Eden','autore'=>'Jack London' ,'anteprima'=>'22/05/2019','editore'=>'Mondadori','pagine'=>'448','prezzo'=>11.00, 'link'=>"https://books.google.it/books?id=nWERDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/martin_eden.jpg'];
$formazione['3fo']=['id'=>'3fo','name'=>'Il signore delle mosche','autore'=>'W.Golding' ,'anteprima'=>'31/05/2016','editore'=>'Mondadori','pagine'=>'293','prezzo'=>12.00, 'link'=>"https://books.google.it/books?id=9Io0EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/il_signore_delle_mosche.jpg'];
$formazione['4fo']=['id'=>'4fo','name'=>'Un giorno questo dolore ti sarà utile','autore'=>'P.Cameron' ,'anteprima'=>'09/06/2010','editore'=>'Adelphi','pagine'=>'206','prezzo'=>12.00, 'link'=>"https://books.google.it/books?id=ctTaDwAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'formazione','image'=>'images/un_giorno_questo_dolore_ti_sara_utile.jpeg'];
$formazione['5fo']=['id'=>'5fo','name'=>"Fame d'aria",'autore'=>'D.Mencarelli' ,'anteprima'=>'17/01/2023','editore'=>'Mondadori','pagine'=>'108','prezzo'=>18.00, 'link'=>"https://books.google.it/books?id=toOeEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/fame_daria.jpg'];
$formazione['6fo']=['id'=>'6fo','name'=>'Molto forte, incredibilmente vicino','autore'=>'J.S.Foer' ,'anteprima'=>'28/01/2016','editore'=>'Guanda','pagine'=>'400','prezzo'=>15.20, 'link'=>"https://books.google.it/books?id=6fCepOmrUJEC&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed", 'genere' => 'formazione','image'=>'images/molto_forte_incredibilmente_vicino.jpg'];
$formazione['7fo']=['id'=>'7fo','name'=>'Appredistato di Duddy Kravitz','autore'=>'M.Richler' ,'anteprima'=>'31/08/2010','editore'=>'Adelphi','pagine'=>'360','prezzo'=>9.60, 'link'=>"https://books.google.it/books?id=H7-rBAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/apprendistato_di_duddy_kravitz.jpeg'];
$formazione['8fo']=['id'=>'8fo','name'=>'Il buio oltre la siepe','autore'=>'Harper Lee' ,'anteprima'=>'26/02/2013','editore'=>'Feltrinelli','pagine'=>'304','prezzo'=>9.50, 'link'=>"https://books.google.it/books?id=5LaXDwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'formazione','image'=>'images/il_buio_oltre_la_siepe.jpg'];

// ? classici
$classici['1c']=['id'=>'1c','name'=>'I promessi sposi','autore'=>'A.Manzoni' ,'anteprima'=>'1827','editore'=>'Rizzoli','pagine'=>'1328','prezzo'=>17.10, 'link'=>"https://books.google.it/books?id=I1F-EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/i_promessi_sposi.jpeg'];
$classici['2c']=['id'=>'2c','name'=>'La divina commedia','autore'=>'Dante' ,'anteprima'=>'1472','editore'=>'Bur','pagine'=>'656','prezzo'=>14.00, 'link'=>"https://books.google.it/books?id=2eBnn48COpoC&newbks=0&hl=it&pg=PA3&output=embed", 'genere' => 'classici','image'=>'images/commedia.jpg'];
$classici['3c']=['id'=>'3c','name'=>'Ulisse','autore'=>'James Joyce' ,'anteprima'=>'1920','editore'=>'Mondadori','pagine'=>'1282','prezzo'=>76.00, 'link'=>"https://books.google.it/books?id=cilLEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/ulisse.jpg'];
$classici['4c']=['id'=>'4c','name'=>'Il barone rampante','autore'=>'I.Calvino' ,'anteprima'=>'1957','editore'=>'Mondadori','pagine'=>'234','prezzo'=>11.00, 'link'=>"https://books.google.it/books?id=QerIEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/il_barone_rampante.jpg'];
$classici['5c']=['id'=>'5c','name'=>'Don Chisciotte della Mancia','autore'=>'M.D.Cervantes' ,'anteprima'=>'1605','editore'=>'Einaudi','pagine'=>'1440','prezzo'=>24.70, 'link'=>"https://books.google.it/books?id=JnW1DwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/don_chisciotte.jpg'];
$classici['6c']=['id'=>'6c','name'=>'I Miserabili','autore'=>'Victor Hugo' ,'anteprima'=>'1862','editore'=>'Rizzoli','pagine'=>'1635','prezzo'=>18.05, 'link'=>"https://books.google.it/books?id=KPAZ8PlrFCIC&newbks=0&hl=it&pg=PA3&output=embed", 'genere' => 'classici','image'=>'images/i_miserabili.jpg'];
$classici['7c']=['id'=>'7c','name'=>'Il conte di Montecristo','autore'=>'A.Dumas' ,'anteprima'=>'15/01/1846','editore'=>'Rizzoli','pagine'=>'1249','prezzo'=>15.66, 'link'=>"https://books.google.it/books?id=S4l-EAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/il_conte_di_montecristo.jpg'];
$classici['8c']=['id'=>'8c','name'=>'Delitto e castigo','autore'=>'F.Dostoevskij' ,'anteprima'=>'1866','editore'=>'Feltrinelli','pagine'=>'608','prezzo'=>12.00, 'link'=>"https://books.google.it/books?id=b3SXCgAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'classici','image'=>'images/delitto_e_castigo.jpg'];

// ? storici
$storici['1s']=['id'=>'1s','name'=>'Alabama','autore'=>'A.Barbero' ,'anteprima'=>'22/04/2021','editore'=>'Sellero','pagine'=>'272','prezzo'=>14.50, 'link'=>"https://books.google.it/books?id=K0ApEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/alabama.jpg'];
$storici['2s']=['id'=>'2s','name'=>"L'ultima legione",'autore'=>'V.M.Manfredi' ,'anteprima'=>'2002','editore'=>'Mondadori','pagine'=>'472','prezzo'=>10.45, 'link'=>"https://books.google.it/books?id=86bDT9lxse8C&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/l_ultima_legione.jpg'];
$storici['3s']=['id'=>'3s','name'=>'I Medici, una dinastia al potere','autore'=>'M.Strukul' ,'anteprima'=>'01/10/2020','editore'=>'Newton','pagine'=>'384','prezzo'=>3.12, 'link'=>"https://books.google.it/books?id=_EIdDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/i_medici.jpg'];
$storici['4s']=['id'=>'4s','name'=>'Memorie di Adriano','autore'=>'M.Yourcenar' ,'anteprima'=>'10/02/2014','editore'=>'Einaudi','pagine'=>'354','prezzo'=>12.80, 'link'=>"https://books.google.it/books?id=sVNFEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/memorie_di_adriano.jpg'];
$storici['5s']=['id'=>'5s','name'=>'Il nome della rosa','autore'=>'Umberto Eco' ,'anteprima'=>'1980','editore'=>'L.n.d.Teseo','pagine'=>'624','prezzo'=>18.50, 'link'=>"https://books.google.it/books?id=5A_YDwAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/il_nome_della_rosa.jpg'];
$storici['6s']=['id'=>'6s','name'=>'Notre-Dame de Paris','autore'=>'Victor Hugo' ,'anteprima'=>'16/03/1831','editore'=>'Mondadori','pagine'=>'512','prezzo'=>23.75, 'link'=>"https://books.google.it/books?id=nPr2DAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/notredame.jpg'];
$storici['7s']=['id'=>'7s','name'=>'Lo scudo di Talos','autore'=>'V.M.Manfredi' ,'anteprima'=>'1988','editore'=>'Mondadori','pagine'=>'318','prezzo'=>13.70, 'link'=>"https://books.google.it/books?id=dAWxDAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images/lo_scudo_di_talos.jpg'];
$storici['8s']=['id'=>'8s','name'=>'Gli occhi di Venezia','autore'=>'A.Barbero' ,'anteprima'=>'23/12/2020','editore'=>'Mondadori','pagine'=>'432','prezzo'=>12.35, 'link'=>"https://books.google.it/books?id=XCnCYWVIcGkC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'storico','image'=>'images//gli_occhi_di_venezia.jpg'];

// ? best seller
$bestseller['1b']=['id'=>'1b','name'=>'Il codice Da Vinci','autore'=>'Dan Brown' ,'anteprima'=>'2009','editore'=>'Mondadori','pagine'=>'516','prezzo'=>14.72, 'link'=>"https://books.google.it/books?id=X0UfDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/il_codice_da_vinci.jpg'];
$bestseller['2b']=['id'=>'2b','name'=>'H.P. e la pietra filosofale','autore'=>'J.K.Rowling' ,'anteprima'=>'26/06/1997','editore'=>'Salani','pagine'=>'304','prezzo'=>7.00, 'link'=>"https://books.google.it/books?id=9CJWTbd-RYoC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/hp1.jpg'];
$bestseller['3b']=['id'=>'3b','name'=>'Il sogno della camera rossa','autore'=>'Tsao Chan ' ,'anteprima'=>'05/03/2008','editore'=>'Rizzoli','pagine'=>'1115','prezzo'=>12.80, 'link'=>"https://books.google.it/books?id=TcKbLXmIucoC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/il_sogno_della_camera_rossa.jpeg'];
$bestseller['4b']=['id'=>'4b','name'=>"l'alchimista",'autore'=>'Paul Coelho' ,'anteprima'=>'1988','editore'=>'L.n.d.Teseo','pagine'=>'182','prezzo'=>14.25, 'link'=>"https://books.google.it/books?id=keKgDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/l_alchimista.jpg'];
$bestseller['5b']=['id'=>'5b','name'=>"Il leone, la strega e l'armadio",'autore'=>'C.S.Lewis' ,'anteprima'=>'2005','editore'=>'Mondadori','pagine'=>'523','prezzo'=>33.25, 'link'=>"https://books.google.it/books?id=w1fyoKHLrdsC&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/il_leone.jpeg'];
$bestseller['6b']=['id'=>'6b','name'=>'Il signore degli anelli','autore'=>'J.R.R.Tolkien' ,'anteprima'=>'19/07/1954','editore'=>'Bompiani','pagine'=>'1408','prezzo'=>47.80, 'link'=>"https://books.google.it/books?id=2qSgDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/il_signore_degli_anelli.jpg'];
$bestseller['7b']=['id'=>'7b','name'=>'Le due città','autore'=>'C.Dickens' ,'anteprima'=>'30/04/1859','editore'=>'Rizzoli','pagine'=>'454','prezzo'=>10.92, 'link'=>"https://books.google.it/books?id=Q7uDDQAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/le_due_citta.jpeg'];
$bestseller['8b']=['id'=>'8b','name'=>'Il piccolo principe','autore'=>'A.D.S.Exupéry' ,'anteprima'=>'06/04/1943','editore'=>'Rizzoli','pagine'=>'141','prezzo'=>5.90, 'link'=>"https://books.google.it/books?id=PgLhEAAAQBAJ&newbks=0&lpg=PP1&hl=it&pg=PP1&output=embed", 'genere' => 'bestseller','image'=>'images/il_piccolo_principe.jpg'];

if(isset($_GET['action'])){
    $id = $_GET['nome'];
    if ($_GET['action']=="addg"){
    if(!isset($_SESSION['carello'][$id])){
        $_SESSION['carrello'][$id] = $gialli[$id];
        if(!isset($_SESSION["cart"][$id]))
        {
            $_SESSION['cart'][$id] = 1;
        }
        else{
            $_SESSION['cart'][$id]++;
        }
    }
    $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addf"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $fantascienza[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addfa"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $fantasy[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addh"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $horror[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addfo"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $formazione[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addc"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $classici[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="adds"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $storici[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
    else if($_GET['action']=="addb"){
        if(!isset($_SESSION['carello'][$id])){
            $_SESSION['carrello'][$id] = $bestseller[$id];
            if(!isset($_SESSION["cart"][$id]))
            {
                $_SESSION['cart'][$id] = 1;
            }
            else{
                $_SESSION['cart'][$id]++;
            }
        }
        $_SESSION["spesa"] += $_SESSION['carrello'][$id]["prezzo"];
    }
   
    
    if ($_GET['action']=="svuota"){
        unset($_SESSION['carrello']);
        $_SESSION['spesa'] = 0;
        unset($_SESSION['cart']);
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
                <li><a href="login.php" >LOGIN</a></li>
                <li class="margin"><a href="#1">GENERI</a></li>
                <li class="margin"><a href="carrello.php">CARRELLO</a></li>
            </ul>
        </nav>
        <div class="title">
            <h1>LIBROPOLY</h1>
        </div>
    </div>
</div>

<div id ="pop" class="popup">
<button id="btnclose"><img src="images/close.png" alt="arrow"></button>
    <div class="poppy">
        <iframe  id="frame"frameborder="0" scrolling="no" style="border:0px"  src="https://books.google.it/books?id=CLKOCgAAQBAJ&newbks=0&lpg=PA1&hl=it&pg=PA1&output=embed" width=100% height=100%></iframe>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button id=$book[link] class ="giallo bookbtn">Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="giallo"><a href="index.php?action=addg&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="fantascienza bookbtn" id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="fantascienza"><a href="index.php?action=addf&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="fantasy bookbtn" id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="fantasy"><a href="index.php?action=addfa&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="horror bookbtn"id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="horror"><a href="index.php?action=addh&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="formazione bookbtn"id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="formazione"><a href="index.php?action=addfo&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="classici bookbtn"id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="classici"><a href="index.php?action=addc&nome=$book[id]">Aggiungi carrello</a></button>
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
                    <h2>€$book[prezzo]</h2>
                </div>
            </div>
        </div>
        <div class="bottoni">
            <div class="btn">
                <button class="storico bookbtn"id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="storico"><a href="index.php?action=adds&nome=$book[id]">Aggiungi carrello</a></button>
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
                <button class="best bookbtn"id=$book[link]>Leggi anteprima</button>
            </div>
            <div class="btn">
                <button class="best"><a href="index.php?action=addb&nome=$book[id]">Aggiungi carrello</a></button>
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
<script src="./index.js"></script>
</html>
