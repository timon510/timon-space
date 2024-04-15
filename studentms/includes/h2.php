<!--header-->
    <div class="header" id="home">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
          </button>
          <h1><a class="navbar-brand" href="index.php">SMS</a></h1>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                <li><a href="index.php"><span data-hover="Home">Home</span></a></li>
                <li><a href="about.php"><span data-hover="About">About</span></a></li>
                
                <li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
                <li><a href="admin/login.php"><span data-hover="Contact">Admin</span></a></li>
                <li><a href="user/login.php"><span data-hover="Shortcodes">Student</span></a></li>
              </ul>
              <div class="clearfix"> </div>
            </div><!-- /.navbar-collapse -->
        <!-- /.container-fluid -->

      </nav>
<!--/script-->
       <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->

<!--header-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .w{
      background: linear-gradient(45deg, #87adfe, #ff77cd);
      
      
    }
    title{
      background-image: url(img/Zict rogo.png);
      background-size: cover;
    }
    .gallery{
      width: 100px;
      height: 100px;

    }
    h1{
      font-size: 60px;
      color: black;
    }
    img{
      width: 100px;
      height: 100px;
      background-size: cover;
      margin: auto;
      border-radius: 7px;
      margin-top: 10px;
      box-sizing: content-box;
      box-shadow: 0 0 10px, 0 0 20px violet;
    }
    #t{
      color: violet;
    }
    body{
      background-image: url("images/img/Sample Background.jpg");
      background-attachment: fixed;
      background-repeat: no-repeat;

      
      
    }

    @media(max-width: 991px){
      html{
        font-size: 55%;
      }
    }
    div.gallery {
  margin: 5px;
  
  float: left;
  align-content: center;
  width: 170px;
  border-radius: 5px;
}
    .btn{
      text-align: center;
      font-size: 80px;
    }
      button{
      border: 3px solid black;
      border-radius:20px;
      background: linear-gradient(45deg, blue, violet);
    }
    .head{
      border: 1px solid violet;

    }
    .bdiv{
      margin: auto;
      align-content: center;

    }
    #l{
      margin-left: 35px;
    }
    #ll{
      margin-left: 22px;
    }
    /*.footer{
      margin-bottom: 13%;
    }


  </style>
  <title id="t">SMS</title>
</head>
<body style="background-size: cover">
  <div class="head">
<section class="w">
  <h1><img src="images/img/Zict rogo.png" style="border-radius: 30px;border-collapse: collapse;"> Student Management System </h1>
</section>
</div>
<div class="main">
  <div clajss="btn">
    
    <section><div  id="img" style="background-image:url('images/img/loginimg2.png'); border: 2px solid purple; width:30%; height: 80vh; border-collapse: collapse; float: left; background-size: cover; margin-top: 35px; border-radius: 50px; "></div></section><br><br>
    <section><div  id="img" style="background-image:url('images/img/back.jpg'); border: 2px solid purple; width:70%; height: 80vh; border-collapse: collapse; float: right; background-size: cover; margin-tojp: 35px; border-radius: 50px; "></div></section>

  </div>
  
</div>
<br>
<br>
<br>
<br>




<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>


<!--div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="/images/img/staff.jpg" style="width:40%; height: 15%; margin-left: 30%;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/img/Moi.jpg" style="width:25%; height: 4%; margin-left: 40%; border-radius: 10%;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="/images/img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)" style="margin-top: 20%">❮</a>
  <a class="next" onclick="plusSlides(1)" style="margin-top: 20%">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/img/staff.jpg" style="width:100%" onclick="currentSlide(1)" alt=" Our Staff">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/img/Moi.jpg" style="width:100%" onclick="currentSlide(2)" alt="My team: Mr MBUZI: programmer">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    





</body>
</html>