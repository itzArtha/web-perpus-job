<?php 
namespace App\Controller;
require "app/database/Connect.php";
use App\Database\Connect;

class ViewController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function fetch($table, $cond = null)
    {
        $data = "SELECT * FROM $table WHERE $cond";
        $hasil = $this->data->con->query($data);
        return $hasil->fetch_all(MYSQLI_BOTH);
    }
}
?>