<?php
include('session.php');
include_once("../conn.php");
?>
<?php
if (isset($_POST['submit'])) {
  //getting the post values
  $video_title = $_POST['video_title'];
  @$status = $_POST['status']==true ? '1' : '0'; 
  $file_name = $_FILES['video']['name'];
  $file_size = $_FILES["video"]["size"];
  //$extension = substr($file_name, strlen($file_name) - 4, strlen($file_name));
  //$allowed_extensions = array('.jpg','.png','.jpeg');
  // Validation for allowed extensions .in_array() function searches an array for a specific value.
  if ($file_size > 2097152) {
    echo "<script>alert('File size must be excately 2 MB');</script>";
    echo "<script>window.location.href = 'addvideogallery.php'</script>";
    die;
  } else {
    $file_tmp = $_FILES['video']['tmp_name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $file = basename($file_name, "." . $ext); 
    $actual_file = time() . "." . $ext;
    // $target = dirname(__FILE__)."/assets/";
    $upload_dir ="../assets/uploads/video_gallery/";
    //$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/matrixmedia/hzparishad/assets/uploads/banner/"; 
    move_uploaded_file($file_tmp, "$upload_dir" . $actual_file);
  }


  // Query for data insertion
  $query = mysqli_query($conn, "insert into video_gallery(video_title,video,status) value('$video_title','$actual_file','$status')");
  if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='videogallery.php'; </script>";
  } else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }
}
?>
<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
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
            <h4 class="fw-bold py-3 mb-4"> Add Video Gallery</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Video Gallery</h5>
                    <small class="text-muted float-end"></small>
                  </div>
                  <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Video Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="video_title" required id="video_title" placeholder="Video Title" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Video</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="file" id="video" name="video" required class="form-control" accept="video/mp4,video/x-m4v,video/*" />
                          </div>
                          <span class="system required" style="color: red;">(Recommended Video Size: 2MB)*</span>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Status</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="checkbox" id="status" name="status" value="1"  class="" />
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