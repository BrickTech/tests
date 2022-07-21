<?php
	require_once "connect.php";

	functions getNews ($limit) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `news` ORDER BY `ID` DESC LIMITS $limit");
		closeDB();
		return resultToArray ($result);
	}
	functions resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>