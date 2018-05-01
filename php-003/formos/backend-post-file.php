<?php

class forma {
    private $fn; // tekstinio failo pavadinimas, perduodamas per konstruktorių
    private $m = []; // asmenų masyvas, kuris nuskaitomas iš failo, papildomas ir išasaugojamas į failą
    function __construct($fn){ // konstruktorius
        $this->fn = $fn; // išsaugoti failo pavadimimą
        if (file_exists($this->fn)){ // jeigu failas yra (pirmą kartą jo dar nėra, todėl būtų klaida skaitant)
            $f = fopen($this->fn, 'r'); // atsidaryti failą skaitymui
            $s = fread($f, filesize($this->fn)); // nuskaityti iš failo tekstą
            $this->m = json_decode($s, true); // dekoduoti iš teksta (json formate - nurodant, kad tai asociatyvinis masyvas) į masyvą
            fclose($f); // uždaryti failą
        }
    }
    function add(){ // papildyti asmenų masyvą
        $this->m[] = $_POST; // pridėti POST formos duomenys (asociatyvinį masyvą) į asmenų masyvą
        $f = fopen($this->fn, 'w'); // atsidaryti failą rašymui
        fwrite($f, json_encode($this->m)); // užkoduoti asmenš masyvą į tekstą (json formatu) ir išsaugoti faile
        fclose($f); // uždaryti failą
    }
    function info(){ // asmenų masyvo atvaizdavimas lentele
        echo '<table>';
        foreach ($this->m as $asmuo) { // imti po vieną asmenį iš masyvo ir atvaizduoti lentele
            echo '<tr>';
            echo '<td>' . $asmuo['vardas'] . '</td>';
            echo '<td>' . $asmuo['lytis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
$o = new forma('asmenys.txt'); // susikurti klasės egzempliorių
$o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
$o->info(); // atvaizduoti asmenų sąrašą lentele
echo '<a href="frontend-post-file.html">Atgal</a>';