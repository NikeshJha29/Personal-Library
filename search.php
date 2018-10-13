<html>
<head>
  <title>Search</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="Home_page_nav"/>
  <link rel="stylesheet" type="text/css" href="topnav.css"/>
  <link rel="stylesheet" type="text/css" href="category_c.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  </head>

  <body>

      <?php include 'nav_bar.php';?>
      <div class="container">
        <br>
  <h3>Search for your book here...</h3>
  <form method="post" >
<div class="col-xl-4">
    <input type= "text" name = "search" placeholder="search" class="form-control"><br>
    <input type= "Submit" name = "submit" value = "Search" class="btn btn-success">
</div>
<br>



<?php
    include "connect.php";
      if(isset($_POST['submit'])){
        $search = $_POST['search'];

        $query= "SELECT * FROM `pdf` WHERE `bookname` LIKE '%$search%' OR `authorname` LIKE '%$search%' OR `bookcategory` LIKE '%$search%' ORDER BY bookname asc  ";

        $result = mysqli_query($conn,$query);

        $num_rows = mysqli_num_rows($result);

        if($num_rows>=1)
        {
          echo "<h1>Result</h1>";
          echo "<table class='table'>";
          while($row = mysqli_fetch_assoc($result))
          {
          $hi = $row["bookname"];
            echo " <tr>
                    <td>$hi</td>
                    <td><a href='download.php?pdf=$hi'>Download</a></td>
                    <td><a href='load_file_test.php?pdf=$hi'>View</a></td>
                  </tr>";
        }




        }
        else {
          echo "No Result Found";
        }
        // elseif ($num_rows==0)
        // {
        //   echo "not connected";
        //       }



      }

    ?>
</table>

  </form></div>
</body>

</html>
