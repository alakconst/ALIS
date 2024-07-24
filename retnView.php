<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALIS | Returned View</title>
 
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
  <link rel="stylesheet" type="text/css" href="font/css/fontawesome.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/brands.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/solid.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="screen"/>
 
  
</head>

<body>
  <div class="main">
    <div class="navbar-side" class="noPrint">
      <h6>
        <span class="icon"><i class="fas fa-book-reader"></i></span>
        <span class="link-text">ALIS</span>
      </h6>
      <ul>
        <li><a href="#" class="link" title="Dashboard">
            <span class="icon"><i class="fa-solid fa-house"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
		  
        <li>
          <a href="#" class="myBtn link-active" data-toggle="collapse" data-target="#usr" title="Post" aria-expanded="false">
            <span class="icon"><i class="fa-solid fa-user-graduate"></i></span>
            <span class="link-text">User Details</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="usr" class="collapse bg-secondary">
            <a href="usrreg.html" title="All User">
              <span class="icon"><i class="fa-solid fa-user"></i></span>
              <span class="link-text">User Registration</span>
            </a>
            <a href="#" title="Add Post" class="link-active">
              <span class="icon"><i class="fa-solid fa-user-friends"></i></span>
              <span class="link-text">User View</span>
            </a>
          </div>
        </li>
       
	     <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#book" title="Post" aria-expanded="false">
            <span class="icon"><i class="fas fa-book-reader"></i></span>
            <span class="link-text">Book Details</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="book" class="collapse bg-secondary">
            <a href="#" title="All Book">
              <span class="icon"><i class="fas fa-book-open"></i></span>
              <span class="link-text">Book Entry</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fa-solid fa-book"></i></span>
              <span class="link-text">Book View</span>
            </a>
          </div>
        </li>
	   
		<li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#reader" title="Post" aria-expanded="false">
            <span class="icon"><i class="fas fa-registered"></i></span> 
            <span class="link-text">Reader</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="reader" class="collapse bg-secondary">
            <a href="#" title="All Book">
              <span class="icon"><i class="fa-solid fa-address-book"></i></span>
              <span class="link-text">Reader Entry</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fa-solid fa-users-gear"></i></span>
              <span class="link-text">Reader View</span>
            </a>
          </div>
        </li>
		
       
        <li><a href="#" title="Setting">
            <span class="icon"><i class="fas fa-cog"></i></span>
            <span class="link-text">Setting</span>
          </a></li>
		  
        <li><a href="index.html" title="Sign Out">
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
          <a class="nav-link text-light px-2" href="index.html"><i class="fa-solid fa-sign-out-alt"></i></a>
        </div>

      </nav>
	  <div class="container-fluid" >
	  <br><br>
            <!-- User View -->
			<div class="content-box-large" >
  				<div class="panel-heading">
					<div class="panel-title">Returnee List</div>
				</div>
  				<div class="panel-body" >
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="userdata">
						<thead>
							<tr>
								<th>stock id</th>
								<th>membership id</th>
								<th>overdue amount</th>
								<th>payed</th>	
                                <th>date of return</th>
								<th>over duration</th>
							</tr>
						</thead>
						
						<?php
		                             
									 $con = mysqli_connect("localhost","root","","alis");
		                             $sql = "select * from rtn_ovr";
                                     $fech = mysqli_query($con,$sql);
 

									//returns the first row from the record set as an array
								while($row = mysqli_fetch_array($fech))
								{
								echo "<tbody>";
							    echo "<tr>";
								echo "<td>".$row['stock_id']."</td>";
								echo "<td>".$row['m_id']."</td>";
								echo "<td>".$row['ovd_amt']."</td>";
								echo "<td>".$row['payed']."</td>";
                                echo "<td>".$row['d_o_r']."</td>";
								echo "<td>".$row['ovd_dur']."</td>";
								echo "</tr>";
								echo "</tbody>";
								}
							//close connection
								mysqli_close($con);
						
						?>
							
						
					</table>
  				</div>
  			</div>
			<div class="panel-body">
  			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
					<thead>
					<tr>
			<th><button onClick="window.print();" id="print-btn" class="btn btn-primary noPrint"><i class="fa fa-print"></i><b> Print</b></button></th>
				</tr>
				</thead>
			</table>
			</div> 
			  <!-- User View Data -->
        
		<br><br><br><br>
      
    </div>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    
	 <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright @ <a href='#'>ICMG</a>
            </div>
            
         </div>
      </footer>
	 <script src="js/printData.js"></script>  
     <script src="js/jquery.min.js"></script>  
    <script src="js/nav.js"></script>	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
	<link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen"/>    
	<script src="bootstrap/js/bootstrap.min.js"></script>	
    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="js/custom.js"></script>
	<script>
    $(document).ready(function () {
        $('#userdata').DataTable();
    });
    </script>
</body>

</html>