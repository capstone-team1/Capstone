<?php

header('Content-Type: application/json');

require_once("../CMS Testing/database.php");
//require_once("../Classes/blog_class.php");

if (isset($_GET['action']))
{
    $action = $_GET['action'];
} else {
    $action = 'list';
}

switch($action){

    case "list_blogs":

        class Blog_content
        {
            public $id;
            public $image;
            public $upload_date;
            public $title;
        }
        //GET BLOG TABLE
        $sql = "SELECT blog_id, blog_image, blog_post_date, blog_title
                FROM blogs ORDER BY blog_post_date DESC";

        $get_blogs = $db->query($sql);

        $display_blogs = [];

        foreach($get_blogs as $row){

            $all_blogs = new Blog_Content();

            $all_blogs->id = $row['blog_id'];
            $all_blogs->image = $row['blog_image'];
            $all_blogs->upload_date = $row['blog_post_date'];
            $all_blogs->title = $row['blog_title'];

            array_push($display_blogs, $all_blogs);
        }

        print_r(json_encode($display_blogs));

        break;

    case "list_images":

        class Image_content
        {
            public $id;
            public $image;
            public $upload_date;
            public $title;
            public $category;
            public $tags;
        }

        $sql = "SELECT image_id, image_upload_date, image_title, image_category, image_tags, image
                FROM images ORDER BY image_upload_date DESC";

        $get_images = $db->query($sql);

        $display_images = [];

        foreach($get_images as $row)
        {
            $all_images = new Image_content();

            $all_images->id = $row['image_id'];
            $all_images->upload_date = $row['image_upload_date'];
            $all_images->title = $row['image_title'];
            $all_images->category = $row['image_category'];
            $all_images->tags = $row['image_tags'];
            $all_images->image = $row['image'];

            array_push($display_images, $all_images);
        }

        print_r(json_encode($display_images));

        break;

    case "list_links":

        class Link_content
        {
            public $id;
            public $title;
            public $description;
            public $image;
        }

        $sql = "SELECT link_id, link_title, link_description, link_image
                FROM links ORDER BY link_id";

        $get_links = $db->query($sql);

        $display_links = [];

        foreach($get_links as $row)
        {
            $all_links = new Link_content();

            $all_links->id = $row['link_id'];
            $all_links->title = $row['link_title'];
            $all_links->description = $row['link_description'];
            $all_links->image = $row['link_image'];

            array_push($display_links, $all_links);
        }

        print_r(json_encode($display_links));

        break;

}

