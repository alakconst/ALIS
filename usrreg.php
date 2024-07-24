<!DOCTYPE html>
<html lang="en">

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
  <script src="js/photoCapture.js" language="javascript" type="text/javascript"></script>
    <link type="text/css" href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
	
  <link type="text/css" href="css/stats.css" rel="stylesheet">
  <link type="text/css" href="css/forms.css" rel="stylesheet">
  <style type="text/css">
  .img{
            min-width: 125px;
            min-height: 155px;
            width: 125px;
            height: 155px;
            border: 1px solid #CCC;
            border-radius: 4px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
            background-color: #FFFFFF;
        }
	</style>
  <script src="js/jquery-1.8.2.js" language="javascript" type="text/javascript"></script>
  <script src="js/mfs100.js" language="javascript" type="text/javascript"></script>
  <script src="js/biometric.js" language="javascript" type="text/javascript"></script>
</head>

<body>
  <div class="main">
    <div class="navbar-side">
      <h6>
	  <span class="icon"><img src="images/ALIS_Logo1white.png" width="20%" height="20%"></span>
        <span class="link-text">ALIS</span>
      </h6>
      <ul>
        <li><a href="dashboard.php" class="myBtn" title="Dashboard">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
		  
        <li>
          <a href="#" class=" myBtn link-active" data-toggle="collapse" data-target="#usr" title="Post" aria-expanded="false">
            <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
            <span class="link-text">User Details</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="usr" class="collapse bg-secondary">
            <a href="#" title="All User" class="link-active">
              <span class="icon"><i class="fa-solid fa-user"></i></span>
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
            <a href="stock.html" title="All Book">
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
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#trn" title="Post" aria-expanded="false">
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
              <span class="link-text"style="font-size: 85%;">Return and Overdues</span>
            </a>
            <a href="reportLinks.php" title="Add Post">
              <span class="icon"><i class="bi bi-graph-up"></i></span>
              <span class="link-text">Reports</span>
            </a>
          </div>
        </li>
		  <li><a href="tutorials.php" class="link-disabled" title="Tutorial">
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
                <h5 class="card-title text-white mb-1">Add User</h5>
              </div>
              <div class="card-body">
                <div class="panel-title ">
				<!--- Test -->
					
						<div class="content-box-large">
							<div class="panel-body">
			  					<form class="form-horizontal" method="post" action="process/adduser.php">
							
									<fieldset>
										<div class="form-group">
											<label class="col-md-2 control-label" for="text-field">User ID </label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Default Text Field" type="text" name="libid">
											</div>
										</div>
										
										
			
										<div class="form-group">
											<label class="col-md-2 control-label">Enter Password</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Password field" type="password" name="libpsw">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Reenter Password</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="Password field" type="password" value=>
											</div>
										</div>
										
									

									<fieldset>
										<legend></legend>
									
										<div class="form-group">
											
											<label class="col-md-2 control-label" style="max-width: 43.666667%;"><legend>Please Upload biometric of user on the left hand thumb</legend></label>
											<div class="col-md-10">
												<td width="150px" height="190px" align="center" class="img">
                <img id="imgFinger" width="145px" height="188px" alt="Finger Image" />
               </td>
			   <td>&nbsp;</td>
				<td>
                    <input type="submit" id="btnCapture" value="Capture" class="btn btn-primary" onclick="return Capture()" />
                </td>
				<td>
                    <input type="hidden" id="txtIsoTemplate" value="" name="biometric"/> 
                </td>
												<p class="help-block">
													
												</p>
											</div>
										</div>
										<label class="col-md-2 control-label" style="max-width: 43.666667%;"><legend>Please Upload passport size photo of user</legend></label>
											<div class="col-md-10">
                      <div class="camera">
							<video id="video">Video stream not available.</video>
							<br/><br/>
							<button id="startbutton" class="btn btn-success" ><i class="fa fa-camera"></i> Take Photo</button>
					        </div>
					&nbsp;<canvas id="canvas"><img id="photo" alt="The screen capture will appear in this box." /> </canvas>
					<div class="output">
					<img id="photo" alt="The screen capture will appear in this box." />
					</div>
						<input type="hidden" id="base64" name="data_url"/>
            
									</fieldset>
                  <div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
												<button class="btn btn-secondary" type="reset">
													Cancel
												</button>
											</div>
										</div>
									</div>

								</form>
			  				</div>
						</div>
					
				<!-- End Test -->
				</div>					
              </div>
            </div>
          </div>      
        </div>
		<br>
      </div>
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
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link type="text/css" rel="stylesheet" href="vendors/morris/morris.css">


    <script src="vendors/jquery.knob.js"></script>
    <script src="vendors/raphael-min.js"></script>
    <script src="vendors/morris/morris.min.js"></script>
    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.categories.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <script src="vendors/flot/jquery.flot.time.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>
	<script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>
    <script src="vendors/select/bootstrap-select.min.js"></script>
    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>
    <script src="vendors/mask/jquery.maskedinput.min.js"></script>
    <script src="vendors/moment/moment.min.js"></script>
   
	<!-- bootstrap-datetimepicker -->
     <link type="text/css" href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
	 
	

    <script src="js/custom.js"></script>
    <script src="js/stats.js"></script>
</body>

</html>