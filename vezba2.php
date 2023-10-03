<?php  


function nedeljniPopust($cenaArtikla){
    $popust=$cenaArtikla/10;
    $racun=$cenaArtikla-$popust;
    return $racun;
}

if(isset($_GET['cena'])){
    $cena=$_GET['cena'];
}

$nedeljniPopust = nedeljniPopust($cena);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $nedeljniPopust ?></h1>
    <form method="get">
        <input type="text" name="cena">
        
        <button type="submit">KLIK</button>
        
    </form>
    
</body>
</html>