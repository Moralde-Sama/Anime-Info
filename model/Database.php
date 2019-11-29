<?php

include_once '../autoload.php';

class Database implements IDatabaseAction {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'db_anime';
    private $db_conn;
    private $table_name;
    private $table_columns;

    function __construct() {
        $this->testConnection();
    }

    protected function setTableName($table_name) {
        $this->table_name = $table_name;
    }

    protected function setTableColumns($columns) {
        $this->table_columns = $columns;
    }

    private function connect() {
        $this->db_conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
    }

    private function disconnect() {
        $this->db_conn->close();
    }

    private function testConnection() {
        $this->connect();
        if ($this->db_conn->connect_error) {
            die("Connection failed: " . $this->db_conn->connect_error);
        } else {
            $this->db_conn->close();
        }
    }

    function insertInto($array_value) {

    }

    function update($array_column, $array_value, $string_condition) {

    }

    function delete($id) {

    }

    function search($array_column, $string_condition) {
        $columns = "";
        for ($i=0; $i < sizeof($this->table_columns); $i++) { 
            if ($i > 0)
                $columns .= ", {$this->table_columns[$i]}";
            else
                $columns = $this->table_columns[0];
        }
    }
    
    function rawQuery($query) {
        
    }

}