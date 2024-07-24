<!DOCTYPE html>
<html lang="en">
<?php 

if(isset($_SESSION['SESS_Type']))
		{
			unset($_SESSION['SESS_Type']);
			$_SESSION['SESS_Type'] = "";
			session_destroy();
		}
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALIS | Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
 <div class="topnav" id="myTopnav">
 <h2><span class="icon"><img src="images/ALIS_Logo1.png" ></span></h2>
  &nbsp;<a><h2><marquee width="80%" direction="right" >Automated Library Information System</marquee></h2></a>
  
 
 
</div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">ALIS Data Flow</h1>
              <img src="images/ALIS_Logo1.png" alt="Library Management System" style="width:75%;">
            </div>
          </div>
		  
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">Login Please</h1>
			   <p class="lead">A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates.
This system completely automates all your library activities. The best way to maintain, organize, and handle countless books systematically is to implement a library management system software.
A library management system is used to maintain library records. It tracks the records of the number of books in the library, how many books are issued, or how many books have been returned or renewed or late fine charges, etc.
You can find books in an instant, issue/reissue books quickly, and manage all the data efficiently and orderly using this system. The purpose of a library management system is to provide instant and accurate data regarding any type of book, thereby saving a lot of time and effort. 
Management information systems or MIS reports related to the library allow the librarians to extract crucial data & information of all the library transactions at a few clicks.
              </p>
			 
              <button class="block" onclick="document.getElementById('id01').style.display='block'" >Click To Login</button>
              <?php
                  error_reporting(0); 
			            $valdat = $_GET['ucredt']; 
			   if($valdat=='ncr')
			   {
			     echo "<div class='container'>";
				 echo "<div class='alert alert-danger alert-dismissible fade show'>";
				 echo "<button type='button' class='close' data-dismiss='alert'>";
				 echo "&times;</button>";
			     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Have Entered &nbsp;<Strong>Wrong</strong> &nbsp;User Name And Password";
				 echo "</div>";
				 echo "</div>";
			
			   }
			  
			  ?>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post" action="process/verifyLogin.php">
    <div class="container">
      <h1>Login</h1>
      <p></p>
      <hr>
      <label for="usrid"><b>User ID</b></label>
      <input type="text" placeholder="User ID" name="usrid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      		
	<label class="col-md-2 control-label" for="select-1">Select User Type</label>

		<select class="form-control" id="selec-type" name="usrtype">
		    <option value="null">Select</option>
			<option value="Administrator">Administrator</option>
			<option value="Librarian">Librarian</option>
		</select> 
	
			
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Login</button>
      </div>
      
    </div>
  </form>
</div>
           </div>
          </div>
		  
        </div>
      </div>

	 <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright @ <a href='#'>ICMG</a>
            </div>
            
         </div>
      </footer>
	 <script src="js/modal.js"></script>
     <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>  
</body>

</html>