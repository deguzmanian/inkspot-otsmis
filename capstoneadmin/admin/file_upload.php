<?php
include('authentication.php');

if(isset($_POST['submit']))
{
    $sname = $_POST['shop_name'];

	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('works/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'works/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'works/'.$newfilename);
				 $finalimg=$newfilename;
            }
			//insert
			$insertqry="INSERT INTO `works`( `shopname`, `image`) VALUES ('$sname','$finalimg')";
			mysqli_query($con,$insertqry);

			header('Location: works.php');
		}else
		{
			//display error
		}
	}
}
?>