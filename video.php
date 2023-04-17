<?php
//echo "hello..";
include_once('header.php');
include_once("conn.php");
$result = mysqli_query($conn, "SELECT * FROM video_gallery where is_deleted='0' and status='1' ORDER BY id DESC");
?>
<!-- End Header -->
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Video</li>
      </ol>
      <h2>Video</h2>
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
          <h3>Video</h3>
          <ul class="photo-list">
            <?php
              while ($row = mysqli_fetch_array($result)) {
            ?>
            <li><video width="280" height="200" controls><source src="assets/uploads/video_gallery/<?php echo $row["video"]; ?>"></li>
            <?php
              }
            ?>  
          </ul>
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