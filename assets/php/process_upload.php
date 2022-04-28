<?php


require_once 'auth_upload.php';
require_once 'session.php';

$cuser = new Auth_Upload();


if(isset($_FILES['image'])){
  $uuid = $_POST['uuid'];
  $title = $_POST['title'];
  $sname = $_POST['sendername'];
  $snumber = $_POST['sendernumber'];
  $oldImage = $_POST['image'];
  $folder = '../../uploads/photos/';
  if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != ""))
  {
    $NewImageName = $_FILES['image']['name'];
    $NewImagePath = $folder.$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $NewImagePath);
    if($oldImage != null){
      unlink($oldImage);
    }
  }else{
    $NewImageName = $oldImage;
    //add without image function
    echo "no image choosen!!!";
  }
 //update funtion
//  echo $NewImageName;
 echo "image inserted 2!!!";
 $cuser->add_upload($uuid,$NewImageName,$title);
}

// display upload
if (isset($_POST['action']) && $_POST['action'] == 'display_upload') {
    // print_r($_POST['uuid']);
	$uuid = $cuser->test_input($_POST['uuid']);
	// $uuid = '2d2a68fe-59c2-4f2b-a9b7-f511b85a3f77';
    $output = '';

	$uploadimg = $cuser->get_uploadimg($uuid);

	if ($uploadimg) {
        $output .= '<div class="row">';

		foreach ($uploadimg as $row){

		$output .= '

                  <div class="col-6">
				    <p><b>Title :</b> '.$row['title'].'

                    <a href="#" id="'.$row['id'].'" title="Delete" class="text-danger float-right deletebtn"><i class="fas fa-trash-alt"></i></a>&nbsp;
                    </p>
          <a href="uploads/photos/'.$row['photo'].' " title="Download Image" download>
				    <img src="uploads/photos/'.$row['photo'].' " class="img-fluid" alt="" />
          </a>
                  </div>


		';

    // <a style="margin-right:10px;" href="#" id="'.$row['id'].'" title="View" class="text-primary float-right infoBtn"><i class="fas fa-eye" data-toggle="modal" data-target="#ViewModal"></i></a>&nbsp;
                    


		}
        $output .= '</div>';

        $output .= '
        <br>
        <a href="#" title="Add" class="text-primary"><i class="fas fa-plus fa-lg" data-toggle="modal" data-target="#AddModal"></i></a>

        ';
        echo $output;
	}
	else{
		 //echo '<h3 class="text-center text-secondary">No data</h3>';
		 echo 'nodata';
	}

}


if(isset($_POST['del_id'])){
  $id = $_POST['del_id'];
  $cuser->delete_upload($id);
}


 ?>
