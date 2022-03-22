<?php
	/**
	 * 
	 */
	class Database
	{
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = '';
		private$dbname = 'managemember';

		private $conn = NULL;
		private $result = NULL;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
			if(!$this->conn)
			{
				echo "Fail connected";
				exit();
			}
			else
			{
				mysqli_set_charset($this->conn, 'utf8');
			}
			return $this->conn;
		}

		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}

		public function getData()
		{
			if($this->result)
			{
				$data = mysqli_fetch_array($this->result);
			}
			else
			{
				$data = 0;
			}
			return $data;
		}

		public function getDataID($table, $id)
		{
			$sql = "SELECT * FROM $table WHERE id='$id'";
			$this->execute($sql);
			if($this->result)
			{
				$data = mysqli_fetch_array($this->result);
			}
			else
			{
				$data = 0;
			}
			return $data;
		}

		public function getAllData($table)
		{
			$sql = "SELECT * FROM $table";
			$this->execute($sql);
			if($this->num_rows()==0){
				$data = 0;
			}
			else{
				while($datas = $this->getData()){
					$data[] = $datas;
				}
			}
			return $data;
		}


		public function num_rows()
		{
			if($this->result){
				$num = mysqli_num_rows($this->result);
			}
			else{
				$num = 0;
			}
			return $num;
		}

		public function insertData($fullName, $yearOfBirth, $address)
		{
			$sql = "INSERT INTO member(id, fullname, yearOfBirth, address)VALUES(null, '$fullName', '$yearOfBirth', '$address')";
			return $this->execute($sql);
		}

		public function UpdateData($id, $fullName, $yearOfBirth, $address)
		{
			$sql = "UPDATE member SET fullName = '$fullName', yearOfBirth = '$yearOfBirth', address = '$address' WHERE id = '$id'";
			return $this->execute($sql);
		}

		public function delete($table, $id)
		{
			$sql = "DELETE FROM member WHERE id = '$id'";
			return $this->execute($sql);
		}
	}
?>