<?php
    $nome = $_GET['first_name'];
    $cognome = $_GET['last_name'];
    $prodotto = $_GET['products'];
    $quantita = $_GET['products_number'];
    
    $prezzo = 0;
    $prezzo_ivato = 0;
    $spesa = 0;
    $spesa_ivata = 0;
    $sconto = 0;
    $totale = 0;

    if($prodotto == "mela")
    {
        $prezzo = 1;
        $spesa = $prezzo * $quantita;
        $prezzo_ivato = $prezzo + 0.04;
        $spesa_ivata = $prezzo_ivato * $quantita;
        $sconto = $spesa_ivata * 0.10;
        $totale = $spesa_ivata - $sconto;
    }else if($prodotto == "banana")
    {
        $prezzo = 2;
        $spesa = $prezzo * $quantita;
        $prezzo_ivato = $prezzo + 0.04;
        $spesa_ivata = $prezzo_ivato * $quantita;
        $sconto = $spesa_ivata * 0.10;
        $totale = $spesa_ivata - $sconto;
    }else{
        $prezzo = 3;$spesa = $prezzo * $quantita;
        $prezzo_ivato = $prezzo + 0.04;
        $spesa_ivata = $prezzo_ivato * $quantita;
        $sconto = $spesa_ivata * 0.10;
        $totale = $spesa_ivata - $sconto;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scontrino</title>
</head>
<body>
    <?php
        echo "Buongiono " . $nome . " " . $cognome . ", ha deciso di acquistare " . $quantita . " " . $prodotto . ".";
        echo "<br>";
        echo "<br>";
        echo "Il costo di ciascuna " . $prodotto . " senza l'IVA è di €" . $prezzo . ".";
        echo "<br>";
        echo "Spesa totale senza l'IVA: €" . $spesa . ".";
        echo "<br>";
        echo "<br>";
        echo "Il costo di ciascuna " . $prodotto . " con l'IVA è di €" . $prezzo_ivato;
        echo "<br>";
        echo  "Spesa totale con l'IVA: €" . $spesa_ivata . ".";
        echo "<br>";
        echo "<br>";
        echo "Ha diritto a 10% di sconto!";
        echo "<br>";
        echo "Costo totale che dovrà pagare €" . $totale . "!";
    ?>
</body>
</html>