<?php 
namespace App\Controller;
require "app/database/Connect.php";
use App\Database\Connect;

class CreateController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function create($table, $rows = null)
    {
        $sql = "INSERT INTO $table ";
        $row = null;
        $data = null;

        foreach ($rows as $key => $value) {
            $row .= ", " . $key;
            $data .= ",'" . $value . "'";
        }
        $sql .= "(" . substr($row, 1) . ")";
        $sql .= " VALUES(" . substr($data, 1) . ")";

        $hasil = $this->data->con->prepare($sql);
        $hasil->execute();
    }
}
?>