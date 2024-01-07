<?php
//echo "hello..";
//include_once('conn.php');
//$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Howrah Zilla Parishad - Index</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <style>
        .blink {
         animation: blinkingBackground 2s infinite;
            padding: 10px;
		display: inline-block;
		border-radius: 10px;
            
            

        }
        @keyframes blinkingBackground{
		0%		{ background-color: #10c018;}
		25%		{ background-color: #1056c0;}
		50%		{ background-color: #ef0a1a;}
		75%		{ background-color: #254878;}
		100%	        { background-color: #04a1d5;}
	}
    </style>
   <body>
      <div class="howrah-zilla">Howrah Zilla Parishad</div>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center">
         <div class="container d-flex align-items-center">
            <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="Howrah Zilla Parishad"></a>
            <nav class="navbar order-last order-lg-0 desktop">
               <ul>
                  <!-- <li><a class="nav-link" href="https://www.demoyourprojects.com/hzparishad/">Home</a></li> -->
                  <li><a class="nav-link" href="index.php">Home</a></li>
                  <li class="dropdown">
                     <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="demography.php">Demography</a></li>
                        <li><a href="district-profile.php">District Profile</a></li>
                        <li><a href="places-of-interest.php">Places of interest</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="photo.php">Photo Gallary</a></li>
                        <li><a href="video.php">Video Gallery</a></li>
                     </ul>
                  </li>
                  
                  <li><a class="nav-link" href="success_stories.php">Success Stories</a></li>
                  <li><a class="nav-link" href="tender.php">Tender</a><img src="assets/img/newbling.gif" class="newbling"></li>
                  <li><a class="nav-link" href="notice.php">Notice</a><img src="assets/img/newbling.gif" class="newbling"></li>
                  <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
               </ul>              
            </nav>
            <nav id="navbar" class="navbar order-last order-lg-0 mobile">
               <ul>
                  <li><a class="nav-link" href="https://www.demoyourprojects.com/hzparishad/">Home</a></li>
                  <li class="dropdown">
                     <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="demography.php">Demography</a></li>
                        <li><a href="district-profile.php">District Profile</a></li>
                        <li><a href="places-of-interest.php">Places of interest</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Information</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="bye-laws.php">Bye-Laws & Orders</a></li>
                        <li><a href="list-of-assets.php">List of Assets</a></li>
                        <li><a href="department.php">Departments/Sections</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Organizational Structure</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="#">Members</a></li>
                        <li><a href="#">Sthayee Samitis</a></li>
                        <li><a href="#">Key Officials</a></li>
                        <li><a href="#">Staff Details</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Development Schemes</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="bangla-awaas-yojana.php">Bangla Awaas Yojana</a></li>
                        <li><a href="chcmi.php">CHCMI</a></li>
                        <li><a href="pmgsy.php">PMGSY</a></li>
                        <li><a href="mission-nirmal-bangla.php">Mission Nirmal Bangla</a></li>
                        <li><a href="ridf.php">RIDF</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="photo.php">Photo Gallary</a></li>
                        <li><a href="video.php">Video Gallery</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Publications</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="notices.php">Notices</a></li>
                        <li><a href="tenders.php">Tenders</a></li>
                        <li><a href="applications.php">Recruitments: Online Application for Recruitment</a></li>
                        <li><a href="circulars.php">Circulars</a></li>
                        <li><a href="important-announcements.php">Important Announcements</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#"><span>Citizen Corner</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="#">Building Plan Sanction</a></li>
                        <li><a href="#">Rent</a></li>
                        <li><a href="#">Mela Permission</a></li>
                        <li><a href="#">Online Payment</a></li>
                        <li><a href="#">Market & Shopping Complexes</a></li>
                        <li><a href="#">Ferry Ghats</a></li>
                     </ul>
                  </li>
                  <li><a class="nav-link" href="#">Success Stories</a></li>
                  <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
          
         </div>
      </header>
      <!-- End Header -->
