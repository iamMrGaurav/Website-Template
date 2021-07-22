<?php
require "config.php";
class Connection
{
    private $conn;
    public function __construct()
    {
        $obj = new Config();
        $this->conn = mysqli_connect($obj->getServer(), $obj->getUsername(), $obj->getPassword(), $obj->getDb());
    }
    public function checkConnection()
    {
        if ($this->conn) {
            return true;
        } else {
            return false;
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
