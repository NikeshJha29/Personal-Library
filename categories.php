<?php
include("connect.php");
?>
<html>
<head>
<title>Home Page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="Home_page_nav"/>
<link rel="stylesheet" type="text/css" href="topnav.css"/>
<link rel="stylesheet" type="text/css" href="category_c.css"/>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>

    <?php include 'nav_bar.php';

    if(isset($_GET['sub']))
    {
      $book_cat = $_GET['sub'];
        unset($_GET['sub']);

      ?>

<div class="container">
<h1 id="heading">Learn <?php echo $book_cat;?> program</h1>
<p style="font-size:20px">
  <?php

  $result=mysqli_query($conn,"SELECT * FROM book_category where category = '$book_cat'");
  $row=mysqli_fetch_assoc($result);
  echo "".$row['details']."";
  ?>
</p>
<p style="font-size:20px">Following is the list of the avilabel <strong><?php echo $book_cat;?> programming</strong> book by different author. You can dawnload
by clicking on the <b>download</b></p>
</div>
<div class="container">



  <hr/>

  <table class="table">
   <tr class="thead-light">

     <th>Book Name</th>
     <th>Author Name</th>
     <th>Size</th>
     <th>Type</th>
     <th>Action</th>
    </tr>
   <?php
unset($result,$row);

   $result=mysqli_query($conn,"SELECT * FROM pdf where bookcategory = '$book_cat' and approve = 'APPROVED' ");
   while($row=$result->fetch_array()){
    ?>

    <tr>
    <td><?php echo strtoupper($row['bookname']);?></td>
    <td><?php echo strtoupper($row['authorname']);?></td>
    <td><?php echo number_format($row['size']/(1024*1024),2);?>MB</td>
    <td><?php echo $row['type'];?></td>
    <td><a href="download.php?pdf=<?php echo $row['name'];?>">Download</a>&nbsp&nbsp&nbsp<a href="load_file_test.php?pdf=<?php echo $row['name']." ";?>">View</a></td>
    </tr>
  <?php }}
unset($book_cat);

  ?>
    </table>














</div>
</body>
</html>
