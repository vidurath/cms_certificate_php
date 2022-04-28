<?php


require_once 'auth_certificate.php';
require_once 'session.php';

$cuser = new Auth_certificate();

//handle All Display
if (isset($_POST['action']) && $_POST['action'] == 'displayAll') {

  $output = '';

  $certificate = $cuser->get_allhorsepower();

	if ($certificate) {
		$output .= '<thead>
                  <tr>
                    <th>Serial Number</th>
                    <th>Type</th>
										<th>Customer Name</th>
                    <th>Vehicle Number</th>

                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>';

        foreach ($certificate as $row) {
        	$output .= '<tr>
                    <td>'.$row['serialnumber'].'</td>
                    <td>'.$row['ctype'].'</td>
                    <td>'.$row['cname'].'</td>
                    <td>'.$row['rmark'].'</td>

                    <td>
                      
                      <a href="edit_certificate.php?uuid='.$row['uuid'].'" id="'.$row['id'].'" title="Edit" class="text-primary editBtn"><i class="fas fa-edit fa-lg"></i></a>&nbsp;


                      <a href="#" id="'.$row['id'].'" title="Delete" class="text-danger deleteBtn"><i class="fas fa-trash-alt fa-lg"></i></a>
                    </td>
                  </tr>';
        }
        $output .= '</tbody>';
        echo $output;

	}
	else{
		echo '<h3 class="text-center text-secondary">No data</h3>';
	}
}


//Display all
if (isset($_POST['action']) && $_POST['action'] == 'display_horsePowerDetail') {
	$token = $cuser->test_input($_POST['token']);
	$output = '';

	$accused = $cuser->get_horsePowerDetail($token);

	if ($accused) {
		foreach ($accused as $row){
		$output .= '

								<div class="row">
                  <div class="col-6">
											<p><b>Registration Mark :</b> '.$row['rmark'].'</p>
											<p><b>RBN :</b> '.$row['rbn'].'</p>
                      <p><b>Serial Number :</b> '.$row['serialnumber'].'</p>
                      <p><b>Name :</b> '.$row['cname'].'</p>
											<p><b>Address :</b> '.$row['caddress'].'</p>
                      <p><b>Identification :</b> '.$row['cidentification'].'</p>
                      <p><b>Installed by :</b> '.$row['installedby'].'</p>
                      <p><b>Installation Date :</b> '.$row['createdAt'].'</p>
                      <p><b>Vehicle Number :</b> '.$row['vehiclenumber'].'</p>
                  </div>
                  <div class="col-6">
											<p><b>Make :</b> '.$row['vmake'].'</p>
											<p><b>Model :</b> '.$row['vmodel'].'</p>
                      <p><b>Class :</b> '.$row['vclass'].'</p>
                      <p><b>Type :</b> '.$row['vtype'].'</p>
                      <p><b>Colour :</b> '.$row['vcolour'].'</p>
                      <p><b>Chassis Number :</b> '.$row['chassisnumber'].'</p>
                      <p><b>Engine Number :</b> '.$row['enginenumber'].'</p>
                      <p><b>Engine Capacity :</b> '.$row['enginecapacity'].'</p>
                  </div>
                </div>





			<a href="#" id="'.$row['id'].'" title="Edit" class="text-primary editOffenceBtn"><i class="fas fa-edit fa-lg" data-toggle="modal" data-target="#editoffenceModal"></i></a>&nbsp;


			<a href="#" id="'.$row['id'].'" title="Delete" class="text-danger deleteOffenceDetailBtn"><i class="fas fa-trash-alt fa-lg"></i></a>



		';



        echo $output;
		}
	}
	else{
		 //echo '<h3 class="text-center text-secondary">No data</h3>';
		 echo 'nodata';
	}

}

//Handle all certificate delete
if(isset($_POST['del_id'])){
	$id = $_POST['del_id'];

	$cuser->detele_horsePowerDetail($id);
}



 ?>
