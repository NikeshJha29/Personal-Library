<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:contribute_home.php');
}
else{
//  $name=$_SESSION['username'];
  ?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="upload_book.css">
//validation






</head>
<body>

  <h2>Welcome <?= $_SESSION['username']; ?></h2>
  <div class="uploadbook">
  		<image src="image/library_icons.gif" class="avatar">
  			<form name="myForm"  method="POST" action="" enctype="multipart/form-data">
          <input type="file" name="pdf"/>
  				<p>Category</p>
      <!-- Following is for presenting list of the avilable category but it needed to be bind


            <select>
            <option value="C">C</option>
            <option value="C++">C++</option>
            <option value="C#">C#</option>
            <option value="DBMS">DBMS</option>
            <option value="Algorithm">Algorithm</option>
            <option value="Visual Basic">Visual Basic</option>
            <option value="Computer Network">Computer Network</option>
            <option value="Java">Java</option>
            <option value="C">C</option>
          -->

  				<input type="text" name="bookcategory" placeholder="Enter Book Category" required>

  				<p>Book Name</p>
  				<input type="text" name="bookname" placeholder="Enter Book Name" required>
  				<p>Author Name</p>
  				<input type="text" name="authorname" placeholder="Enter Author Name" required>
  				<p>ISBN</p>
  				<input type="number" name="isbn" placeholder="Enter ISBN" required>
          <p></p>
  				<input type="submit" name="submit" value="Upload">
  			</form>

  </div>
<?php } ?>







  <?php
  include("connect.php");
  $errors=1;
   //Targeting Folder
   $target="files/";

  if(isset($_POST['submit'])){
   $target=$target.basename($_FILES['pdf']['name']);
   //Getting Selected PDF Type
   $type=pathinfo($target,PATHINFO_EXTENSION);
   //Allow Certain File Format To Upload
   if($type!='pdf' && $type!='doc' && $type!='docx' && $type!='epub' ){
    echo "Only PDF,DOC,DOCX,Epub files format are allowed to Upload";
    $errors=0;
   }
   //Checking for File Size 1000000 bytes== 1MB
    $filesize=$_FILES['pdf']['size'];
  if ($filesize < 100 && $filesize< 2000000){
     echo 'You Can not Upload Large File(2MB) by Default ini setting..<a href="http://www.codenair.com/2018/03/how-to-upload-large-file-in-php.html">How to upload large file in php</a>';
      $errors=0;
     }
    //checking for Exsisting Doc File Files
    if(file_exists($target)){
     echo "File Already Exist";
     $errors=0;
    }
   // Check if $errors is set to 0 by an error
   if($errors==0){
    echo 'Your File Not Uploaded';
   }else{
    //if not error encountered
     //Moving The PDF or Doc file to Desired Directory
    $uplaod_success=move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
    if($uplaod_success==TRUE){
     //Getting Selected PDF Information
     $name=$_FILES['pdf']['name'];
     $size=$_FILES['pdf']['size'];
        $book_c=$_POST['bookcategory'];
        $book_n=$_POST['bookname'];
        $author=$_POST['authorname'];
        $isbn=$_POST['isbn'];

$query ="INSERT INTO pdf (name,size,type,bookcategory,bookname,authorname,isbn) VALUES('$name','$size','$type','$book_c','$book_n','$author',$isbn)";

     $result=mysqli_query($conn,$query);
     if($result==TRUE){
      echo "Your pdf '$name' Successfully Upload and Information Saved Our Database";
     }
   }
  }
  }
  ?>











































  <a href="logout_msg.html">Logout</a>

</body>
</html>
