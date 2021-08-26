<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body>


<?php 
if(isset($_POST['submit'])){
    

    $newName= $_POST['imageName'];
    $image =$_FILES['uplodedFile'];
    $imageName= $image['name'];
    $imageType=$image['type'];
    $tmpName=$image['tmp_name'];


 




    $imageWithoutExtention =pathinfo($imageName , PATHINFO_FILENAME);
   
    $imageExtention =pathinfo($imageName , PATHINFO_EXTENSION);
    $imageNewName = $newName . uniqid() ."." . $imageExtention;
    move_uploaded_file($tmpName ,"uploads/$imageNewName");
    $dir = __DIR__. "/uploads/";

    $files = scandir($dir);
   
    ?>
     <?php
    for($i=2 ; $i<count($files); $i++){
        ?>

 <div class=" w-50  text-center  m-3  p-1 m-auto   ">        
        <img  src="uploads/<?php echo $files[$i]; ?>" class=" w-100" >
        <br>
 
      
        <a href="uploads/<?php echo $files[$i]; ?>" download="<?php echo
         $files[$i];  ?> " class=" mb-4">
            Download
        </a>
        </div>

     <?php }





}
else{
    header("location:  uploadPage.php ");



}?>.;
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html> 