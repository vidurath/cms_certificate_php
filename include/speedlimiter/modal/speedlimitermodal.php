<!-- add modal -->
              <div class="modal fade" id="addSpeedLimiterModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Add</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="add-speedlimiter-form">
                           <div class="form-group">

                             <div class="col-sm-12">
                               <div class="form-group">
                                 <label>Speed Limiter Serial No.</label>
                                 <input type="text" id="snumber" name="snumber" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Make</label>
                                 <input type="text" id="make" name="make" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Bill Reference</label>
                                 <input type="text" id="billreference" name="billreference" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Voltage</label>
                                 <input type="text" id="voltage" name="voltage" class="form-control">
                                </div>
                             </div>

                           </div>


                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                       <input type="submit" name="addSpeedLimiter" id="addSpeedLimiterBtn" value="Add" class="btn btn-primary">
                       <!-- <button type="submit" name="addNote" id="addNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->


                 <!-- edit modal -->
              <div class="modal fade" id="editSpeedLimiterModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Update</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="edit-speedlimiter-form">
                           <input type="hidden" name="id_speedlimiter" id="id_speedlimiter">

                           <div class="form-group row">

                           <div class="col-sm-12">
                               <div class="form-group">
                                 <label>Speed Limiter Serial No.</label>
                                 <input type="text" id="txtsnumber" name="txtsnumber" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Make</label>
                                 <input type="text" id="txtmake" name="txtmake" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Bill Reference</label>
                                 <input type="text" id="txtbillreference" name="txtbillreference" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Voltage</label>
                                 <input type="text" id="txtvoltage" name="txtvoltage" class="form-control">
                                </div>
                             </div>



                           </div>


                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="editSpeedlimiter" id="editSpeedlimiterBtn" value="Update" class="btn btn-primary">
                       <!-- <button type="submit" name="editNote" id="editNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
