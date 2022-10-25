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
	}h1{
		color: white;
	}

	.featurette-divider {
	  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
	}

	.featurette-heading {
	  font-weight: 300;
	  line-height: 1;
	  /* rtl:remove */
	  letter-spacing: -.05rem;
	}

	.featurette-heading {
	    font-size: 50px;
	  }


</style>
<link rel="stylesheet" type = "text/css" href ="../css/admin-index.css">

<?php include('inc/container.php');?>
<br>
<br>
<div class="content">
	<div class="container-fluid mt-2">
	</div>
		<center><h2 class="featurette-heading text-white text-white">Welcome Admin! This is Our Dashboard</h2>
			<hr class="featurette-divider text-white">
		</br>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">

		<div class="col-md-3 cards text-white  mb-4 fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem;  background-color:#43c764;"><a href="products.php"><i class="fa-solid fa-truck fa-5x text-white"></i></p>All Delivered items</a></div>
		<div class="col-md-3 cards text-white  mb-4 fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#dd8f59;"><a href="sales.php"><i class="fa-regular fa-calendar-days fa-5x text-white"></i></p>Sales Report</a></div>
		<div class="col-md-3 cards text-white  mb-4 fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#59edec;"><a href="bestSeller.php"><i class="fa-solid fa-hand-point-up fa-5x text-white"></i></p>Best Seller</a></div>
		<div class="col-md-3 cards text-white  mb-4 fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem;  background-color:#39ccbb;"><a href="manage-users.php"><i class="fa-solid fa-people-roof fa-5x text-white"></i></p>Manage Users</a></div>

		<!-- <div class="col-md-3 cards"><a href="#">Featured</a></div> -->
		</div>
		<div class="row mt-2">
		<div class="col-md-3 cards  text-white mb-2  fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#e3e751;"><a href="manage-admin.php"><i class="fa-solid fa-lock fa-5x text-white"></i></p>Manage Admin</a></div>
		<div class="col-md-3 cards  text-white mb-1 fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#fafa6e;"><a href="../manage-products.php"><i class="fa-solid fa-utensils fa-5x text-white"></i></p>Manage Products</a></div>
		<div class="col-md-3 cards  text-white mb-1  fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#b5ec76;"><a href="manage-orders.php"><i class="fa-regular fa-address-book fa-5x text-white"></i></p>Manage Orders</a></div>
		<div class="col-md-3 cards  text-white mb-1  fs-5 fw-normal rounded-circle border border-4" style="max-width: 20rem; background-color:#cc5358;"><a href="logout.php"><i class="fa-solid fa-power-off fa-5x text-white"></i></p>Log Out</a></div>

		</div>



</div>
	</div>
	<hr class="featurette-divider text-white">



<?php include('inc/footer.php');?>
