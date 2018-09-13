<?php

$s = "labas rytas stai ir as"; echo $s.'<br>';
echo "pattern: /a/i : "; if (preg_match("/a/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /ax/i : "; if (preg_match("/ax/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /ax?/i : "; if (preg_match("/ax?/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /as|st/i : "; if (preg_match("/as|st/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /^labas/i : "; if (preg_match("/^labas/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /^rytas/i : "; if (preg_match("/^rytas/i", $s)) echo 'true<br>'; else echo "false<br>";
echo "pattern: /^labas\s+rytas/i : "; if (preg_match("/^labas\s+rytas/i", $s)) echo 'true<br>'; else echo "false<br>";

$s = "  Jonas    "; echo $s.'<br>';
echo "pattern: /^\s*Jonas\s*$/ : "; if (preg_match("/^\s*Jonas\s*$/", $s)) echo 'true<br>'; else echo "false<br>";

$s = "2018-09-13"; echo $s.'<br>';
echo "pattern: /^\d{4}-[0213546789]{2}-[0-9]{2}$/ : "; if (preg_match("/^\d{4}-[0213546789]{2}-[0-9]{2}/", $s)) echo 'true<br>'; else echo "false<br>";

$s = "-25.36"; echo $s.'<br>';
echo "pattern: /^[+-]?\d+([,.]\d+)?$/ : "; if (preg_match("/^[+-]?\d+([,.]\d+)?$/", $s)) echo 'true<br>'; else echo "false<br>";