<!-- add modal -->




    <!-- /////////////////////////////////////////////////////////////////////////  -->
              <div class="modal fade" id="AddModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Add</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="add-form" enctype="multipart/form-data">


                    <input type="hidden" name="uuid" id="uuid" value="<?php echo $uuid; ?>">



                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="">Sender Full Name</label>
                        <input type="text" name="sendername" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="">Sender Number</label>
                        <input type="text" name="sendernumber" class="form-control">
                      </div>


                      <div class="form-group">
                        <input type="file" name="image" id="Photo" >
                      </div>



                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                       <input type="submit" name="add" id="addBtn" value="Add" class="btn btn-primary">
                       <!-- <button type="submit" name="addNote" id="addNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                     </form>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->


                 <!-- edit modal -->
              <div class="modal fade" id="EditModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Update</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="edit-form">




                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="editOffence" id="editOffenceBtn" value="Update" class="btn btn-primary">
                       <!-- <button type="submit" name="editNote" id="editNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->

               <!-- view modal -->
                            <div class="modal fade" id="ViewModal">
                               <div class="modal-dialog ViewModal">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h4 class="modal-title">View</h4>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>
                                   <div class="modal-body">

                                         <input type="hidden" name="id_accused" id="id_accused">

                                         <div class="form-group row">


                                           <div class="col-sm-12">
                                             <div class="form-group">
                                               <label>Othername</label>
                                              <input type="text" id="txtothername" name="txtothername" class="form-control">
                                              </div>
                                           </div>


                                         </div>


                                   </div>
                                   <div class="modal-footer justify-content-between">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <input type="submit" name="editAccused" id="editAccusedBtn" value="Update" class="btn btn-primary">
                                     <!-- <button type="submit" name="editNote" id="editNoteBtn" class="btn btn-primary">Save changes</button> -->
                                   </div>
                                 </div>
                                 <!-- /.modal-content -->
                               </div>
                               <!-- /.modal-dialog -->
                             </div>
                             <!-- /.modal -->
