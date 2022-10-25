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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link href="headers.css" rel="stylesheet">



    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  margin: 0;
  padding: 0;
  font-family: Arial;
  background-color: #0c0e09;
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

    .form-control-dark {
      color: #fff;
      background-color: var(--bs-dark);
      border-color: var(--bs-gray);
    }
    .form-control-dark:focus {
      color: #fff;
      background-color: var(--bs-dark);
      border-color: #fff;
      box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .text-small {
      font-size: 85%;
    }

    .dropdown-toggle {
      outline: 0;
    }


    .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
}

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
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
  .carousel-caption p {
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      line-height: 1.4;
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
          <a href="register.php"</a><button type="button" class="btn btn-dark">Sign-up</button>
    </div>
      </div>
    </div>
  </header>
</br>


  </br>
  
  </br>

  <div class="row featurette">
        <div class="col-md-7">
        </br> </br> </br> </br> </br> </br> </br>
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <img src="images/rev1.jpg" class="img-fluid"alt="...">

        </div>
      </div>
</br>


<hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">












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
