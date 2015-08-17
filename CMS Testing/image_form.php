<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="add_image">
    <form method="GET" action="controller.php">
        <label>Image Title</label>
        <input type="text" name="image_title">
        <br>
        <label>Image Type</label>
        <input type="text" name="image_type">
        <br>
        <label>Image Tags</label>
        <input type="text" name="image_tags">
        <br>
        <label>Choose Image</label>
        <input type="file" name="image">
        <br>
        <input type="submit" name="add_image" value="Add Image">
    </form>
</div>
</body>
</html>