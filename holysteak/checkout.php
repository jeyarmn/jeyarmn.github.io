<?php
include_once 'config/Database.php';
include_once 'class/Customer.php';

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);

if(!$customer->loggedIn()) {
	header("Location: login.php");
}
include('inc/header.php');
?>
<title>Holy Steak Restobar</title>
  <link rel="stylesheet" type = "text/css" href ="css/foods.css">
<?php include('inc/container.php');?>
<div class="content">
	<div class="container-fluid">

		<div class='row'>
        <?php include('top_menu.php'); ?>
		</div>

		<div class="my-3">
			<div class="card rounded-0 shadow"style="background-color:#faf032;">
				<div class="card-body">
					<div class="container-fluid">
						<?php
						$orderTotal = 0;
						foreach($_SESSION["cart"] as $keys => $values){
							$total = ($values["item_quantity"] * $values["item_price"]);
							$orderTotal = $orderTotal + $total;
						}
						?>
						<div class='row'>
							<div class="col-md-6 lh-1">
								<h3>Delivery Address</h3>
								<?php
								$addressResult = $customer->getAddress();
								$count=0;
								while ($address = $addressResult->fetch_assoc()) {
								?>
								<p class="mb-1"><?php echo $address["address"]; ?></p>
								<p class="mb-1"><strong>Phone</strong>:<?php echo $address["phone"]; ?></p>
								<p class="mb-1"><strong>Email</strong>:<?php echo $address["email"]; ?></p>
								<?php
								}
								?>
							</div>
							<?php
							$randNumber1 = rand(0,9);
							// $randNumber2 = rand(0,9);
							$randNumber3 = $var = date('is');
							// date()
							$orderNumber = $randNumber1.$randNumber3;
							?>
							<div class="col-md-6 lh-1">
								<h3>Order Summery</h3>
								<p class="mb-2"><strong>Items</strong>: <?php echo $orderTotal; ?></p>
								<p class="mb-2"><strong>Delivery</strong>: 0</p>
								<p class="mb-2"><strong>Total</strong>: <?php echo $orderTotal; ?></p>
								<p class="mb-4"><strong>Order Total</strong>: PHP<?php echo $orderTotal; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer py-1">
					<div class="row justify-content-center">
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<div class="d-grid">
								<div class="btn-group">
				  			<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				    Mode Of Payment
				  </button>
				  <ul class="dropdown-menu">
				    <li><a class="dropdown-item" href="#">Cash on Delivery</a></li>
				    <li><a class="dropdown-item" href="#">Gcash</a></li>
							</div>
								<a href="process_order.php?order=<?php echo $orderNumber;?>"  class="btn btn-dark">Place Order</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>

<?php include('inc/footer.php');?>
