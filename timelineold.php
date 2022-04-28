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

  <div class="content-wrapper">

  <section class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
  <div class="col-sm-6">
  <h1>Timeline (<?php echo $_GET['sn']; ?>)</h1>
  </div>

  </div>
  </div>
  </section>

  <section class="content">
  <div class="container-fluid">

  <div class="row">
  <div class="col-md-12">

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

     ?>



<?php

$sn = $_GET['sn'];
$sqlmain="SELECT *,YEAR(createdAt) AS year,MONTH(createdAt) AS month ,DAY(createdAt) AS day FROM horsepower_detail WHERE serialnumber = '$sn'";
$result=$conn->query($sqlmain);
  if($result->num_rows > 0) {
    while($rowsn = $result->fetch_assoc()) {

 ?>

  <div class="timeline">

<?php
  $sql1="SELECT day(createdAt) as day,month(createdAt) as month,year(createdAt) as year,TIME(createdAt) as sptime FROM speedlimiter WHERE serialnumber='$sn'";
  $result=$conn->query($sql1);
    if($result->num_rows > 0) {
      while($rowspeedlimiter = $result->fetch_assoc()) {
        $spdate = $rowspeedlimiter['month'];
 ?>

  <div class="time-label">
    <span class="bg-green"><?php echo $rowspeedlimiter['day'] ?> <?php echo month_name($spdate); ?> <?php echo $rowspeedlimiter['year'] ?></span>
  </div>

  <div>
  <i class="fas fa-question bg-red"></i>
  <div class="timeline-item">
    <span class="time"><i class="fas fa-clock"></i> <?php echo $rowspeedlimiter['sptime'] ?></span>
  <h3 class="timeline-header no-border">Added to stock</h3>
  </div>
  </div>

  <?php
    }
  }
   ?>

  <div class="time-label">
  <span class="bg-green"><?php echo $rowsn['day']; ?>
  <?php

  $MonthArray = array(
      "1" => "January", "2" => "February", "3" => "March", "4" => "April",
      "5" => "May", "6" => "June", "7" => "July", "8" => "August",
      "9" => "September", "10" => "October", "11" => "November", "12" => "December",
      );
      foreach($MonthArray as $monthNum=>$monthName){
        $GetNum = $rowsn['month'];
        if ($monthNum == $GetNum) {
            $monthName;
            echo $monthName;
        }


      }

  ?>

  <?php echo $rowsn['year']; ?></span>
  </div>

  <div>
  <i class="fas fa-question bg-red"></i>
  <div class="timeline-item">
  <h3 class="timeline-header no-border"><?php echo $rowsn['ctype']; ?></h3>
    <div class="timeline-body">
      <p><b>Full Name :</b> <?php echo $rowsn['cname']; ?> </p>
      <p><b>Registration Mark :</b> <?php echo $rowsn['rmark']; ?> </p>
    </div>
  </div>
  </div>


<?php
$snuuid = $rowsn['uuid'];
$sql2="SELECT *,TIME(createdAt) AS notetime,DAY(createdAt) AS day,Month(createdAt) AS month,Year(createdAt) AS year FROM horsepower_note WHERE uuid = '$snuuid'";
$result=$conn->query($sql2);
  if($result->num_rows > 0) {
    while($rownote = $result->fetch_assoc()) {
 ?>

  <div>
  <i class="fas fa-comments bg-yellow"></i>
  <div class="timeline-item">
  <span class="time"><i class="fas fa-clock"></i> <?php echo $rownote['notetime'] ?></span>

  <span class="time"><i class="fas fa-calendar"></i> <?php echo $rownote['day'] ?>-
    <?php
    $MonthArray = array(
        "1" => "January", "2" => "February", "3" => "March", "4" => "April",
        "5" => "May", "6" => "June", "7" => "July", "8" => "August",
        "9" => "September", "10" => "October", "11" => "November", "12" => "December",
        );
        foreach($MonthArray as $monthNum=>$monthName){
          $GetNum = $rowsn['month'];
          if ($monthNum == $GetNum) {
              $monthName;
              echo $monthName;
          }


        }
    ?>
    -<?php echo $rownote['year'] ?></span>
  <h3 class="timeline-header"><a href="#"><?php echo $rownote['uname'] ?></a> add note</h3>
  <div class="timeline-body">
    <?php echo $rownote['note_detail'] ?>
  </div>

  </div>
  </div>
<?php
  }
}
 ?>


  <div>
  <i class="fa fa-camera bg-purple"></i>
  <div class="timeline-item">
  <h3 class="timeline-header">Attached photos</h3>
  <div class="timeline-body">
    <?php
    $snuuid = $rowsn['uuid'];
    $sql3="SELECT * FROM horsepower_image WHERE uuid = '$snuuid'";
    $result=$conn->query($sql3);
      if($result->num_rows > 0) {
        while($rowimage = $result->fetch_assoc()) {
     ?>
  <img src="uploads/photos/<?php echo $rowimage['photo'] ?>" width="200" height="150" alt="...">
  <?php
    }
  }
   ?>
  </div>
  </div>

  </div>

  <div>
  <i class="fas fa-clock bg-gray"></i>
  </div>

  </div>

<?php
    }
}
 ?>

  </div>

  </div>
  </div>

  </section>

  </div>

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

<script type="text/javascript">

  $(document).ready(function(){
    //add ajax
    $("#addNoteBtn").click(function(e){
      if ($("#add-note-form")[0].checkValidity()) {
        e.preventDefault();

        $("#addNoteBtn").val('Please Wait...');

        $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data: $("#add-note-form").serialize()+'&action=add_note',
          success:function(response){
            console.log(response);
            $("#addNoteBtn").val('Add Note');
            $("#add-note-form")[0].reset();
            $("#addNoteModal").modal('hide');
            Swal.fire({
              title: 'Added Successfully',
              type: 'success'
            });
            displayAllNotes();
          }
        });
      }
    });

    // Edit ajax req

    $("body").on("click", ".editBtn", function(e) {
      e.preventDefault();
       edit_id = $(this).attr('id');
       $.ajax({
        url:'assets/php/process.php',
        method:'post',
        data: { edit_id:edit_id },
        success:function(response){
          data = JSON.parse(response);
          //console.log(data);
          $("#id").val(data.id);
           $("#txtgroup").val(data.grouping);
           $("#txtname").val(data.name);

        }
       });
    });

    // Update ajax req
    $("#editNoteBtn").click(function(e){
      e.preventDefault();
       $.ajax({
        url:'assets/php/process.php',
        method:'post',
        data: $("#edit-note-form").serialize()+'&action=update_note',
        success:function(response){
          Swal.fire({
              title: 'Updated Successfully',
              type: 'success'
            });
           $("#edit-note-form")[0].reset();
           $("#editNoteModal").modal('hide');
           displayAllNotes();
        }
       });

    });

     displayAllNotes();

    // display all
    function displayAllNotes(){
      $.ajax({
        url: 'assets/php/process.php',
        method: 'post',
        data: {action: 'display_notes'},
        success:function(response){
          $("#showNote").html(response);
            $("#showNote").DataTable();
        }
      });

    }



  });

</script>

<script>
  displaylist();

    // display all
    function displaylist(){
      $.ajax({
        url: 'assets/php/process.php',
        method: 'post',
        data: {action: 'display_list'},
        success:function(response){
          $("#showddl").html(response);

        }
      });

    }

    $(document).ready(function() {

      $("#showddl").change(function(){

          var select = $(this).val();

          console.log(select);
          $.ajax({
            url:'assets/php/process.php',
            method: 'post',
            data:{query:select},
            success:function(response){
              // $('#data').html(response);
              console.log(response);

            }
          });
        });

    });


</script>

</body>
</html>
