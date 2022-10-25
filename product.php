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

.b-example-divider {
height: 3rem;
background-color: rgba(0, 0, 0, .1);
border: solid rgba(0, 0, 0, .15);
border-width: 1px 0;
box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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

<body>
  <header class="p-3 bg-warning text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a class="navbar-brand text-white fw-bold" href="homepage.php">
      <img src="images/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">

    </a>
  </br>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="homepage.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="location.php" class="nav-link px-2 text-white">Location</a></li>
          <li><a href="about.php" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <div class="text-end">
          <a href="logout.php"<button type="button" class="btn btn-dark">Log Out</a></button>

      </div>
    </div>
  </header>

<br/>
<h1 class="text-center text-white fw-normal fs-1">
Categories
</h1>
<hr class="featurette-divider text-white">
<div class="row row-cols-1 row-cols-md-3 g-3 ">
  <div class="col">
    <div class="card bg-dark text-white">
      <img src="./images/product/prod1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <center><h1 class="card-title fw-bold">Main Menu</h1>
        <a href="index.php" class="btn btn-warning">Order Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-dark text-white">
      <img src="./images/product/prod2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <center><h1 class="card-title fw-bold">Appetizers</h1>
        <a href="appetizers.php" class="btn btn-warning">Order Now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-dark text-white">
      <img src="./images/product/prod3.png" class="card-img-top" alt="...">
      <div class="card-body">
      <center><h1 class="card-title fw-bold">Beverages</h1>
        <a href="beverages.php" class="btn btn-warning">Order Now</a>
      </div>
    </div>
  </div>
</div>
</div>

<hr class="featurette-divider text-white">

<footer class="sticky-footer bg-warning text-dark">
<ul>
    <li><a href="homepage.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="location.php">Store Location</a></li>
    <li><a href="reviews.php">Reviews & Feedbacks</a></li>
</ul>
<p>   ©Copyright 2022 Capstone</p>
</footer>


      </body>
    </html>
