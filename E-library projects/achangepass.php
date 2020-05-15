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
           CHANGE PASSWORD
       </h3>        
      
      <div id="center">

      <?php
      
      if(isset($_POST["submit"]))
      {
        $sql="SELECT * from admin WHERE APASS='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
        $res=$db->query($sql);
        if($res->num_rows > 0){
          $new="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
          $db->query($new);
          echo "done";
        }
        else{
            echo "invalid account";
        }
        }
        else
        {
         echo "<p>oidjasoij</p>";
        }


      
      
      
      ?> 
          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <div class="namecol"> 
          <label for="">OLD-PASSWORD</label>
          <br>
           <input type="password" name="opass" required>
           </div>
           <div class="passcol">
           <label for="">PASSWORD</label>
           <br>
           <input type="password" name="npass"  required>
           </div>
           <button type="submit" name="submit">REGISTER</button>
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