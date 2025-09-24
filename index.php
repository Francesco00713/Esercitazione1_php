<?php
    $nome= $_GET['first_name'];
    $cognome= $_GET['last_name'];
    $prodotto= $_GET['products'];
    $quantita= $_GET['products_number'];

    $iva = $prezzo * 0.22;
    $totaleIVA = $prezzo + $iva;

    $prezzo = 0;
    if($prodotto == "mela")
    {
        $prezzo= 1;
    }else if($prodotto == "banana")
    {
        $prezzo= 2;
    }else{
        $prezzo= 3;
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo"ciao ". $nome. " " . $cognome ;
        echo" Hai acquistato ". $quantita ." ". $prodotto;
        echo"<br>";
        echo "Prezzo senza IVA = ". $prezzo * $quantita.  " euro";
        echo "Prezzo ivato = ". $totaleIVA * $quantita.  " euro";
    ?>
</body>
</html>

