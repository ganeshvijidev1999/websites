<?php
session_start();
include "database.php";
if(!isset($_SESSION["ID"]))
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
        new book request
       </h3>        
      
      <div id="center">

      <?php
      
      if(isset($_POST["submit"]))
      {
        $sql="insert into request (ID,MES,LOGS) value ( {$_SESSION["ID"]},'{$_POST["mess"]}',now())";
        $res=$db->query($sql);
        echo "request sended";
      }
        else
        {
         echo "<p>oidjasoij</p>";
        }


      
      
      
      ?> 
          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <div class="namecol"> 
           <div class="passcol">
           <label for="">message</label>
           <br>
          <textarea name="mess" id="" cols="30" rows="10" required></textarea>
           </div>
           <button type="submit" name="submit">REGISTER</button>
       </form>
       
       </div>
    </div>
        <div id="navi">
           <?php 
           include "usersidebar.php"
           
           ?>
        </div>
        <div id="footer"><p>CopyRight &copy; Tutor Joes</p></div>
    </div>
</body>
</html>