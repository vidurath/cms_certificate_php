<?php


require_once 'auth_user.php';
require_once 'session.php';

$cuser = new Auth_user();


//handle All Display
if (isset($_POST['action']) && $_POST['action'] == 'displayAll') {

  $output = '';

  $user = $cuser->get_user();

	if ($user) {
		$output .= '<thead>
                  <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>';

        foreach ($user as $row) {
        	$output .= '<tr>

                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>*********</td>
                    <td>'.$row['usertype'].'</td>
                    <td>
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

if (isset($_POST['action']) && $_POST['action'] == 'add_newuser') {
  $fullname = $cuser->test_input($_POST['fullname']);
  $email = $cuser->test_input($_POST['email']);
  $password = $cuser->test_input($_POST['rpassword']);
  $usertype = $cuser->test_input($_POST['usertype']);
  $hpass = password_hash($password, PASSWORD_DEFAULT);

  $cuser->add_newuser($fullname,$email,$hpass,$usertype);
}

//Handle delete
if(isset($_POST['del_id'])){
$id = $_POST['del_id'];

$cuser->Delete($id);
}


 ?>
