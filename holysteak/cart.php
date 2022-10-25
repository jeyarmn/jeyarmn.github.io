<?php
include_once 'config/Database.php';
include_once 'class/Customer.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);

if(!$customer->loggedIn()) {
	header("Location: login.php");
}

if(isset($_POST["add"])){
	if(isset($_SESSION["cart"])){
		$item_array_id = array_column($_SESSION["cart"], "food_id");
		if(!in_array($_GET["id"], $item_array_id)){
			$count = count($_SESSION["cart"]);
			$item_array = array(
				'food_id' => $_GET["id"],
				'item_name' => $_POST["item_name"],
				'item_price' => $_POST["item_price"],
				'item_id' => $_POST["item_id"],
				'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="index.php"</script>';
		} else {
			echo '<script>window.location="index.php"</script>';
		}
	} else {
		$item_array = array(
			'food_id' => $_GET["id"],
			'item_name' => $_POST["item_name"],
			'item_price' => $_POST["item_price"],
			'item_id' => $_POST["item_id"],
			'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}

if(isset($_GET["action"])){
	if($_GET["action"] == "delete"){
		foreach($_SESSION["cart"] as $keys => $values){
			if($values["food_id"] == $_GET["id"]){
				unset($_SESSION["cart"][$keys]);
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

if(isset($_GET["action"])){
	if($_GET["action"] == "empty"){
		foreach($_SESSION["cart"] as $keys => $values){
			unset($_SESSION["cart"]);
			echo '<script>window.location="cart.php"</script>';
		}
	}
}

include('inc/header.php');
?>
<?php include('inc/container.php');?>
<div class="content text-white">
	<div class="container-fluid">
		<div class='row text-white'>
		<?php include('top_menu.php'); ?>
		</div>
		<div class='row text-white'>
		<?php
		if(!empty($_SESSION["cart"])){
		?>
			<center><h2>Your Cart</h2></center>
			<table class="table table-striped table-warning table-bordered">
			 <thead class="table-secondary">
			<tr>
			<th width="50%">Food Name</th>
			<th width="10%">Quantity</th>
			<th width="20%">Price Details</th>
			<th width="25%">Order Total</th>
			<th width="10%">Action</th>
			</tr>
			</thead>
			<?php
			$total = 0;
			foreach($_SESSION["cart"] as $keys => $values){
			?>


				<tr>
				<td class="text-center "><?php echo $values["item_name"]; ?></td>
				<td class="text-center "><?php echo $values["item_quantity"] ?></td>
				<td class="text-end "> <?php echo $values["item_price"]; ?></td>
				<td class="text-end "> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
				<td><a href="cart.php?action=delete&id=<?php echo $values["food_id"]; ?>" onclick="if(confirm('Are you sure to remove this item from cart list?') === false) { event.preventDefault() }"><span class="text-danger text-decoration-none">Remove</span></a></td>
				</tr>
				<?php
				$total = $total + ($values["item_quantity"] * $values["item_price"]);
			}
			?>
			<tr>
			<td colspan="3" class="text-end ">Total</td>
			<td class="text-end ">PHP <?php echo number_format($total, 2); ?></td>
			<td></td>
			</tr>
			</table>
			<div class="text-end ">
				<a href="cart.php?action=empty"><button class="btn btn-outline-danger"><span class="fa fa-trash"></span> Empty Cart</button></a>
				<a href="index.php"><button class="btn btn-outline-warning">Add more items</button></a>
				<a href="checkout.php"><button class="btn btn-dark"><span class="fa fa-share-alt"></span> Check Out</button></a>

		</div>
		<?php
		} elseif(empty($_SESSION["cart"])){
		?>
			<div class="container">
				<div class="jumbotron py-5 my-8 text-white">
				<h3 class='text-center'>Your cart is empty. Back to <a href="./index.php" class="text-decoration-none fw-bolder">Menu</a>.</h3>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	</div>
</div>
<?php include('inc/footer.php');?>
