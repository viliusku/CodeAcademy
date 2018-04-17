<?php

$s = "<strong>abc</strong>";
echo $s . "<br>";
echo htmlspecialchars($s) . "<br>";
echo htmlspecialchars_decode(htmlspecialchars($s)) . "<br>";