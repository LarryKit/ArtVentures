<?php
//echo "Model Connected";
//ArtVentures
 class MainModel {
    private $db;
    
    /*==============FUNCTION FOR MYSQL SELECT======================*/
//    public function __construct($dbhost, $dbuser, $dbpass, $dbname){
//        $db = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
//			if(!$db){
//				echo "Database connection has not been established";
//			}else{
//				$dbSelect = mysql_select_db($dbname, $db);
//            }
//    }
    /*=============FUNCTION FOR PDO SELECT===========================*/
    public function __construct($ds, $du, $dp){
			try{
				$this->db= new \PDO($ds, $du, $dp);
				$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			}
			catch(\PDOException $e){
				var_dump($e);
			}
	}
    
    
    /*============================FOLLOWING FUNCTIONS SPECIFIC TO PAGE IN QUESTION====================================================*/
 }
 

?> 