<?php

namespace Config;

use PDO;

class Conn {

    private $_engine;
    private $_server;
    private $_port;
    private $_dbname;
    private $_user;
    private $_password;
    private $_debug;
    protected$_conn;

    public function __construct() {
        $CONFIG = parse_ini_file("env.php");
        $this->_engine = $CONFIG["DB_CONNECTION"];
        $this->_server = $CONFIG["DB_HOST"];
        $this->_port = $CONFIG["DB_PORT"];
        $this->_dbname = $CONFIG["DB_DATABASE"];
        $this->_user = $CONFIG["DB_USERNAME"];
        $this->_password = $CONFIG["DB_PASSWORD"];
        $this->_debug = $CONFIG["DB_DEBUG"];
        $this->connect();
    }

    public function connect() {
        switch ($this->_engine) {
            case "mysql":
                $encoding = "SET NAMES \"UTF8\"";
                $textString = "mysql::host={$this->_server};dbname={$this->_dbname}";
                $array = array(PDO::MYSQL_ATTR_INIT_COMMAND => $encoding);
                $this->_conn=new PDO($textString, $this->_user, $this->_password,$array);
                $this->_conn->query("SET SESSION sql_mode ='STRICT_TRANS_TABLES'");
                $this->_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                break;
            case"pgsql":
               $textString = "pgsql::host={$this->_server};dbname={$this->_dbname}";
               $this->_conn=new PDO($textString, $this->_user, $this->_password);
                break;
            default :
                echo "papi, ese motor no lo tengo";
                exit();
                break;
        }
    }

}

?>