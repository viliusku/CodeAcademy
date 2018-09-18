<?php
class cars {
    private $cnn;
    public $message = '';
    private function getCnn($srv, $db, $usr, $psw = null){
        try {
            $this->cnn = new PDO('mysql:host='.$srv.';dbname='.$db, $usr, $psw);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
        return true;
    }
    public function getList(){
        $this->getCnn('localhost', 'auto', 'root');
        $cars = []; $i = 0; $this->message = '';
        try {
            $res = $this->cnn->query("select * from auto order by car_gamintojas, car_modelis");
            while ($row = $res->fetch()) {
                $m = [];
                $m['nr'] = ++$i;
                $m['id'] = $row['car_id'];
                $m['gamintojas'] = $row['car_gamintojas'];
                $m['modelis'] = $row['car_modelis'];
                $m['metai'] = $row['car_metai'];
                $m['kaina'] = $row['car_kaina'];
                $cars[] = $m;
            }
            $res->closeCursor();
            return $cars;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function delCar($id){
        $this->getCnn('localhost', 'auto', 'root');
        $this->message = '';
        try {
            $sql = "delete from auto where car_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            $res->closeCursor();
            return true;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function getCar($id){
        $this->getCnn('localhost', 'auto', 'root');
        $this->message = '';
        try {
            $sql = "select * from auto where car_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            if ($row = $res->fetch()) {
                $m = [];
                $m['id'] = $row['car_id'];
                $m['gamintojas'] = $row['car_gamintojas'];
                $m['modelis'] = $row['car_modelis'];
                $m['metai'] = $row['car_metai'];
                $m['kaina'] = $row['car_kaina'];
                $res->closeCursor();
                return $m;
            } else {
                $this->message = "Automobilis nerastas";
                return false;
            }
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function updCar($id, $gamintojas, $modelis, $metai, $kaina){
        $this->getCnn('localhost', 'auto', 'root');
        $this->message = '';
        try {
            $sql = "update auto set car_gamintojas=:gam, car_modelis=:mod, car_metai=:met,car_kaina=:kai where car_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([
                ':id' => $id,
                ':gam' => $gamintojas,
                ':mod' => $modelis,
                ':met' => $metai,
                ':kai' => $kaina
            ]);
            $res->closeCursor();
            return true;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function insCar($gamintojas, $modelis, $metai, $kaina){
        $this->getCnn('localhost', 'auto', 'root');
        $this->message = '';
        try {
            $sql = "insert into auto (car_gamintojas, car_modelis, car_metai,car_kaina) value(:gam, :mod, :met, :kai)";
            $res = $this->cnn->prepare($sql);
            $res->execute([
                ':gam' => $gamintojas,
                ':mod' => $modelis,
                ':met' => $metai,
                ':kai' => $kaina
            ]);
            $res->closeCursor();
            return true;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
}