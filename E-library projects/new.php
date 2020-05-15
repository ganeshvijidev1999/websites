
<?php
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
            <h1>user register</h1>
        </div>
        <div id="wrapper">
       <h3 id="heading">
           helo
       </h3>        
      
      <div id="center"> 
      <?php
      
      if(isset($_POST["submit"]))
      {
        $sql="insert into student (NAME,PASS,MAIL,DEP) values('{$_POST['name']}',{$_POST['pass']},{$_POST['mail']})";
        $db->query($sql);
        echo "done";

      }
        else
        {
         echo "<p>error  in upload</p>";
        }

      
      ?>
          <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <div class="namecol"> 
          <label for="">NAME</label>
          <br>
           <input type="text" name="name" required>
           </div>
           <div class="passcol">
           <label for="">PASSWORD</label>
           <br>
           <input type="password" name="pass"  required>
           </div>
           <label for="">EMAIL-ID</label>
          <br>
           <input type="text" name="mail" required>
           </div>
           <select name="dep" id="" required>
           <option value="BCA">BCA</option>
           <option value="BBA">BBA</option>
           <option value="B.COM">B.COM</option>
           <option value="BSC">BSC</option>
           <option value="BIO">BIO</option>
           <option value="OTHERS">OTHERS</option>
           
           
           </select>
          
           <button type="submit" name="submit">REGISTER</button>
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