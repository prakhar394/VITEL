<?php
  function head_link(){
    include("inc/db.php");
    $get_link=$con->prepare("select * from contact");
    $get_link->setFetchMode(PDO:: FETCH_ASSOC);
    $get_link->execute();
    $row=$get_link->fetch();

    echo "
    <ul>
    <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fa fa-facebook-square' aria-hidden='true'></i></a></li>
    <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
    <li><a href='https://www.google.com/".$row['gp']."' target='_blank'><i class='fa fa-google-plus' aria-hidden='true'></i></a></li>
    <li><a href='https://www.youtube.com/".$row['yt']."' target='_blank'><i class='fa fa-youtube' aria-hidden='true'></i></a></li>
    <li><a href='https://www.linkedin.com/".$row['link']."' target='_blank'><i class='fa fa-linkedin' aria-hidden='true'></i></a></li>
    </ul>
    ";
  }

  function cat_menu(){
    include("inc/db.php");
    $get_cat=$con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
    $get_cat->execute();
    while($row=$get_cat->fetch()):
      echo "<li><a href='#'>".$row['cat_icon']." ".$row['cat_name']."</a></li>
      ";
    endwhile;

  }

  function home_cat(){
    include("inc/db.php");
    $get_cat=$con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
    $get_cat->execute();
    while($row=$get_cat->fetch()):
      echo "<li>
        <a href='#'>
          <center>
          ".$row['cat_icon']."
          <h4>".$row['cat_name']."</h4>
          <p>2</p>
        </center>
        </a>
      </li>";
    endwhile;
  }

  function cart(){
    include("inc/db.php");
    echo "
    <div id='wrap'>
    <div id='crumb'>
    <span><a href='index.php'>Home</a></span> <b>></b>
    <span>MyCart</span>
    </div>
    <div id='cart'>
      <table cellspacing='0'>
        <tr>
          <th>Name</th>
          <th>Instructor</th>
          <th>Language</th>
          <th>Lectures</th>
          <th>Price</th>
        </tr>
        <tr>
          <td>
            <img src='imgs/courses/course1.jpg' />
            <span><a href='#'>Complete Web Development Masterclass</a></span>
            <b><a href='#'><i class='fa fa-trash-o'></i> Remove</a></b>
          </td>
          <td>Prof. Jayakumar K.</td>
          <td>English</td>
          <td>100</td>
          <td>Rs. 120</td>
        </tr>
        <tr>
          <td>
            <img src='imgs/courses/4.jpg' />
            <span><a href='#'>Social Networking Website Development in PHP with PDO</a></span>
            <b><a href='#'><i class='fa fa-trash-o'></i> Remove</a></b>
          </td>
          <td>Harshit Agrawal</td>
          <td>English</td>
          <td>100</td>
          <td>Rs. 120</td>
        </tr>
        <tr>
          <td>
            <button><a href='index.php'>Keep Shopping</a></button>
            <button><a href='#'>Checkout</a></button>
          </td>
          <td></td><td></td>
          <td style='text-align:right;'>Amount Payable:</td>
          <td>Rs. 240</td>
        </tr>
      </table>
    </div><br clear='all' />
    </div>
    ";
  }



  function course_details(){
    include("inc/db.php");
    echo "
    <script type='text/Javascript'>
      $('.num').on('click',function(){
        if($('.num:checked').length>4)
        {
          $('#certi').prop('disabled',false);
        }
        else
        {
          $('#certi').prop('disabled',true);
        }
      });
    </script>
    <div id='crumb'>
    <span><a href='index.php'>Home</a></span> <b>></b>
    <span>MyCart</span>
    </div>
    <div id='course_left'>
      <img src='imgs/courses/course1.jpg' />
      <div id='course_share'>
        <center>
        <div id='fb'><a href='#'><i class='fa fa-facebook-official' aria-hidden='true'></i> Share</a></div>
        <div id='gp'><a href='#'><i class='fa fa-google-plus' aria-hidden='true'></i> Share</a></div>
        <div id='tw'><a href='#'><i class='fa fa-twitter' aria-hidden='true'></i> Share</a></div>
        <div id='w'><a href='#'><i class='fa fa-whatsapp' aria-hidden='true'></i> Share</a></div>
        </center>
      </div>
    </div>
    <div id='course_right'>
      <h2>HTML, CSS and Javascript for Web Developers</h2>
      <table>
        <tr>
          <td>Instructor</td>
          <td>Prof. Deepika S.</td>
        </tr>
        <tr>
          <td>Instructor</td>
          <td>Prakhar Dungarwal</td>
        </tr>
        <tr>
          <td>Enrolled By</td>
          <td>10 students</td>
        </tr>
        <tr>
          <td>Level</td>
          <td>Expert Level</td>
        </tr>
        <tr>
          <td>Language</td>
          <td>English</td>
        </tr>
        <tr>
          <td>Lectures</td>
          <td>52</td>
        </tr>
      </table>
      <div id='price'>
        <h3>Price : Rs.210 <span>Rs. 700 </span> <b>70%</b> Saving : Rs. 490 </h3>
      </div>
      <form>
        <center>
        <button><i class='fa fa-shopping-cart' aria-hidden='true'></i> Add To Cart</button>
        <div><a href='#'><i class='fa fa-bolt' aria-hidden='true'></i> Enroll Now</a></div>
        </center>
      </form>
    </div><br clear='all' />
    <div id='c_desc'>
      <h2>Course Details</h2>
      <p>The Node JS certification training course helps you gain an in-depth knowledge of concepts such as Express.js, Node Packet Manager (NPM), shrink-wrap, NPM Vet, REST, Express.js with MongoDB, and SQLite CRUD operations. This Node JS training focuses on the essential concepts of Node JS and provides hands-on experience in building an HTTP server.</p>
      <h2>What Will I Learn ?</h2>
      <p>At the end of this course you will be able to develop any website using NodeJS</p>
      <h2>Pre-Requisite</h2>
      <p>You must have basic knowledge about Web Development</p>
      <h2>Instructor</h2>
        <img src='imgs/courses/inst3.jpg' />
        <p>I am a professional NodeJS and PHP Developer and Professor at VIT Vellore</p>
      <div id='course_share'>
      <div id='fb'><a href='#'><i class='fa fa-facebook-official' aria-hidden='true'></i></a></div>
      <div id='gp'><a href='#'><i class='fa fa-google-plus' aria-hidden='true'></i></a></div>
      <div id='tw'><a href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></div>
      <div id='w'><a href='#'><i class='fa fa-whatsapp' aria-hidden='true'></i></a></div>
      </div><br clear='all' />
      <h2>Curriculum</h2>
      <ul>
        <li><i class='fa fa-video-camera' aria-hidden='true'></i> <a href='https://www.youtube.com/watch?v=dAM54CDQYl8'>1. Introduction</a>
          <input type='checkbox' class = 'num' style='float:right; text-align:center; width : 20px; height:20px; margin-top : 10px;'>
        </li>
        <li><i class='fa fa-video-camera' aria-hidden='true'></i> <a href='https://www.youtube.com/watch?v=-mCgsv0aiig'>2. Quick Overview</a>
          <input type='checkbox' class = 'num' style='float:right; text-align:center; width : 20px; height:20px; margin-top : 10px;'>
        </li>
        <li><i class='fa fa-video-camera' aria-hidden='true'></i> <a href='https://www.youtube.com/watch?v=4BtR_6NdYVk'>3. Creating Important Folders</a>
          <input type='checkbox' class = 'num' style='float:right; text-align:center; width : 20px; height:20px; margin-top : 10px;'>
        </li>
        <li><i class='fa fa-video-camera' aria-hidden='true'></i> <a href='https://www.youtube.com/watch?v=yQB2kh5G2IA'>4. Connecting with Database</a>
          <input type='checkbox' class='num' style='float:right; text-align:center; width : 20px; height:20px; margin-top : 10px;'>
        </li>
        <li><i class='fa fa-video-camera' aria-hidden='true'></i> <a href='https://www.youtube.com/watch?v=B7AjG_V1HUo'>5. Designing Home Page</a>
          <input type='checkbox' class = 'num' style='float:right; text-align:center; width : 20px; height:20px; margin-top : 10px;'>
        </li>
      </ul>
      <br>
      <br>
      <button id='certi' style='float: left;font-weight: bold;transition: all 0.3s ease-in-out;cursor: pointer;border-radius: 15px; text-transform: uppercase;width: 48%; height: 35px; outline: none; border-width: 0px; background: #3f5267; color: #fff;'><a href='Certi/form_certificate.php' style='color: #fff; text-decoration: none;'>Get Certificate</a></button>
    </div>
    <div id='c_rel'>
      <h2>Related Courses</h2>
      <ul>
        <li>
        <a href='#'>
          <img src='imgs/courses/1.jpg' />
          <p>Learn Programming Concepts with OOPS</p>
        </a>
        </li><br clear='all' />
        <li>
        <a href='#'>
          <img src='imgs/courses/2.jpg' />
          <p>Secure Form Registration using HTML and CSS</p>
        </a>
        </li><br clear='all' />
        <li>
        <a href='#'>
          <img src='imgs/courses/3.jpg' />
          <p>NodeJS for Beginners</p>
        </a>
        </li><br clear='all' />
      </ul>
    </div><br clear='all' />
    ";
  }

?>
