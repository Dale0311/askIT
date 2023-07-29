<?php 

namespace Core;
use PDO;

class Database{
    private $username = "root";
    private $password = "";
    private $dsn;

    private $pdo;
    public $stmt;

    function __construct($config) {
        $this->dsn = "mysql: ". http_build_query($config, "", ";");
        $this->pdo = new PDO($this->dsn, $this->username,$this->password);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);    
    }

    function query(string $q, array $params=[]){
        $this->stmt = $this->pdo->prepare($q);
        $this->stmt->execute($params);
        return $this;
    }
    function rowCount(){
        return $this->stmt->rowCount();
    }
    function fetch(){
        $tempArr=[];
        if($this->stmt->rowCount() >= 1){
            foreach ($this->stmt->fetchAll() as $row) {
                $tempArr[] = $row;
            }
        }
        // elseif($this->stmt->rowCount() === 1){
        //     $tempArr = $this->stmt->fetch();
        // }
        return $tempArr;
    }
}