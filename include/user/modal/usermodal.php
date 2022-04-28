<!-- add modal -->
              <div class="modal fade" id="addUserModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Add</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="add-user-form">
                           <div class="form-group">

                             <div class="col-sm-12">
                               <div class="form-group">
                                 <label>Full Name</label>
                                 <input type="text" id="fullname" name="fullname" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Email</label>
                                 <input type="text" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" id="rpassword" name="rpassword" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label>Type Of User</label>
                                  <select name="usertype" id="usertype" class="form-control">
                                    <option value="" data-id="" selected>Select </option>
                                    <option value="Employee">Employee</option>
                                    <option value="Admin">Admin</option>

                                  </select>
                                </div>
                             </div>

                           </div>


                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                       <input type="submit" name="addUser" id="addUserBtn" value="Add" class="btn btn-primary">
                       <!-- <button type="submit" name="addNote" id="addNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->


                 <!-- edit modal -->
              <div class="modal fade" id="editUserModal">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Update</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="edit-user-form">
                           <input type="hidden" name="id_user" id="id_user">

                           <div class="form-group row">

                           <div class="col-sm-12">
                             <div class="form-group">
                               <label>Full Name</label>
                               <input type="text" id="txtfullname" name="txtfullname" class="form-control">
                              </div>
                              <div class="form-group">
                               <label>Email</label>
                               <input type="text" id="txtemail" name="txtemail" class="form-control">
                              </div>
                             </div>

                           </div>


                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="editUser" id="editUserBtn" value="Update" class="btn btn-primary">
                       <!-- <button type="submit" name="editNote" id="editNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
