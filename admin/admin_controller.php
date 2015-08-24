<?php

header('Content-Type: application/json');

require_once("../CMS Testing/database.php");
require_once("../CMS Testing/blog_class.php");

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'list';
}

switch($action){

    case "list_blogs":

        class Blog_content{
            public $image;
            public $upload_date;
            public $title;
        }
        //GET BLOG TABLE
        $sql = "SELECT blog_id, blog_image, blog_post_date, blog_title
                FROM blogs ORDER BY blog_post_date";

        $get_blogs = $db->query($sql);

        $display_blogs = array();

        foreach($get_blogs as $row){

            $all_blogs = new Blog_Content();

            $all_blogs->blog_id = $row['blog_id'];
            $all_blogs->image = $row['blog_image'];
            $all_blogs->upload_date = $row['blog_post_date'];
            $all_blogs->title = $row['blog_title'];

            array_push($display_blogs, $all_blogs);
        }

        print_r(json_encode($display_blogs));

        break;

    case "list_images":

        class Image_content{
            public $image;
            public $upload_date;
            public $title;
            public $category;
            public $tags;
        }

        $sql = "SELECT image_id, image_upload_date, image, image_title, image_type, image_tags
                FROM images ORDER BY image_upload_date";

        $get_images = $db->query($sql);

        $display_images = array();

        foreach($get_images as $row){
            $all_images = new Image_content();

            $all_images->image_id = $row['image_id'];
            $all_images->image_upload_date = $row['image_upload_date'];
            $all_images->image_title = $row['image_title'];
            $all_images->image_type = $row['image_type'];
            $all_images->image_tags = $row['image_tags'];
            $all_images->image_image = $row['image'];

            array_push($display_images, $all_images);
        }

        print_r(json_encode($display_images));

        break;
}
