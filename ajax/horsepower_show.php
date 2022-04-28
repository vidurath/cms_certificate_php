<?php
include_once("../include/db.php");

if(isset($_POST['edit_id'])) {

    $id = $_POST['edit_id'];

    $sql = "SELECT * FROM horsepower_detail WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $newid = $row['id'];

?>


          <!-- group row one -->
          <div class="form-group row">
                  <input type="hidden" name="a" id="a" value="<?php echo $newid; ?>">

                  <div class="col-sm-3">
                        <div class="form-group">
                          <label>Serial Number</label>
                            <select class="form-control" name="snum2" id="snum2">
                              <option data-id="<?php echo $row['serialnumber']; ?>"><?php echo $row['serialnumber']; ?></option>
                              <option value="in-build" data-id="in-build">In-build </option>
                              <?php
             								$sql="SELECT * FROM speedlimiter";
             								$result=$conn->query($sql);

             								if($result->num_rows > 0) {
             									while($rowsp = $result->fetch_assoc()) {
             										echo "<option value='".$rowsp['serialnumber']."' data-id='".$rowsp['serialnumber']."'>".$rowsp['serialnumber']."</option>";
             									}
             								}
             							?>


                            </select>
                        </div>
                    </div>

                  <div class="col-sm-3">
                      <div class="form-group">
                        <label>Type</label>
                          <select class="form-control" name="ctype2" id="ctype2">
                            <option value="<?php echo $row['ctype']; ?>" disabled><?php echo $row['ctype']; ?> </option>
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
                        <input type="number" id="mspeed2" name="mspeed2" value="<?php echo $row['mspeed']; ?>" class="form-control" >
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
                        <input type="text" id="ownername2" name="ownername2" value="<?php echo $row['cname']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Identification Number</label>
                        <input type="text" id="ownerinumber2" name="ownerinumber2" value="<?php echo $row['cidentification']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-8">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="owneraddress2" name="owneraddress2" value="<?php echo $row['caddress']; ?>" class="form-control" >
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
                        <input type="text" id="regmark2" name="regmark2" value="<?php echo $row['rmark']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>RBN</label>
                        <input type="text" id="rbn2" name="rbn2" value="<?php echo $row['rbn']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Make</label>
                        <input type="text" id="vmake2" name="vmake2" value="<?php echo $row['vmake']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Model</label>
                        <input type="text" id="vmodel2" name="vmodel2" value="<?php echo $row['vmodel']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Class</label>
                        <input type="text" id="vclass2" name="vclass2" value="<?php echo $row['vclass']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" id="vtype2" name="vtype2" value="<?php echo $row['vtype']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Colour</label>
                        <input type="text" id="vcolour2" name="vcolour2" value="<?php echo $row['vcolour']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Chassis Number</label>
                        <input type="text" id="vchassis2" name="vchassis2" value="<?php echo $row['chassisnumber']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Engine Number</label>
                        <input type="text" id="vengnumber2" name="vengnumber2" value="<?php echo $row['enginenumber']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Engine Capacity</label>
                        <input type="text" id="vengcapacity2" name="vengcapacity2" value="<?php echo $row['enginecapacity']; ?>" class="form-control" >
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
                        <input type="text" id="installedby2" name="installedby2" value="<?php echo $row['installedby']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Invoice Number Code</label>
                        <input type="text" id="invnumber2" name="invnumber2" value="<?php echo $row['invnumber']; ?>" class="form-control" >
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Invoice Amount</label>
                        <input type="text" id="invamount2" name="invamount2" value="<?php echo $row['amountnumber']; ?>" class="form-control" >
                      </div>
                    </div>

                  </div>



<?php
    }

}

?>
