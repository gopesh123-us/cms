<?php

class Dbh {

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'cms';

    public function pdo__connect() {
        try {
            //code...
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            //throw $th;
            print 'Error! ' . $e->getMessage() . '<br>';
            die();
        }

        return $pdo;
    }

    public function mysqli__connect() {

        $db['db_host'] = $this->host;
        $db['db_user'] = $this->user;
        $db['db_pwd'] = $this->pwd;
        $db['db_name'] = $this->dbName;

        foreach ($db as $key => $value) {
            define(strtoupper($key), $value);
        }
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);

        return $connection;
    }

    public function mypdo_connection() {
        try {
            $mypdo = new MyPDO();
            $mypdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            print "Error! " . $th->getMessage() . "<br>";
            die();
        }
        return $mypdo;
    }
};









//$connection = mysqli_connect($obj->host, $obj->user, $obj->pwd, $obj->dbName);
