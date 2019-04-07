<?php
require_once("../DbConfig.php");

class Buku extends DbConfig
{
    // database connection and table name

    private $TABLE_NAME = "buku";

    // object properties
    private $ID = "Kode_Buku";
    private $NAME = "Nama_Buku";


    // used by select drop-down list
    public function selectAll()
    {
        //select all data
        $query = "SELECT * FROM " . $this->TABLE_NAME . " ";
 
        $stmt = $this->connection()->prepare($query);

        $stmt->execute();

        $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
 
        return $datas;
    }

    public function getById($id){
        $query = "SELECT * FROM " . $this->TABLE_NAME ." where ". $this->ID . " = ? ";

        $stmt = $this->connection()->prepare($query);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_OBJ);
 
        return $data;
    }
}