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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Certificate Details</h1>
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


               <!-- Main content -->
               <div class="invoice p-3 mb-3">
                 <!-- title row -->
                 <div class="row">
                   <div class="col-12">
                     <h4>
                       Registration Book
                       <small class="float-right">Date: 12/01/2022</small>
                     </h4><hr>
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- info row -->
                 <div class="row invoice-info">
                   <div class="col-sm-3 invoice-col">
                       <br><br>
                       <b>Registration Mark:</b> 6434BZ13<br><br>
                       <b>RBN:</b> 16/26605<br><br>
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 invoice-col">
                      <br><br>
                       <b>Vehicle Make:</b> TOYOTA<br><br>
                       <b>Vehicle Model:</b> AXIO<br><br>
                       <b>Vehicle Class:</b> MOTOR CAR<br><br>
                       <b>Vehicle Type:</b> <br><br>
                       <b>Vehicle Chassis Number:</b> <br><br>

                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 invoice-col">
                          <br><br>
                         <b>Owner Name:</b> <br><br>
                         <b>Owner Address:</b> <br><br>
                         <b>Identification Number:</b> <br><br>
                   </div>
                   <!-- /.col -->
                   <div class="col-sm-3 invoice-col">
                     <?php
                     $url = "https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl=helloworld_startouch&choe=UTF-8";
                      ?>
                     <img src="<?php echo $url; ?>" alt="" width="100%" height="100%">
                   </div>

                 </div>
                 <!-- /.row -->
                 <br><br>

                 <!-- this row will not appear when printing -->
                 <div class="row no-print">
                   <div class="col-12">
                     <a href="testpdf.php" target="_blank" class="btn btn-primary float-right"><i class="fas fa-download"></i> Generate PDF</a>

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
