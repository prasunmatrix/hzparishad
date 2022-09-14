<?php
   include('session.php');
   include_once("../conn.php");
?>
<?php 

if(isset($_POST['submit']))
  {
  	//getting the post values
    $notice_no=$_POST['notice_no'];
    $title=$_POST['title'];
    $filename = $_FILES["notice"]["name"];
    $file_name = $_FILES['notice']['name'];
    $extension = substr($file_name,strlen($file_name)-4,strlen($file_name));
    $allowed_extensions = array(".pdf");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only pdf format allowed');</script>";
    echo "<script>window.location.href = 'addnotice.php'</script>";
    }
    else
    {
    //rename the image file
    // $imgnewfile=md5($imgfile).time().$extension;
    $file_tmp =$_FILES['notice']['tmp_name'];
    // $target = "admin/assets/";
    $uploaded_name=$_FILES['notice']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file = basename($file_name, ".".$ext); 
    $actual_file=$file.".".$ext;
    // $target = dirname(__FILE__)."/assets/";
    // $target = $target . basename( $_FILES['notice']['name']);
    // Code for move image into directory
    // move_uploaded_file($_FILES['notice']['tmp_name'],$target);
     $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/hzparishad/assets/uploads/";
     move_uploaded_file($file_tmp,"$upload_dir".$actual_file);
       
    }

       /* $tmp_file_to_upload = $_FILES['notice'];
        $uploaded_name = $tmp_file_to_upload['name'];
     $tmp_name = $tmp_file_to_upload['tmp_name'];
     define ('SITE_ROOT', realpath(dirname(__FILE__)));
     $destination = realpath(dirname(__FILE__))."uploads/$uploaded_name";
    $path=move_uploaded_file($_FILES['tender_notice']['tmp_name'], SITE_ROOT."/assets/$uploaded_name");*/
    //  move_uploaded_file($tmp_name, $destination);
        // move_uploaded_file($file_tmp,"../uploads/".$file_name);

  
      
  // Query for data insertion
     $query=mysqli_query($conn, "insert into notice(notice_no,title, notice) value('$notice_no','$title', '$actual_file' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='notice.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
<?php
   include('admin_head.php');
?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php
      include('left_menu.php');
        ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php
      include('admin_nav.php');
    ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"> Add Notice</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add Notice</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Notice No</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="notice_no" required id="notice_no" placeholder="Notice No" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Title</label>
                          <div class="col-sm-10">
                          <textarea
                              id="title"
                              name="title"
                              class="form-control"
                              placeholder="Title"
                              required
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Notice</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="file"
                                id="notice"
                                name="notice"
                                required
                                class="form-control"
                                
                              />
                              
                            </div>
                          </div>
                        </div>
                        
                      
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
               
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php
      include('admin_footer.php');
        ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

  

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
 
  </body>
</html>
