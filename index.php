<!DOCTYPE html>
<html>
<head>
  <title>File uploading in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <style>
    .bg{
    	background-color: #77889A;
    }
    form{

    	margin-top: 180px;

    }

   </style>
</head>
<body class="bg">

	<div class="container">
	 <div class="row">
	 	<div class="col-sm-12" style="margin-top:50px;background-color:#C82333;">
	 	   <h1 style="color:white;" class="display-1 font-italic font-weight-bold">Please upload file:</h1>	
	 	</div>
	 	<div class="col-sm-6">
        <form action="uplode.php" method="POST" enctype="multipart/form-data">
            <fieldset>
            	<legend class="font-weight-bold ">Select File:</legend>
            <div class="form-group">
             
             <input type="file" class="form-control " id="filetoupload" name="filetoupload" >
             <!-- for upload multiple image at a time so u need to select multiple images
             	use this line ->
             	 <input type="file" class="form-control" id="filetoupload" name="filetoupload[]" multiple>
            
              -->
            </div> 
	         <button type="submit" class="btn btn-danger btn-block btn-lg font-weight-bold" 
	         name="Upload">Upload</button>
            </fieldset>
        </form>
        </div>
     </div>
    </div>

</body>
</html>