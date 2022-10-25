<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';
include_once 'class/Food.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$food = new Food($db);

include('inc/status.php');
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
<br>
<div class="content">
	<div class="container-fluid">
	<table class="table bg-light mt-2 text-center">
	<thead class="table-dark">
		<tr>
			<th>Id</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Order Date</th>
			<th>Order ID</th>
		</tr>
	</thead>
	<tbody>
		<?php $result = $food->itemsList();
			$count=0;
			while ($item = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>

		<tr>
			<td><?php echo $item["id"]; ?></td>
			<td><?php echo $item["name"]; ?></td>
			<td><?php echo "P".$item["price"]; ?></td>
			<td><?php echo $item["quantity"]."pcs"; ?></td>
			<td><?php echo $item["order_date"]; ?></td>
			<td><?php echo $item["order_id"] ?></td> <!-- last 3 digit of Track id -->


		</tr>
		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			}
			if ($count == 0) {
				echo "<td colspan='6'>No Results</td>";
			}
			?>
	</tbody>
	</table>
<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>
<?php include('inc/footer.php');?>
