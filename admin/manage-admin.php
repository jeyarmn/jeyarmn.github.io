<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';
include_once 'class/ManageAdmin.php';
include_once 'class/someFunct.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$users = new ManageAdmin($db);

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
		Manage Admin
	</h1>
	</div>
	<br>
	<!-- <button type="button" class="btn btn-primary mt-2 mb-2 float-end" data-bs-toggle="modal" data-bs-target="#AddAdmin">Add Admin</button> -->

	<table class="table bg-light text-center">
		<thead class=table-dark>
			<tr>
				<th>Admin ID</th>
				<th>Name</th>
				<th>Username</th>
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
				<td><?php echo $row['username']?></td>
				<td>
					<button type="button" class="btn btn-success zz" value="<?php echo $row['id'].'/'.$row['name'].'/'.$row['username'].'/'.$row['password']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
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
				echo "<td colspan='4'>No Results</td>";
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
		<input type="hidden" class="form-control mt-2" id="admin_id" name="id" required>
		<input type="text" class="form-control mt-2" id="admin_name" name="name" required>
		<input type="text" class="form-control mt-2" id="admin_username" name="username" required>
		<input type="text" class="form-control mt-2" id="admin_password" name="password" required>

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
<!-- Modal -->
<!-- <div class="modal fade" id="AddAdmin" tabindex="-1" aria-labelledby="AddAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddAdminLabel">[Add] Admin Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	 <form method="POST">
		<input type="hidden" class="form-control mt-2" id="admin_id" name="id" required>
		<input type="text" class="form-control mt-2" id="admin_name" name="name" required>
		<input type="text" class="form-control mt-2" id="admin_username" name="username" required>
		<input type="text" class="form-control mt-2" id="admin_password" name="password" required>

		</div>
		<div class="modal-footer">
			<button type="submit" name="edit" class="btn btn-primary">Save changes</button>
			<button type="submit" name="delete" class="btn btn-danger">Delete</button>
		</div>
	 </form>
    </div>
  </div>
</div>
</div> -->
	<?php
			if(isset($_POST['edit'])){
				$users->name = $_POST["name"];
				$users->username = $_POST["username"];
				$users->password = $_POST["password"];
				$users->id = $_POST["id"];
				if($users->EditAdmin()) {
					success();
				} else {
					failed();
				}
			}else if(isset($_POST['delete'])){
				$users->id = $_POST["id"];
				if($users->DeleteAdmin()) {
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
	$("#admin_id").val(res[0]);
	$("#admin_name").val(res[1]);
	$("#admin_username").val(res[2]);
	$("#admin_password").val(res[3]);
});
</script>
<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>
<?php include('inc/footer.php');?>
