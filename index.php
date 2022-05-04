<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <style>
        body {
        margin: 60px;
        }
    </style>
</head>
<body>
    <!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente 
tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***)
 tutte le occorrenze della parola da censurare. -->
 <?php 

 $testo = "The Daily Star ha rivolto un quesit a Anthony Joshua,
due volte ex campione dei pesi massimi,  tornato in questi giorni in palestra  
 in vista della  sempre più probabile rivincita  nel mese di luglio con  il titolare IBF, IBO, WBA e WBO  l'ucraino  Oleksandr Usyk .
Tyson Fury next fight opponents including Anthony Joshua if Gypsy King  performs U-turn - Manchester Evening News
La domanda diretta a  Joshua riguardava il futuro del connazionale  campione  Tyson Fury  da settimane al centro  della curiosità dei fan su di un suo possbile ritiro dalle scene pugilistiche  .
Aj e  Fury avevano trovato un accordo  interpersonale per un match lo scorso anno  poi  il destino ha voluto che  Joshua  rimanesse senza titoli  e  Tyson ancora prima del  successo  su  Whyte  iniziasse a pensare  alla pensione.
 Al momento, Joshua è completamente concentrato  sulla rivincita con Usyk ma in caso di successo non esclude che   Fury potrebbe essere ancora  interessato  ad  onorare il loro accordo verbale di scontrarsi sul ring.";
 $lunghezza = strlen($testo);
 $parolaCensurare = $_GET["nome"];
 $testoCensurato = str_replace($parolaCensurare, "***", $testo);
 $lunghezzaCensura = strlen($testoCensurato);

 
 ?>
 <p><?php
 echo $testo;
 ?></p>

 <p>Lunghezza testo: <?php
 echo $lunghezza
 ?> caratteri.</p>

 <p>Parola da censurare: <?php
 echo $parolaCensurare
 ?>.</p>
    <h3>Testo censurato: </h3>
 <p><?php
 echo $testoCensurato
 ?></p>
 <p>Lunghezza testo censurato: <?php
 echo $lunghezzaCensura
 ?> caratteri.</p>
</body>
</html>