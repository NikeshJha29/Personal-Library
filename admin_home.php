
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="topnav.css"/>
</head>
<header>
  <?php include 'nav_bar.php';?>
</header>
<body>



<div class="container py-5">
<div class="row">
<div class="col-md-12">
            <h2 class="text-center text-white mb-4">Official Login</h2>
            <div class="row">
            <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                <div class="card rounded-0">
                  <div class="card-header">
                  <h3 class="mb-0">Official Login</h3>
                  </div>
                <div class="card-body">




        <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
          <div class="form-group">
        <label for="uname1">Username</label>
      <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">

    </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" class="form-control form-control-lg rounded-0" name="pwd1" required="" autocomplete="new-password">

  </div>

          <button type="submit" class="btn btn-success btn-lg float-right" name="btnLogin">Login</button>
            </form>
          </div>

        </div>
<?php
if(isset($_POST['btnLogin'])){
  $user = $_POST['uname1'];
  $pass =$_POST['pwd1'];

  if($user == 'root' && $pass== 'root'){
    header('Location: approval.php');
  }
}


?>

      </div>


        </div>


      </div>

    </div>

</div>

</body>
</html>
