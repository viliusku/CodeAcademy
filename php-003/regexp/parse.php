<?php
$s = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<data>
    <auto parduota="1">
       <gam>Honda</gam>
       <mod>Civic</mod> 
       <met>2005</met>
       <kai>2000</kai>
    </auto>
    <auto parduota="1">
       <gam>BMW</gam>
       <mod>320i</mod> 
       <met id='aaa'>2006</met>
       <kai>4000</kai>
    </auto>
    <auto>
       <gam>Audi</gam>
       <mod>A6</mod> 
       <met>2005</met>
       <kai>3000</kai>
    </auto>
</data>
EOT;

$q = preg_match("/^.*\<met id='aaa'\>(\d+).*$/m", $s, $matches);

echo $matches[1];