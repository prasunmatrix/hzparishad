<?php
//echo "hello..";
include_once('header.php');
include_once("conn.php");
$result = mysqli_query($conn, "SELECT * FROM photo_gallery where is_deleted='0' and status='1' ORDER BY id DESC");
?>
<!-- End Header -->
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Photo</li>
      </ol>
      <h2>Photo</h2>
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
          <h3>Photo</h3>
          <ul class="photo-list">
            <?php
              while ($row = mysqli_fetch_array($result)) {
            ?>
            <li><img src="assets/uploads/photo_gallery/<?php echo $row['image']; ?>" alt="<?php echo $row['image_title']; ?>"></li>
            <?php
              }
            ?>  
            <!-- <li><img src="assets/img/photo-2.jpg" alt=""></li>
            <li><img src="assets/img/photo-3.jpg" alt=""></li>
            <li><img src="assets/img/photo-4.jpg" alt=""></li>
            <li><img src="assets/img/photo-5.jpg" alt=""></li>
            <li><img src="assets/img/photo-6.jpg" alt=""></li> -->
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