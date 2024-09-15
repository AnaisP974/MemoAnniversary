<?php

abstract class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;port=3307;dbname=memoanniv_db;charset=utf8mb4", 'root', '');
    }
}
