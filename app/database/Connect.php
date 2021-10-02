<?php 
namespace App\Database;
require "app/config/services.php";
use mysqli;
use App\Config\Services;

class Connect extends Services {
    const HOST = Services::HOST_DB;
    const USER = Services::USER_DB;
    const PASS = Services::PASS_DB;
    const DB = Services::DB;

    public $con;
    public function __construct() {
        $this->con = new mysqli(self::HOST, self::USER, self::PASS, self::DB);
        !$this->con ?? die('Koneksi gagal: ' . $this->con->connect_error);
    }
}

?>