<html>
	<head>
		<title> Upload File </title>
	</head>
		<body>
			<h1> Upload a File </h1>
			<form action="addMaterial.php" method="post" enctype="multipart/form-data">
				<p>Select a file you wish to upload:</p>
				<input type="file" name="file" /><br />
				<input type="submit" value="Upload" />
			</form>
		</body>
</html>