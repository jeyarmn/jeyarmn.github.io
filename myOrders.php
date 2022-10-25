<?php
include_once 'config/Database.php';
include_once 'class/Customer.php';
include_once 'class/Food.php';
include_once 'class/myOrders.php';
include_once 'class/someFunct.php';


$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);
$food = new Food($db);
$myOrder = new myOrders($db);

if(!$customer->loggedIn()) {
	header("Location: login.php");
}
include('inc/header.php');
?>
<style>
	.food-img-holder{
		width:100%;
		height:25;
	}
	.food-img-holder>img{
		width:100%;
		height:100%;
		object-fit:cover;
		object-position:center center;
	}
</style>
<link rel="stylesheet" type = "text/css" href ="css/foods.css">
<?php include('inc/container.php');?>
<div class="content">
	<div class="container-fluid">
		<div class='row'>
        <?php include('top_menu.php'); ?>
		</div>
		<table class="table bg-light text-center mt-2">
		<thead>
			<tr>
				<th>Order ID</th>
				<!-- <th>Name of Customer</th> -->
				<th>Order Date</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php 
		$myOrder->user_id = $_SESSION["userid"];
		$result = $myOrder->ViewOrder();
			$count=0;
			while ($row = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>
		<tbody>
			<tr>
				<td><?php echo $row['order_id']?></td>
				<!-- <td><?php echo $row['name']?></td> -->
				<td><?php echo $row['order_date']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['quantity']?></td>
				<td><?php echo $row['status']?></td>

				<td>
					<button type="button" class="btn btn-success zz" value="<?php echo $row['order_id']."/".$row['status']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Cancel</button>
				</td>
			</tr>
		</tbody>

		<?php
			$count++;
			if($count==4)
			{
			  echo "";
			  $count=0;
			}
			}
			if ($count == 0) {
				echo "<td colspan='7'>No Results";
			}
			?>
	</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[Cancel] Cancel Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		
	 <form method="POST">
		<input type="hidden" class="form-control mt-2" id="order_id" name="ssid" required>
		<input type="hidden" class="form-control mt-2" id="status" name="status" required>
		<h5>Are you sure you want to cancel your order?</h5>
			
		</div>
		<div class="modal-footer">
			<button type="submit" name="cancel" class="btn btn-danger">Yes</button>
			<button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">No</button>
		</div>
	 </form>
    </div>
  </div>
</div>
</div>

	<?php
			if(isset($_POST['cancel']) && $_POST["status"]!=""){
				
				if( $_POST["status"]=="Pending"){
				$myOrder->ordered_id = $_POST["ssid"];
				if($myOrder->CancelOrders()) {
					success();
				} else {
					failed();
				}

				}else{
					echo "<script>
					alert('You cannot cancel this order')
				</script>";
				}
			}
	?>

<script>
$(".zz").unbind().click(function(event) {
	var val = $(this).attr('value');
	var res = val.split("/");
	$("#order_id").val(res[0]);
	$("#status").val(res[1]);

});
</script>
	</div>
</div>

	

