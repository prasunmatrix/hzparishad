<?php
   //echo "hello..";
   include_once('header.php');
   ?>
<?php
   //echo "hello..";
   include_once('conn.php');
   ?>
<!-- End Header -->
<main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
         </ol>
         <h2>Contact Us</h2>
      </div>
   </section>
   <!-- End Breadcrumbs -->
   <section class="inner-page">
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div class="col-lg-3">
               <?php                        
                  include_once('left-menu.php');
                  ?>
            </div>
            <div class="col-lg-9">
               <h3>Contact Us</h3>
               <div class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.9506730638336!2d88.33307561422012!3d22.580948138356508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277918f46d5a1%3A0xd09fa4cf90b3b126!2sHowrah%20Zilla%20Parishad!5e0!3m2!1sen!2sin!4v1646396955567!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
               <div class="row contact">
                  <div class="col-lg-6">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="info-box">
                              <i class="bx bx-map"></i>
                              <h3>Our Address</h3>
                              <p><strong>Howrah Zilla Parishad</strong><br>
                                 10 Biblabi Haren Ghosh Sarani,<br>
                                 Howrah, West Bengal 711101 
                              </p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info-box mt-4">
                              <i class="bx bx-envelope"></i>
                              <h3>Email Us</h3>
                              <p>miscellhowrahzp@gmail.com</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="info-box mt-4">
                              <i class="bx bx-phone-call"></i>
                              <h3>Call Us</h3>
                              <p>033 2638 4633/34</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <!-- Form Start -->
                     <?php
                        $errors= array();
                        
                        if(isset($_POST["submit"])) 
                        {
                                                  
                          $name           = $_POST['name']; 
                          //$phone          = $_POST['phone'];
                          $email          = $_POST['email']; 
                          $subject          = $_POST['subject'];
                          //$district        = $_POST['district'];
                          //$complain_id     = $_POST['complain_id'];
                          $message        = $_POST['message'];
                          
                          $errors= array();
                         
                         
                          if( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) ) 
                          {
                            $sql = "INSERT INTO contact (fullname, email, subjectt, messages)
                            VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";
                        
                            if (mysqli_query($conn, $sql)) 
                            {
                              //echo '<div class="sent-message">Your message has been sent. Thank you!</div>';
                              $msg="Your message has been sent. Thank you!";
                              //header("Location: success.php");
                            } 
                            else 
                            {
                              //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                              $msg="Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                          }
                        }
                        
                        ?>
                     <div align="center" style="color: green;"><?php if(!empty($msg)){ echo $msg; } ?></div>
                     <form action="" method="post" role="form" class="php-email-form" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                           <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                        </div>
                        <div class="text-center"><input type="submit" value="Send Message" name="submit"/></div>
                     </form>
                     <!-- Form End -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<?php
   include_once('footer.php');
   ?>
