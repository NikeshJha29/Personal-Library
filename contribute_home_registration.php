<?php
session_start();
header('location:contribute_home.php');
$con=mysqli_connect('localhost' , 'root');
if($con){
echo "connected";
}else{
  echo "no connection";
}
mysqli_select_db($con , 'ebook');

$name =$_POST['user'];
$pass=$_POST['password'];

$q = "select * from ebook where name= '$name' && password= '$pass' ";

$result=mysqli_query($con , $q);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "You are already Registered, Please login!!!";
}else{
  $qy= "insert into signin(name , password) values ('$name' , '$pass')";
  mysqli_query($con , $qy);
}
?>
