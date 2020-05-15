<?php
session_start();
include "database.php";
function countRecord($sql,$db){
$res=$db->query($sql);
return $res->num_rows;



}
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
           helo
       </h3>        
      
            <div id="center">
             <ul >
             <li>Total Student  :<?php  echo countRecord("select * from student",$db); ?></li>
             <li>Total Books    :<?php  echo countRecord("select * from book",$db); ?></li>
             <li>Total Request  :<?php  echo countRecord("select * from request",$db); ?></li>
             <li>Total Comment  :<?php  echo countRecord("select * from comment",$db); ?></li>
             </ul>

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
