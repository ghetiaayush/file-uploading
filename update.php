<?php

        $id = $_GET['uid'];

        //echo $id;
        $conn = new mysqli("localhost","root","","tops");

        $str = "SELECT * FROM image WHERE id = '$id'";
        
        $resdata = $conn->query($str);

        if($resdata->num_rows > 0){
            	while($row = $resdata->fetch_assoc())
            	{

             ?>
 
   
<!DOCTYPE html>
<html>
<head>
	<title>Update Image</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style>
    .bg{
    	background-color: #77889A;
    }
    form{

    	margin-top: 50px;

    }

   </style>
</head>
<body>
 <body class="bg">

	<div class="container">
	 <div class="row">
	 	<div class="col-sm-12" style="margin-top:50px;background-color:#C82333;">
	 	   <h1 style="color:white;" class="display-1 font-italic font-weight-bold">Please upload file:</h1>	
	 	</div>
	 </div>
	 <br><br><br><br>
	 <div class="row">
        <div class="col-sm-6">
        	<img src="<?php  print_r($row['img_name']); ?>" name="photo" style="width: 120px;height: 120px;">
            
        </div>
        <div class="col-sm-6"></div>
    </div>
	 <div class="row">
	 	<div class="col-sm-6">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <fieldset>
            	<legend class="font-weight-bold ">Select File:</legend>
            <div class="form-group">
              <input type="file" class="form-control " id="filetoupload" name="filetoupload" 
             value="" >
             <!-- for upload multiple image at a time so u need to select multiple images
             	use this line ->
             	 <input type="file" class="form-control" id="filetoupload" name="filetoupload[]" multiple>
              -->
            </div> 

            <input type="hidden" name="id" value="<?php echo $_GET['uid']; ?>">
	         <button type="submit" class="btn btn-danger btn-block btn-lg font-weight-bold" 
	         name="Update">Update</button>
            </fieldset>
        </form>
        </div>
        <div class="col-sm-6"></div>
    </div><br>
    
     </div>
    </div>

</body>
</html>

<?php

    }
}
   
   if(isset($_POST['Update'])){

   	      $id = $_REQUEST['id'];

	       $uplods = "uplods/";

           $targetdir = $uplods .basename($_FILES['filetoupload']['name']);
             echo $targetdir;
            move_uploaded_file($_FILES['filetoupload']['tmp_name'],$targetdir);

            //echo "file uploded sucess.";
            	
           $sql = mysqli_query($conn,"UPDATE image SET `img_name`= '$targetdir' where `id` =$id");
               // echo $userid;
               // exit;
           if($sql == TRUE){
           	   echo "<script>window.alert('image uploaded successfully');</script>";
               header("location:front.php"); 
           }
           else
           {
                 echo "<script>window.alert('try again..');</script>";
           }

       }
        ?>
                   		
