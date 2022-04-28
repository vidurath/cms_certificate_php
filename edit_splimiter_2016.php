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
    <?php

    $search = $_GET['serial_no'];
    $stmt=$conn3->prepare("SELECT a.`ticketid` AS ticketid, a.`cf_952` AS serial_number, a.`cf_956` AS registered_owner,
    a.`cf_1069` AS invoice_no, a.`cf_1027` AS invoice_amount, a.`cf_949` AS vehicle_reg_no, a.`cf_953` AS engine_number, a.`cf_954` AS chassis_number,
    a.`cf_936` AS delivery_date, a.cf_973 AS telephone,
    b.`ticket_no`, b.`title`, b.`parent_id`,
    c.`crmid`,c.`description`, d.`commentid`,d.`comments`,d.`ownerid`
    FROM vtiger_ticketcf a
    INNER JOIN vtiger_troubletickets b ON a.`ticketid` = b.`ticketid`
    INNER JOIN vtiger_crmentity c ON b.`ticketid` = c.`crmid`
    INNER JOIN vtiger_ticketcomments d ON a.`ticketid` = d.`ticketid`
    WHERE a.`cf_952` LIKE '%$search%'
    LIMIT 1
     ");

  $stmt->execute();
  $result=$stmt->get_result();

  if($result->num_rows>0){
    while ($row=$result->fetch_assoc()) {

     ?>

    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Ticket Number : <?php echo $row['ticket_no'] ?></h1>
    </div>

    </div>
    </div>
    </section>

    <section class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">

    <div class="card card-primary card-outline">

      <div class="card-body box-profile">
      <div class="text-center">
      <!-- <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->
      </div>
      <h3 class="profile-username text-center"><strong>Organization Name :</strong> </h3>
      <p class="text-muted text-center"><strong><?php echo $row['title'] ?></strong></p>


      </div>

    </div>


    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">INFORMATION</h3>
    </div>

    <div class="card-body">
      <div class="row">
      <div class="col-6">
        <strong><i class="fas fa-clock mr-1"></i> Delivery Date</strong>
        <p class="text-muted">
        <?php echo $row['delivery_date'] ?>
        </p>
        <hr>
        <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
        <p class="text-muted"></p>
        <hr>
        <strong><i class="fas fa-mobile-alt mr-1"></i> Telephone</strong>
        <p class="text-muted">
        <?php echo $row['telephone'] ?>
        </p>


      </div>
      <div class="col-6">
        <strong><i class="fas fa-receipt mr-1"></i> Account</strong>
        <p class="text-muted">
        Invoice Amount : Rs <?php echo $row['invoice_no'] ?><br />
        Invoice Number : <?php echo $row['invoice_amount'] ?>
        </p>
        <hr>
        <strong><i class="fas fa-people-carry mr-1"></i> Technicien</strong>
        <p class="text-muted">
          Installer Name : <br />
          Vehicle Detail :  <br />
          Vehicle Chassis number : <?php echo $row['chassis_number'] ?> <br />
          Vehicle Engine number : <?php echo $row['engine_number'] ?> <br />
          Vehicle Reg number : <?php echo $row['vehicle_reg_no'] ?>

        </p>

      </div>
      </div>
    </div>

    </div>

    </div>

    <div class="col-md-4">
    <div class="card">
    <div class="card-header p-2">
    <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Comment</a></li>
    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
    </ul>
    </div>
    <div class="card-body">
    <div class="tab-content">

    <div class="active tab-pane" id="timeline">

    <div class="timeline timeline-inverse">

    <?php

        function month_name($GetNum){
          $MonthArray = array(
              "1" => "January", "2" => "February", "3" => "March", "4" => "April",
              "5" => "May", "6" => "June", "7" => "July", "8" => "August",
              "9" => "September", "10" => "October", "11" => "November", "12" => "December",
              );
              foreach($MonthArray as $monthNum=>$monthName){
                if ($monthNum == $GetNum) {
                    $monthName;
                    echo $monthName;
                }
              }
        }

         $ticketid = $row['ticketid'];
         $sql2="SELECT comments,day(createdtime) as cmday,month(createdtime) as cmmonth,year(createdtime) as cmyear,TIME(createdtime) as cmtime FROM vtiger_ticketcomments WHERE ticketid = '$ticketid'";
         $result2=$conn3->query($sql2);
           if($result2->num_rows > 0) {
             while($rowcomment = $result2->fetch_assoc()) {
               $commentmonthnumber = $rowcomment['cmmonth']
    ?>

      <div class="time-label">
       <span class="bg-success">
       <?php echo $rowcomment['cmday'] ?> <?php echo month_name($commentmonthnumber); ?> <?php echo $rowcomment['cmyear'] ?>
        </span>
      </div>

      <div>
        <i class="fas fa-comments bg-warning"></i>
          <div class="timeline-item">
             <!-- <span class="time"><i class="far fa-calendar"></i> </span> -->
            <!-- <h3 class="timeline-header"><a href="#">Jay White</a></h3> -->
              <div class="timeline-body">
              <?php echo $rowcomment['comments'] ?>
              </div>
          </div>
      </div>

      <?php
             }
            }
      ?>

        <div>
          <i class="far fa-clock bg-gray"></i>
        </div>
    </div>
    </div>

    <!-- <div class="tab-pane" id="settings">
    <form class="form-horizontal">
    <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="inputName" placeholder="Name">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName2" placeholder="Name">
    </div>
    </div>
    <div class="form-group row">
    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
    </div>
    </div>
    <div class="form-group row">
    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
    <div class="checkbox">
    <label>
    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
    </label>
    </div>
    </div>
    </div>
    <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
    <button type="submit" class="btn btn-danger">Submit</button>
    </div>
    </div>
    </form>
    </div> -->

    </div>

    </div>
    </div>

    </div>

    </div>

    </div>
    </section>

    <?php

      }
    }

     ?>

  <!-- import modal -->
  <?php
    require_once 'include/speedlimiter/modal/speedlimitermodal.php'
   ?>
</div>
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
