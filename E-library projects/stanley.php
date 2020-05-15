<? php 
echo "hello world"


$db=new mysqli('localhost','root','','ggcompany',)
if($db->connect_errno)
{
   echo $db->connect_errno;
   die(;)
}
else{
    echo "done"
}

?>