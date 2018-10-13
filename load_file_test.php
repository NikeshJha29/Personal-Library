<html>
<head>
  <title="Displaying Book"></title>
</head>
<body>
  <?php


$f_name= $_GET['pdf'];



echo "<iframe src=\"files/$f_name\" width=\"100%\" style=\"height:100%\"></iframe>";




?>
</html>
