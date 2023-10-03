<?php   

function dostava($cena, $kilometraza){
    
    if($kilometraza>0 && $kilometraza<=100){
        $kilometraza=200;
    }elseif($kilometraza > 100 && $kilometraza<=200){
        $kilometraza=350;
    }else{
        $kilometraza=500;
    }
    
    
    return $cena+$kilometraza;
}

$gradovi=[
    'Pancevo'=>10,
    'Subotica'=>199,
    'Sarajevo'=>292,
    'Split'=>786
];


foreach ($gradovi as $grad => $kilometara) {

    

     $kompijuter=dostava(45000, $kilometara);
     echo "Cena racunara sa dostavom do $grad iznosi $kompijuter".'<br>';
}





?>