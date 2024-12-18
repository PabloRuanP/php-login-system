<?php 

require_once 'Config.php';

class Connection {

    protected $pdo;

    public function __construct() {

        try {
            $this->openDB();
        } catch (PDOException $e) {
            exit(
                'Database connection could not be established.' . $e->getMessage()
            );
        }
    }

    protected function openDB() {

        $options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dns = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_CUSTOMERS;

        try {

            $this->pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);

        } catch (PDOExcepiton $e) {
            echo '<div align="center"><b>Message: </b>'.$e->getMessage();
            echo '<br><b>Code</b>: '.$e->getCode().'<br>';
            echo '<b>File</b>: '.$e->getFile();
            echo '<br><b>Line: </b>'.$e->getLine();
            die('<br><br><hr><h3>Create the database<br>and try connecting again<h3></div>');
        }
    }

}

?>