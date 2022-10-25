<?php
class ManageOrders {	
   
	private $customersTable = 'food_orders';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function ViewOrders(){
		$stmt = $this->conn->prepare("SELECT a.*,b.name as username
		FROM `food_orders` as a
		LEFT JOIN food_customer as b
		ON a.user_id=b.id");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function ViewOrder(){
		$stmt = $this->conn->prepare("SELECT * FROM WHERE `order_id` = ?");	
		$order_id = htmlspecialchars($this->order_id);	
		$stmt->bind_param('s', $order_id);		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function UpdateOrders(){
		$sql = "UPDATE food_orders SET `status` = ? WHERE `order_id` = ?";
		$stmt = $this->conn->prepare($sql);
		$status = htmlspecialchars($this->status);
		$ordered_id = htmlspecialchars($this->ordered_id);
		$stmt->bind_param('ss', $status, $ordered_id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	public function DeleteOrders(){
		$sql = "DELETE FROM food_orders WHERE `order_id` = ?";
		$stmt = $this->conn->prepare($sql);
		$order_id = htmlspecialchars($this->order_id);
		$stmt->bind_param('s', $order_id);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
}
?>