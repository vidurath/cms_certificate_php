<?php
    require_once 'assets/php/session.php';
    // echo '<pre>';
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en">

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
    <!-- <?php echo $_SESSION['user']; ?>
    <a href="logout.php">Logout</a>  -->

    <?php
      //echo $data['dept'];
    ?>

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <h2 align="center"><u>Certificate System</u></h2>
            <br>

            <?php
            //echo $_SESSION['userid'];
            ?>

            <!-- Small boxes (Stat box) -->
         <div class="row">
           <div class="col-lg-3 col-6">
             <!-- small box -->
             <div class="small-box bg-primary">
               <div class="inner">
                 <h3><?php echo $cuser->totalCount('horsepower_detail') ?></h3>

                 <p>Total Certificate</p>
               </div>
               <div class="icon">
                 <i class="ion ion-bag"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
           </div>
           <!-- ./col -->


           <!-- ./col -->
           <!-- <div class="col-lg-3 col-6">

             <div class="small-box bg-warning">
               <div class="inner">
                 <h3>0</h3>

                 <p>Database 2012</p>
               </div>
               <div class="icon">
                 <i class="ion ion-pie-graph"></i>
               </div>
               <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             </div>
           </div> -->
           <!-- ./col







          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


</body>
</html>
