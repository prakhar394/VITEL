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
      <div id='crumb'>
        <span><a href='index.php'>Home</a></span> <b>></b>
        <span>Development</span>
      </div>
      <div id='dash'>
        <h1>Instructor Dashboard</h1>
        <form method='post'>
          <div id='c_form'>
            <input type="text" name="c_name" placeholder="Enter course name here ...">
            <button id='add_course'>Create Course</button>
          </div>
        </form><br clear='all' />
        <table cellpadding='0' cellspacing='0'>
          <tr>
            <th>Name</th>
            <th></th>
            <th>Course Type</th>
            <th>Course Price</th>
            <th>Course Status</th>
            <th>Enrolled By</th>
            <th>Total Earning</th>
          </tr>
          <tr>
            <td><a href='#'><img src='imgs/courses/4.jpg' ></a></td>
            <td>
              <span>
                <a href="#">Web Development using nodejs</a>
              </span><br /><br />
              <a href='#'><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
            </td>
            <td>Paid</td>
            <td>Rs. 100</td>
            <td>Active</td>
            <td>5</td>
            <td>Rs. 500</td>
          </tr>
          <tr>
            <td><a href='#'><img src='imgs/courses/course5.jpg' ></a></td>
            <td>
              <span>
                <a href="#">Artificial Intellegence Masterclass</a>
              </span><br /><br />
              <a href='#'><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
            </td>
            <td>Paid</td>
            <td>Rs. 100</td>
            <td>Active</td>
            <td>5</td>
            <td>Rs. 500</td>
          </tr>
          <tr>
            <td><a href='#'><img src='imgs/courses/course6.jpg' ></a></td>
            <td>
              <span>
                <a href="#">Machine Learning Masterclass</a>
              </span><br /><br />
              <a href='#'><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
            </td>
            <td>Paid</td>
            <td>Rs. 100</td>
            <td>Active</td>
            <td>5</td>
            <td>Rs. 500</td>
          </tr>
        </table>
      </div>
      <?php include("inc/footer.php"); ?>
    </div>


  </body>
</html>
