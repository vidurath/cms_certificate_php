<?php

require_once 'auth_splimiter.php';
require_once 'session.php';


$sp = new Auth_splimiter();

if (isset($_POST['action']) && $_POST['action'] == 'displayAll'){
  $output = '';
  $speed = $sp->getall();

  if ($speed) {
    $output .= '<thead>
                  <tr>
                    <th>Serial No</th>
                    <th>Make</th>
                    <th>Bill Reference</th>
                    <th>Voltage</th>
                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>';
    foreach($speed as $row) {
      $output .= '<tr>

                <td>'.$row['serialnumber'].'</td>
                <td>'.$row['make'].'</td>
                <td>'.$row['billreference'].'</td>
                <td>'.$row['voltage'].'</td>

                <td>
                  <a href="timeline.php?sn='.$row['serialnumber'].'" id="'.$row['id'].'" title="History" class="text-success"><i class="fas fa-history fa-lg"></i></a>&nbsp;


                  <a href="#" id="'.$row['id'].'" title="Edit" class="text-primary editBtn"><i class="fas fa-edit fa-lg" data-toggle="modal" data-target="#editSpeedLimiterModal"></i></a>&nbsp;


                  <a href="#" id="'.$row['id'].'" title="Delete" class="text-danger deleteBtn"><i class="fas fa-trash-alt fa-lg"></i></a>
                </td>
              </tr>';
    }
    $output .= '</tbody>';
    echo $output;
    }
    else {
      echo '<h3 class="text-center text-secondary">No data</h3>';
    }
  }

  if (isset($_POST['action']) && $_POST['action'] == 'add_sp') {
    print_r($_POST);

    $snumber = $cuser->test_input($_POST['snumber']);
    $make = $cuser->test_input($_POST['make']);
    $billreference = $cuser->test_input($_POST['billreference']);
    $voltage = $cuser->test_input($_POST['voltage']);

    $sp->AddNew($snumber,$make,$billreference,$voltage);
  }
  
  //Handle delete 
if(isset($_POST['del_id'])){
	$id = $_POST['del_id'];

	$sp->Delete($id);
}

  //Handle edit request

if(isset($_POST['edit_id'])){
	$id = $_POST['edit_id'];

	$row = $sp->edit_sp($id);
	echo json_encode($row);
}

if(isset($_POST['action']) && $_POST['action'] == 'update_sp') {
  $id = $cuser->test_input($_POST['id_speedlimiter']);
	$snumber = $cuser->test_input($_POST['txtsnumber']);
	$make = $cuser->test_input($_POST['txtmake']);
	$billreference = $cuser->test_input($_POST['txtbillreference']);
	$voltage = $cuser->test_input($_POST['txtvoltage']);

  $sp->Update($id,$snumber,$make,$billreference,$voltage);

}

 ?>
