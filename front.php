<?php
 
      $conn = new mysqli("localhost","root","","tops");

      $str =  "SELECT * FROM image order by id asc";

      $result = $conn->query($str);
      
      	
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Image display</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style>
    .bg{
    	background-color: #77889A;
    }
    img{
    	margin-top: 50px;
    	margin-left: 30px; 
    	display: inline-block;
    	float: right;

    	
    }
    .zoom {      
        transition: transform .3s;
        margin: 0 auto;
     }
     .zoom:hover {
       -ms-transform: scale(1.5); /* IE 9 */
       -webkit-transform: scale(1.5); /* Safari 3-8 */
       transform: scale(1.5); 
     }
     

   </style>

</head>
<body class="bg">
	
<div class="container">
  	<div class="row">
  		<div class="col-md-12" style="margin-top:50px;background-color:#C82333;">
  			<h1 class="font-weight-bold font-italic text-center" style="color: white;">List of Images</h1>
  		</div>
     </div> 
     <br/>

     <?php 
        if($result->num_rows > 0){

      	
     ?>

       <div class="row">

       <?php 	
       while ($row=$result->fetch_assoc()) { ?>
      		
       <div class="col-md-4">

       
  		<img id="img" src="<?php echo $row['img_name']; ?>" alt="<?php echo $row['img_name']; ?>" class="rounded img-thumbnail zoom "
  		  width="350" height="350" ><br/>
  	    <form method="POST" action="update.php">
  		  <center> 
  		  	<a style="color:#C82333;" href="update.php?uid=<?php echo $row['id']; ?>" name="Update" class="font-weight-bolder font-italic" >
  		  	  Update</a> |
	         <a style="color:#C82333;" href="delete.php?did=<?php echo $row['id']; ?>" name="Delete"
	         	 class="font-weight-bold font-italic">
	         Delete</button>
	         </a>
	     </center>
	    </form>
	     <br>
  		</div>
  		
  		
  	
  	


<?php

       } ?>
       </div>
   <?php }
?>
</div>



</body>
</html>