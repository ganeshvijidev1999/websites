<?php
session_start();
include "database.php";
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
           helo
       </h3>        
      
      <div id="center"> 
      <?php
      if(isset($_POST["submit"]))
      {
       $sql="SELECT * FROM admin WHERE ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'"; 
    $res=$db->query($sql);    
    
    if($res->num_rows>0){
       $row=$res->fetch_assoc();
       $_SESSION["AID"]=$row["AID"];
       $_SESSION["ANAME"]=$row["ANAME"];

        header("location:ahome.php");
    }
    else{
        echo "<p class='error'>invalid</p>";
    }
    
    }


      else{
          echo "fail to lod";
      }
      
      
      ?>
          <form action="alogin.php" method="post">
          <div class="namecol"> 
          <label for="">NAME</label>
          <br>
           <input type="text" name="aname" required>
           </div>
           <div class="passcol">
           <label for="">PASSWORD</label>
           <br>
           <input type="password" name="apass"  required>
           </div>
           <button type="submit" name="submit">Login</button>
       </form>
       
       </div>
    </div>
        <div id="navi">
           <?php 
           include "sidebar.php"
           
           ?>
        </div>
        <div id="footer"><p>CopyRight &copy; Tutor Joes</p></div>
    </div>
</body>
</html>