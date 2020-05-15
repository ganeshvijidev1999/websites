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
        send comment
       </h3>        
      <?php
      if(isset($_POST["submit"])){
        $sql="INSERT into INSERT INTO comment(BID,SID,COMM,LOGS) VALUES ({$_GET["id"]},{$_SESSION["ID"]},'{$_POST["mes"]}',now()";

      } 
       $sql= "select * from BOOK  where BID=".$_GET["id"];
       $res =$db->query($sql);
       if ($res->num_rows>0)
       {
echo "<table class='tabi'>";
$row=$res->fetch_assoc();
echo "
<tr>
<th>BOOK NAME</th>
<td>{$row["BTITLE"]}</td>
</tr>
<tr>
<th>KEYWORDS</th>
<td>{$row["KEYWORDS"]}</td>
</tr>
";
echo "</table>";
       }
       else{
           echo "fail";
       }
      
      ?>
       
    </div>
    <br>
    <br>
    <div id="center">

          <form action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">
    
           
           
           
          <textarea name="mes" id="" cols="30" rows="10" required></textarea>
  <br>
           <button type="submit" name="submit">REGISTER</button>
       </form>
       
       </div>
      <?php 
      
     $sql="SELECT student .NAME,comment.COMM,comment.LOGS from comment inner join student ON 
      comment.SID=student.ID where comment.BID={$_GET["id"]} order by comment.CID desc";
     $res=$db->query($sql);
     if($res->num_rows >0){
     /* while($row=$res->fetch_assoc())
     {
          echo "<p><b>{$row["NAME"]}</b> {$row_["COMM"]}<i>{$row["LOGS"]}</i></p>";
     } */
     echo "done";
     } 
     else
     {
      echo "fail";
     }
      
      
      ?>
        <div id="navi">
           <?php 
           include "usersidebar.php"
           
           ?>
        </div>
        <div id="footer"><p>CopyRight &copy; Tutor Joes</p></div>
    </div>
</body>
</html>