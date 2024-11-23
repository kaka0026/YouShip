<?php

	//exit();
	
	$target_dir="images/vehicle/";
	$target_file=$target_dir.basename($_FILES["v_img"]["name"]);
	echo $target_file;
	$uploadOk=1;
	$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	//Check if image file is actual(real) file or a fake image file
	if(isset($_GET["submit"]))
	{
		if($_FILES["v_img"]["name"]=="")
		{
			echo "<br><br> No File Selected";
			exit();
		}
		$check=getimagesize($_FILES["v_img"]["tmp_name"]);
		if($check!==false)
		{
			var_dump($check);
			echo "<br><br> File is an image - " .$check["mime"]. ".";
			$uploadOk=1;
		}
		else
		{
			echo "<br> File is not an image";
			$uploadOk=0;
		}
	}
	
	//Check if file already exists
	if(file_exists($target_file))
	{
		echo "<br> Sorry file already exists";
		$uploadOk=0;
	}
	
	//Check file size
	if($_FILES["v_img"]["size"]>500000) //KB
	{
		echo "<br> Sorry, your file is too large";
		$uploadOk=0;
	}
	
	//Allowing only certain file formats
	if($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif")
	{
		echo "<br> Sorry only JPG, PNG, JPEG and GIF files are allowed";
		$uploadOk=0;
	}
	
	//Check if $uploadOk is set to 0 by any error_get_last
	if($uploadOk==0)
	{
		echo "<br> Sorry your file was not uploaded";
	}
	//If everything is ok try to upload the file
	else
	{
		if(move_uploaded_file($_FILES["v_img"]["tmp_name"],$target_file))
		{
			echo "<br> The file "."'".basename($_FILES["v_img"]["name"])."'"." has been uploaded successfully.";
		}
		else
		{
			echo "<br> Sorry there was an error uploading your file";
		}
	}
?>
	