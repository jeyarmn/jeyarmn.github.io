<?php
class ManageProducts {

	private $customersTable = 'food_items';
	private $conn;

	public function __construct($db){
        $this->conn = $db;
    }

	public function ViewProducts(){
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
	public function AddProducts(){
		$sql="INSERT INTO `food_items` (`name`, `price`, `description`, `images`) VALUES (?, ?, ?,?)";
		$stmt = $this->conn->prepare($sql);
		$name = htmlspecialchars($this->name);
		$price = htmlspecialchars($this->price);
		$description = htmlspecialchars($this->description);
		$images = htmlspecialchars($this->images);
		$stmt->bind_param('ssss', $name, $price, $description,$images);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function EditProducts(){
		$sql ="UPDATE `food_items` SET `name` = ? , `price` = ? , `description` = ? , `status` = ? WHERE `food_items`.`id` = ? ";
		$stmt = $this->conn->prepare($sql);
		$name = htmlspecialchars($this->name);
		$price = htmlspecialchars($this->price);
		$description = htmlspecialchars($this->description);
		$status = htmlspecialchars($this->status);
		$id = htmlspecialchars($this->id);
		$stmt->bind_param('sssss', $name, $price, $description,$status,$id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	public function DeleteProducts(){
		$sql = "DELETE FROM food_items WHERE `id` = ?";
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
