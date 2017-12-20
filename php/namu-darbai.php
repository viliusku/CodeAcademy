<?php

function darbuotojas($a, $b, $c){
	return [
		"vardas" => ucfirst(strtolower($a)),
		"pavarde" => ucfirst(strtolower($b)),
		"profesija" => ucfirst(strtolower($c)),
		];
} // funkcijos aprasymas, taip atrodys

$petras = darbuotojas("Petras", "KULIKAUSKAS", "mokinys");

//var_export($petras);

function isvedimas($d){
	$sablonas = "Darbuotojas %s %s yra puikus %s";
	
	$vardas = $d["vardas"];
	$pavarde = $d["pavarde"];
	$profesija = $d["profesija"];
	
	//$tekstas = sprintf($sablonas, $vardas, $pavarde, $profesija);
    //$tekstas = "Darbuotojas " . $d["vardas"] . ' ' . $d["pavarde"] . ' yra puikus ' . $d["profesija"];
    $tekstas = "Darbuotojas {$vardas} {$pavarde} yra puikus {$d['profesija']}";
	
	return $tekstas;
}

$kolegos = [];

$kolegos[] = darbuotojas("Petras", "KULIKAUSKAS", "mokinys");
$kolegos[] = darbuotojas("Petras", "KULIKAUSKAS", "mokinys");
$kolegos[] = darbuotojas("kalega", "KULIKAUSKAS", "mokinys");

//var_export($kolegos);
//echo json_encode($kolegos);
echo "<hr/>";
echo isvedimas($kolegos[2]);
echo "<hr/>";
echo isvedimas($kolegos[1]);
echo "<hr/>";
echo isvedimas($kolegos[0]);

function html($k){
	$sablonas = 
	"<table>
		<tr>
			<td>%s</td><td>%s</td><td>%s</td>
		</tr>
		<tr>
			<td>%s</td><td>%s</td><td>%s</td>
		</tr>
		<tr>
			<td>%s</td><td>%s</td><td>%s</td>
		</tr>
	</table>";
	
	$d1 =$k[0];
	$d2 =$k[1];
	$d3 =$k[2];
	
	$html = sprintf($sablonas,
	$d1 ['vardas'] , $d1 ['pavarde'] , $d1 ['profesija'],
	$d2 ['vardas'] , $d2 ['pavarde'] , $d2 ['profesija'],
	$d3 ['vardas'] , $d3 ['pavarde'] , $d3 ['profesija']
	);
	return $html;
}
echo html($kolegos);