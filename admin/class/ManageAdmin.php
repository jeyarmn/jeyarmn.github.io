<?php
class ManageAdmin {	
   
	private $customersTable = 'admin';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function ViewCustomers(){
		$stmt = $this->conn->prepare("SELECT * FROM ".$this->customersTable);				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function ViewCustomer(){
		if($this->id) {
			$sqlQuery = "
				SELECT * FROM ".$this->customerTable." 
				WHERE id = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			return $result;	
		} else {
			return 0;
		}
	}

	public function EditAdmin(){
		$sql = "UPDATE admin SET `username` = ?, `password` = ? , `name` = ? WHERE `id` = ?";
		$stmt = $this->conn->prepare($sql);
		$username = htmlspecialchars($this->username);
		$password = htmlspecialchars($this->password);
		$name = htmlspecialchars($this->name);
		$id = htmlspecialchars($this->id);
		$stmt->bind_param('ssss', $username, $password, $name,$id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function DeleteAdmin(){
		$sql = "DELETE FROM admin WHERE `id` = ?";
		$stmt = $this->conn->prepare($sql);
		$id = htmlspecialchars($this->id);
		$stmt->bind_param('s',$id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
}
?>