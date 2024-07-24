<!DOCTYPE html>
<html lang="en">
<?php session_start();
$usr_type = $_SESSION['SESS_Type'];
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALIS | User Registration</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="font/css/fontawesome.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/brands.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/solid.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"  media="screen"/>
    <link type="text/css" href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
	
  <link type="text/css" href="css/stats.css" rel="stylesheet">
  <link type="text/css" href="css/forms.css" rel="stylesheet">
</head>
<body>
  <div class="main">
    <div class="navbar-side">
      <h6>
      <span class="icon"><img src="images/ALIS_Logo1white.png" width="20%" height="20%"></span>
        <span class="link-text">ALIS</span>
      </h6>
      <ul>
        <li><a href="dashboard.php" class="" title="Dashboard">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
		  
        <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#usr" title="Post" aria-expanded="false">
            <span class="icon"><i class="fa-solid fa-user-graduate"></i></span>
            <span class="link-text">User Details</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="usr" class="collapse bg-secondary">
            <a href="usrreg.php" title="All User">
              <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
              <span class="link-text">User Registration</span>
            </a>
            <a href="userview.php" title="Add Post">
              <span class="icon"><i class="fa-solid fa-user-friends"></i></span>
              <span class="link-text">User View</span>
            </a>
          </div>
        </li>
       
	     <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#book" title="Post" aria-expanded="false">
            <span class="icon"><i class="bi bi-boxes"></i></span>
            <span class="link-text">Stock Details</span>
            <span class="ml-auto myCaret"></span>
          </a>

          <div id="book" class="collapse bg-secondary">
            <a href="stock.html"  title="All Book">
              <span class="icon"><i class="bi bi-box-seam"></i></span>
              <span class="link-text">Stock Entry</span>
            </a>
            <a href="bookform.html" title="All Book">
              <span class="icon"><i class="fas fa-book-open"></i></span>
              <span class="link-text">Book Entry</span>
            </a>
            <a href="frequencyform.html" title="All Book">
              <span class="icon"><i class="bi bi-journal"></i></span>
              <span class="link-text">Frequency Entry</span>
            </a>
            <a href="stockTransaction.php" title="Add Post">
              <span class="icon"><i class="fa-solid fa-book"></i></span>
              <span class="link-text">Stocks View</span>
            </a>
          </div>
        </li>
	   
        <li>
		<a href="#" class="myBtn" data-toggle="collapse" data-target="#reader" title="Post" aria-expanded="false">
    <span class="icon"><i class="bi bi-emoji-laughing-fill"></i></span>
            <span class="link-text">Members</span>
            <span class="ml-auto myCaret"></span>
          </a>
			<div id="reader" class="collapse bg-secondary">
			  <a href="memberReg.html" title="All Book" >
				<span class="icon"><i class="fa-solid fa-address-book"></i></span>
				<span class="link-text">Member Entry</span>
			  </a>
			  <a href="memberView.php" title="Add Post">
				<span class="icon"><i class="fa-solid fa-users-gear"></i></span>
				<span class="link-text">Member View</span>
			  </a>
			</div>
		  </li>

      <li>
          <a href="#" class="myBtn link-active" data-toggle="collapse" data-target="#trn" title="Post" aria-expanded="false">
            <span class="icon"><i class="bi bi-clipboard-check"></i></span>
            <span class="link-text">Transactions</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="trn" class="collapse bg-secondary">
            <a href="issuing.html" title="All User">
              <span class="icon"><i class="bi bi-file-bar-graph-fill"></i></span>
              <span class="link-text">Issue </span>
            </a>
            <a href="return&overdue.html" title="Add Post">
              <span class="icon"><i class="bi bi-flag"></i></span>
              <span class="link-text" style="font-size: 85%;" >Return and Overdues</span>
            </a>
            <a href="reportLinks.php" class="myBtn link-active" title="Add Post">
              <span class="icon"><i class="bi bi-graph-up"></i></span>
              <span class="link-text">Reports</span>
            </a>
          </div>
        </li>
      
      <li><a href="tutorial.php" class="link-disabled" title="Tutorial">
            <span class="icon"><i class="bi bi-collection-play-fill"></i></span>
            <span class="link-text">Tutorials</span>
          </a></li>
		
       
        <li><a href="#" title="Setting">
            <span class="icon"><i class="fas fa-cog"></i></span>
            <span class="link-text">Setting</span>
          </a></li>
		  
        <li><a href="index.php" title="Sign Out">
            <span class="icon"><i class="fa-solid fa-sign-out-alt"></i></span>
            <span class="link-text">Log Out</span>
          </a></li>
      </ul>
    </div>
    <div class="content">
      <nav class="navbar navbar-dark bg-secondary py-1">
      
        <a href="#" id="navBtn">
          <span id="changeIcon" class="fa fa-bars text-light"></span>
        </a>
        <p class="text-white">Welcome As <?php error_reporting(0); echo $usr_type;?></p>
        <div class="d-flex">
          <a class="nav-link text-light px-2" href="#"><i class="fa-solid fa-search"></i></a>
          <a class="nav-link text-light px-2" href="#"><i class="fa-solid fa-bell"></i></a>
          <a class="nav-link text-light px-2" href="index.php"><i class="fa-solid fa-sign-out-alt"></i></a>
        </div>

      </nav>
	  <div class="container-fluid">
	  
	  
	        
		<br>
	  <div class="row">
           <div class="col-md-10">
            <div class="card border-primary rounded-0">
              <div class="card-header bg-secondary rounded-0">
                <h5 class="card-title text-white mb-1">Select view</h5>
              </div>
              <div class="card-body">
                <div class="panel-title ">
                <a class="btn btn-primary btn-lg btn-block" href="issueView.php" role="button">Issue Details</a>
                <br>
                <br>
                <a class="btn btn-primary btn-lg btn-block" href="retnView.php" role="button">Return Overdues details</a>
                <br>
                </div>					
              </div>
            </div>
          </div>      
        </div>
		<br>
      </div>
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
	 <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright @ <a href='#'>ICMG</a>
            </div>
            
         </div>
      </footer>
     <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
   
    <script src="js/nav.js"></script>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="vendors/morris/morris.css">


    <script src="vendors/jquery.knob.js"></script>
    <script src="vendors/raphael-min.js"></script>
    <script src="vendors/morris/morris.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.categories.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <script src="vendors/flot/jquery.flot.time.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/stats.js"></script>
</body>

</html>