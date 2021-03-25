<?php include("inc/function.php"); ?>
<div id = "header">
  <div id ="up_head">
    <div id="link">
      <ul>
        <li><a href=""><i class="fab fa-facebook"></i></a>
        </li>
        <li><a href=""><i class="fab fa-twitter"></i></a>
        </li>
        <li><a href=""><i class="fab fa-instagram"></i></a>
        </li>
        <li><a href=""><i class="fab fa-linkedin"></i></a>
        <li><a href=""><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
    </div>
    <div id="date">
      <p><?php echo date('l ,d F Y') ?></p>
    </div>
    <div id="slog">
      <p>VIT's E-Learning Website</p>
    </div>
  </div>
  <div id="title">
    <h2><a href="stud_index.php">VITEL</a></h2>
  </div>
  <div id="menu">
    <h2><i class="fas fa-bars"></i></h2>
  </div>
  <div id="head_search">
    <form method="post" enctype="multipart/form-data">
      <input type="search" name="query" placeholder="Search Courses From Here">
      <button><i class="fas fa-search"></i></button>
    </form>
  </div>
  <div id="head_cart">
    <a href="cart.php"><i class="fas fa-shopping-cart"></i><span> 2</span></a>
  </div>
  <div id="head_login">
    <h4><i class="far fa-user"></i> Login</h4>
    <form action="" onsubmit="return validation();">
      <center>
        <h3><i class="fas fa-user"></i></h3>
        <h4>Login</h4>
      </center>
      <div id="input_f">
        <i class="fas fa-envelope"></i>
        <input id="email" type="text" name="u_name" placeholder="Enter user Email"><br>
        <span id="u_email" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <div id="input_f">
        <i class="fas fa-lock"></i>
        <input id="pass" type="password" name="u_pass" placeholder="Enter user Password"><br>
        <span id="u_pass" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br><br>
      <h5>Forget Password ?</h5><br clear="all"/>
      <center><button name="login" onclick="validation()">Login</button></center>
    </form>
  </div>
  <div id="head_signup">
    <h4><i class="fas fa-user-plus"></i> Signup</h4>
    <form action="" onsubmit="return sign_validation();">
      <center>
        <h3><i class="fas fa-user-plus"></i></h3>
        <h4>Signup</h4>
      </center>
      <div id="input_f">
        <i class="fas fa-user"></i>
        <input type="text" id="name" name="s_name" placeholder="Enter your Name"><br>
        <span id="f_name" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <div id="input_f">
        <i class="fas fa-envelope"></i>
        <input type="text" name="s_name" placeholder="Enter your Email" id="s_email"><br>
        <span id="sign_email" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <div id="input_f">
        <i class="fas fa-phone"></i>
        <input type="text" name="s_phn" placeholder="Enter your Phone No." id="s_no"><br>
        <span id="sign_no" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <div id="input_f">
        <i class="fas fa-lock"></i>
        <input type="password" name="s_pass" placeholder="Enter your Password" id="sign_pass"><br>
        <span id="sign_pass1" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <div id="input_f">
        <i class="fas fa-lock"></i>
        <input type="password" name="s_pass2" placeholder="Re-Enter your Password"id = "re_pass"><br>
        <span id="sign_pass2" style="color: red;font-size: 12px;font-weight: bold"></span><br>
      </div>
      <br>
      <center><button name="s_signup" onclick="sign_validation()">Signup</button></center>
    </form>
  </div>
</div>
