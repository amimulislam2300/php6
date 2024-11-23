
<?php
//Step 2:
require_once("student.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$course=$_POST["txtCourse"];
	$phone=$_POST["txtPhone"];
    
    $obj= new Student($id,$name,$course,$phone);
    $obj->save();
	
	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
</head>

<body>

<form action="#" method="post">
<div>
ID:<br/>
<input type="text" name="txtId" />
</div>

<div>
Name<br/>
<input type="text" name="txtName" />
</div>

<div>
Course<br/>
<input type="text" name="txtCourse" />
</div>

<div>
Phone<br/>
<input type="text" name="txtPhone" />
</div>

<div>
<input type="submit" name="btnSubmit" value="Submit" />
</div>
</form>
<?php
 Student::display_students();
?>
</body>
</html>
