<?php
$param1=$_GET["parameter1"]; 
$param2=$_GET["parameter2"]; 
$param3=$_GET["parameter3"]; 
$param4=$_GET["parameter4"]; 
$param5=$_GET["parameter5"]; 
$param6=$_GET["parameter6"]; 
$param7=$_GET["parameter7"]; 
$param8=$_GET["parameter8"]; 
$param9=$_GET["parameter9"]; 
$param10=$_GET["parameter10"]; 
$param11=$_GET["parameter11"]; 
$param12=$_GET["parameter12"]; 
$param13=$_GET["parameter13"]; 
$param14=$_GET["parameter14"]; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recommendation Page</title>
    <link rel="shortcut icon" href="img/fevicon.png" type="image/x-icon" />
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      box-sizing: border-box;
    }

    body {
      background: #f0f2f5;
      color: #5f5f5f;
    }

    a {
      text-decoration: none;
      color: #5f5f5f;
    }

    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #fff;
      padding: 6px 6%;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .logo img {
      width: 30px;
      margin-right: 15px;
      display: block;
    }

    .navbar-center ul li {
      display: inline-block;
      list-style: none;
    }

    .navbar-center ul li a {
      display: flex;
      align-items: center;
      font-size: 14px;
      margin: 5px 8px;
      padding-right: 5px;
      position: relative;
    }

    .navbar-center ul li a img {
      width: 30px;
    }

    .navbar-center ul li a::after {
      content: "";
      width: 0;
      height: 2px;
      background: #045be6;
      position: absolute;
      bottom: -15px;
      transition: width 0.3s;
    }

    .navbar-center ul li a:hover::after,
    .navbar-center ul li a.active-link::after {
      width: 100%;
    }

    .nav-profile-img {
      width: 40px;
      border-radius: 30%;
      display: block;
      cursor: pointer;
      position: relative;
    }

    .online {
      position: relative;
    }

    .online::after {
      content: "";
      width: 7px;
      height: 7px;
      border: 2px solid #fff;
      border-radius: 30%;
      right: 0px;
      top: 0px;
      background: #41db51;
      position: absolute;
    }

    .search-box {
      background: #f0f2f5;
      width: 250px;
      border-radius: 20px;
      display: flex;
      align-items: center;
      padding: 0 15px;
    }

    .navbar-left {
      display: flex;
      align-items: center;
    }

    .search-box img {
      width: 14px;
    }

    .search-box input {
      width: 100%;
      background: transparent;
      padding: 8px;
      outline: none;
      border: 0;
    }

    /* -------- navbar end -------- */

    .container {
      padding: 20px 6%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    /* ----- left sidebar -----  */

    .left-sidebar {
      flex-basis: 25%;
      align-self: flex-start;
      position: sticky;
      top: 73px;
    }

    .sidebar-profile-box {
      background: #fff;
    }

    .sidebar-profile-info {
      padding: 0 25px;
    }

    .sidebar-profile-info img {
      width: 90px;
      border-radius: 30%;
      background: #fff;
      padding: 4px;
      margin-top: -45px;
    }

    .sidebar-profile-info h1 {
      font-size: 20px;
      font-weight: 600;
      color: #222;
    }

    .sidebar-profile-info h3 {
      font-size: 14px;
      font-weight: 500;
      color: #777;
    }

    .sidebar-profile-info ul {
      list-style: none;
      margin: 20px 0;
    }

    .sidebar-profile-info ul li {
      width: 100%;
      margin: 5px 0;
      font-size: 13px;
    }

    .sidebar-profile-info ul li span {
      float: right;
      color: #045be6;
    }

    .sidebar-profile-link {
      display: flex;
      align-items: center;
      border-top: 1px solid #ccc;
    }

    .sidebar-profile-link a {
      flex-basis: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px 0;
      font-size: 13px;
      border-left: 1px solid #ccc;
    }

    .sidebar-profile-link a:first-child {
      border-left: 0;
    }

    .sidebar-profile-link a img {
      width: 20px;
      margin-right: 10px;
    }

    .sidebar-activity {
      background: #fff;
      padding: 5px 25px;
      margin: 12px 0;
    }

    .sidebar-activity h3 {
      color: #777;
      font-size: 14px;
      font-weight: 500;
      margin: 20px 0 10px;
    }

    .sidebar-activity a {
      display: flex;
      align-items: center;
      font-size: 12px;
      font-weight: 500;
      color: #888;
      margin: 3px 0;
    }

    .sidebar-activity a img {
      width: 20px;
      margin-right: 10px;
    }

    .discover-more-links {
      border-top: 1px solid #ccc;
      text-align: center;
      margin-top: 20px;
      margin-right: -25px;
      margin-left: -25px;
    }

    .discover-more-links a {
      color: #045be6;
      display: inline-block;
      margin: 10px 0;
    }

    /* ------- right sidebar ------  */

    .right-sidebar {
      flex-basis: 25%;
      align-self: flex-start;
      position: sticky;
      top: 73px;
    }

    .sidebar-news {
      background: #fff;
      padding: 10px 25px;
    }

    .info-icon {
      width: 15px;
      float: right;
      margin-top: 15px;
    }

    .sidebar-news h3 {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      margin: 10px 0 30px;
    }

    .sidebar-news a {
      display: block;
      font-size: 12px;
      font-weight: 600;
      margin-top: 10px;
      margin-bottom: 5px;
    }

    .sidebar-news span {
      font-size: 12px;
    }

    .sidebar-news .read-more-link {
      color: #045be6;
      font-weight: 500;
      margin: 20px 0 10px;
    }

    .sidebar-ad {
      background: #fff;
      padding: 15px 25px;
      text-align: center;
      margin: 12px 0;
      font-size: 12px;
    }

    .sidebar-ad img {
      width: 60px;
      border-radius: 30%;
      margin: 4px;
    }

    .sidebar-ad small {
      float: right;
      font-weight: 500;
    }

    .sidebar-ad p {
      margin-top: 30px;
      margin-bottom: 10px;
    }

    .sidebar-ad b {
      display: block;
      font-weight: 500;
      margin-top: 10px;
    }

    .ad-link {
      display: inline-block;
      border: 1px solid #045be6;
      border-radius: 30px;
      padding: 5px 15px;
      color: #045be6;
      font-weight: 500;
      margin: 20px auto 10px;
    }

    .sidebar-useful-links {
      padding: 15px 25px;
      text-align: center;
    }

    .sidebar-useful-links a {
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
    }

    .copyright-msg {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      margin-top: 10px;
      font-weight: 500;
    }

    .copyright-msg img {
      width: 18px;
      margin-right: 4px;
    }

    /* ------- main content -------  */

    .main-content {
      flex-basis: 47%;
    }

    .create-post {
      background: #fff;
    }

    .create-post-input {
      padding: 20px 25px 10px;
      display: flex;
      align-items: flex-start;
    }

    .create-post-input img {
      width: 35px;
      border-radius: 30%;
      margin-right: 10px;
    }

    .create-post-input textarea {
      width: 100%;
      border: 0;
      outline: 0;
      resize: none;
      background: transparent;
      margin-top: 8px;
    }

    ::placeholder {
      font-weight: 500;
    }

    .create-post-links {
      display: flex;
      align-items: flex-start;
    }

    .create-post-links li {
      list-style: none;
      border-top: 1px solid #ccc;
      border-right: 1px solid #ccc;
      flex-basis: 25%;
      height: 40px;
      font-size: 13px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    .create-post-links li img {
      width: 15px;
      margin-right: 5px;
    }

    .create-post-links li:last-child {
      background: #045be6;
      color: #fff;
      border-top: 0;
      border-right: 0;
    }

    .sort-by {
      display: flex;
      align-items: center;
      margin: 10px 0;
    }

    .sort-by hr {
      flex: 1;
      border: 0;
      height: 1px;
      background: #ccc;
    }

    .sort-by p {
      font-size: 13px;
      padding-left: 5px;
    }

    .sort-by p span {
      font-weight: 600;
      cursor: pointer;
    }

    .sort-by p span img {
      width: 12px;
      margin-left: 3px;
    }

    .post {
      background: #fff;
      padding: 20px 25px 5px;
      margin: 5px 0 15px;
    }

    .post-author {
      display: flex;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .post-author img {
      width: 35px;
      border-radius: 30%;
      margin-right: 10px;
      margin-top: 5px;
    }

    .post-author h1 {
      font-size: 18px;
      font-weight: 600;
      color: #333;
    }

    .post-author small {
      display: block;
      margin-bottom: 2px;
    }

    .post p {
      font-size: 14px;
      margin-bottom: 15px;
    }

    .post-stats {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      font-size: 12px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 6px;
    }

    .post-stats div {
      display: flex;
      align-items: center;
    }

    .post-stats img {
      width: 15px;
      margin-right: -5px;
    }

    .liked-user {
      margin-left: 10px;
    }

    .post-activity {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0;
      font-size: 14px;
      font-weight: 500;
    }

    .post-activity div {
      display: flex;
      align-items: center;
    }

    .post-activity-user-icon {
      width: 22px;
      border-radius: 30%;
    }

    .post-activity-arrow-icon {
      width: 12px;
      margin-left: 5px;
    }

    .post-activity-link img {
      width: 18px;
      margin-right: 8px;
    }

    /* ---------- Profile-drop-down-menu-------- */

    .profile-menu-wrap {
      position: absolute;
      top: 100%;
      right: 5%;
      width: 320px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s;
    }

    .profile-menu-wrap.open-menu {
      max-height: 400px;
    }

    .profile-menu {
      background: #222;
      color: #fff;
      padding: 20px;
      margin: 10px;
    }

    .user-info {
      display: flex;
      align-items: center;
    }

    .user-info img {
      width: 50px;
      border-radius: 30%;
      margin-right: 15px;
    }

    .user-info h3 {
      font-weight: 500;
      margin-bottom: 7px;
    }

    .user-info a {
      color: #c9dbf8;
      font-size: 13px;
    }

    .profile-menu hr {
      border: 0;
      height: 1px;
      width: 100%;
      background: #fff;
      margin: 15px 0 10px;
    }

    .profile-menu-link {
      display: flex;
      align-items: center;
      color: #fff;
      margin: 12px 0;
      font-size: 14px;
    }

    .profile-menu-link p {
      width: 100%;
    }

    .profile-menu-link img {
      width: 35px;
      border-radius: 30%;
      margin-right: 15px;
    }

    /* --------- Profile Page Styling -------  */

    .profile-main {
      flex-basis: 73%;
    }

    .profile-sidebar {
      flex-basis: 25%;
      align-self: flex-start;
      position: sticky;
      top: 73px;
    }

    .profile-container {
      background: #fff;
    }

    .profile-container-inner {
      padding: 0 4% 10px;
    }

    .profile-pic {
      width: 150px;
      border-radius: 30%;
      margin-top: -75px;
      padding: 5px;
      background: #fff;
    }

    .profile-container h1 {
      font-size: 28px;
      font-weight: 600;
      color: #222;
    }

    .profile-container b {
      font-weight: 500;
    }

    .profile-container p {
      margin-top: 5px;
    }

    .profile-container p a {
      color: #045be6;
      font-weight: 500;
    }

    .mutual-connection {
      display: flex;
      align-items: center;
      margin: 20px 0;
    }

    .mutual-connection img {
      width: 30px;
      border-radius: 30%;
      margin-right: 5px;
    }

    .profile-btn {
      margin: 20px 0;
    }

    .profile-btn a {
      display: inline-flex;
      align-items: center;
      background: #e4e6eb;
      padding: 6px 15px;
      border-radius: 4px;
      margin-right: 10px;
    }

    .profile-btn a img {
      width: 18px;
      margin-right: 5px;
    }

    .profile-btn .primary-btn {
      background: #045be6;
      color: #fff;
    }

    .profile-description {
      background: #fff;
      padding: 20px 4% 30px;
      margin: 12px 0;
    }

    .profile-description h2 {
      color: #333;
      margin: 10px 0 20px;
      font-weight: 600;
    }

    .see-more-link {
      display: block;
      text-align: right;
      font-size: 15px;
    }

    .profile-desc-row {
      display: flex;
      align-items: flex-start;
      margin: 20px 0;
    }

    .profile-desc-row img {
      width: 50px;
      margin-right: 25px;
      margin-top: 5px;
    }

    .profile-desc-row div {
      width: 100%;
    }

    .profile-desc-row h3 {
      font-size: 18px;
      font-weight: 600;
      color: #333;
    }

    .profile-desc-row b {
      display: block;
      font-weight: 500;
      font-size: 15px;
    }

    .profile-desc-row p {
      margin-top: 15px;
    }

    .profile-desc-row hr {
      border: 0;
      border-bottom: 1px solid #999;
      margin-top: 10px;
    }

    .experience-link {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-top: 20px;
      font-weight: 500;
    }

    .experience-link img {
      width: 20px;
      margin-left: 8px;
    }

    .skills-btn {
      display: inline-block;
      margin: 10px 5px;
      padding: 6px 18px;
      border: 1px solid #777;
      border-radius: 30px;
      font-size: 12px;
      font-weight: 500;
    }

    .language-btn {
      display: inline-block;
      margin: 10px 5px;
      padding: 6px 18px;
      background: #e4e6eb;
      font-size: 12px;
      font-weight: 500;
    }

    /* -------------- profile-right-sidebar----------- */

    .profile-sidebar .sidebar-ad {
      margin: 0;
    }

    .sidebar-people {
      background: #fff;
      padding: 15px 25px;
      margin: 12px 0;
      font-size: 12px;
    }

    .sidebar-people h3 {
      font-size: 16px;
      font-weight: 600;
      margin: 10px 0 20px;
    }

    .sidebar-people-row {
      display: flex;
      align-items: flex-start;
      margin: 6px 0;
    }

    .sidebar-people-row img {
      width: 40px;
      border-radius: 30%;
      margin-right: 8px;
      margin-top: 5px;
    }

    .sidebar-people-row h2 {
      font-weight: 500;
      font-size: 16px;
    }

    .sidebar-people-row a {
      display: inline-block;
      margin: 10px 0;
      padding: 5px 25px;
      border: 1px solid #5f5f5f;
      border-radius: 30px;
      font-weight: 500;
    }

    .profile-footer {
      padding: 0 6% 30px;
    }

    .profile-footer .sidebar-useful-links {
      text-align: left;
      padding: 0;
    }

    .profile-footer .copyright-msg {
      justify-content: flex-start;
    }

    #showMoreLink {
      display: none;
    }

    /*  ---------- Media Query for Small Screen ----------- */

    @media only screen and (max-width: 600px) {
      .search-box {
        background: transparent;
        width: auto;
        padding: 0;
      }
      .search-box input {
        width: 0;
        padding: 0;
      }
      .navbar-center ul li a span {
        display: none;
      }
      .navbar-center ul li a {
        padding-right: 0;
        margin: 5px;
      }
      .nav-profile-img {
        width: 30px;
      }
      .container {
        padding: 15px 3%;
      }
      .left-sidebar,
      .right-sidebar {
        flex-basis: 100%;
        position: relative;
        top: unset;
      }
      .main-content {
        flex-basis: 100%;
      }
      .post-stats div {
        margin: 2px 0;
      }
      .post-activity-link span {
        display: none;
      }
      .post-activity-link img {
        margin-right: 0;
      }
      .profile-main,
      .profile-sidebar {
        flex-basis: 100%;
      }
      .profile-container {
        font-size: 14px;
      }
      .profile-pic {
        width: 100px;
        margin-top: -50px;
      }
      .profile-description {
        font-size: 14px;
      }
      #showMoreLink {
        display: block;
        width: fit-content;
        margin: 10px auto;
        font-size: 14px;
        cursor: pointer;
      }
      .sidebar-activity {
        display: none;
      }
      .sidebar-activity.open-activity {
        display: block;
      }
    }

    /* dskadjhsldksdhudslihssldjsdsfsfsdfsdssss */

    .product-card {
      width: 300px;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      margin-bottom: 20px;
    }

    .product-card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .product-card img {
      width: 100%;
      height: auto;
      border-radius: 5px 5px 0 0;
    }

    .product-card.details {
      padding: 10px;
    }

    .product-card.details h2 {
      margin-top: 0;
    }

    .product-card.details p {
      margin-bottom: 0;
    }

    @media screen and (max-width: 600px) {
      .product-card {
        width: 100%;
      }
    }

    .search {
      border: 2px solid #cf5c3f;
      overflow: auto;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
    }

    .search input[type="text"] {
      border: 0px;
      width: 67%;
      padding: 10px 10px;
    }

    .search input[type="text"]:focus {
      outline: 0;
    }

    .search input[type="submit"] {
      border: 0px;
      background: none;
      background-color: #cf5c3f;
      color: #fff;
      float: right;
      padding: 10px;
      /* border-radius-top-right: 5px; */
      -moz-border-radius-top-right: 5px;
      -webkit-border-radius-top-right: 5px;
      /* border-radius-bottom-right: 5px; */
      -moz-border-radius-bottom-right: 5px;
      -webkit-border-radius-bottom-right: 5px;
      cursor: pointer;
    }

    /* ===========================
   ====== Medua Query for Search Box ====== 
   =========================== */

    @media only screen and (min-width: 150px) and (max-width: 780px) {
      
      
      .search {
        width: 95%;
        margin: 0 auto;
      }
    }
  </style>

  <body>
    <nav class="navbar">
      <div class="navbar-left">
        <a class="logo" href="/"
          ><img src="./OD-Images/route-solid-removebg-preview.png" alt=""
        /></a>
      </div>
      <div class="navbar-center">
        <ul>
          <li>
            <a href="index.html" class="active-link"
              ><img src="./OD-Images/home.png"
            /></a>
          </li>

          <li>
            <a href="booking.php" class="active-link"
              ><img src="./OD-Images/profit-growth.png"
            /></a>
          </li>
        </ul>
      </div>

      <div class="navbar-right">
        <div class="online">
          <img
            src="./OD-Images/g3.jpg"
            class="nav-profile-img"
            onclick="toggleMenu()"
          />
        </div>
      </div>
      <!-- ---------- Profile-drop-down-menu--------  -->
      <div class="profile-menu-wrap" id="profileMenu">
        <div class="profile-menu">
          <div class="user-info">
            <img src="./OD-Images/g3.jpg" />
            <div>
              <h3>Touorist Venues</h3>
              <!-- <a href='/profile'>See more</a> -->
            </div>
          </div>
          <hr />
        </div>
      </div>
    </nav>

    <!-- -------- navbar close ---------->

    <div class="container">
      <!-- --------- Left Sidebar --------  -->
      <div class="left-sidebar">
        <div class="sider-profile-box">
          <img src="./OD-Images/banner (1).jpg" width="100%" />
          <div class="sidebar-profile-info">
            <img src="./OD-Images/logob.png" />
            <h1>Touorist Venues</h1>
            <h3>Your Journey Partner</h3>
            <ul>
              <li>Our Customers<span>100+</span></li>
              <li>Our Support<span>24X7</span></li>
            </ul>
          </div>
        </div>

        <p id="showMoreLink" onclick="toggleActivity()">Show more <b>+</b></p>
      </div>
      <!-- -------- Main Content ----------  -->
      <div class="main-content">
        <!-- <div class="search">
          <form class="search-form">
            <input type="text" placeholder="Search" />
            <input type="submit" value="Submit" />
          </form>
        </div> -->

        <div class="post">
          <div class="post-author"></div>
          <img src="OD-Images/<?php echo $param1 ?>" width="100%" />
          <h3 id="place_name">Place Name:<?php echo $param2 ?></h3>
          <p id="description">Description:<?php echo $param3 ?></p>
          <p id="latitude">Latitude:<?php echo $param4 ?></p>
          <p id="longitude">Longitude:<?php echo $param5 ?></p>
          <p id="area">Area :<?php echo $param6 ?></p>
          <p id="city">City :<?php echo $param7 ?></p>
          <p id="district">District:<?php echo $param8 ?></p>
          <p id="state">State:<?php echo $param9 ?></p>
          <p id="country">Country:<?php echo $param10 ?></p>
          <p id="pincode">Pincode:<?php echo $param11 ?></p>
          <p id="category">Category:<?php echo $param12 ?></p>
          <p id="visit_time">Visit Time:<?php echo $param13 ?></p>
          <p id="rating">Place Rating:<?php echo $param14 ?></p>

         

          <!-- <div class="post-activity">
                   

                   <h3>Place name</h3>
                   
                   <p>longtude</p>
                   <p>Latitude</p>
                   
                </div> -->
        </div>

        

       

        

        
      </div>
      <!-- ----------- Right Sidebar -------  -->
      <div class="right-sidebar">
        <div class="sidebar-news">
          <img src="./OD-Images/more.png" class="info-icon" />
          <h3>Trending Sites</h3>
          <a href="#"> Jagannath Temple</a>
          <span>Puri &middot; Odisha</span>

          <a href="#">Emami Jagannath Temple</a>
          <span>Balasore &middot; Odisha</span>

          <a href="#">Lingaraj Temple</a>
          <span>Bhubaneswar &middot; Odisha</span>

          <a href="#" class="read-more-link">Read More</a>
        </div>

        <div class="sidebar-useful-links">
          <div class="copyright-msg">
            <img src="./OD-Images/route-solid-removebg-preview.png" />
            <p>Tourist Venues &#169; 2024. All right reserved</p>
          </div>
        </div>
      </div>
    </div>
    <script>
      var profileMenu = document.getElementById("profileMenu");

      function toggleMenu() {
        profileMenu.classList.toggle("open-menu");
      }

      let sideActivity = document.getElementById("sidebarActivity");
      let moreLink = document.getElementById("showMoreLink");

      function toggleActivity() {
        sideActivity.classList.toggle("open-activity");

        if (sideActivity.classList.contains("open-activity")) {
          moreLink.innerHTML = "Show less <b>-</b>";
        } else {
          moreLink.innerHTML = "Show more <b>+</b>";
        }
      }
    </script>
    <script src="script.js"></script>
  </body>
</html>
