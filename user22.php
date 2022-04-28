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
            <h1>All Users</h1>
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

          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Data</h3>
                <!-- <input type="submit" value="Create new Porject" class="btn btn-success float-right"> -->
                <a style="margin-right:2px;" href="#" class="btn btn-success float-right">&nbsp;Add New</a>
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


<script src="include/case/scripting/case.js"></script>
<script src="include/certificate/scripts/certificate.js"></script>
<script src="include/user/scripts/user.js"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Sweetalert2 cdn -->

<!-- /////////////////////////////////////////////////////////////// -->

<script type="text/javascript">



</script>


</body>
</html>
