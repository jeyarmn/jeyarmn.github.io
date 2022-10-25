<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Holy Steak Restobar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
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
  background-image: url("images/background.jpg");
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


.btn{
  display: inline-block;
  background-color: #faf032;
  margin-left: 650px;
  margin-top: 30px;
  color: #0f0f04;
  padding: 30px 80px;
  border-radius: 50px;
  transition: background 0.5s;
}
.btn:hover{
  background-color: #A21F0C;
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
      <div class="bigbanner">
        <h1>Holy Steak Restobar</h1>
        <h3> <i> High Quality Steaks and Dumplings</i> </h3>
        <a href="index.php" class="btn">Order Now</a>
      </div>


      <footer class="sticky-footer">

        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <p>   ©Copyright 2022 Capstone</p>
    </footer>

      </body>
    </html>
