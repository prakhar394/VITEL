<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VITEL | Course Details</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b98fccde98.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    include("inc/header.php");
    ?>
    <div id='wrap'>
      <?php
      echo course_details();
      include("inc/footer.php");
      ?>
    </div>


  </body>
</html>
