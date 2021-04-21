<?php

include('db.php');

$id=$_GET['userid'];

$q="delete from register where id='$id'";

$query=mysqli_query($conn,$q) or die("Query is not executed due to ".mysqli_error($conn));

if(mysqli_affected_rows($conn)>0)
{
	
	header('location:display.php');


}
else
{
	echo "Data is not deleted";
}




?>