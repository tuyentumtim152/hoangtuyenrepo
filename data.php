<?php
	class database {
		private $_close;
		private $_con;
		public $db;
		function connect(){
			if(!isset($this->_con)){
				$_con= mysqli_connect('localhost','root','','qlhs');
				if(isset($this->_con)){
					echo "connect succes";
				}
				if (mysqli_connect_error()){
				echo 'failed to connect to MySQL';	
		}

				mysqli_query($_con, "SET character_set_results = 'utf8' , character_set_client = 'utf8', character_set_database = 'utf8', character_set_server='utf8' ");
			}
			else echo "not connected";
			
			}
	
		function select(){
		$sql = "SELECT  ho va ten ,dt,dv,da FROM hs";
		$result = $this->$_con->query($sql);
		if ($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				echo "ho ten: " . $row["ho va ten"] . "  toan: ".$row["dt"]."van:".$row["dv"]."anh: ".$row["da"].'<br>';
			}
		}
		}
		// function selectdb($db){
		// 	mysqli_select_db($this->_con,$db);
		
		function disconnect(){
			if($this->_con){
				mysqli_close($this->con);
			}

		}
	}

		

	
$db1= new database;
// $db1->db="qlhs";
$db1->connect();
$db1->select();
	
?>
