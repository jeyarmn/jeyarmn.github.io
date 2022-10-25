<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Holy Steak Restobar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<style>
body{
  margin: 0;
  padding: 0;
  font-family: Arial;
  background-color: #0f0f04;
}
/*NAVBAR*/
/*CONTAINER*/
.container{

	position: relative;
	width:1500px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	padding: 20px;
	margin-top: 12%;
}

.container .card{
	width:400px;
  font-family: 'Hind Madurai', sans-serif;
	position: relative;
	height: 340px;
	background: #faf032;
	margin:100px 10px;
	padding: 20px -10px;
	display:flex;
	flex-direction: column;
	box-shadow: 0.5px 10px #e6e6e6;
	transition:0.3s ease-in-out;
	margin-top: 10%;
  border-radius: 10px;
}
.container .card .imgBx{
	position: relative;
	width:320px;
	height: 400px;
	top: -60px;
	left:40px;
	box-shadow: 0 5px 20px rbga (0,0,0,1.2);
}
.container .card .imgBx img
{
	max-width: 100%;
	border-radius: 20px;
}
.imgBx:hover img{
	transform: scale(1.1);
}
.header h1{
  color: #FFFFFF;
  font-family: 'Righteous', cursive;
  font-size: 100px;
  padding-top: 60px;
}
.header h2{
  color: #FFFFFF;
  font-family: 'Righteous', cursive;
}

/*FOOTER */
footer p{
    padding:0;
    font-size: 0.8em;
    color: hsla(0, 50%, 100%, 0.35);
    margin: 1em 0;
    font-size: 1rem;
}
footer ul{
    list-style: none;
    display: flex;
    margin: 1em 0;
}
footer ul li a{
    padding: 1em;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.904);
    transition: 100ms;
}
footer ul li a:hover{
    color: var(--primary);
}
footer{
    width: 100%;
    background: #0f0f04;
    color: #fff;
    display: grid;
    place-items: center;
    padding: 2em;
    font-size: 1.2rem;
}
/* Sticky Footer Styling */
body{
    min-height: 100vh;
}
.sticky-footer{
    position: sticky;
    top: 100%;
}



</style>

<body>

  <div class="header">
  <center><h1> Holy Steak Restobar </h1> </center> <br>
  <center><h2> <i> High Quality Steaks and Dumplings </i></h2> </center>
</div>

<div class="container">
<div class="card">
  <div class="imgBx">
    <a href="index.php">
    <img src="./images/product/Mainmenu.jpg"></a>
    <center><h2>Main Menu </h2></center>
  </div>
</div>

<div class="card">
  <div class="imgBx">
    <a href="appetizers.php">
    <img src="./images/product/appetizerrr.jpg"></a>
    <center><h2>Appetizers</h2></center>
  </div>
</div>

<div class="card">
  <div class="imgBx">
    <a href="beverages.php">
    <img src="./images/product/beverages.jpg"></a>
    <center><h2>Beverages</h2></center>
  </div>
</div>

</div>


<footer class="sticky-footer">
<ul>
    <li><a href="homepage.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Our Products</a></li>
    <li><a href="#">Payment Options</a></li>
    <li><a href="#">Contact Us</a></li>
</ul>
<p>   ©Copyright 2022 Capstone</p>
</footer>


      </body>
    </html>
