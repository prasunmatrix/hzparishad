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
            <li><a href="https://www.demoyourprojects.com/hzparishad/">Home</a></li>
            <li>Online Applications for Recruitment</li>
         </ol>
         <h2>Online Applications for Recruitment</h2>
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
            <div class="col-lg-9 contact">
               <h3>
                  Online Applications for Recruitment
               </h3>
               <?php
                  $errors= array();
                  
                  if(isset($_POST["submit"])) 
                  {
                                             
                     $name           = $_POST['name']; 
                     $phone          = $_POST['phone'];
                     $email          = $_POST['email']; 
                     $address        = $_POST['address']; 
                     $qualification  = $_POST['qualification'];
                     $pannumber      = $_POST['pannumber'];
                     $adharnumber    = $_POST['adharnumber'];
                     //$message        = $_POST['message'];
                     
                     $adhar_document = $_FILES['adhar_document']['name'];
                     $file_tmp1 =$_FILES['adhar_document']['tmp_name'];
                  
                     $qualification_document = $_FILES['qualification_document']['name'];
                     $file_tmp2 =$_FILES['qualification_document']['tmp_name'];
                  
                     $errors= array();
                     $file_name = $_FILES['pan_document']['name']; 
                     $file_size =$_FILES['pan_document']['size'];
                     $file_tmp =$_FILES['pan_document']['tmp_name'];
                     $file_type=$_FILES['pan_document']['type'];
                     $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                     $file = basename($file_name, ".".$ext); 
                     $actual_file=time().".".$ext;
                     
                     if(empty($errors)==true){
                        move_uploaded_file($file_tmp,"assets/uploads/pan_document/".$actual_file);                                                       
                     }else{
                        print_r($errors);
                     }
                     if($ext=="")
                     {
                        $actualFile="";
                     }
                     else
                     {
                        $actualFile=$actual_file;
                     }
                     if( !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) ) 
                     {
                        $sql = "INSERT INTO applications (fullname, phone, email, qualification, qualification_document, pannumber, pan_document, adharnumber, adhar_document, attachment)
                        VALUES ('".$name."', '".$phone."', '".$email."', '".$qualification."', '".$qualification_document."', '".$pannumber."', '".$actualFile."', '".$adharnumber."', '".$adhar_document."', '".$actualFile."')";
                  
                        if (mysqli_query($conn, $sql)) 
                        {
                           move_uploaded_file($file_tmp1,"assets/uploads/adhar_document/".$adhar_document);
                           move_uploaded_file($file_tmp2,"assets/uploads/qualification_document/".$qualification_document);
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
               <!-- Form Start -->
               <div align="center" style="color: green;"><?php if(!empty($msg)){ echo $msg; } ?></div>
               <form action="" method="post" role="form" class="php-email-form" enctype="multipart/form-data" autocomplete="off">
                  <div class="row">
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" pattern="^\d{10}$" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="text" name="qualification" class="form-control" id="qualification" placeholder="Highest Educational Qualification" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="file" class="form-control" name="qualification_document" id="qualification_document" placeholder="Qualification Document" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="text" name="pannumber" class="form-control" id="pannumber" maxlength="10" placeholder="PAN Number" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="file" class="form-control" name="pan_document" id="pan_document" placeholder="Upload PAN" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="text" name="adharnumber" class="form-control" id="adharnumber" maxlength="12" placeholder="Aadhar Number" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-3">
                        <input type="file" class="form-control" name="adhar_document" id="adhar_document" placeholder="Upload Adhar" />
                     </div>
                  </div>
                  <!--<div class="row">
                     <div class="col-md-12 form-group mt-3 mt-md-3">
                       <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                     </div>
                     </div>-->
                  <div class="my-3">
                  </div>
                  <div class="text-center"><input type="submit" value="Submit" name="submit"/></div>
               </form>
               <!-- Form End -->
            </div>
         </div>
      </div>
   </section>
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>      
<script>
   jQuery(document).ready(function() {
      $('input[name="adharnumber"]').keyup(function(e){
       if (/\D/g.test(this.value))
       {
         // Filter non-digits from input value.
         this.value = this.value.replace(/\D/g, '');
       }
     });
   });
</script>      
<?php
   include_once('footer.php');
   ?>
