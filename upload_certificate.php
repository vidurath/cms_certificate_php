<!DOCTYPE html>
<html lang="en">
  <?php require_once 'include/db.php'  ?>
<?php require_once 'assets/head.php' ?>

<style media="screen">

.addcertificateModal{
  max-width: 1200px;
}
.editcertificateModal{
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Image</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->



    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-12">
        <label class="form-label" for="customFile">file input</label>
        <input type="file" class="form-control" id="customFile" name="customFile" />
        </div>

      </div>

        <?php 
        require 'vendor/autoload.php';

        require 'vendor/autoload.php';

        use Aws\S3\S3Client;
        
        use Aws\Exception\AwsException;


      
// Create an SDK class used to share configuration across clients.
$sdk = new Aws\Sdk([
  'region'   => 'us-west-2',
  'version'  => 'latest'
]);

// Use an Aws\Sdk class to create the S3Client object.
$s3Client = $sdk->createS3();

try {
  $s3Client->createBucket(['Bucket' => 'my-bucket']);
} catch (S3Exception $e) {
  // Catch an S3 specific exception.
  echo $e->getMessage();
} catch (AwsException $e) {
  // This catches the more generic AwsException. You can grab information
  // from the exception using methods of the exception object.
  echo $e->getAwsRequestId() . "\n";
  echo $e->getAwsErrorType() . "\n";
  echo $e->getAwsErrorCode() . "\n";

  // This dumps any modeled response data, if supported by the service
  // Specific members can be accessed directly (e.g. $e['MemberName'])
  var_dump($e->toArray());
}

    

        
        ?>

      <div class="row">
        <div class="col-12">
          <a href="certificate.php" class="btn btn-secondary">Back</a>
          <!-- <input type="submit" id="submit1" form="ajax-form-offencedetail" value="Create New Case" class="btn btn-success float-right"> -->
        </div>
      </div>
      <br><br>
    </section>
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


<script type="text/javascript">

$(document).ready(function(){



});

</script>

</body>
</html>
