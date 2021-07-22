<?php
class Config
{
    private $username = "root";
    private $password = "";
    private $db = "timezone";
    private $server = "localhost";


    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getDb()
    {
        return $this->db;
    }
    public function getServer()
    {
        return $this->server;
    }
}
