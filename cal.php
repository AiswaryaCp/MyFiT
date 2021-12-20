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
  session_start();
  include('connectionI.php');
    $date=date('Y-m-d');
 
 if(isset($_POST['submit']))
 {
	 if($_POST['c']==0)
	 {
		 
		 mysqli_query($con,"INSERT INTO food_intake (user,date,food) VALUES ('$_SESSION[uid]','$date','$_POST[food]')");
	 }
	 else{
		  mysqli_query($con,"UPDATE food_intake SET food='$_POST[food]'  WHERE user='$_SESSION[uid]' and date='$date' ");
	 }
 }

  $check="SELECT * from food_intake where user='$_SESSION[uid]' and date='$date' ";

$result=mysqli_query($con,$check);
$cc=mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		
			?>
			<center>
			  <div class="alert alert-warning" >
			<?php
			echo"<h3>Food Calories In Take</h3><br>";
			
			echo" <form action='?type=$_REQUEST[type]' method='post'>
			Cal<input type='number' class='form-control col-sm-6' name='food' value='$row[food]'> 
			<input type='hidden' name='c' value='$cc'> 
			<br>
			<input type='submit' name='submit' value='add' class='btn btn-success'> 
			
			</form>";
			
			echo"</div></center>";
	
	
	
  
  
  
  ?>
  
  <?php
  include('connectionI.php');
  $date=date('Y-m-d');
  $check="SELECT * from tips ";

$result=mysqli_query($con,$check);
if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			  <div class="alert alert-success" >
			<?php
			echo"<h3>Today Tips</h3><br>";
			echo"<p>$row[description]</p>";
			
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