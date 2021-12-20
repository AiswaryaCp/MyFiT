<?php
error_reporting(0);
session_start();
$_SESSION['uid']=$_REQUEST['user_id'];

?>


<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/log.css" rel="stylesheet">
</head>
<body>
  <div id="p3">

     <h1><center >WELCOME USER</center></h1><br>
     
           <br><br><br><br><br><br><br><br><br><br>
<div class="col-md-12 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-success text-center">
                              <a class="small-box-footer"  href="index.php?type=Weight Loss">  
             
                                   
                                <h3 class="text-white"><br>Weight Loss</h3>
                           <p><?php
            
			
		
			?></p>
                                </a>
                            </div>
                        </div>
			</div>
			<br><br>
			
			<div class="col-md-12 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-primary text-center">
                              <a class="small-box-footer"  href="index.php?type=Weight Gain">  
             
                                   
                                <h3 class="text-white"><br>Weight Gain</h3>
                           <p><?php
            
			
		
			?></p>
                                </a>
                            </div>
                        </div>
			</div>
			
			
			
			<br><br>
			<div class="col-md-12 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="inner bg-danger text-center">
                              <a class="small-box-footer"  href="index.php?type=My fit">  
             
                                   
                                <h3 class="text-white"><br>My fit</h3>
                           <p><?php
            
			
		
			?></p>
                                </a>
                            </div>
                        </div>
			</div>
			
			
			
   </div>
  
</body>
</html>