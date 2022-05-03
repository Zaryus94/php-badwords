<?php

// phpinfo();
$text = "prova di php per il corretto funzionamento"
$bannedWord = $_GET["php"];

 ?>

 <p>

 <?php

    // stampa del testo, lenght e censura
     echo str_replace($bannedWord, "***", $text);
     echo($text);
     numero dei caratteri digitati: echo(strlen($text));

     ?>

 </p>