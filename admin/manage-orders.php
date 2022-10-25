<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';
include_once 'class/ManageOrders.php';
include_once 'class/someFunct.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$orders = new ManageOrders($db);

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
	}h1{
		color: white;
	}
</style>
<link rel="stylesheet" type = "text/css" href ="../css/admin-index.css">

<?php include('inc/container.php');?>
<br>
<div class="content">
	<div class="container-fluid mt-2">
	<h1 class="text-center">
		Manage Orders
	</h1>
	</div>
	<br>
	<!-- <button type="button" class="btn btn-primary mt-2 mb-2 float-end" data-bs-toggle="modal" data-bs-target="#AddAdmin">Add Admin</button> -->

	<table class="table bg-light text-center">
		<thead class=table-dark>
			<tr>
				<th>Order ID</th>
				<th>Name of Customer</th>
				<th>Order Date</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php $result = $orders->ViewOrders();
			$count=0;
			while ($row = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>
		<tbody>
			<tr>
				<td><?php echo $row['order_id']?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['order_date']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['quantity']?></td>
				<td><?php echo $row['status']?></td>

				<td>
					<button type="button" class="btn btn-success zz" value="<?php echo $row['id'].'/'.$row['status'].'/'.$row['order_id']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
				</td>
			</tr>
		</tbody>

		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			//   $count=0;
			}
			}if ($count == 0) {
				echo "<td colspan='8'>No Results</td>";
			}
			?>
	</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[Edit] Admin Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	 <form method="POST">
		<input type="hidden" class="form-control mt-2" id="order_id" name="id" required>
		<input type="text" id="status1" class="form-control mt-2" disabled>
		<select name="status" id="status" class="form-control mt-2">
			<option value="">Select new status</option>
			<option disabled value="Pending">Pending</option>
			<option value="Preparing">Preparing</option>
			<option value="On the Way">On the way</option>
			<option value="Canceled">Cancel</option>
			<option value="Delivered">Delivered</option>
		</select>

		</div>
		<div class="modal-footer">
			<button type="submit" name="edit" class="btn btn-primary">Save changes</button>
			<button type="submit" name="delete" class="btn btn-danger">Delete</button>
		</div>
	 </form>
    </div>
  </div>
</div>
</div>

	<?php
			if(isset($_POST['edit']) && $_POST["status"]!=""){
				$orders->ordered_id = $_POST["id"];
				$orders->status = $_POST["status"];
				if($orders->UpdateOrders()) {
					success();
				} else {
					failed();
				}
			}else if(isset($_POST['delete'])){
				$orders->order_id = $_POST["id"];
				if($orders->DeleteOrders()) {
					success();
				} else {
					failed();
				}
			}
	?>

<script>
$(".zz").unbind().click(function(event) {
	var val = $(this).attr('value');
	var res = val.split("/");
	$("#order_id").val(res[2]);
	$("#status1").val(res[1]);
});
</script>
<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>
<?php include('inc/footer.php');?>
