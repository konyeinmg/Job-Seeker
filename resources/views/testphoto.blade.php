
<!DOCTYPE html>
<html>
<body>

<form action="/testupload" method="post" enctype="multipart/form-data">
	@csrf
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="text" name="name"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
