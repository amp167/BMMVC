<?php
class Database{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASSWORD;
    private $dbh;
    private $stmt;
    public function __construct()
    {
        $dbc = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dbc,$this->dbuser,$this->dbpass,$options);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function query($qry){
        $this->stmt = $this->dbh->prepare($qry);
    }
    public function bind($param , $value ,$type=''){
        if (empty($type)){
            switch ($value){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
                default:
                    $type=PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
    public function multipleSet(){
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function singleSet(){
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
}