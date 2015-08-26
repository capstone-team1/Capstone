<?php

require_once("database.php");
require_once("../Classes/blog_class.php");
require_once("../Classes/image_class.php");

if (isset($_POST['add_image'])) $action = $_POST['add_image'];
if (isset($_POST['add_blog'])) $action = $_POST['add_blog'];

//Object Oriented..WORKS!!

switch($action)
{

    case "Add Blog":

        $blog_post = new Blog(get_date_sql_format(),
            $_POST['blog_title'],
            $_POST['blog_image'],
            $_POST['blog_content']);

        //print $blog_post->get_blog_content();

        $blog_date = $blog_post->get_blog_date();
        $blog_title = $blog_post->get_blog_title();
        $blog_image = $blog_post->get_blog_image();
        $blog_content = $blog_post->get_blog_content();

        $sql = "INSERT INTO blogs (blog_post_date, blog_title, blog_image, blog_content)
                      VALUES ('$blog_date', '$blog_title', '$blog_image', '$blog_content')";

        $query = $db->prepare($sql);
        $query->execute();

        break;

    case "Add Image":

        $add_image = new Image(get_date_sql_format(),
            $_POST['image_title'],
            $_POST['image_type'],
            $_POST['image_tags'],
            $_POST['image']);

        $image_date = $add_image->get_image_date();
        $image_title = $add_image->get_image_title();
        $image_type = $add_image->get_image_type();
        $image_tags = $add_image->get_image_tags();
        $image = $add_image->get_image();

        $sql = "INSERT INTO images (image_upload_date, image_title, image_category, image_tags, image)
                        VALUES ('$image_date', '$image_title', '$image_type', '$image_tags', '$image')";

        $query = $db->prepare($sql);
        $query->execute();

        break;
}