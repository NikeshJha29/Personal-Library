<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>

   $(function(){
     $('#btnshow').off().on({

       click:function(){
         $('#show_pdf').prop('src','load_file.php');
       }
     });

   });

  </script>
</head>
<body>
  <input type="button" id="btnshow" value="read"/>
  <br/>
  <iframe id="show_pdf" style="width: 500px; height: 550px;"/>
</body>
</html>
