<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title></title>
</head>
<body>
    <form class='horizontal' method='post' id='edit_blog_form' action=''>
        <div class='form-group'>
            <input type='hidden' id='blog_id' name='blog_id' class='form-control' value=''>
        </div>
        <div class='form-group'>
            <label for='blog_title' class='col-lg-2 control-label'>Blog Title</label>
            <div class='col-lg-10'>
                <input type='text' id='blog_title' class='form-control' name='blog_title' value=''>
            </div>
        </div>
        <div class='form-group'>
            <label for='blog_date' class='col-lg-2 control-label'>Blog Date</label>
            <div class='col-sm-10'>
                <input type='text' id='blog_date' class='form-control' name='blog_date' value=''>
            </div>
        </div>
        <div class='form-group'>
            <label for='blog_image' class='col-lg-2 control-label'>Blog Image</label>
            <div class='col-lg-10'>
                <input type='file' id='blog_image' class='form-control' name='blog_image'>
            </div>
        </div>
        <div class='form-group'>
            <label for='blog_content' class='col-lg-2 control-label'>Blog Content</label>
            <div class='col-lg-10'>
                <textarea class='form-control' rows="5" id='blog_content' name='blog_content'></textarea>
            </div>
        </div>
        <div class='form-group'>
            <div class='col-lg-offset-2 col-lg-10'>
            <button type='submit' class='btn btn-primary' id='update_blog' name='update_blog'>Update Blog</button>
        </div>
    </form>
</body>
</html>