<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$a = new handleForm();
?>

<form method="post">
    <label>Vardas: </label><input name="vardas" type="text" value="<?php echo $a->getVariable("vardas") ?>"><br>
    <label>Pavarde: </label><input name="pavarde" type="text" value="<?php echo $a->getVariable("pavarde") ?>"><br>
    <label>Slaptazodis: </label><input name="slaptazodis" type="password"><br>
    <input type="submit" value="Vykdyti">
</form>

<?php

class handleForm {
    public $text;
    function __construct(){
        $this->text = '';
        if (count($_POST)>0) {
            foreach ($_POST as $key => $value) {
                $this->text .= $key . '=' . $value . "<br>";
            }
        }
    }
    function toFile(){
        $f = fopen("failai/forma-post-parms.txt", "w") or die("Unable to open file!");
        fwrite($f, $this->text);
        fclose($f);
    }
    function fromFile(){
        $f = fopen("failai/forma-post-parms.txt", "r") or die("Unable to open file!");
        $s = fread($f, filesize("failai/forma-post-parms.txt"));
        fclose($f);
        return $s;
    }
    function getVariable($name){
        if (isset($_POST[$name])) return $_POST[$name];
        else return '';
    }
}

$a->toFile();
$x = $a->fromFile();
echo $x;

?>

</body>
</html>