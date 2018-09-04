<?php
/**
Sukurti skriptą, kuris surastu visus pirminius skaičius ("A prime number (or a prime) is a natural number greater than 1 that cannot be formed by multiplying two smaller natural numbers" - https://en.wikipedia.org/wiki/Prime_number) nurodytame skaičių intervale nuo iki.
 */

//class abc {
    /*static*/ function tikrinti($skaicius){
        $pirminis = true;
        for ($i=2; $i < $skaicius - 1; $i++){
            if ($skaicius % $i == 0){
                $pirminis = false;
                break;
            }
        }
        return $pirminis;
    }
    /*static*/ function pirminiai($from, $to){
        $m = [];
        for ($i = $from; $i<=$to; $i++){
            if (/*self::*/tikrinti($i)) $m[] = $i;
        }
        return $m;
    }
//}

var_dump(/*abc::*/pirminiai(1, 100));