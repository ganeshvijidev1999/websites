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
            <h1>VIEW COMMENT</h1>
        </div>
        <div id="wrapper">
       <h3 id="heading">
           helo
       </h3>        
       <?php
         $sql="SELECT book.BTITLE,student.NAME,comment.COMM,comment.LOGS from comment INNER JOIN book on comment.CID=book.BID INNER JOIN student on comment.SID=student.ID ";

        
         $res=$db->query($sql);
         if($res->num_rows > 0)
         {
         echo "<table class='tabi'>
        
        
            <tr class='tr'>
            <th>S.NO</th>
            <th>STUDENT NAME</th>
            
            <th>BOOK TITLE</th>
            
            <th>COMMENT</th>
            <th>BOOK TITLE</th>
            
            </tr>
            ";  
            $i=0;
            while($row=$res->fetch_assoc())
            {
            $i++;
              echo "<tr>";
              echo "<td>{$i}</td>";
              echo "<td>{$row["BTITLE"]}</td>";
              echo "<td>{$row["NAME"]}</td>";
              echo "<td>{$row["COMM"]}</td>";
              echo "<td>{$row["LOGS"]}</td>";
              echo "</tr>";

            }
            echo"</table>";
          
        
        }
       else{
           echo "NO COMMENTS ";
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
