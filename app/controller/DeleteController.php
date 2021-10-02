<?php 
namespace App\Controller;
require "app/database/Connect.php";
use App\Database\Connect;

class DeleteController {

    public $result;
    public function __construct()
    {
        $this->result = [];
        $this->data = new Connect();
    }
    
    public function delete($table, $where = null)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $this->data->con->query($sql);
    }
}
?>