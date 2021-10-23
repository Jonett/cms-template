<?php

class database
{
    public $db;
    public $f3;

    public function __construct($f3)
    {
        $this->f3 = $f3;
        $this->db = new \DB\SQL('mysql:host=localhost;port=3306;dbname=pilvi', 'pilvi', 'pilvi', [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES LATIN1']);
    }
}