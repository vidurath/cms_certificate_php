<?php
session_start();

include_once("../include/db.php");

if (isset($_POST['query'])) {

  $search = $_POST['query'];
  // $stmt=$conn->prepare("SELECT * from offence_stat WHERE month='$search' ");
  // $stmt=$conn->prepare(" SELECT * FROM certificate WHERE vehicleno LIKE '%$search%' ");
  // SELECT a.`cf_1006` AS serial_number, a.`cf_1012` AS registered_owner, b.`ticket_no`, b.`title`, b.`parent_id`,
  // c.`crmid`
  // FROM vtiger_ticketcf a
  // INNER JOIN vtiger_troubletickets b ON a.`ticketid` = b.`ticketid`
  // INNER JOIN vtiger_crmentity c ON b.`ticketid` = c.`crmid`
  // WHERE a.`cf_1006` LIKE '%$search%'
  $stmt=$conn3->prepare("SELECT a.cf_952 AS serial_number,
    b.`ticket_no`,b.`title`
    FROM vtiger_ticketcf a INNER JOIN vtiger_troubletickets b
    ON a.`ticketid`=b.`ticketid`
    WHERE a.cf_952 LIKE '%$search%'
    ");
   // WHERE a.`cf_1006` = '15942'

}

$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){


  $output = '


        <thead>
          <tr>
          <th style="width: 10%;">Ticket No.</th>
          <th style="width: 40%;">Title</th>
          <th>Serial Number</th>
          <th>ACTION</th>

          </tr>
          </thead>
          <tbody>
  ';
  while ($row=$result->fetch_assoc()) {
    $output .= '


    <tr>

              <td>'.$row['ticket_no'].'</td>
              <td>'.$row['title'].'</td>
              <td>'.$row['serial_number'].'</td>

              <td>
              <a class="btn btn-primary btn-sm" href="edit_splimiter_2016.php?serial_no='.$row['serial_number'].'" id="'.$row['ticket_no'].'"><i class="fas fa-folder"></i>
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
