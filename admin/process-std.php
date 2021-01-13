<?php 
	function getStds ($sql) {
		global $conn;
		$result = $conn->query($sql);
		if ($data = $result->fetch_all(MYSQLI_ASSOC)){
			return $data;
		}
	};
	function getStd ($sql) {
		global $conn;
		$result = $conn->query($sql);
		// var_dump($result);
		if ($data = $result->fetch_assoc()){
			return $data;
		}
	};
	function handleStd($sql)
	{
		global $conn;
		$result = $conn->query($sql);
		if ($conn->query($sql) === TRUE) {
		  echo "<script>window.location.href = 'stdlist.php'</script>";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	
 ?>