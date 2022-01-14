<?php
	include '../session.php';

//convert studname to studid
$stud = $fname['fname'];
$sql_stu=mysqli_query($mysqli,"SELECT * FROM students WHERE fname = '$stud'");
$res_stu = mysqli_fetch_assoc($sql_stu);
$stuid= $res_stu['student_id']; //uploader


	if(isset($_POST['submit']))
	{
		//storing all necessary data into the respective variables.
	$file = $_FILES['file'];
	$file_name = $file['name'];
	$file_type = $file ['type'];
	$file_size = $file ['size'];
	$file_path = $file ['tmp_name'];
	
	//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 
	
	if($file_name!="" && ($file_type="files/doc"||$file_type="files/docx"||$file_type="files/pdf")&& $file_size<=6144000)
	
	if(move_uploaded_file ($file_path,'files/'.$file_name))//"files" is just a folder name here we will load the file.
	$query=mysql_query("INSERT into student_files(student_id, uploaded_file) values('$stuid, $file_name')");//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
	 
	if($query==true)
	{
		echo "File Uploaded";
	}
	}
	
	//To retrieve uploaded file immediately or write code in separate .php file if you wanna later or by clicking.
	$result=  mysql_query("SELECT photo FROM user");
	$row=  mysql_fetch_array($result);
	echo "<img src='images/".$row['photo']."' height = '130px' width = '130px'>";
?>