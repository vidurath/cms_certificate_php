<?php
session_start();

include_once("../include/db.php");

if (isset($_POST['query'])) {

  $search = $_POST['query'];
  $stmt=$conn2->prepare("SELECT * FROM vtiger_ticketcf WHERE cf_1006 LIKE '%$search%'
   ");
   // WHERE a.`cf_1006` = '15942'


}

$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){

// <td>'.$row['serial_number'].'</td>
  $output = '


        <thead>
          <tr>
          <th>Serial Number</th>
          <th>ACTION</th>

          </tr>
          </thead>
          <tbody>
  ';
  while ($row=$result->fetch_assoc()) {
    $output .= '


    <tr>

              <td>'.$row['cf_1006'].'</td>

              <td>
              <a class="btn btn-primary btn-sm" href="edit_splimiter.php?serial_no='.$row['cf_1006'].'" id=""><i class="fas fa-folder"></i>
              View</a>

              </td>

            </tr>


    ';
  }

  $output .= '</tbody>';

  echo $output;
}
else {
  echo "No Data";
}


 ?>
