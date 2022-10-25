<?php
if (isset($_SESSION["name"])) {
  ?>
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark rounded-pill" >
  <div class="container-fluid">
       <a class="navbar-brand text-dark text-center bg-light bg-opacity-25 rounded-pill px-4"
            href="./"><span class="fa fa-user"></span> WELCOME! USER: <?php echo $_SESSION["name"]; ?></a>
        <center><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><span class="fa fa-cutlery"></span>
                        Products</a></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./cart.php"><span class="fa fa-shopping-cart"></span> Cart (<?php
						if(isset($_SESSION["cart"])){
						$count = count($_SESSION["cart"]);
						echo "$count";
							}
						else
							echo "0";
						?>)
						</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="myOrders.php"><span class="fa fa-sticky-note"></span>
                        My Orders</a></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./logout.php"><i class="fa fa-sign-out-alt"></i> Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
}
?>
