



<?php
require_once "checklogin.php";
require_once "connection.php";
$spot_users  = "SELECT * from posts" ;
$spot_users2 = "SELECT * FROM users2 where status = 'online'";
$spot_users3 = "SELECT * FROM images ";

$username = $_SESSION["authlog"]["username"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Talking Space</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Talking Space " />
  <meta property="og:url"           content="http://localhost/Sleepy/index.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Talking Space" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="http://localhost/Sleepy/index.php" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
<!--/script-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>


      <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 20%;
}

/* Add padding to container elements */
.container {
    padding: auto;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: transparent;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 100%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 50%;
    }
}
</style>
<body>
<body>


	<div id="fb-root"></div>
<script>function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
}</script>
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
						<li><a href="index.html" data-hover="Home">Home</a></li> 
						<li><a href="profile.html" data-hover="My Profile">My Profile</a></li>
						<li><a href="services.html" data-hover="Messages">Messages<span class="glyphicon glyphicon-comment"></span>10</a></a></li>
						<li><a href="posts.html" data-hover="Posts">Posts</a></li>
						<li><a href="login.php" data-hover="Login">Login</a></li>
						<li><a href="logout.php" data-hover="Login">Logout</a></li>
					</ul>

					<div class="search-box">
					
																	  <form action="logout.php" method="post">
 <button type="submit"  name="logout" class="btn"><i class="fa fa-home"></i> Logout</button>
</form>


						</div>


					   
	
						
					<div class="clearfix"></div>
				</div>
       </div>

	<div class="full">
			<div class="col-md-3 top-nav">
				<div>

</div>
				     <div class="logo">
				     <img src="images/str.png" class="img-responsive" alt=""></a>
						<a href="index.html"><h1>Talking Space</h1></a>
					</div>
	                               <div class="media">	
								 <h3 class="tittle media"> #Trending <i class="glyphicon glyphicon-floppy-disk"></i></h3>
								  <div class="general-text two">
								
										<h5 class="top"><a href="trending.html">STC Sockets</a></h5>
										
										
								  </div>
					         </div>
					</div></div>
	<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">


		   <h3 class="tittle"><header><h3>Welcome, <?php  echo $_SESSION["authlog"]["username"];?></h3></header> <i class="glyphicon glyphicon-picture"></i></h3>
			<div class="banner">

<textarea class="form-control" name="body" id="new-post" rows="3"  placeholder="What is on your mind ?" readonly=""></textarea>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Update Post</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Upload Picture</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="postp.php" method="post">
    <div class="container">
  

      <hr>
    <textarea class="form-control" name="body" id="new-post" rows="3"  placeholder="What is on your mind ?" ></textarea>
<input type="text" name="username" hidden value=<?php  echo $_SESSION["authlog"]["username"];?>  >
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="create">Post</button>
      </div>
    </div>
  </form>
</div>



<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="imagepost.php"  method="post"  enctype="multipart/form-data">
    <div class="container">
  
      <p>Update Picture</p>
      <hr>
        
              <div class="form-group">
                  <label for="supplier">Name</label>
           <input type="text" name="username" hidden value=<?php  echo $_SESSION["authlog"]["username"];?>  >
                </div>
                   <div class="form-group">
                  <label for="supplier">Description</label>
                    <input type="textarea" class="form-control" id="description" name = "description" placeholder="Description">
                </div>
                 
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                 <input type="file" name = "image" id="image">

          
                
              </div>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     <button type="submit" class="signupbtn" name="create">Post</button>
      </div>
    </div>
  </form>
</div>




<script>



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id03);
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

			
				<!--banner-->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });

	  var clicks = 0;
        function updateClickCount() {
            document.getElementById("clickCount").innerHTML = clicks;
        }
			  </script>

 <?php 

$result_spot_users = $conn->query($spot_users);
	if($result_spot_users->num_rows >0){
		while($spot_users_row = $result_spot_users->fetch_assoc()){
  
	?>
		  <div>
			     <h5 class="top"><?php echo $spot_users_row["username"]; ?> @ <?php echo $spot_users_row["time"]; ?></h5>
			  
			</div>
			   <!--//banner-->
			  <!--/top-news-->
			<div>
						 <?php echo $spot_users_row["body"]; ?></a>
						 </div>
			

			<div><button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Comment </div>
	    <?php  


}
        }
?>    


 <?php 

$result_spot_users3 = $conn->query($spot_users3);
	if($result_spot_users3->num_rows >0){
		while($spot_users_row3 = $result_spot_users3->fetch_assoc()){
  
	?>
<div>
			     <h5 class="top"><?php echo $spot_users_row3["username"]; ?> @ <?php echo $spot_users_row3["time"]; ?></h5>
			  
			</div>
			<div> <img src=uploads/<?php echo $spot_users_row3["image"]; ?> width= "100" height="100"></div>

					<div>
						 <?php echo $spot_users_row3["description"]; ?></a>
						 </div>
	
</p>





<style media="screen">
  #button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
</style>

<p type="text" id="show" style="color:orange"></p>


<script type="text/javascript">
  var likes = 1;
  function like() {
    document.getElementById('show').innerHTML = likes;
    likes = likes + 1;
  }


  var element = document.getElementById("post_id");
	
function clickCounter(){
	if (localStorage.clickcount) {
	    localStorage.clickcount = Number(localStorage.clickcount) + 1;
	} else {
	    localStorage.clickcount = 1;
	}
	element.innerHTML = localStorage.clickcount;
}

window.onload = function() {
  element.innerHTML = localStorage.clickcount;
};
</script>
					 <div class="clearfix"> </div>

					 <div class="clearfix"> </div>
	    <?php
  



}
        }
?>    

 
					 <div class="clearfix"> </div>
					<!--//top-news-->
	</div>
</div>

<div>

  <h3 class="tittle"><header><h3>Online </h3></header></h3></div>
 <?php 

$result_spot_users2 = $conn->query($spot_users2);
	if($result_spot_users2->num_rows >0){
		while($spot_users_row2 = $result_spot_users2->fetch_assoc()){
  
	?>


			<!--//banner-section-->
			<div class="banner-right-text">
		
					
						  
			<div>  <p><?php echo $spot_users_row2["username"]; ?></p></div>
			<div>  <p>Last seen @ <?php echo $spot_users_row2["lastaccessdate"]; ?></p></div>
		</div>

    <?php
  



}
        }

?> 
	

			    </div>
				 </div>
			</div>	
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
		 </div>
			<div class="clearfix"> </div>	

			<!--//general-news-->
			<!--/news-->
			<!-	

		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>