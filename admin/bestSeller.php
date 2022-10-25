<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';
include_once 'class/Sales.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$sales = new Sales($db);

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
<link rel="stylesheet" type = "text/css" href ="../css/admin-bestSeller.css">
<?php include('inc/container.php');?>
<br>

<div class="container">
	<!-- <h2 class=" mt-2 text-light">BEST SELLER</h2> -->
<table class="table bg-light text-center mt-2">
<thead class=table-dark>
		<tr>
			<th>Product Name</th>
			<th>Total Quantity Sales</th>
			<th>Total Sales</th>
		</tr>
	</thead>
<tbody>
		<?php $result = $sales->bestProduct();
			$count=0;
			while ($item = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>

		<tr>
			<td><?php echo $item["name"]; ?></td> -->
			<td><?php echo $item["totalq"]."pcs"; ?></td>
			<td><?php echo "P".$item["totalP"]; ?></td>
		</tr>
		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			}if ($count == 0) {
				echo "<td colspan='3'>No Results</td>";
			}
			?>
	</tbody>
</table>
</div>
<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>

<?php include('inc/footer.php');?>
