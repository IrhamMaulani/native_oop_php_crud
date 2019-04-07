<?php
class Buku
{
    // database connection and table name
    private $conn;
    private $table_name = "buku";

    // object properties
    public $id = "Kode_Buku";
    public $name = "Nama_Buku";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // used by select drop-down list
    public function selectAll()
    {
        //select all data
        $query = "SELECT
                   *
                FROM
                    " . $this->table_name . "
                ";
 
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
 
        return $datas;
    }

    // public function readName()
    // {
    //     $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";
 
    //     $stmt = $this->conn->prepare($query);

    //     $stmt->bindParam(1, $this->id);
        
    //     $stmt->execute();
 
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    //     $this->name = $row['name'];
    // }
}
