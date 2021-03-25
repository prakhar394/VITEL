<div id='bodyleft'>
  <h3>Categories Management</h3>
  <ul>
    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a></li>
    <li><a href="index.php?cat"><i class="fa fa-th-large" aria-hidden="true"></i>View Categories</a></li>
    <li><a href="index.php?sub_cat"><i class="fa fa-th" aria-hidden="true"></i>View Sub Categories</a></li>
    <li><a href="index.php?lang"><i class="fa fa-language" aria-hidden="true"></i>View Languages</a></li>
  </ul>

  <h3>Course Management</h3>
  <ul>
    <li><a href="#"><i class="fa fa-battery-full" aria-hidden="true"></i>Active Courses</a></li>
    <li><a href="#"><i class="fa fa-battery-half" aria-hidden="true"></i> Pending Courses</a></li>
    <li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i>Unpublished Courses</a></li>
    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i> Advanced Course Search</a></li>
  </ul>

  <h3>User Management</h3>
  <ul>
    <li><a href="#"><i class="fa fa-child" aria-hidden="true"></i>View All Students</a></li>
    <li><a href="#"><i class="fas fa-chalkboard-teacher"></i>View All Teachers</a></li>
    <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i>Advanced User Search</a></li>
  </ul>

  <h3>Payment Management</h3>
  <ul>
    <li><a href="#"><i class="fab fa-paypal"></i> Pay To Instructor</a></li>
    <li><a href="#"><i class="fas fa-shopping-cart"></i>Complete Payment</a></li>
    <li><a href="#"><i class="fas fa-search-plus"></i>Advanced Payment Search</a></li>
  </ul>

  <h3>Page Management</h3>
  <ul>
    <li><a href="index.php?terms"><i class="fas fa-file-invoice-dollar"></i>Terms & Conditions Page</a></li>
    <li><a href="index.php?contact"><i class="far fa-address-book"></i> Contact Us Page</a></li>
    <li><a href="index.php?about"><i class="far fa-address-card"></i>About Us Page</a></li>
    <li><a href="index.php?faqs"><i class="far fa-question-circle"></i>FAQs Page</a></li>
    <li><a href="#"><i class="fas fa-pen-square"></i>Edit Slider</a></li>
  </ul>
</div>

<?php
  if(isset($_GET['cat'])){
    include("cat.php");
  }
  if(isset($_GET['sub_cat'])){
    include("sub_cat.php");
  }
  if(isset($_GET['lang'])){
    include("lang.php");
  }
  if(isset($_GET['terms'])){
    include("terms.php");
  }
  if(isset($_GET['contact'])){
    include("contact.php");
  }
  if(isset($_GET['faqs'])){
    include("faqs.php");
  }
  if(isset($_GET['about'])){
    include("about.php");
  }
 ?>
