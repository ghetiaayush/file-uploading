<?php

$conn = new mysqli("localhost","root","","tops");

// if($conn == true){
// 	echo "yes";
// }
// else {
// 	echo "no";
// }
//echo "in uplode file";

//Start - for single file uploading
$uplods = "uplods/";

$targetdir = $uplods .basename($_FILES['filetoupload']['name']);
//echo "<pre>";
//print_r($targetdir);
move_uploaded_file($_FILES['filetoupload']['tmp_name'],$targetdir);

echo "file uploded sucessfully.";

$sql = "INSERT INTO image(img_name) values('$targetdir')";
                   		
    if($conn->query($sql) == true){
    	?>
       
    	<script>
    	window.alert('Image uploaded successfully');
        </script>
         <?php
                header("location:front.php");
         }
         else{
           ?>
           <script>
           window.alert('image not uploaded');
           	</script>
       	<?php
        }

//end..

        

// //start -> multiple files uploading
// //echo "<pre>";
// //print_r($_FILES);
//  $uplods = "uplods/";

//  $count = count($_FILES['filetoupload']['tmp_name']);
//  echo $count;

// //$ff = $_FILES['filetoupload']['name'][0];
//  //print_r($ff);
 

//  for($i=0; $i < $count;$i++)
//  {

//        $uplods = "uplods/";
//        $targetdir = $uplods. basename($_FILES['filetoupload']['name'][$i]);
//        //echo "<pre>";
//        //print_r($targetdir);
//        move_uploaded_file($_FILES['filetoupload']['tmp_name'][$i],$targetdir);
//        //echo "file uploades successfully";
//  } 
//  //end ->multiple file uploading
// //echo "<pre>";
// //print_r($_FILES);
?>