<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VITEL | Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b98fccde98.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    include("inc/header.php");
    ?>
    <div id='wrap'>
      <div id='c_edit_l'>
        <h1>Course Management</h1>
        <ul>
          <li><a href='#'><i class="fa fa-edit" aria-hidden="true"></i> Course and Title</a></li>
          <li><a href='#'><i class="fa fa-edit" aria-hidden="true"></i> Course Goal</a></li>
          <li><a href='#'><i class="fa fa-edit" aria-hidden="true"></i> Course Details</a></li>
          <li><a href='#'><i class="fa fa-edit" aria-hidden="true"></i> Course Price</a></li>
          <li><a href='#'><i class="fa fa-edit" aria-hidden="true"></i> Curriculum</a></li>

        </ul>
        <button>Submit For Review</button>
      </div>
      <div id='c_edit_r'>
        <div id='crumb'>
          <span><a href='index.php'>Home</a></span> <b>></b>
          <span>Development</span>
        </div>
        <h2>Course Title</h2>
        <form method='post'>
          <div id='c_edit_input'>
            <input type='text' name='c_name' placeholder='Enter course name'>
            <p>100</p>
          </div><br clear='all' />
          <h2>Course Image</h2>
          <img src='imgs/courses/4.jpg' />
          <span>E Commerce Website Development in PHP with PDO E Commerce Website Development in PHP with PDO E Commerce Website Development in PHP with PDO E Commerce Website Development in PHP with PDO</span>
          <input id='c_img' type='file' name='c_img'>
          <button>Save</button>
        </form>
      </div>
    </div>


  </body>
</html>
