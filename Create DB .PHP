<?php
	
	$conn=mysqli_connect("localhost","root","");
	if (empty($conn) )
	{
		die("Connection is fail:". mysqli_connect_error());
	}
    echo  " Successfully Connected to the Database";

    
	$creatDatabase = "CREATE DATABASE hanangh";
	if ($conn->query($creatDatabase) == TRUE) 
	{
		echo "<BR>"."Database hanangh created successfully";
		 $conn=mysqli_connect("localhost","root","","hanangh");
	} 
	else 
	{
		echo "<BR>"."Error when creat the database: " . $conn->error;
	}

    
$createTable = "CREATE TABLE controller (
			Id integer NOT NULL PRIMARY KEY,
			forward VARCHAR(30),
			backward VARCHAR(30),
			left VARCHAR(30),
			right VARCHAR(30),
			stop VARCHAR(30),
			)";
	if ($conn->query($createTable) == TRUE) 
	{
		echo "<BR>"."controller Table has been created successfully";
	} 
	else 
	{
		echo "<BR>"."Error creating table: " . $conn->error;
	}
	mysqli_close($conn);
?>
