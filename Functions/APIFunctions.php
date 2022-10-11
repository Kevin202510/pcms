<?php 
    class APIFunctions{
        public $que;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='pcms';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

        public $sql;

        public function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin($table,$table1,$attributename,$attributename1){
            $sql = "SELECT * FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin3(){
            $sql = "SELECT * FROM `reservations` LEFT JOIN `services` ON services.service_id = reservations.reservation_service_id LEFT JOIN `facilities` ON facilities.facility_id = reservations.reservation_facility_id LEFT JOIN `users` ON users.user_id = reservations.reservation_user_id";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function __destruct(){
            $this->mysqli->close();
        }

        public function select2(){
            $sql = "SELECT * FROM `users` WHERE `permission_id`=5";

            $this->sql = $result = $this->mysqli->query($sql);
        }
    }
?>