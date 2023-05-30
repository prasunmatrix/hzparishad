<?php
//echo "hello..";
include_once('header.php');
?>
<!-- End Header -->
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Staff Details</li>
      </ol>
      <h2>Staff Details</h2>
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
          <a href="assets/uploads/member_document/key_officials.pdf" target="_blank"><h3>Staff Details</h3></a>
          <!-- <p>This page is under construction.</p> -->
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