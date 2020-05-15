<?php
session_start();
include "database.php";
if(!isset($_SESSION["AID"]))
{
    header("location:alogin.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="php.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  
    <title>Document</title>
    
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>E-library Management System</h1>
        </div>
        <div id="wrapper">
       <h3 id="heading">
           UPLOAD BOOKS
       </h3>        
      
      <div id="center">

      <?php
      
      if(isset($_POST["submit"]))
      {
        $target_dir="upload/";
     $target_file=$target_dir.basename($_FILES["efile"]["name"]);
             if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)){
               
                echo "sda";
            }
 
      }
        else
        {
         echo "<p>error  in upload</p>";
        }


      
      
      
      ?> 
        <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <label for="">BOOK -TITLE</label>
        <input type="text" name="bname" required>
        <label for="">KEYWORDS</label>
        <br>
        <textarea name="keys" id="" cols="30" rows="10" required></textarea>
        <br><br>
        <label for=""> UPLOAD FILE</label>
        
        <input type="file" name="efile" required>
       <button type="submit" name="submit"> upload books</button>
        </form>
       
       </div>
    </div>
        <div id="navi">
           <?php 
           include "adminsidebar.php"
           
           ?>
        </div>
        <div id="footer"><p>CopyRight &copy; Tutor Joes</p></div>
    </div>
</body>
</html>