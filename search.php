<!DOCTYPE html>
<html lang="en">
<?php  require_once 'assets/php/session.php'; ?>

  <?php require_once 'include/db.php'  ?>
<?php require_once 'assets/head.php' ?>


<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 <?php require_once 'assets/nav.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once 'assets/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
            <section class="content-header">
              <h1>Startouch Database 2012</h1>
            </section>
          </div>


          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Collapsible Accordion</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <div id="accordion">
                  <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                          Filter &nbsp;
                        </a>
                      </h4>
                    </div>
                    <div>
                      <div class="box-body">


              <div class="box-tools pull-right">
               <div style="float:right;"><a class="btn" onclick='location.reload(true);' href="#" style="font-size: 20px;"><b><u>Reset</u></b></a></div>
              </div>

              <br>

              <div class="row">

            <div class="col-sm-4">

              <!-- Search form -->
                <form class="form-inline">
                  <i class="fas fa-search" aria-hidden="true"></i>
                  <input class="form-control form-control-lg ml-3 w-75" id="search" type="text" placeholder="Search Serial Number"
                  aria-label="Search">
                </form>

            </div>


          </div>

          <br>

                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->



          <div class="col-12" id="subcontent" style="display: none">


            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <!-- <div id="showsp"></div> -->
                <table id="showsp" class="table"></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->





          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <!-- import modal -->
  <?php
    require_once 'include/speedlimiter/modal/speedlimitermodal.php'
   ?>

 <!-- footer -->
<?php require_once 'assets/footer.php' ?>
 <!-- end footer -->


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script src="include/speedlimiter/scripts/speedlimiter.js"></script>

<!-- Sweetalert2 cdn -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- /////////////////////////////////////////////////////////////// -->

<script type="text/javascript">

$("#search").keyup(function(){
  var select = $(this).val();
  console.log(select);

  if(select > 0) {
    $.ajax({
      url: "ajax/search_splimiter.php",
      method: "post",
      data: { query: select },
      success: function (response) {
        console.log(response);
        $("#subcontent").show();
        $("#showsp").html(response);
        // $("#showsp").DataTable().Destroy();
      }

    });
  }
  if (select == "") {
    location.reload();
  }



});


</script>


</body>
</html>
