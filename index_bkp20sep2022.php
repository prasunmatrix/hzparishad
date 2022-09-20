<?php
//echo "hello..";
include_once('header.php');
include_once("conn.php");
$result = mysqli_query($conn, "SELECT * FROM banner where is_deleted='0' and status='1' ORDER BY id DESC");
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="home-slider swiper">
    <div class="swiper-wrapper align-items-center">
      <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="swiper-slide">
        <img src="assets/uploads/banner/<?php echo $row['banner_image']; ?>" alt="<?php echo $row['banner_title']; ?>">
      </div>
      <?php
      }
      ?>
      <!-- <div class="swiper-slide">
        <img src="assets/img/slider/slider-2.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/slider/slider-3.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/slider/slider-4.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/slider/slider-5.jpg" alt="">
      </div>

      <div class="swiper-slide">
        <img src="assets/img/slider/slider-6.jpg" alt="">
      </div> -->

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- End Hero -->
<main id="main">
  <!-- ======= home Section ======= -->
  <section class="home-content">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-3">
          <?php
          include_once('left-menu.php');
          ?>
        </div>
        <div class="col-lg-6">
          <h3>From Desk of “SABHADHIPATI”</h3>
          <p>The history of the city of Howrah dates back over 500 years, but the district is situated in an area historically occupied by the ancient Bengali kingdom of Bhurshut. Venetian explorer Cesare Federici, who travelled in India during 1565–79, mentioned a place called Buttor in his journal circa 1578. As per his description, this was the a location into which large ships could travel (presumably the Hoogli River) and perhaps a commercial port. This place is identifiable with the modern day neighbourhood of Bator. Bator was also mentioned in the Bengali poetry Manasamangal written by Bipradas Pipilai in 1495.</p>
          <p>In 1713, the Bengal Council of the British East India Company, on the accession of the Emperor Farrukhsiyar, grandson of Aurangzeb, to the throne of Delhi, sent a deputation to him with a petition for a settlement of five villages on west bank of Hooghly river along with thirty-three villages on the east bank. The list of villages appeared in the Consultation Book of the Council dated 4 May 1714. The five villages on the west bank on Hooghly river were: ‘Salica’ (Salkia), ‘Harirah’ (Howrah), ‘Cassundeah’ (Kasundia), ‘Ramkrishnopoor’ (Ramkrishnapur), and ‘Battar’ (Bator): all identifiable with localities of modern day Howrah city.</p>
        </div>
        <div class="col-lg-3">
          <div class="scroll-wrapper">
            <h3>Tenders</h3>
            <marquee width="100%" direction="up" height="100px">
              <a href="assets/pdf/Tenders.pdf" target="_blank">1)Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
              </a>
              </br></br>
              <a href="assets/pdf/Tenders.pdf" target="_blank">2)Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .
              </a>
              </br></br>
              <a href="assets/pdf/Tenders.pdf" target="_blank">3)Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .
              </a>
            </marquee>

          </div>

          <div class="scroll-wrapper">
            <h3>Notices</h3>
            <marquee width="100%" direction="up" height="100px">
              <a href="assets/pdf/Tenders.pdf" target="_blank">1)Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </a>
              </br></br>
              <a href="assets/pdf/Tenders.pdf" target="_blank">2)Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .
              </a>
            </marquee>

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End home Section -->
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<?php
include_once('footer.php');
?>
</body>

</html>