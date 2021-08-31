<html>
<body>
  





  <?php
/* Get the name of the uploaded file */
$filename = $_FILES['file']['name']

/* Choose where to save the uploaded file */
$loacation ='upload'.$filename;

/* Save the uploaded file to the local filesystem */
move_uploaded_file($_FILES,['file']['tmp_name']){
	echo "File uploaded Successfully";

}else{  echo "Error uploading File";  

}




?>

</body>
</html>