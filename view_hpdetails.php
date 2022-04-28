<!DOCTYPE html>
<html lang="en">
<?php require_once 'assets/head.php' ?>
<?php require_once 'include/db.php' ?>
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
            <h1>Details</h1>
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
               <div class="callout callout-info">
                 <h5><i class="fas fa-info"></i> Note:</h5>
                 This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
               </div>

<?php

$uuid = $_GET['uuid'];
$sql="SELECT * FROM horsepower_detail WHERE uuid = '$uuid'";
$result=$conn->query($sql);
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $chkvalid = $row['valid'];
      $chkrequest = $row['request'];
      $date = date('Y-m-d', strtotime($row['createdAt']));
 ?>

               <!-- Main content -->
               <div class="invoice p-3 mb-3">
                 <!-- title row -->
                 <div class="row">
                   <div class="col-12">
                     <h4>
                       Details
                       <small class="float-right">Date: <?php echo $date; ?></small>
                     </h4><hr>
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- info row -->
                 <div class="row invoice-info">
                   <div class="col-sm-3 invoice-col">
                       <br>
                       <b>Serial Number:</b> <?php echo $row['serialnumber'] ?> <a href="timeline.php?sn=<?php echo $row['serialnumber'] ?>">(view history)</a><br><br>
                       <b>Type:</b> <?php echo $row['ctype'] ?><br><br>
                       <b>Registration Mark:</b> <?php echo $row['rmark'] ?><br><br>
                       <b>RBN:</b> <?php echo $row['rbn'] ?><br><br>
                       <b>Invoice Number:</b> <?php echo $row['invnumber'] ?><br><br>
                       <b>Amount Number:</b> <?php echo $row['amountnumber'] ?><br><br>
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 invoice-col">
                      <br> 
                       <b>Vehicle Make:</b> <?php echo $row['vmake'] ?><br><br>
                       <b>Vehicle Model:</b> <?php echo $row['vmodel'] ?><br><br>
                       <b>Vehicle Class:</b> <?php echo $row['vclass'] ?><br><br>
                       <b>Vehicle Type:</b> <?php echo $row['vtype'] ?><br><br>
                       <b>Vehicle Chassis Number:</b> <?php echo $row['chassisnumber'] ?><br><br>
                       <b>Vehicle Engine Number:</b> <?php echo $row['enginenumber'] ?><br><br>
                       <b>Vehicle Engine Capacity:</b> <?php echo $row['enginecapacity'] ?><br><br>

                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 invoice-col">
                          <br>
                         <b>Owner Name:</b> <?php echo $row['cname'] ?><br><br>
                         <b>Owner Address:</b> <?php echo $row['caddress'] ?><br><br>
                         <b>Identification Number:</b> <?php echo $row['cidentification'] ?><br><br>
                   </div>

                   <div class="col-sm-3 invoice-col">
                          <br>
                         <b>Installed By:</b> <?php echo $row['installedby'] ?><br><br>
                         <b>Installation Date/Time:</b> <?php echo $row['createdAt'] ?><br><br>
                         <b>Vehicle Number:</b> <?php echo $row['vehiclenumber'] ?><br><br>
                   </div>
                   <!-- /.col -->
                   <!-- <div class="col-sm-3 invoice-col">
                     <?php
                     $url = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=helloworld_startouch&choe=UTF-8";
                      ?>
                     <img src="<?php echo $url; ?>" alt="" width="100%" height="100%">
                   </div> -->

                 </div>

               </div>

<?php
  }
}
 ?>

               <!-- content 2 -->
               <div class="invoice p-3 mb-3">
                 <!-- title row -->
                 <div class="row">
                   <div class="col-12">
                     <h4>
                       Additional Details
                     </h4><hr>
                   </div>
                   <!-- /.col -->
                 </div>


                 <!-- info row -->
                 <div class="row invoice-info">
<?php

$sql="SELECT * FROM horsepower_image WHERE uuid = '$uuid'";
$result=$conn->query($sql);
  if($result->num_rows > 0) {
    while($rowimages = $result->fetch_assoc()) {
?>
                   <div class="col-sm-4 invoice-col">
                       <b>Title:</b> <?php echo $rowimages['title'] ?><br>
                       <b>Sender Name:</b> aaaa<br>
                       <b>Sender Number:</b> 12345<br>
                       <img src="uploads/photos/<?php echo $rowimages['photo'] ?>" class="img-fluid" alt="">
                       <br>
                   </div>

                   <!-- /.col -->
<?php
  }
}
?>
                 </div>
                 <!-- /.row -->

               </div>


               <!-- content 3 -->


               <div class="invoice col-6 p-3 mb-3">
                 <!-- title row -->
                 <div class="row">
                   <div class="col-12">
                     <h4>
                       Note Details
                     </h4><hr>
                   </div>
                   <!-- /.col -->
                 </div>


                 <!-- info row -->
                 <div class="row invoice-info">
<?php

$sql="SELECT * FROM horsepower_note WHERE uuid = '$uuid'";
$result=$conn->query($sql);
  if($result->num_rows > 0) {
    while($rownote = $result->fetch_assoc()) {
?>
                   <div class="col-sm-12 invoice-col">
                       <b>Title:</b> <?php echo $rownote['uname'] ?><br>
                       <b>Date/Time:</b> <?php echo $rownote['createdAt'] ?><br>
                       <b>Description:</b> <?php echo $rownote['note_detail'] ?>
                       <hr />
                       <br>
                   </div>

                   <!-- /.col -->
<?php
  }
}
?>
                 </div>
                 <!-- /.row -->
                

               </div>

               <!-- end content 3 -->


               <div class="row p-1 mb-3">
                 <div class="row no-print">
                   <div class="col-12">
                     
                      <?php
                        if($chkrequest == 1){
                      ?>

                     <a href="" target="_blank" class="btn btn-warning Approved" id="<?php echo $uuid; ?>"><i class="fas fa-print"></i> Print Approval</a>
                   
                    <?php
                        } 
                        
                    ?>
                   
                   <?php
                        if($chkvalid == 0){
                      ?>
                      <a href="" target="_blank" class="btn btn-danger Declined" id="<?php echo $uuid; ?>"><i class="fas fa-ban"></i> Decline Certificate</a>
                    <?php
                        }else{
                     ?>
                      <a href="" target="_blank" class="btn btn-success Valid" id="<?php echo $uuid; ?>"><i class="fas fa-check"></i> Valide Certificate</a>
                     <?php
                        }
                     ?>
                     
                     <a href="" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

                   </div>
                 </div>
               </div>




               <!-- /.invoice -->
             </div><!-- /.col -->
           </div><!-- /.row -->
         </div><!-- /.container-fluid -->
       </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
<?php require_once 'include/note_modal.php' ?>
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

<script type="text/javascript">

  $(document).ready(function(){

    $("body").on("click", ".Declined", function (e) {
    e.preventDefault();
    uuid_req = $(this).attr('id');

    Swal.fire({
          title: 'Are you sure?',
          text: "You want to Decline Certificate!",
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
              data: { declined:uuid_req },
              success:function(response){
                    Swal.fire(
                  'Request!',
                  'Declined Successfully!',
                  'success'
                )
                window.location.reload();

              }
            });

          }
        })

  });

  $("body").on("click", ".Valid", function (e) {
    e.preventDefault();
    uuid_req = $(this).attr('id');

    Swal.fire({
          title: 'Are you sure?',
          text: "You want to validate Certificate!",
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
              data: { valid:uuid_req },
              success:function(response){
                    Swal.fire(
                  'Request!',
                  'Valided Successfully!',
                  'success'
                )
                window.location.reload();

              }
            });

          }
        })

  });

  $("body").on("click", ".Approved", function (e) {
    e.preventDefault();
    uuid_req = $(this).attr('id');
    console.log(uuid_req);

    Swal.fire({
          title: 'Are you sure?',
          text: "You want to Approve Print!",
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
              data: { print_approve:uuid_req },
              success:function(response){
                    Swal.fire(
                  'Request!',
                  'Approved Print Successfully!',
                  'success'
                )
                $(".Approved").hide();

              }
            });

          }
        })

  });

  });

</script>


</body>
</html>
