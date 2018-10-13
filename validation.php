<?php
$con=mysqli_connect('localhost' , 'root');
if($con){
echo "connected";
}else{
  echo "no connection";
}
mysqli_select_db($con , 'ebook');

$name =$_POST['user'];
$pass=$_POST['password'];

$q = "select * from signin where name= '$name' && password= '$pass' ";

$result=mysqli_query($con , $q);

$num = mysqli_num_rows($result);
echo $num;
if($num == 1){
  session_start();
  /*header('location:contribute_home.php');*/
  $_SESSION['username']=$name;
  header('location:upload_book.php');
 }
else{
 echo "<script type='text/javascript'>
 alert('Invalid Credentials');
 window.location.href='contribute_home.php';
 </script>";
}
?>
