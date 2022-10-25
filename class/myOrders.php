<?php
class myOrders {	
   
	private $customersTable = 'food_orders';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function myOrders(){
		$stmt = $this->conn->prepare("SELECT * FROM food_orders where user_id = ? ");				
	
		$user_id = htmlspecialchars($this->user_id);
		
		$stmt = $this->conn->prepare($stmt);
		$stmt->bind_param("s", $this->user_id);	
		$stmt->execute();
		$result = $stmt->get_result();
		return $result;	
	}
	public function ViewOrder(){
		if($this->user_id) {
			$sqlQuery = "
				SELECT a.*,b.name as myname FROM food_orders as a
				LEFT JOIN food_customer as b
				ON  a.user_id=b.id
				WHERE user_id = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("s", $this->user_id);	
			$stmt->execute();
			$result = $stmt->get_result();
			return $result;	
		} else {
			return 0;
		}
	}
	public function CancelOrders(){
		$sql = "UPDATE food_orders SET `status` = 'Canceled' WHERE `order_id` = ?";
		$stmt = $this->conn->prepare($sql);
		$ordered_id = htmlspecialchars($this->ordered_id);
		$stmt->bind_param('s', $ordered_id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
}
?>