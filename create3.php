<html>
<head>
	<style>
		body{
	background-color: #355E3B;
	color: white;
	font-family: monospace;
}
	button{
		width: 75%;
	  font-family: monospace;
	  background-color: #4F7942;
	  color: white;
	  padding: 20px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}
	button:hover {
  background-color: #5F8575;
}
</style>
</head>
<body>
	Successfully Added Item and Image!
	<div align = "center">
		<a href = "index.php">
			<button>Return to Greendom</button>
		</a>
	</div>
	  	<?php
		include "connect.php";
		$new_image = $_COOKIE["filename"];
		$sql = "UPDATE `recycle` SET `itemIMAGE`= '$new_image' WHERE `itemIMAGE`='NULL'";
		$result = $mysqli->query($sql);
		$mysqli->close();
		?>
	</body>
</html>