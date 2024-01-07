<?php
include('session.php');
include_once("../conn.php");
?>
<?php
if (isset($_POST['submit'])) {
  $eid = $_GET['editid'];
  //Getting Post Values
  $notice_no = $_POST['notice_no'];
  $notice_no=preg_replace('/[^A-Za-z0-9\-]/', '', $notice_no);
  $title = $_POST['title'];
  $title=preg_replace('/[^A-Za-z0-9\-]/', '', $title);
  @$status = $_POST['status'] == true ? '1' : '0';
  if ($_FILES['notice']['name'] == '') {
    $actual_file = $_POST['notice_old'];
  } else {
    $file_name = $_FILES['notice']['name'];
    $extension = substr($file_name, strlen($file_name) - 4, strlen($file_name));
    $allowed_extensions = array(".pdf");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
      echo "<script>alert('Invalid format. Only pdf format allowed');</script>";
      echo "<script>window.location.href = 'addnotice.php'</script>";
      die;
    } else {
      //rename the image file
      // $imgnewfile=md5($imgfile).time().$extension;
      $file_tmp = $_FILES['notice']['tmp_name'];
      // $target = "admin/assets/";
      $uploaded_name = $_FILES['notice']['name'];
      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $file = basename($file_name, "." . $ext);
      //$actual_file = $file . "." . $ext;
      $actual_file = time() . "." . $ext;
      //$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/hzparishad/assets/uploads/";
      $upload_dir = "../assets/uploads/notice/";
      move_uploaded_file($file_tmp, "$upload_dir" . $actual_file);
      unlink($upload_dir . $_POST['notice_old']);
    }
  }


  //Query for data updation
  $query = mysqli_query($conn, "update  notice set notice_no='$notice_no',title='$title', notice='$actual_file',status='$status' where ID='$eid'");

  if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='notice.php'; </script>";
  } else {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }
}
?>
<?php
$eid = $_GET['editid'];
$ret = mysqli_query($conn, "select * from notice where id='$eid'");
while ($row = mysqli_fetch_array($ret)) {
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
              <h4 class="fw-bold py-3 mb-4"> Edit Notice</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Notice</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Notice No</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="notice_no" value="<?php echo $row['notice_no']; ?>" required id="notice_no" placeholder="Notice No" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Title</label>
                          <div class="col-sm-10">
                            <textarea id="title" name="title" class="form-control" placeholder="Title" required aria-describedby="basic-icon-default-message2"><?php echo $row['title']; ?> </textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Notice</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input type="file" id="notice" name="notice" class="form-control" accept="application/pdf" />
                              <input type="hidden" name="notice_old" value="<?php echo $row['notice']; ?>" />
                            </div>
                          </div>
                        </div>
                        <div>
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Pdf</label>
                          <iframe src="../assets/uploads/notice/<?php echo $row['notice']; ?>" width="20%"></iframe>
                        </div><br>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input type="checkbox" id="status" name="status" value="1" <?php if ($row["status"] == '1') { ?> checked <?php } ?> class="" />
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                      ?>
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