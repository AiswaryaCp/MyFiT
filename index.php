<?php
error_reporting(0);
?>


<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">
</head>
<body>
  <div id="p3">

  <div class="row-justify-content-center">
  <div class="col-sm-12" style='background-color:#ffffff; margin-top:250px;'>
  
  <?php
  include('connectionI.php');
  
  $check="SELECT * from workout where type='$_REQUEST[type]' ";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>$row[title]</h3><br>";
			echo"<p>$row[description]</p>";
			echo"<iframe width='80%' height='250px' src='$row[link]'  frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
			
			echo"</div>";
		}
		
	}
	else
	{
		echo"<h3>No Data</h3>";
	}
  
  
  
  ?>
	<br><br>
  
     <div class="col-sm-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-success text-center">
                              <a class="small-box-footer"  href="plan.php?type=<?php echo $_REQUEST['type']; ?>">  
             
                                   
                                <h3 class="text-white"><br>Dite Plan</h3>
                           
                                </a>
                            </div>
                        </div>
			</div>
			
			
			
			
			<div class="col-md-12 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-success text-center">
                              <a class="small-box-footer"  href="water.php?type=<?php echo $_REQUEST['type']; ?>">  
             
                                   
                                <h3 class="text-white"><br>Water Intake</h3>
                          
                                </a>
                            </div>
                        </div>
			</div>
			
				
			<div class="col-md-12 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-success text-center">
                              <a class="small-box-footer"  href="cal.php?type=<?php echo $_REQUEST['type']; ?>">  
             
                                   
                                <h3 class="text-white"><br>Calorie Counter</h3>
                          
                                </a>
                            </div>
                        </div>
			</div>
			
			
			
 <a href='dashboard.php?type=<?php echo $_REQUEST['type']; ?>' >Back</a>
   </div>
   </div>
   </div>
   </div>

</body>
</html>