<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/templates/ace/includes/db.php'; // The mysql database connection script
    class Dashboard
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        protected $dbh;
        private $error;
        private $stmt;

        public function __construct(){
            //Set timezone
            date_default_timezone_set('Africa/Nairobi');
            // Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            //$dsn="mysql:host=$this->DB_HOST;dbname=$this->DB_NAME";
            // Set options
            $options = array(
                PDO::ATTR_PERSISTENT    => true,
                PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
            );
            // Create a new PDO instanace
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
                //$this->dbh = new PDO('mysql:dbname='.$this->dbname.';host=localhost',$this->user, $this->pass);
                //$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            }
                // Catch any errors
            catch(PDOException $e){
                //$this->error = $e->getMessage();
                printf($e);
            }
        }
        public  function totalGroups(){
            try{
                $query="SELECT groupid from savings_group  ";
                $stmt = $this->dbh->prepare($query);
                $stmt->execute();
                $row_num = $stmt->rowCount();
                if ($stmt->rowCount()>0)
                    return $row_num;
            }
            catch (PDOException $ex){
                return $ex->getMessage();
            }

        }
    }


?>