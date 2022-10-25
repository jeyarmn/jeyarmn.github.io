<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Holy Steak Restobar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>
body{
  margin: 0;
  padding: 0;
  font-family: Arial;
  background-color: #0f0f04;
}

/*BIG BANNER*/
.bigbanner{
  width: 100%;
  height: 650px;
  background-image: url("images/back2.png");
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 80px;
}
.bigbanner h1{
  margin-top: 0;
  text-align: center;
  font-size: 120px;
  font-family: 'Walter Turncoat', cursive;
  color: #fff;
}
.bigbanner h3{
  margin-top: 0;
  text-align: center;
  font-size: 70px;
  font-family: 'Walter Turncoat', cursive;
  font-weight: lighter;
  color: #fff;
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
          <a href="login.php"<button type="button" class="btn btn-outline-light me-2">Login<a/></button>
          <a href="register.php"<button type="button" class="btn btn-dark">Sign-up</a></button>
    </div>
      </div>
    </div>
  </header>





      <div class="bigbanner">
      </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
    </br> </br> </br> </br> </br> </br>

        <center><a class="btn btn-outline-warning" href="login.php">Order Now</a>
      </div>
    </br>
    <hr class="featurette-divider text-white">
      <center><h2 class="featurette-heading text-white text-white">Featured Products</h2>
      </br>
      <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col">
    <div class="card"style="background-color:#040400">
      <img src="images/menu8.jpg" class="card-img-top rounded-circle" alt="...">
      <div class="card-body">
        <center><h5 class="card-title fw-bold text-white">Wagyu Cubes with Rice</h5>
        <p class="card-text text-white">a Japanese beef cattle breed – derive from native Asian cattle. 'WAGYU' refers to all Japanese beef cattle, where 'Wa' means Japanese and 'gyu' means cow.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color:#040400">
      <img src="images/menu5.jpg" class="card-img-top rounded-circle" alt="...">
      <div class="card-body">
        <center><h5 class="card-title fw-bold text-white">Burger Steak</h5>
        <p class="card-text text-white">Burger steak is made of flavorful burger patties that are smothered in a rich and luxurious mushroom gravy sauce.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="background-color:#040400">
      <img src="images/appetizer2.jpg" class="card-img-top rounded-circle" alt="...">
      <div class="card-body">
        <center><h5 class="card-title fw-bold text-white">Crab Cake</h5>
        <p class="card-text fw-light text-white">A Crab Cake variation that is well-liked in the US is a crab cake. Crab meat, a variety of seasonings,</p>
      </div>
    </div>
  </div>
  <div class="col">
  </div>
</div>
<hr class="featurette-divider text-white">
  <div class="p-3 mb-2 bg-warning text-white rounded pill text-center fw-bolder fs-1">OUR BEST SELLERS!</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bs1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <i class="fas fa-star text-dark"></i>
      <i class="fas fa-star text-dark"></i>
      <i class="fas fa-star text-dark"></i>
      <i class="fas fa-star text-dark"></i>
      <i class="fas fa-star text-dark"></i>
        <p>This Australian T-bone steak is cut from the saddle of the beast and is easy to recognize because of its two steaks, sirloin on one side and tenderloin on the other, separated by a T-shaped bone. And that bone, running down the centre of the cut imparts wonderful flavour as it cooks.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bs2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star"></i>
        <p>Beef Salpicao is a dish composed of cubed beef sirloin or tenderloin, lots of minced garlic, Worcestershire sauce, olive oil, and seasoning.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bs3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <i class="fas fa-star text-dark"></i>
        <p>Striploins are a boneless cut from the short loin that's highly prized for its excellent balance of flavor & tenderness. This is the muscle that boneless strip steaks (aka NY Strip Steaks), one of the more expensive steakhouse cuts, are cut from.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
