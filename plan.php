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
  <div class="col-sm-12" style='background-color:#ffffff; margin-top:50px;'>
  
  <?php
  include('connectionI.php');
  
  $check="SELECT * from diteplan where type='$_REQUEST[type]' ";

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
 <a href='index.php?type=<?php echo $_REQUEST['type']; ?>'  class='btn btn-danger'>Back</a>
   </div>
   </div>
   </div>
   </div>

</body>
</html>