<?php
include("connect.php");
?>
<html>
<head>
<title>Home Page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="topnav.css"/>
<link rel="stylesheet" type="text/css" href="category_c.css"/>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<!--meta tag for refreshing page in interval of 30s-->
<meta http-equiv="refresh" content="5" />
</head>

<body>

    <?php include 'nav_bar.php';


      ?>

<div class="container">
<p style="font-size:20px">

</p>

</div>
<div class="container">



  <hr/>

  <table class="table">
   <tr class="thead-light">

     <th>Book Name</th>
     <th>Author Name</th>
     <th>Size</th>
     <th>Type</th>
     <th>Status</th>
     <th>Action</th>
    </tr>
   <?php
unset($result,$row);

   $result=mysqli_query($conn,"SELECT * FROM pdf ");
   while($row=$result->fetch_array()){
    ?>

    <tr>
    <td><?php echo strtoupper($row['bookname']);?></td>
    <td><?php echo strtoupper($row['authorname']);?></td>
    <td><?php echo number_format($row['size']/(1024*1024),2);?>MB</td>
    <td><?php echo $row['type'];?></td>
    <td><?php echo $row['approve'];?></td>

   <td><a type="button" class="btn btn-success" href="approval.php?approve=<?php echo $row['id'];?>">Approved</a></button></td>
   <td><a type="button" class="btn btn-danger" href="approval.php?unapprove=<?php echo $row['id'];?>">Un-Approved</a></button></td>

    </tr>
  <?php }

  ?>
    </table>

<?php
 if(isset($_GET['approve'])){
   $id=$_GET['approve'];
    $query="UPDATE `pdf` SET `approve`='APPROVED' WHERE id = $id";
    $r=mysqli_query($conn,$query);
    if(!$r)
      echo "Something Went Wrong";

    header("Location:approval.php");
 }

 if(isset($_GET['unapprove'])){
   $id=$_GET['unapprove'];
    $query="UPDATE `pdf` SET `approve`='UNAPPROVED' WHERE id = $id";
    $r=mysqli_query($conn,$query);
    if(!$r)
      echo "Something Went Wrong";
    header("Location:approval.php");
 }
?>












</div>
</body>
</html>
