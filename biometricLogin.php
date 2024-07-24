<!DOCTYPE html>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALIS | Biometric Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="font/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
  <script language="javascript" type="text/javascript">
	
	var quality = 60; //(1 to 100) (recommanded minimum 55)
    var timeout = 10; // seconds (minimum=10(recommanded), maximum=60, unlimited=0 )
	

       function Verify() {
            try {
                var isotemplate = document.getElementById('txtIsoTemplate').value;
                var res = MatchFinger(quality, timeout, isotemplate);

                if (res.httpStaus) {
                    if (res.data.Status) {
                        //alert("Finger matched");
						window.location = "http://localhost/ALIS/dashboard.php";
                    }
                    else {
                        if (res.data.ErrorCode != "0") {
                            alert(res.data.ErrorDescription);
                        }
                        else {
                            //alert("Finger not matched");
							window.location = "http://localhost/ALIS/biometricLogin.php?ucredt=ncr";
                        }
                    }
                }
                else {
                    alert(res.err);
                }
            }
            catch (e) {
                alert(e);
            }
            return false;

        }
	</script>
	<?php
	session_start();
	$con = mysqli_connect("localhost","root","","alis");
	$u_id=$_SESSION['SESS_USR_ID'];
	$u_type=$_SESSION['SESS_Type'];
	$sql = "SELECT * FROM `user` where `usr_id`='$u_id' AND `usr_type`='$u_type'";
	$fech = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($fech);
	$sh = $row['biometric'];
	
	?>

</head>
 <div class="topnav" id="myTopnav">
  <a><h2><marquee width="80%" direction="right" >Automated Library Information System</marquee></h2></a>
 
 
</div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">Biometric Login</h1>
			  <table width="100%" style="padding-top:0px;">
			  <tr>
			  <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
              <td><img src="images/scanning.gif" alt="Biometric" style="width:57%;"></td>
			  </tr>
			  </table>
            </div>
          </div>
		  
          <div class="col-lg-6 p-2">
            <div class="jumbotron rounded-0">
              <h1 class="display-4">Left Thumb For Scanning</h1>
			   <p class="lead">Please Put Left Thumb Imression on the Biometric Device and Click Capture Button, After Image is Visible Click on Login Button
              </p>
		    <form  method="post" >
               <table width="100%" style="padding-top:0px;">
		  
		  
		    <tr>
			    <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				 <td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td width="150px" height="190px" align="center" class="img">
                <img id="imgFinger" width="145px" height="188px" alt="Finger Image" />
               </td>
			   <td>&nbsp;</td>
				<td>
				<input type="submit" id="btnMatch" value="Match" class="btn btn-primary btn-100" onclick="return Verify()" />
                </td>
				<td>
				<input type="hidden" id="txtIsoTemplate" name="Isobase64" value="<?php echo $sh;?>"  /> 
                </td>
               
            </tr>
			 	 
	 </table>
	 
         </form>
           </div>
          </div>
		  <?php
                  error_reporting(0); 
			            $valdat = $_GET['ucredt']; 
			   if($valdat=='ncr')
			   {
			     echo "<div class='container'>";
				 echo "<div class='alert alert-danger alert-dismissible fade show'>";
				 echo "<button type='button' class='close' data-dismiss='alert'>";
				 echo "&times;</button>";
			     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please  &nbsp;<Strong>Reenter</strong> &nbsp;Biometric";
				 echo "</div>";
				 echo "</div>";
			
			   }
			  
			  ?>
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