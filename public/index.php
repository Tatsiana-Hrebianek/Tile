<!DOCTYPE html>
<html>
<head>
    <title>Upload Images</title>
</head>
<body>
<form id="imageForm" enctype="multipart/form-data">
    <input type="url" name="imageUrl" placeholder="Image URL">
    <input type="text" name="imageText" placeholder="Image Text">
    <input type="number" name="imageWidth" placeholder="Image Width">
    <input type="number" name="imageHeight" placeholder="Image Height">
    <button id="submitBtn" type="submit">Upload Image</button>
</form>

<div id="imageContainer"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>
