<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 
  echo $_FILES['my_upload']['name']." ";
  if (is_uploaded_file($_FILES['my_upload']['tmp_name'])) 
  { 
  	if(empty($_FILES['my_upload']['name']))
  	{
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['my_upload']['name'];
  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

  	$upload_file_name = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_name);
$dest=__DIR__.'/uploads/'.htmlentities($_POST['w3review']).'.'.explode('.',$_FILES['my_upload']['name'])[1] ;;
    if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) 
    {
    	echo 'File Has Been Uploaded !';
    }
  }
}
