<?php
//echo "hello..";
include_once('header.php');
?>

<!-- End Header -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/searchbuilder/1.3.4/css/searchBuilder.dataTables.min.css">
<link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.4/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Latest Tender</li>
      </ol>
      <h2>Latest Tender</h2>
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
          <h3>Latest Tender</h3>
          <div class="row">
            <div class="dateFilter">
              <form action="">
                <table width="100%">
                  <tr>
                    <td>Date From</td>
                    <td><input type="date" name="frm_date" id="frm_date"></td>
                    <td>To</td>
                    <td><input type="date" name="to_date" id="to_date"></td>
                    <td><input type="button" class="search-btn" value="Search" id="search"> &nbsp;<a href="tender.php" class="reset-btn">Reset</a></td>
                  </tr>
                  <tr>
                    <td colspan="5">
                      <div class="col-sm-12 text-danger" id="error_log"></div>
                    </td>
                  </tr>
                </table>
              </form>
            </div>

            <div class="tender-table">
              <table id="example" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th>Tender No.</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Tender Notice</th>
                    <th>Tender Date</th>
                    <th>Last Date of Application</th>

                    <!--<th>Related Amendment/Notice/Notification</th>-->
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                            <td>Notice Inviting e-Tender No. WBNKDA/11/EE–I/NKDA/2022-23</td>
                            <td>Providing Mosquito Control measures through Spraying / Fogging etc. for preventing Vector borne diseases by way of elimination of mosquitoes at the entire project area of New Town, Kolkata as will be assigned by NKDA for a period of 12 (twelve) months.</td>
                            <td>25/07/2022</td>
                            <td>16/08/2022</td>
                            <td><a href="assets/pdf/sample.pdf" download>Download</a></td>
                            <td></td>
                        </tr>-->

                </tbody>
              </table>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Qlfrtip'
    });
  });
</script>
<script>
  load_data();
  function load_data(frm_date, to_date) {
    $(document).ready(function() {
      // alert('aaa');
      $('#example').dataTable({
        "processing": true,
        "bDestroy": true,
        "stateSave": true,
        //"ajax": "fetch_tender_record.php",
        "lengthMenu": [
          [10, 25, 50, 100, -1],
          [10, 25, 50, 100, "All"]
        ],
        "ajax": {
          "url": "fetch_tender_record.php",
          "dataType": "json",
          "type": "POST",
          "data": {
            "action": "example",
            "frm_date": frm_date,
            "to_date": to_date
          },
        },
        "columns": [{
            data: 'tender_no'
          },
          {
            data: 'tender_type'
          },
          {
            data: 'title'
          },
          {
            mRender: function(data, type, row) {
              // return '<a class="table-delete" data-id="' + row[0] + '">DELETE</a>'
              return '<a href="assets/uploads/tender/' + row.tender_notice + '" target="_blank">Download</a>'
            }
          },
          {
            data: 'publication_date'
          },
          {
            data: 'submission_date'
          }
        ]
      });
    });
  }
  $("#search").click(function() {
    var frm_date = $("#frm_date").val();
    var to_date = $("#to_date").val();
    //console.log(frm_date);
    var date1 = new Date(frm_date);
    var date2 = new Date(to_date);
    var diffTime = Math.abs(date2 - date1);
    var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

    if (frm_date == '' || to_date == '') {
      $("#error_log").html("Warning: You must select both (from and to) date.</span>");
    } else {
      if (date1 > date2) {
        $("#error_log").html("Warning: To date should be greater then from date.");
      } else {
        $("#error_log").html("");
        $('#example').DataTable().destroy();
        load_data(frm_date, to_date);
      }
    }
  });
</script>