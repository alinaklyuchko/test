<?php
/**
 * Created by PhpStorm.
 * User: alina
 * Date: 26.02.19
 * Time: 14:53
 */

class Connect
{
    public $db;
    public function __construct()
    {
        $this->connectDb();
    }
    public function connectDb(){
        $config = require_once '/var/www/html/mytest.org/db.config.php';
        $host = $config['host'];
        $db_name = $config['db_name'];
        $user = $config['user'];
        $password = $config['password'];

        try {
            $this->db = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=UTF8', $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this;

        } catch (\PDOException $e) {
            print "Error!: Something wrong" . $e->getMessage() . "<br/>";
            return false;
        }
    }

    public function getDb($count1 = 0, $count2 = 10){
        $conn = $this->db;
        if (!is_null($conn)) {
            $sql = "SELECT * FROM `employers` 
                    INNER JOIN `departments`  
                    ON `employers`.`department` = `departments`.`id` 
                    INNER JOIN `positions` 
                    ON `employers`.`position`=`positions`.`id` LIMIT $count1, $count2";
            return $conn->query($sql)->fetchALL(PDO::FETCH_OBJ);
        }
        return false;
    }

    public function countTable(){
        $conn = $this->db;
        if (!is_null($conn)) {
            $sql = "SELECT COUNT(*) FROM `employers`";
            return $conn->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        }
        return false;
    }
}
