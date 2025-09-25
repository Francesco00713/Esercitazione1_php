<?php
    $nome= $_GET['first_name'];
    $cognome= $_GET['last_name'];
    $prodotto= $_GET['products'];
    $quantita= $_GET['products_number'];

    $prezzo = 0;
    if($prodotto == "mela")
    {
        $prezzo= 1;
        $iva = $prezzo * 0.4;
        $totaleIVA = $prezzo + $iva;
    }else if($prodotto == "banana")
    {
        $prezzo= 2;
        $iva = $prezzo * 0.4;
        $totaleIVA = $prezzo + $iva;
    }else{
        $prezzo= 3;
        $iva = $prezzo * 0.4;
        $totaleIVA = $prezzo + $iva;
    }

    $totale;
    if($quantita > 10){
        $sconto = $prezzo - 0.10;
        $totale = $totaleIVA - $sconto;
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

        echo"ciao ". $nome. " " . $cognome . ", hai acquistato ". $quantita ." ". $prodotto;
        echo"<br>";
        echo "Prezzo senza IVA = ". $prezzo * $quantita.  " euro";
        echo"<br>";
        echo "Prezzo ivato = ". $totaleIVA * $quantita.  " euro";
        echo"<br>";
        if($totale > 0){
            echo "Prezzo scontato = ". $totale * $quantita.  " euro";
        }
    ?>
</body>
</html>