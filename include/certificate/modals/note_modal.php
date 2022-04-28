<!-- add modal -->




    <!-- /////////////////////////////////////////////////////////////////////////  -->
              <div class="modal fade" id="AddNoteModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Add</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="add-note-form">


                    <input type="hidden" name="uuid" id="uuid" value="<?php echo $uuid; ?>">



                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="textarea" name="notedesc" id="notedesc" placeholder="Place some text here"
                                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>

                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                       <input type="submit" name="add" id="addNoteBtn" value="Add" class="btn btn-primary">
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
