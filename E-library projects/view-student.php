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
    <style>
    .tabi{
        width:100%;
        border-collapse:collapse;
    }
    .tabi td,.tabi th{
        border:1px solid black;
        padding:5px;
    }
    
    
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>VIEW STUDENT</h1>
        </div>
        <div id="wrapper">
       <h3 id="heading">
           helo
       </h3>        
       <?php
       $sql="SELECT * FROM student";
        
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
       echo "<table class='tabi'>
        
        
            <tr class='tr'>
            <th>S.NO</th>
            <th>NAME</th>
            
            <th>MAIL</th>
            <th>DEP</th>
            </tr>
            ";  
            $i=0;
            while($row=$res->fetch_assoc())
            {
            $i++;
              echo "<tr>";
              echo "<td>{$i}</td>";
              echo "<td>{$row["NAME"]}</td>";
              echo "<td>{$row["MAIL"]}</td>";
              echo "<td>{$row["DEP"]}</td>";
              echo "</tr>";

            }
            echo"</table>";
          
        
        }
       else{
           echo "none";
       }
       
        
       ?>
      
            <div id="center">
             
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
