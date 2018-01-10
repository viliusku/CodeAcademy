<?php

class auto {
    public $message = '';
    private $cnn = false;
    private $host = 'test.lt';
    private $dbname = 'test';
    private $userid = 'test';
    private $password = 'test';

    function __construct(){
        $this->message = "Prisijungimas prie DB ";
        try {
            $this->cnn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->userid, $this->password);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
            $this->message .= 'sėkmingas';
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
    }
    function getList(){
        $this->message = "Automobilių sąrašo skaitymas iš DB ";
        $cars = [];
        try {
            $sql = "select * from auto order by aut_gamintojas, aut_modelis";
            $res = $this->cnn->query($sql);
            while ($row = $res->fetch()) {
                $cars[] = [
                    'id' => $row['aut_id'],
                    'gamintojas' => $row['aut_gamintojas'],
                    'modelis' => $row['aut_modelis'],
                    'metai' => $row['aut_metai'],
                    'kaina' => $row['aut_kaina'],
                    'nuotrauka' => $row['aut_nuotrauka'],
                    'mime' => $row['aut_mime']
                ];
            }
            $this->message .= "sėkmingas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $cars = false;
        }
        return $cars;
    }
    function delete ($id){
        $ok = false;
        $this->message = "Automobilio šalinimas iš DB ";
        try {
            $sql = "delete from auto where aut_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            $this->message .= "sėkmingas";
            $ok = true;
        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
    function insert($car){
        $ok = false;
        $this->message = "Automobilio įdėjimas į DB ";
        try {
            $sql = "insert into auto (aut_gamintojas, aut_modelis, aut_metai, aut_kaina, aut_pastabos, aut_mime, aut_nuotrauka) values(?,?,?,?,?,?,?)";
            $res = $this->cnn->prepare($sql);
            $res->bindValue(1, $car['gamintojas']);
            $res->bindValue(2, $car['modelis']);
            $res->bindValue(3, $car['metai']);
            $res->bindValue(4, $car['kaina']);
            $res->bindValue(5, $car['pastabos']);
            $res->bindValue(6, $car['mime']);
            $res->bindValue(7, $car['nuotrauka'], PDO::PARAM_LOB);
            $res->execute();
            $this->message .= "sėkmingas";
            $ok = true;
        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
    function update($car){
        $ok = false;
        $this->message = "Automobilio duomenų keitimas DB ";
        try {
            $sql = "update auto set aut_gamintojas=?, aut_modelis=?, aut_metai=?, aut_kaina=?, aut_pastabos=?";
            if (isset($car['nuotrauka'])){
                $sql.= ",aut_nuotrauka=?, aut_mime=?";
            }
            $sql.= " where aut_id=?";
            $res = $this->cnn->prepare($sql);
            $res->bindValue(1, $car['gamintojas']);
            $res->bindValue(2, $car['modelis']);
            $res->bindValue(3, $car['metai']);
            $res->bindValue(4, $car['kaina']);
            $res->bindValue(5, $car['pastabos']);
            if (isset($car['nuotrauka'])) {
                $res->bindValue(6, $car['mime']);
                $res->bindValue(7, $car['nuotrauka'], PDO::PARAM_LOB);
            }
            $res->execute();
            $this->message .= "sėkmingas";
            $ok = true;
        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
    function get($id){
        $this->message = "Automobilio duomenų skaitymas iš DB ";
        try {
            $sql = "select aut_id, aut_gamintojas, aut_modelis, aut_metai, aut_kaina, aut_pastabos, aut_nuotrauka, aut_mime from auto where aut_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            if ($row = $res->fetch()) {
                $car = [
                    'id' => $row['aut_id'],
                    'gamintojas' => $row['aut_gamintojas'],
                    'modelis' => $row['aut_modelis'],
                    'metai' => $row['aut_metai'],
                    'kaina' => $row['aut_kaina'],
                    'pastabos' => $row['aut_pastabos'],
                    'nuotrauka' => $row['aut_nuotrauka'],
                    'mime' => $row['aut_mime']
                ];
                $this->message .= "sėkmingas";
            } else $this->message .= "nesėkmingas: automobilis nerastas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $car = false;
        }
        return $car;
    }
}
?>