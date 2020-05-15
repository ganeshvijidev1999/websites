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
           CHANGE PASSWORD
       </h3>        
      
      <div id="center">

      <?php
      
      if(isset($_POST["submit"]))
      {
        $sql="SELECT * from student WHERE PASS='{$_POST["opass"]}' and ID='{$_SESSION["ID"]}'";
        $res=$db->query($sql);
        if($res->num_rows > 0){
          $new="update admin set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
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
           <label for=""> NEW PASSWORD</label>
           <br>
           <input type="password" name="npass"  required>
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