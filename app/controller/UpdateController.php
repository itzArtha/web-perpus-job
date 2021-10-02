<?php 
namespace App\Controller;
require "app/database/Connect.php";
use App\Database\Connect;

class UpdateController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function update($table, $rows = null, $where = null)
    {
        $sql = "UPDATE $table SET ";
        $set = null;

        foreach ($rows as $key => $value) {
            $set .= ", " . $key . "='" . $value . "'";
        }
        $sql .= substr($set, 1) . " WHERE $where";
        
        $hasil = $this->data->con->prepare($sql);
        $hasil->execute();
    }
}
?>