<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="add_blog">
    <form method="GET" action="controller.php">
        <label>Blog Title</label>
        <input type="text" name="blog_title">
        <br>
        <label>Blog Image</label>
        <input type="file" name="blog_image">
        <br>
        <label>Blog Content</label>
        <textarea cols="25" rows=10" name="blog_content"></textarea>
        <br>
        <input type="submit" name="add_blog" value="Add Blog">
    </form>
</div>
</body>
</html>