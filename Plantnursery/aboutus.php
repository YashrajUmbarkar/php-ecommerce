<?php
session_start();
?>

<html>

  <head>

    <title> About | Plant Nursery</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
.parallax {
  /* The image used */
  background-image: url("images/about.jpg");

  /* Set a specific height */
  min-height: 600px; 
  

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: auto;
}
</style>
	</head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
    	<i class="material-icons">arrow_upward</i>
      
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Pant Nursery</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myplants.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="list.php"> Plants </a></li>
            <li><a href="cart.php"> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Sign Up </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Login </a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

      <?php } ?>
        </div>

      </div>
    </nav>
    
    <div class="wide">
        
        <div class="tagline">About Plant Nursery </div>

  
     </div>
     <div class="parallax" ></div>
       
        <br>
        <div class="paragraph4">
        		<p>Plant Nursery germinated in 2021 from a promise to make &lsquo;green and healthy&rsquo; a click away for all Indians Having plants in our homes or in our offices doesn&rsquo;t just look good, it also boosts our mood, makes us more productive, and cleans the air around us by absorbing toxins Most of us being urban dwellers spending their days in apartments with limited access to parks and ecological reserves, have no way of feeling close to nature and experiencing the benefits of being around plants.Ordering a pizza is easy but ever heard of ordering a plant to your doorstep? This is where nurserylive comes in.</p>

				<p>We believe that Green is Good and are here to enable Indians to access plants in the easiest way possible &ndash; online! We are here to shape the future of gardening! A one-stop-shop for all gardening related requirements, nurserylive has more than 6000 products available online for delivery across India saving you numerous messy trips to various nurseries.We cater to all kinds of gardening needs ranging from plants, pots, tools, to curated plant-scaping solutions. Our ever-growing platform integrates nurseries and customers across India.</p>

				<p>If you&rsquo;re new to being a plant parent, we&rsquo;re here to make it easier. Our garden experts can provide you with guidance for detailed care every step of the way.Having served a network of 1 million happy plant parents, we can assure you that once you order a plant from us, you will emerge with your own home-grown veggies! We believe that every space can be made more beautiful with plants! Come, join us in our vision to make all spaces green and healthy! Add a touch of green to your home/office in three simple steps and become a plant parent</p>

				<p>Plants, simplified: Order plants ready to be placed in your home, office or garden. Just Unpack, Relax and Enjoy your green buddies Secure Shipping: Our unique packaging will hold the plants in place and let the plant breathe so that it reaches you fresh without any mess.Detailed Guidance: Get detailed plant care instructions from the website as well as real-time guidance from our Garden Experts on Whatsapp.</p>

        </div>
        <br>
        
    

      
         </body>
</html>