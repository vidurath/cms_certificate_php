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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Certificate</h1>
          </div>
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">

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
                          Advanced Filter &nbsp;
                          <i class="fas fa-chevron-down"></i>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                      <div class="box-body">


              <div class="box-tools pull-right">
               <div style="float:right;"><a class="btn" onclick='location.reload(true);' href="#" style="font-size: 20px;"><b><u>Reset</u></b></a></div>
              </div>

              <br>

              <div class="row">


              <div class="col-sm-6">

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



          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Data</h3>
                <!-- <input type="submit" value="Create new Porject" class="btn btn-success float-right"> -->
                <a href="upload_certificate.php" class="btn btn-warning float-right">&nbsp;Upload New</a>
                <a style="margin-right:2px;" href="add_certificate.php" class="btn btn-success float-right">&nbsp;Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="show" class="table">

                </table>
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

<!-- //////// -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->

<!-- //////// -->


<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="include/certificate/scripts/certificate.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Sweetalert2 cdn -->

<!-- /////////////////////////////////////////////////////////////// -->


</body>
</html>
