<html lang="en">
<head>
<Title>File Upload Tutorial</Title>
</head>
<body>
 
	<form action="server.php" method="post" enctype="multipart/form-data">
	<p>
	<label for="my_upload">Select the file to upload:</label>
	<input id="my_upload" name="my_upload" type="file">
    <textarea id="w3review" name="w3review" >
    </textarea>
	</p>
	<input type="submit" value="Upload Now">
	</form>
</body>
</html>