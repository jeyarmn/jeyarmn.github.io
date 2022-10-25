<?php
class Food {	
   
	private $foodItemsTable = 'food_orders';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function itemsList(){		
		$stmt = $this->conn->prepare("SELECT id, name, price, quantity, order_date, order_id FROM ".$this->foodItemsTable ." WHERE status ='Delivered'");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	
}
?>