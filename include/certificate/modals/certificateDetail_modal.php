<!-- add modal -->




    <!-- /////////////////////////////////////////////////////////////////////////  -->
              <div class="modal fade" id="addhorsepowerModal">
                 <div class="modal-dialog addhorsepowerModal">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Add</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="add-horsepower-form">

                         <!-- group row one -->
                  <div class="form-group row">
                  <input type="hidden" name="uuid" id="uuid" value="<?php echo $uuid; ?>">


                  <div class="col-sm-3">
                        <div class="form-group">
                          <label>Serial Number</label>
                            <select class="form-control" name="snum" id="snum">
                              <option value="" data-id="" selected disabled>Select </option>
                              <option value="in-build" data-id="in-build">In-build </option>

                              <?php
             								$sql="SELECT * FROM speedlimiter";
             								$result=$conn->query($sql);

             								if($result->num_rows > 0) {
             									while($row = $result->fetch_assoc()) {
             										echo "<option value='".$row['serialnumber']."' data-id='".$row['serialnumber']."'>".$row['serialnumber']."</option>";
             									}
             								}
             							?>


                            </select>
                        </div>
                    </div>

                  <div class="col-sm-3">
                      <div class="form-group">
                        <label>Type Of Certificate</label>
                          <select class="form-control" name="ctype" id="ctype">
                            <option selected disabled>Select </option>
                            <option value="First Installation">First Installation </option>
                            <option value="Transfer Of Vehicle">Transfer of vehicle </option>
                            <option value="Transfer Of Owner">Transfer of Owner </option>
                            <option value="Lost Certificate">Lost Certificate </option>
                          </select>
                      </div>
                  </div>



                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Maximum Speed</label>
                        <input type="number" id="mspeed" name="mspeed" class="form-control" >
                      </div>
                    </div>

                  </div>
                  <!-- emd group row one -->

                  <h3> Current Owner Details	</h3><hr>
                  <!-- group row two -->
                  <div class="form-group row">

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="ownername" name="ownername" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Identification Number</label>
                        <input type="text" id="ownerinumber" name="ownerinumber" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="owneraddress" name="owneraddress" class="form-control" >
                      </div>
                    </div>

                  </div>
                  <!-- emd group row two -->


                  <h3> Vehicle Details	</h3><hr>
                  <!-- group row two -->
                  <div class="form-group row">
                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Registration Mark</label>
                        <input type="text" id="regmark" name="regmark" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>RBN</label>
                        <input type="text" id="rbn" name="rbn" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Make</label>
                        <input type="text" id="vmake" name="vmake" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Model</label>
                        <input type="text" id="vmodel" name="vmodel" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Class</label>
                        <input type="text" id="vclass" name="vclass" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" id="vtype" name="vtype" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Colour</label>
                        <input type="text" id="vcolour" name="vcolour" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Chassis Number</label>
                        <input type="text" id="vchassis" name="vchassis" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Engine Number</label>
                        <input type="text" id="vengnumber" name="vengnumber" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Engine Capacity</label>
                        <input type="text" id="vengcapacity" name="vengcapacity" class="form-control" >
                      </div>
                    </div>

                  </div>
                  <!-- emd group row two -->

                  <h3> Additional Details	</h3><hr>
                  <!-- group row two -->
                  <div class="form-group row">

                  <div class="col-sm-3">
                      <div class="form-group">
                        <label>Installed By(Technician)</label>
                        <input type="text" id="installedby" name="installedby" class="form-control">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Invoice Number Code</label>
                        <input type="text" id="invnumber" name="invnumber" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Invoice Amount</label>
                        <input type="text" id="invamount" name="invamount" class="form-control" >
                      </div>
                    </div>

                  </div>

                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                       <input type="submit" name="addHorsePowerDetail" id="addHorsePowerDetailBtn" value="Add" class="btn btn-primary">
                       <!-- <button type="submit" name="addNote" id="addNoteBtn" class="btn btn-primary">Save changes</button> -->
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->


                 <!-- edit modal -->
              <div class="modal fade" id="edithorsepowerModal">
                 <div class="modal-dialog edithorsepowerModal">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title">Update</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form action="#" method="post" id="edit-horsepower-form">

                       </form>
                     </div>
                     <div class="modal-footer justify-content-between">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="editHorsePower" id="editHorsePowerBtn" value="Update" class="btn btn-primary">
                     </div>
                   </div>
                   <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
