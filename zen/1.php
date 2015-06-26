<?php
	/**
	*	Only work with MySQL
	*	26 June 2015
	*/
	// Get value from input
	$input1 = $_POST['input1'];
	$input2 = $_POST['input2'];
	$input3 = $_POST['input3'];
	// copy for input4-8

	// Set condition for SQL SELECT
	$condition = "";


	if (!empty($input1)) {
		$condition .= " AND column1 = ".$input1;
	}
	if (!empty($input2)) {
		$condition .= " AND column2 = ".$input2;
	}
	if (!empty($input3)) {
		$condition .= " AND column3 = ".$input3;
	}
	// copy for input4-8

	$sql = "SELECT * FROM tablename WHERE 1".$condition;



?>