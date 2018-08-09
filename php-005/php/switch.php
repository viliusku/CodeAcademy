<?php

$m = [
  "Antanas",
  "Petras",
  "Jonas",
  "Arvydas",
  "Kęstas",
    "Kazys"
];
shuffle($m);

switch ($m[0]){
    case "Antanas":
    case "Jonas":
    case "Kęstas": $rez ="draugas"; break;
    case "Arvydas": $rez = "priešas"; break;
    case "Petras": $rez = "priešas";
    case "Kazys": $rez = "draugas"; break;
    default: $rez = "nežinoma";
}

echo $m[0] . ' yra ' . $rez;