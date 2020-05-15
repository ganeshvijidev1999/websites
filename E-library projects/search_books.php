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
        search book request
       </h3>        
      
      <div id="center">

          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <div class="namecol"> 
           <div class="passcol">
           <label for="">message</label>
           <br>
          <textarea name="name" id="" cols="30" rows="10" required></textarea>
           </div>
           <button type="submit" name="submit">REGISTER</button>
       </form>
       
       </div>
       <?php
      if(isset($_POST["submit"]))
{

 
$sql="SELECT * FROM book where BTITLE like '% {$_POST["name"]}%' or keywords like '% {$_POST["name"]}%'";
        
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
       echo "<table class='tabi'>
            <tr class='tr'>
            <th>S.NO</th>
            <th>BOOK TITLE</th>
            <th>KEYWORD</th>
            <th>FILE</th>
            <th>COMMENT</th>
            </tr>";  
            $i=0;
            while($row=$res->fetch_assoc())
            {
            $i++;
              echo "<tr>";
              echo "<td>{$i}</td>";
              echo "<td>{$row["BTITLE"]}</td>";
              echo "<td>{$row["KEYWORDS"]}</td>";
              echo "<td><a href='{$row["FILE"]}' target='_blank'>VIEW FILE</a></td>";
             echo "<td> <a href='comment.php?id={$row["BID"]}'>GO<a/></td> ";
              echo "</tr>";

            }
            echo"</table>";
          
        
        }      
       else{
           echo "none";
       }
    }
        
       ?>
      
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