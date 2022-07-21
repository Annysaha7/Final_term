<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webtech_A";
$name="Anny";
$email="anny@gmail.com";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	
	//echo "Successful connection";
	
	//Data inserted
	
	$q="INSERT INTO Student(ID,Name,Email) VALUES(2002,'".$name."','".$email."')";
	$q="INSERT INTO Student(Name,Email) VALUES('Mim','mim@gmail.com')";
	$q="INSERT INTO Student(Name,Email) VALUES('Rina','Rina@gmail.com')";
	$q="INSERT INTO Student(Name,Email) VALUES('songita','songita@gmail.com')";
	
	//Data delete
	
	$q="DELETE FROM Student where ID=2004";
	
	$result=$conn->query($q);
	if($result)
	  echo "data inserted";
    else
		echo "data not inserted"."<br>";	
}
//Update data
$sql = "UPDATE Student SET Email='Moon@gmail.com' WHERE id=2007";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>
