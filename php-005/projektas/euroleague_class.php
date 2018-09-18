<?php
class teams {
    private $cnn = false;
    public $message = '';
    function __construct($srv, $db, $usr, $psw = null){
        try {
            $this->cnn = new PDO('mysql:host='.$srv.';dbname='.$db, $usr, $psw);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            $this->cnn = false;
        }
    }
    public function getTeams(){
        $items = []; $i = 0; $this->message = '';
        try {
            $res = $this->cnn->query("select * from teams order by team_name");
            while ($row = $res->fetch()) {
                $items[] = [
                    'team_id' => $row['team_id'],
                    'team_logo' => $row['team_logo'],
                    'team_url' => $row['team_url'],
                    'team_name' => $row['team_name'],
                    'team_country' => $row['team_country'],
                    'team_coach' => $row['team_coach']
                ];
            }
            $res->closeCursor();
            return $items;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function teamGet($id){
        $this->message = '';
        try {
            $sql = "select * from teams where team_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            if ($row = $res->fetch()) {
                $m = [
                    'team_id' => $row['team_id'],
                    'team_logo' => $row['team_logo'],
                    'team_url' => $row['team_url'],
                    'team_name' => $row['team_name'],
                    'team_country' => $row['team_country'],
                    'team_coach' => $row['team_coach'],
                    'team_president' => $row['team_president'],
                    'team_address' => $row['team_address'],
                    'team_arena' => $row['team_arena'],
                    'team_phone' => $row['team_phone'],
                    'team_url' => $row['team_url']
                ];
                $res->closeCursor();
                return $m;
            } else {
                $this->message = "Komanda nerasta";
                return false;
            }
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

    public function teamCreate($item){
        $this->message = '';
        try {
            $sql = "insert into teams (team_logo,team_name,team_country,team_coach,team_president,team_address,team_arena,team_phone,team_url)";
            $sql.= "values (:logo,:name,:country,:coach,:president,:address,:arena,:phone,:url)";
            $res = $this->cnn->prepare($sql);
            $res->execute([
                ':logo' => $item['team_logo'],
                ':url' => $item['team_url'],
                ':name' => $item['team_name'],
                ':country' => $item['team_country'],
                ':coach' => $item['team_coach'],
                ':president' => $item['team_president'],
                ':address' => $item['team_address'],
                ':arena' => $item['team_arena'],
                ':phone' => $item['team_phone'],
                ':url' => $item['team_url']
            ]);
            $res->closeCursor();
            return true;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function teamUpdate($item){
        $this->message = '';
        try {
            $sql = "update teams set team_logo=:logo,team_name=:name,team_country=:country,team_coach=:coach,team_president=:president,team_address=:address,team_arena=:arena,team_phone=:phone,team_url=:url where team_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([
                ':id' => $item['team_id'],
                ':logo' => $item['team_logo'],
                ':url' => $item['team_url'],
                ':name' => $item['team_name'],
                ':country' => $item['team_country'],
                ':coach' => $item['team_coach'],
                ':president' => $item['team_president'],
                ':address' => $item['team_address'],
                ':arena' => $item['team_arena'],
                ':phone' => $item['team_phone'],
                ':url' => $item['team_url']
            ]);
            $res->closeCursor();
            return true;
        }
        catch(PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }
    public function teamDelete($id){
        $this->message = '';
        try {
            $sql = "delete from teams where team_id=:id";
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
}