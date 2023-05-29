<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <?php
    $_SESSION['key'] = 10;
    $i = $_SESSION['key'];
  ?>
 </head>
 <body>
  <p id="affichage">hello</p>

  <script type="text/javascript">
    var value =  <?php echo $i; ?>;
    $("#affichage").html(value);   
  </script>

 </body>
</html>