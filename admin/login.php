<?php
include_once '../config/Database.php';
include_once 'class/Admin.php';

$database = new Database();
$db = $database->getConnection();

$admin = new Admin($db);

if($admin->loggedIn()) {
	header("Location: index.php");
}

$loginMessage = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'):
if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
	$admin->email = $_POST["email"];
	$admin->password = $_POST["password"];
	if($admin->login()) {
		header("Location: index.php");
	} else {
		$loginMessage = 'Invalid login! Please try again.';
	}
} else {
	$loginMessage = 'Fill all fields.';
}
endif;
include('inc/header.php');
?>
<?php include('inc/container.php');?>
<style>
html,
body,
body>.container {
    height: 98%;
    width: 100%;
		background-color:#0f0f04;
		background-image: url('../images/wall.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-size: 100% 100%;
}
</style>
<div class="content h-100 d-flex w-100 justify-content-center align-items-center">
    <div class="col-lg-4 col-md-5 col-sm-10 col-xs-12">
        <div class="card card-info rounded-0"style=background-color:#FBFBFB;>
            <div class="card-header">
                <div class="card-title h4 mb-0 fw-bold text-center">Admin Log In</div>
            </div>
            <div class="card-body">
                <?php if ($loginMessage != '') { ?>
                <div id="login-alert" class="alert alert-danger col-sm-12 rounded-0 py-1"><?php echo $loginMessage; ?></div>
                <?php } ?>
				<?php if (isset($_SESSION['success'])) { ?>
                <div id="login-alert" class="alert alert-success col-sm-12 rounded-0 py-1"><?php echo $_SESSION['success']; ?></div>
                <?php
					unset($_SESSION['success']);
					}
				?>
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" placeholder="Email" required>
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            value="<?php if(!empty($_POST["password"])) { echo $_POST["password"]; } ?>" placeholder="Password" required>
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="text-center">
                        <div class="col-sm-12 controls">
                            <input type="submit" name="login" value="Login" class="btn btn-warning">
                            <!-- <a href="./register.php" class="btn btn-outline-warning">Sign Up</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php');?>
