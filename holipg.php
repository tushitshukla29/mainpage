<html>
  <head>
   
<link href="style.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/1c2bffb59b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  </head> 
  <body>
  <div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">More
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>
  <div class="nav">
  
    <div class="title">
      Greetings App
      
      </div> 
</div>

  <div class="body">
</div>
  <div class="container">
  
  
  <div class="card" >
  <div class="img-wrapper">
    <img class="card-img-top" src="./holi.png" alt="Card image cap">
  </div>
  <div class="card-body">
    <h5 class="card-title">Happy Holi</h5>
    <p class="card-title-text"><h3> Happy Holi Wishes - Send Happy Holi Greeting Wishes to your Friends &amp; Family Members.
     <br> Happy Holi Greetings - wish your loved ones a pleasant Happy Holi wishes in 2021 .</p></h3>
    <div class="img-wrapper">
    <h5 class="card-text">Fill the following form to get the holi wishing message </h5>
   
  </div>
</div>
</div>
<div class="card" >

  <div class="card-body">
   <h5 class="card-title"> Enter your name to wish your friends and Family memebers</h5>
    
    <form method="POST" class="form-container" action="wish.php">

      <input class="inp" type="text" name="nameinp" placeholder="Enter your name" required/>
      <button class="btn" type="submit" value="submit" name="submit">Submit</button>
    </form>
  </div>
</div>
</div>

<footer class="home-footer text-center">
<p class="lnf footer-text"><center>Copyright © 2021 Happy holi Wishes.</center></p>
</footer>
  </body>    
</html>
