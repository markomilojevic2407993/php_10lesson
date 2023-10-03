<?php    

$brojevi=[250, 330, 1000, 2000, 5000];


function popust($broj){
    $popust=$broj * 0.1;
    return $popust;
}

$ukupanPopust=0;
foreach($brojevi as $broj){
    $popusti[]= popust($broj);
    
    $ukupanPopust=array_sum($popusti);
    
    echo $ukupanPopust.'<br>';

}

?>