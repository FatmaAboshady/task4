<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatma</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<form  action="index.php"  method="POST" class=" w-50 border p-4 m-auto " enctype="multipart/form-data" >
  <div class="mb-3">
    <input type="file"    name='uplodedFile' >
    <input type="text" class="form-control mt-5"  id="name" name='imageName' placeholder="write nwe name if you want to rename"  >
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  
 

</form>
<?php  session_start()
?>
   



    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
    
</body>
</html>