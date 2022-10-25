<?php
include_once 'config/Database.php';
include_once 'admin/class/Admin.php';
include_once 'admin/class/ManageProducts.php';
include_once 'admin/class/someFunct.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Admin($db);
$products = new ManageProducts($db);

include('admin/inc/status.php');
include('admin/inc/header.php');
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
<link rel="stylesheet" type = "text/css" href ="css/admin-index.css">

<?php include('inc/container.php');?>
<br>
<div class="content">
	<div class="container-fluid mt-2">
	<h1 class="text-center">
		Manage Products
	</h1>
	<button type="button" class="btn btn-primary mb-2" value="" data-bs-toggle="modal" data-bs-target="#AddModal">+ Add Products</button>

	</div>
	<br>

	<table class="table bg-light text-center">
		<thead class=table-dark>
			<tr>
				<th>Product ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php $result = $products->ViewProducts();
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
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['description']?></td>
				<td><?php echo $row['status']?></td>
				<td>
					<button type="button" class="btn btn-success zz" value="<?php echo $row['id'].'/'.$row['name'].'/'.$row['price'].'/'.$row['description'].'/'.$row['status']?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
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



<!-- Modal1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[Edit] Products Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	 <form method="POST">
		<input type="hidden" class="form-control mt-2" id="product_id" name="id" required>
		<input type="text" class="form-control mt-2" id="product_name" name="name" required>
		<input type="number" min="1" max="9999" class="form-control mt-2" id="product_price" name="price" required>
		<input type="text" class="form-control mt-2" id="product_description" name="description" required>
		<input type="text" class="form-control mt-2" id="product_status" name="status" required>

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
<!-- end -->
<!-- Modal2 -->
<div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">[Add] Products Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	 <form method="POST" enctype="multipart/form-data">
		<input type="text" class="form-control mt-2"  name="Addname" placeholder="Add Name" required>
		<input type="number" min="1" max="9999" class="form-control mt-2" placeholder="Add Price"  name="Addprice" required>
		<input type="text" class="form-control mt-2"  name="Adddescription" placeholder="Add Description" required>
		<input type="file" class="form-control mt-2"  name="stud_image" placeholder="Add Image" required>

		</div>
		<div class="modal-footer">
			<button type="submit" name="add" class="btn btn-primary">Add Product</button>
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

		</div>
	 </form>
    </div>
  </div>
</div>
</div>
<!-- end -->
	<?php
			if(isset($_POST['edit'])){
				$products->name = $_POST["name"];
				$products->price = $_POST["price"];
				$products->description = $_POST["description"];
				$products->status = $_POST["status"];
				$products->id = $_POST["id"];
				if($products->EditProducts()) {
					success();
				} else {
					failed();
				}
			}else if(isset($_POST['delete'])){
				$products->id = $_POST["id"];
				if($products->DeleteProducts()) {
					success();
				} else {
					failed();
				}
			}else if(isset($_POST['add'])){
				$var1 = rand(1111,9999);
				$var2 = rand(1111,9999);

				$var3 = $var1.$var2;
				$var3 = md5($var3);

				$fnm = $_FILES["stud_image"]["name"];
				$dst = "all_images/".$var3.$fnm;
				$dst_db = "all_images/".$var3.$fnm;
				move_uploaded_file($_FILES["stud_image"]["tmp_name"],$dst);

				$products->name = $_POST["Addname"];
				$products->price = $_POST["Addprice"];
				$products->description = $_POST["Adddescription"];
				$products->images = $dst_db;
				if($products->AddProducts()) {
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
	$("#product_id").val(res[0]);
	$("#product_name").val(res[1]);
	$("#product_price").val(res[2]);
	$("#product_description").val(res[3]);
	$("#product_status").val(res[4]);
});
</script>
<?php include('admin/inc/footer.php');?>
