<?php
class ManageUsers {	
   
	private $customersTable = 'food_customer';	
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

	public function EditCustomer(){
		$sql = "UPDATE `food_customer` SET `name` =?, `email` = ? , `phone` = ?, `address` = ? WHERE `id` = ?";
		$stmt = $this->conn->prepare($sql);
		$name = htmlspecialchars($this->name);
		$email = htmlspecialchars($this->email);
		$phone = htmlspecialchars($this->phone);
		$address = htmlspecialchars($this->address);
		$id = htmlspecialchars($this->id);
		$stmt->bind_param('sssss', $name, $email, $phone, $address,$id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function DeleteCustomer(){
		$sql = "DELETE FROM food_customer WHERE `id` = ?";
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