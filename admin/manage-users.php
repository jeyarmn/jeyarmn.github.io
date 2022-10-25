<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';
include_once 'class/ManageUsers.php';
include_once 'class/someFunct.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$users = new ManageUsers($db);

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
		Manage Users
	</h1>
	</div>
	<br>
	<table class="table bg-light text-center">
		<thead class= table-dark>
			<tr>
				<th>Customer ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php $result = $users->ViewCustomers();
			$count=0;
			while ($row = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>
		<tbody>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['phone']?></td>
				<td><?php echo $row['address']?></td>
				<td>
					<button type="button" class="btn btn-success zz" value="<?php echo $row['id'].'/'.$row['name'].'/'.$row['email'].'/'.$row['phone'].'/'.$row['address']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
				</td>
			</tr>
		</tbody>

		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			}if ($count == 0) {
				echo "<td colspan='6'>End of Results</td>";
			}
			?>
	</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[Edit] Customer Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	 <form method="POST">
		<input type="hidden" class="form-control mt-2" id="customer_id" name="id" required>
		<input type="text" class="form-control mt-2" id="customer_name" name="name" required>
		<input type="text" class="form-control mt-2" id="customer_email" name="email" required>
		<input type="text" class="form-control mt-2" id="customer_phone" name="phone" required>
		<input type="text" class="form-control mt-2" id="customer_address" name="address" required>


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
			if(isset($_POST['edit'])){
				$users->name = $_POST["name"];
				$users->email = $_POST["email"];
				$users->id = $_POST["id"];
				$users->phone = $_POST["phone"];
				$users->address = $_POST["address"];
				if($users->EditCustomer()) {
					success();
				} else {
					failed();
				}
			}else if(isset($_POST['delete'])){
				$users->id = $_POST["id"];
				if($users->DeleteCustomer()) {
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
	$("#customer_id").val(res[0]);
	$("#customer_name").val(res[1]);
	$("#customer_email").val(res[2]);
	$("#customer_phone").val(res[3]);
	$("#customer_address").val(res[4]);


});
</script>
<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>
<?php include('inc/footer.php');?>
