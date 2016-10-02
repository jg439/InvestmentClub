<?php
class mysqlDB{
	public $db;
	private $ini;

	public function __construct($iniFile){
		$this->ini = parse_ini_file($iniFile, true);
		$host = $this->ini['MySQL']['host'];
		$user = $this->ini['MySQL']['user'];
		$password = $this->ini['MySQL']['password'];
		$database = $this->ini['MySQL']['database'];

		$this->db = new mysqli($host, $user, $password, $database);
		if($this->db->connect_errno > 0){
				echo __FILE__.":".__LINE__.": failed to connect to db, re: ".$this->db->connect_error.PHP_EOL;
				exit(0);
		}
	}

	public function __destruct(){
			$this->db->close();
	}
	
	public function checkUser($username, $password){
		$saltPass = $this->saltPassword($password);
		
		$query = "SELECT COUNT(*) FROM Users WHERE Username = '$username' AND Password = '$saltPass';";
		$result = $this->db->query($query) or die(mysqli_error($this->db));
		
		$count = $result->fetch_row();
		
		if($count[0] == 0){
			echo "You are not registered yet!<br><br>";
		}
		
		else{
			echo "You are now logged in!<br><br>";
		}
	}
	
	public function registerUser($email, $password){
		$email = $this->db->real_escape_string($email);
		$saltPass = $this->saltPassword($password);
		
		$query = "INSERT INTO Users VALUES('$email', '$saltPass');";
		$this->db->query($query) or die(mysqli_error($this->db));
		
		$this->checkUser($email, $password);
	}
	
	//*creates a salted password
	public function saltPassword($password){
			$salt1 = $this->ini['MySQL']['salt1'];
			$salt2 = $this->ini['MySQL']['salt2'];
			return openssl_digest($salt1.$password.$salt2, "sha512");
	}
}
?>