
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

    
$sql = "CREATE TABLE controller (
			Id integer NOT NULL PRIMARY KEY,
			F VARCHAR(30),
			B VARCHAR(40),
			L VARCHAR(40), 
			R VARCHAR(40), 
			S VARCHAR(40)
			)";
			
	if ($conn->query($sql) == TRUE) 
	{
		echo "<BR>"."controller Table has been created successfully";
	} 
	else 
	{
		echo "<BR>"."Error creating table: " . $conn->error;
	}
	mysqli_close($conn);
?>
