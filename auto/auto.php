<?php
class auto {
    public $message;
    public $action = false;
    private $id = false;
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
        if (isset($_POST['delete'])) {
            $this->action = 'delete';
            if (isset($_POST['delete']) && strlen(trim($_POST['delete']))>0) $this->id = trim($_POST['delete']);
        }
        elseif (isset($_POST['update'])){
            $this->action = 'update';
            if (isset($_POST['update']) && strlen(trim($_POST['update']))>0) $this->id = trim($_POST['update']);
        }
        elseif (isset($_POST['update-form'])){
            $this->action = 'update-form';
            if (isset($_POST['update-form']) && strlen(trim($_POST['update-form']))>0) $this->id = trim($_POST['update-form']);
        }
        elseif (isset($_POST['rent-form'])){
            $this->action = 'rent-form';
            if (isset($_POST['rent-form']) && strlen(trim($_POST['rent-form']))>0) $this->id = trim($_POST['rent-form']);
        }
        elseif (isset($_POST['rent'])){
            $this->action = 'rent';
            if (isset($_POST['rent']) && strlen(trim($_POST['rent']))>0) $this->id = trim($_POST['rent']);
        }
        elseif (isset($_POST['insert'])) $this->action = 'insert';
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
    function delete (){
        if ($ok = $this->action == 'delete'){
            if ($ok = $this->id !== false){
                $this->message = "Automobilio šalinimas iš DB ";
                try {
                    $sql = "delete from auto where aut_id=:id";
                    $res = $this->cnn->prepare($sql);
                    $res->execute([':id' => $this->id]);
                    $this->message .= "sėkmingas";
                } catch (PDOException $e) {
                    $this->message .= 'nesėkmingas: ' . $e->getMessage();
                    $ok = false;
                }
            } else $this->message .= 'nesėkmingas: nepakanka duomenų';
        } else $this->message = "Neleistinas veiksmas su DB";
        return $ok;
    }
    function put (){
        if ($ok = $this->action == 'update' ||  $this->action == 'insert'){
            if ($this->action == 'update') $this->message = "Automobilio duomenų keitimas DB "; else $this->message = "Automobilio duomenų įdėjimas į DB ";
            $car = [
                'id' => $this->id,
                'gamintojas' => isset($_POST['gamintojas']) && strlen(trim($_POST['gamintojas']))>0 ? trim($_POST['gamintojas']) : false,
                'modelis' => isset($_POST['modelis']) && strlen(trim($_POST['modelis']))>0 ? trim($_POST['modelis']) : false,
                'metai' => isset($_POST['metai']) && strlen(trim($_POST['metai']))>0 ? trim($_POST['metai']) : false,
                'kaina' => isset($_POST['kaina']) && strlen(trim($_POST['kaina']))>0 ? trim($_POST['kaina']) : false,
                'pastabos' => isset($_POST['pastabos']) && strlen(trim($_POST['pastabos']))>0 ? trim($_POST['pastabos']) : false,
                'nuotrauka' => false,
                'mime' => false
            ];
            if (isset($_FILES["nuotrauka"]) && strlen($_FILES["nuotrauka"]['name'])>0){
                $check = getimagesize($_FILES["nuotrauka"]["tmp_name"]);
                if ($ok = $check !== false) {
                    if ($ok = in_array($check["mime"], ['image/jpg', 'image/jpeg', 'image/png'])) {
                        $fp = fopen($_FILES['nuotrauka']['tmp_name'], "rb");
                        if ($ok = $fp !== false){
                            $car['nuotrauka'] = fread($fp, filesize($_FILES['nuotrauka']['tmp_name']));
                            $car['mime'] = $check["mime"];
                            fclose($fp);
                        } else $this->message .= 'nesėkmingas: problema vykdant upload veiksmą';
                    } else $this->message .= 'nesėkmingas: nuotraukos failo tipas yra neleistinas';
                } else $this->message .= 'nesėkmingas: nuotraukos failas nėra nuotrauka';
            }

            $ok = $ok &&
                ( ($this->action == 'update' && ($car['gamintojas'] || $car['modelis'] || $car['metai'] || $car['kaina'] || $car['pastabos'] || $car['nuotrauka'])) ||
                ($this->action == 'insert' && ($car['gamintojas'] && $car['modelis'] && $car['metai'] && $car['kaina'] && $car['pastabos'] && $car['nuotrauka'])) );

            if ($ok){
                $parms = []; $fields = [];
                if ($car['gamintojas']) { $parms[':gam'] = $car["gamintojas"]; $fields[':gam'] = 'aut_gamintojas'; }
                if ($car['modelis']) { $parms[':mod'] = $car["modelis"]; $fields[':mod'] = 'aut_modelis'; }
                if ($car['metai']) { $parms[':met'] = $car["metai"]; $fields[':met'] = 'aut_metai'; }
                if ($car['kaina']) { $parms[':kai'] = $car["kaina"]; $fields[':kai'] = 'aut_kaina'; }
                if ($car['pastabos']) { $parms[':pas'] = $car["pastabos"]; $fields[':pas'] = 'aut_pastabos'; }
                if ($car['mime']) { $parms[':mim'] = $car["mime"]; $fields[':mim'] = 'aut_mime'; }

                if ($this->action == 'update'){
                    $ar = [];
                    foreach($fields as $key => $value) $ar[] = $value . '=' . $key;
                    $sql = "update auto set " . implode(',', $ar) . " where aut_id=:id";
                    $parms[':id'] = $car['id'];
                }
                else {
                    $sql = "insert into auto (" . implode(',' ,array_values($fields)) . ") values(" . implode(',' ,array_keys($fields)) . ")";
                }
                try {
                    $this->cnn->beginTransaction();
                    $res = $this->cnn->prepare($sql);
                    $res->execute($parms);

                    if ($car['nuotrauka']){
                        if ($this->action == 'update') $id = $this->id; else $id = $this->cnn->lastInsertId();
                        $sql = "update auto set aut_nuotrauka=? where aut_id=?";
                        $res = $this->cnn->prepare($sql);
                        $res->bindParam(1, $car["nuotrauka"], PDO::PARAM_LOB);
                        $res->bindParam(2, $id);
                        $res->execute();
                    }
                    $this->cnn->commit();
                    $this->message .= "sėkmingas";
                } catch (PDOException $e) {
                    $this->message .= 'nesėkmingas: ' . $e->getMessage() . $sql;
                    $res = $this->cnn->rollBack();
                    $ok = false;
                }

            } else $this->message .= 'nesėkmingas: nepakanka duomenų';

        } else $this->message = "Neleistinas veiksmas su DB";

        return $ok;
    }
    function get (){
        if ($car = $this->action == 'update-form' || $car = $this->action == 'rent-form' || $car = $this->action == 'rent'){
            $this->message = "Automobilio duomenų skaitymas iš DB ";
            if ($car = $this->id !== false){
                try {
                    $sql = "select aut_id, aut_gamintojas, aut_modelis, aut_metai, aut_kaina, aut_pastabos, aut_nuotrauka, aut_mime from auto where aut_id=:id";
                    $res = $this->cnn->prepare($sql);
                    $res->execute([':id' => $this->id]);
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
            } else $this->message .= 'nesėkmingas: nėra pateiktas ID';
        } else $this->message = "Neleistinas veiksmas su DB";
        return $car;
    }
}