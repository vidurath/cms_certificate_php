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
            <h1></h1>
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

             <div class="form-group col-md-4">
          <select id="showddl" class="form-control custom-select">
           <!--  <option value="0" selected disabled>Select</option> -->
            <!-- <div id="showddl"></div> -->
          </select>
          </div>
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Data</h3>
                <!-- <input type="submit" value="Create new Porject" class="btn btn-success float-right"> -->
                <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#addNoteModal">&nbsp;Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="showNote" class="table">
                  
                  
                 
                 
                  
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

              <!-- add modal -->
               <div class="modal fade" id="addNoteModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Add modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#" method="post" id="add-note-form">
                            <div class="form-group">
                            <input type="text" id="grouping" name="grouping" class="form-control" placeholder="Enter Grouping Code">
                            </div>
                            <div class="form-group">
                            <input type="text" id="oname" name="oname" class="form-control" placeholder="Enter Offence Name">
                            </div>
                            <div class="form-group">
                            <input type="text" id="law" name="law" class="form-control" placeholder="Enter Section of law">
                            </div>
                        </form>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <input type="submit" name="addNote" id="addNoteBtn" value="Add" class="btn btn-primary">
                        <!-- <button type="submit" name="addNote" id="addNoteBtn" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->


                  <!-- edit modal -->
               <div class="modal fade" id="editNoteModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Edit Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="#" method="post" id="edit-note-form">
                            <input type="hidden" name="id" id="id">
                             <div class="form-group">
                            <input type="text" name="txtgroup" id="txtgroup" class="form-control" placeholder="Enter Offence Group">
                            </div>
                             <div class="form-group">
                            <input type="text" name="txtname" id="txtname" class="form-control" placeholder="Enter Offence Name">
                            </div>
                           
                        </form>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <input type="submit" name="editNote" id="editNoteBtn" value="Update" class="btn btn-primary">
                        <!-- <button type="submit" name="editNote" id="editNoteBtn" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->





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
<!-- <script>
  $(function () {
    $("#showNote").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    
  });
</script> -->

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
