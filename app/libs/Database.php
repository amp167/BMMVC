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
    public function execute(){
        $this->stmt->execute();
    }
    public function multipleSet(){
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
}