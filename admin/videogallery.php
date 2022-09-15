<?php
include('session.php');
include_once("../conn.php");
?>
<?php
if (isset($_GET['delid'])) {
  $rid = intval($_GET['delid']);
  // $profilepic=$_GET['ppic'];
  // $ppicpath="profilepics"."/".$profilepic;
  $sql = mysqli_query($conn, "update video_gallery SET is_deleted='1' where id=$rid");
  // unlink($ppicpath);
  echo "<script>alert('Data has been deleted');</script>";
  echo "<script>window.location.href = 'videogallery.php'</script>";
}
?>
<?php

$limit = 10;
if (isset($_GET["page"])) {
  $page  = $_GET["page"];
} else {
  $page = 1;
};
$start_from = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM video_gallery where is_deleted='0' ORDER BY id DESC LIMIT $start_from, $limit");
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">
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
            <h4 class="fw-bold py-3 mb-4"> Video Gallery Management</h4>

            <!-- Basic Bootstrap Table -->

            <!--/ Basic Bootstrap Table -->


            <!-- Bootstrap Table with Header - Footer -->


            <!-- Bootstrap Table with Caption -->

            <!-- Bootstrap Table with Caption -->



            <!-- Striped Rows -->

            <!--/ Striped Rows -->



            <!-- Bordered Table -->
            <div>
              <a href="addvideogallery.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <br>
            <div class="card">
              <h5 class="card-header">Tender</h5>
              <div class="table-responsive text-nowrap">
                <?php if (mysqli_num_rows($result) > 0) { ?>
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th>Sl.NO.</th>
                        <th>Video Title</th>
                        <th>Video</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                      <?php
                      $count=1;
                      while ($row = mysqli_fetch_array($result)) {
                      ?>
                        <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $row["video_title"]; ?></td>
                          <td><video width="280" height="200" controls><source src="../assets/uploads/video_gallery/<?php echo $row["video"]; ?>"></td>
                          <td><?php echo $row["status"]==1 ? 'Show':'Hidden' ; ?></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="editvideogallery.php?editid=<?php echo htmlentities($row['id']); ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this video?');" href="videogallery.php?delid=<?php echo htmlentities($row['id']); ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php
                      $count++;
                      };
                      ?>

                      <!--<tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>-->
                    </tbody>
                  </table>
                <?php } else {
                  echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                } ?>
                <?php

                $result_db = mysqli_query($conn, "SELECT COUNT(id) FROM video_gallery where is_deleted='0'");
                $row_db = mysqli_fetch_row($result_db);
                $total_records = $row_db['0']; 
                $total_pages = ceil($total_records / $limit);
                /* echo  $total_pages; */
                $pagLink = "<ul class='pagination'>";
                for ($i = 1; $i <= $total_pages; $i++) {
                  $pagLink .= "<li class='page-item'><a class='page-link' href='videogallery.php?page=" . $i . "'>" . $i . "</a></li>";
                }
                echo $pagLink . "</ul>";
                ?>
              </div>
            </div>
            <!--/ Small table -->

            <hr class="my-5" />

            <!-- Contextual Classes -->


            <!--/ Contextual Classes -->



            <!-- Responsive Table -->

            <!--/ Responsive Table -->
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