<!--
/**
Sukurti formą: gamintojas, modelis, metai (select), nauja/naudota (radio), kaina. Su metodu post perduoti duomenis į backend ir sudėti į klasę auto, su atitinkamomis savybėmis. Rezultatą išvesti su var_dump.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="sav-php-form-01-backend.php">
    <label>Gamintojas</label><input type="text" name="gam"><br>
    <label>Modelis</label><input type="text" name="mod"><br>
    <label>Kaina</label><input type="text" name="kai"><br>
    <label>Metai</label>
    <select name="met">
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
    </select>
    <br>
    <label>Bukle</label>
        <label>Nauja</label><input type="radio" name="buk" value="nauja">
    <label>Naudota</label><input type="radio" name="buk" value="naudota">
    <br>
    <input type="submit" value="Siusti">
</form>
</body>
</html>