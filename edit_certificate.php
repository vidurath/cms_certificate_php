<!DOCTYPE html>
<html lang="en">
  <?php require_once 'include/db.php'  ?>
<?php require_once 'assets/head.php' ?>

<style media="screen">

.addhorsepowerModal{
  max-width: 1200px;
}
.edithorsepowerModal{
  max-width: 1200px;
}


</style>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 <?php require_once 'assets/nav.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once 'assets/sidebar.php' ?>

  <?php
        
        //uuid
        $uuid = $_GET['uuid'];

       ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php
              $title = basename($_SERVER['PHP_SELF'],'.php');
              $title = explode('_',$title);
              $title = ucfirst($title[0]);
            ?>
            <h1><?php echo $title; ?> Certificate</h1>
            <p><input type="hidden" name="main_uuid" id="main_uuid" value="<?php echo $uuid; ?>"></p>
          </div>

        </div>
      </div><!-- /.container-fluid -->
      <?php
          require_once 'include/alertMessages.php';
       ?>


    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
      <?php
      require_once 'include/certificate/certificateDetails.php';
      require_once 'include/certificate/certificateUpload.php';
      require_once 'include/certificate/certificateNote.php'

      ?>
      <?php
      // require_once 'include/case/offenceDetails.php'
      ?>
    </div>



      <div class="row">
        <div class="col-12">
          <a href="certificate.php" class="btn btn-secondary">Back</a>
          <!-- <input type="submit" id="submit1" form="ajax-form-offencedetail" value="Create New Case" class="btn btn-success float-right"> -->
          <?php

                      $sql="SELECT * FROM request_detail WHERE uuid = '$uuid'";
                      $result=$conn->query($sql);
                        if($result->num_rows > 0) {
                          while($rowreq = $result->fetch_assoc()) {
                            $chkrequest = $rowreq['reqstatus'];
                          }
                        } else {
                          $chkrequest = 0;
                        }
          ?>

          <?php 
            if($chkrequest == 0) 
            {

          ?>
          <button type="button" id="<?php echo $uuid; ?>" class="btn btn-warning float-right RequestBtn" style="margin-right: 5px;"><i class="fas fa-solid fa-exclamation-triangle"></i>&nbsp Request Print</button>

          <?php    

            }
            elseif($chkrequest == 1) 
            {
          ?>
          <button type="button" id="<?php echo $uuid; ?>" class="btn btn-info float-right PrintBtn" style="margin-right: 5px;"><i class="fas fa-print"></i>&nbsp Print</button>
         <?php
            }
         ?>
        <button type="button" id="<?php echo $uuid; ?>" class="btn btn-info float-right PrintBtn" style="margin-right: 5px;"><i class="fas fa-print"></i>&nbsp Print</button>

        </div>
      </div>
      <br><br>
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->



<?php

require_once 'include/certificate/modals/certificateDetail_modal.php';
require_once 'include/certificate/modals/upload_modal.php';
require_once 'include/certificate/modals/note_modal.php';

?>
 <!-- footer -->
<?php require_once 'assets/footer.php' ?>
 <!-- end footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Sweetalert2 cdn -->
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
<!-- datatable -->

<script src="include/certificate/scripts/certificateDet.js"></script>
<script src="include/certificate/scripts/certificateUpload.js"></script>
<script src="include/certificate/scripts/certificateNote.js"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script type="text/javascript">

$(document).ready(function(){

  
// Request Button
$("body").on("click", ".RequestBtn", function (e) {
    e.preventDefault();
    uuid_req = $(this).attr('id');
    console.log(uuid_req);

    Swal.fire({
          title: 'Are you sure?',
          text: "You want to send request!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {

            $.ajax({
              url:'assets/php/process.php',
              method:'post',
              data: { uuid_req:uuid_req },
              success:function(response){
                    Swal.fire(
                  'Request!',
                  'Request Send Successfully!',
                  'success'
                )
                console.log(response);
                $(".RequestBtn").html("Request send");
                $(".RequestBtn").attr("disabled", true);
              }
            });

          }
        })

  });


// Print Button
$("body").on("click", ".PrintBtn", function (e) {
    e.preventDefault();
    uuid_req = $(this).attr('id');
    console.log(uuid_req);
    // var snum = $('#snum2 option:id').data('id');
    var snum = $('#serialnumber').val();

    console.log(snum);
    
    Swal.fire({
          title: 'Are you sure?',
          text: "You want to print!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
            
            $.ajax({
              url:'assets/php/process.php',
              method:'post',
              data: { print_btn:uuid_req },
              success:function(response){
                console.log(response);
                if (snum == "in-build")
                {
                  // console.log("this is an in-build speed limiter.");
                  console.log("calibrated Certificate");
                  window.location = "http://localhost/ccs/cc.php?uuid="+uuid_req;
                }
                else 
                {
                  // console.log("this is not an in-build speed limiter!!!!!");
                  console.log("Installation Certificate");
                  window.location = "http://localhost/ccs/ic.php?uuid="+uuid_req;
                  $(".PrintBtn").hide();
                }  
              }
            });
            
          }
        })

  });


});

</script>





<!-- /////////////////////////////////////////////////////////////// -->

<script language="javascript">

    $(document).ready(function(){

      $("body").on("click", "#btnqrcode", function (e) {
        e.preventDefault();
        $("#btnqrcode").hide();
        $("#btnqrcodehide").show();
        $("#qrcode").show();

      });

      $("body").on("click", "#btnqrcodehide", function (e) {
        e.preventDefault();
        $("#btnqrcodehide").hide();
        $("#qrcode").hide();
        $("#btnqrcode").show();

      });

    });

</script>


</body>
</html>
