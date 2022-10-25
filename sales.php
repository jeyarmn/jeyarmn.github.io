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
<link rel="stylesheet" type = "text/css" href ="../css/admin-sales.css">
<?php include('inc/container.php');?>
<br>
<div class="content">
	<div class="container">
		<form method="POST">
		<div class="row">
			<div class="col-sm-3">
				<select name="select" id="" class="form-control  mt-2" >
					<option value="">Select Sales</option>
					<option value="day">Sales Per Day</option>
					<option value="month">Sales Per Month</option>
					<option value="year">Sales Per Annual</option>
				</select>
			</div>
			<div class="col-sm-2">
				<input type="submit" value="Check" name="Check" class="btn btn-warning mt-2">
			</div>
		</div>
		</form>
		<br>
	<table class="table bg-light mt-2 text-center">
		<thead class="table-dark"
	<?php
	// include("perMonth.php")

	if(!empty($_POST["Check"])) {
	if($_POST['select']=='day')
	{
		include("perDay.php");
	}
	else if($_POST['select']=='month')
	{
		include("perMonth.php");
	}
	else if($_POST['select']=='year')
	{
		include("perYear.php");
	}
	else {
		include("perDay.php");
	}

}else {
	include("perDay.php");
}

	?>

	</table>
	<center><a href="index.php" type="button" class="btn btn-warning ">Go Back To Dashboard</a>

<?php include('inc/footer.php');?>
