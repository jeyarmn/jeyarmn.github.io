<?php
class Sales {	
   
	private $foodItemsTable = 'food_orders';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function salesPerDay(){
		// $stmt = $this->conn->prepare("SELECT id, name, price, quantity, order_date, order_id FROM ".$this->foodItemsTable);				
		$stmt = $this->conn->prepare("SELECT id, name, price, quantity, order_date, order_id ,SUM(quantity) as perday,SUM(quantity) as Sales,day(order_date) as day, SUM(price) as totalp FROM  ".$this->foodItemsTable ."  Where status='Delivered' GROUP BY order_date");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function salesPerMonth(){
		$stmt = $this->conn->prepare("SELECT *, SUM(price) as total, month (order_date) as month,SUM(quantity) as Sales FROM ".$this->foodItemsTable ."  Where status='Delivered' GROUP BY month(order_date)");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function salesPerYear(){
		$stmt = $this->conn->prepare("SELECT *, SUM(price) as total, YEAR(order_date) as Year FROM ".$this->foodItemsTable ."  Where status='Delivered' GROUP BY YEAR(order_date)");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	public function bestProduct(){
		$stmt = $this->conn->prepare("SELECT *, SUM(quantity) as totalq, SUM(price * quantity) as totalP
		FROM food_orders
		Where status='Delivered' GROUP BY item_id order by Sum(quantity) DESC");				
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	
}
?>