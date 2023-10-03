<?php      

    function kredit($iznosKredita, $godina){


        $kamata=0;
        if($godina < 2000){
            $kamata=0.05;
        }elseif($godina>2000 && $godina<=2010){
            $kamata=0.08;
        }elseif($godina>2010 && $godina<=2020){
            $kamata=0.1;
        }elseif($godina>2020){
            $kamata=0.15;
        }

        $ukupanIznos=$iznosKredita*$kamata;
        return $ukupanIznos;
    }


    echo kredit(3000, 2006);





?>