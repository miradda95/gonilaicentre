<?php 
   include 'session.php'
?>


<?php

//getting id from url
$loggedin_id=$row['id'];



//selecting data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $loggedin_id" ;

$result=mysqli_query($db,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>


<?php
while($rows=mysqli_fetch_array($result)){
	$id= 	$rows['id'];
	$username= 	$rows['username'];
	$email= 	$rows['email'];
	$fullname= 	$rows['fullname'];
	$address= 	$rows['address'];
	$phone= 	$rows['phone'];
	$n_img= $rows ['profile_image'];
}
	
?>	
 <?php
// including the database connection file
include_once("db.php");

if(isset($_POST['update']))
{  
  $loggedin_id=$_POST['id'];
  

	
	
	$fullname= 	$_POST['fullname'];
	$address= 	$_POST['address'];
	$phone= 	$_POST['phone'];
	
	



  
 
  

  $result = ("UPDATE users SET  email='$email', fullname='$fullname', address='$address', phone='$phone', username='$username' WHERE id=$loggedin_id");
  $b=mysqli_query($db, $result);
  
if($b)
{
   echo "<script type=\"text/javascript\">".
        "alert('successfully updated');".
        "</script>";
}
}
?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	

</head>

<body>


<div class="wrapper">
    

<!--- sidenav start here --->
<?php
			include 'sidenav.php'
			
			?>

<!-- sidenav end here--->
    	


    <div class="main-panel">
		
		<!--topnav-->
		<?php
			include 'topnav.php'
			
			?>
		<!---topnav end here--->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
							<hr>
							
						
                            <div class="content">
							<div>
							
							<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage2.php'>
							<label>Profile Picture</label>
									<div class="row">
									
                                        <div class="col-md-12">
										
										<div id='preview'>
</div>
			
										<?php	echo "<img src='uploads/$n_img' width='200' height='200'>" ?>
										</div>
										</div>
										<div class="row">
										 <div class="col-md-12">
										<input type='file' name="photoimg" id="photoimg"  value='<?php  echo  $s_img;?>'>
										</div>
										</div>
										<div class="row">
										<div class="col-md-12">
										<button type="submit" name="update-profile" value="update-profile" class="btn pull-left">Save</button>
										</div>
										</div>
										
										</form>
										 <hr>
							

                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control"  placeholder="Name" value="<?php  echo  $fullname;  ?>" name="fullname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled placeholder="Username"  value="<?php  echo  $username;  ?>" name="username">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="<?php  echo  $email;  ?>" name="email">
                                            </div>
                                        </div>
                                        
                                    </div>
 
                                    <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Username"  value="<?php  echo  $address;  ?>" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="<?php  echo  $phone;  ?>" name="phone">
                                            </div>
                                        </div>
                                    </div>

									
                                    

                                   

									
									
								<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
                                    <button type="submit" name="update" value="update" class="btn btn-info btn-fill pull-right"onclick="demo.showNotification('top','right')">Update Profile</button>
									
                                    <div class="clearfix"></div>
									
                                </form>
								
                            </div>
                        </div>
                    </div>
					
                 

                </div>
            </div>
        </div>

	<?php
//  close  connection;
mysqli_close($db);

?>	
        <?php 
include 'footer.php'
?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
</html>