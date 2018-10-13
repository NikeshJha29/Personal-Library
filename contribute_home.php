
<html>
<head>


<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="Home_page_nav."/>
<link rel="stylesheet" type="text/css" href="contribute_home.">
<link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
<link rel="stylesheet" type="text/css" href="topnav.css"/>
</head>
<header>
  <?php include 'nav_bar.php';?>
</header>

<body>
  <!--
<div class="login">
  <image src="image/login_avatar.png" class="avatar">

  <h1>Login</h1>
<form action="validation.php" method="post">



<label>Username</label>
<input type="text" name="user">

<label>Password</label>
<input type="password" name="password">


<button type="submit">Login</button>
</form>

</div>
-->


<form action = "validation.php" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
<div class="container py-5">
<div class="row">
<div class="col-md-12">
          <h2 class="text-center text-white mb-4">Login</h2>
          <div class="row">
          <div class="col-md-6 mx-auto">


              <div class="card rounded-0">
                <div class="card-header">
                <h3 class="mb-0">Login</h3>
                </div>
              <div class="card-body">

                  <div class="form-group">
                <label for="user">Username</label>
              <input type="text" class="form-control form-control-lg rounded-0" name="user" id="user" required="">

            </div>
          <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control form-control-lg rounded-0" name="password" required="" autocomplete="new-password">

          </div>

                  <button type="submit" class="btn btn-success btn-lg float-right" name='login'>Login</button>

                  </div>

                </div>
</form>



  <form action="contribute_home_registration.php" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
<div class="container py-5">
<div class="row">
<div class="col-md-12">
            <h2 class="text-center text-white mb-4">Sign up</h2>
            <div class="row">
            <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                <div class="card rounded-0">
                  <div class="card-header">
                  <h3 class="mb-0">Sign up</h3>
                  </div>
                <div class="card-body">

                    <div class="form-group">
                  <label for="uname1">Username</label>
                <input type="text" class="form-control form-control-lg rounded-0" name="user" id="uname1" required="">

              </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control form-control-lg rounded-0" name="password" required="" autocomplete="new-password">

            </div>

                    <button type="submit" class="btn btn-success btn-lg float-right" name="btnLogin">Sign Up</button>

                    </div>

                  </div>
  </form>
<!--
<div class="signin">

  <h1>Signin</h1>
<form action="contribute_home_registration.php" method="post">


<label>Username</label>
<input type="text" name="user">


<label>Password</label>
<input type="text" name="password">

<button type="submit">Signin</button>


</form>
</div>
-->
<a href="admin_home.php">Admin Login</a>
<a href="upload_book.php">Temp upload</a>

</body>
