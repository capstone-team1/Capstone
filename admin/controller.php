<?php
header('Content-Type: application/json');

require_once("../Classes/image_class.php");
require_once("../Classes/link_class.php");
require_once("../Classes/blog_class.php");
require_once("../Database/database.php");


if(isset($_POST['add_blog'])) {

    $blog_post = new Blog(
        get_date_sql_format(),
        $_POST['blog_title'],
        $_POST['blog_image'],
        $_POST['blog_content']
    );

    $blog_date = $blog_post->get_blog_date();
    $blog_title = $blog_post->get_blog_title();
    $blog_image = $blog_post->get_blog_image();
    $blog_content = $blog_post->get_blog_content();

    $sql = "INSERT INTO blogs (blog_post_date, blog_title, blog_image, blog_content)
                      VALUES ('$blog_date', '$blog_title', '$blog_image', '$blog_content')";

    $query = $db->prepare($sql);
    $query->execute();
}

if(isset($_POST['update_blog'])) {

    $id = $_POST['blog_id'];
    $title = $_POST['blog_title'];
    $image = $_POST['blog_image'];
    $content = $_POST['blog_content'];

    $sql = "UPDATE blogs
            SET blog_title = '$title', blog_image = '$image', blog_content = '$content'
            WHERE blog_id = '$id' ";

    $query = $db->prepare($sql);
    $query->execute();
}

if(isset($_POST['add_image'])) {

    $add_image = new Image(
        get_date_sql_format(),
        $_POST['image_title'],
        $_POST['image_type'],
        $_POST['image_tags'],
        $_POST['image']
    );

    $image_date = $add_image->get_image_date();
    $image_title = $add_image->get_image_title();
    $image_type = $add_image->get_image_type();
    $image_tags = $add_image->get_image_tags();
    $image = $add_image->get_image();

    $sql = "INSERT INTO images (image_upload_date, image_title, image_category, image_tags, image)
                    VALUES ('$image_date', '$image_title', '$image_type', '$image_tags', '$image')";

    $query = $db->prepare($sql);
    $query->execute();
}

if(isset($_POST['link_title'])) {
    $add_link = new Link(
        $_POST['link_title'],
        $_POST['link_description'],
        $_POST['link_image']
    );

    $link_title = $add_link->get_link_title();
    $link_description = $add_link->get_link_description();
    $link_image = $add_link->get_link_image();

    $sql = "INSERT INTO links (link_title, link_description, link_image)
                    VALUES ('$link_title', '$link_description', '$link_image')";

    $query = $db->prepare($sql);
    $query->execute();
}

if(isset($_GET['action'])) {
    $action = $_GET['action'];
}

    switch ($action){

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
            $all_blogs->image = base64_encode($row['blog_image']);

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

        case "delete":

            $full_id = $_GET['id'];

            $id = str_replace("delete_", "", $full_id);

            $sql = "DELETE FROM blogs WHERE blog_id =  '$id' ";

            $db->exec($sql);

            $results = $sql;

            print_r(json_encode($results));

            break;

        case "edit_blog":

            $full_id = $_GET['id'];

            $id = str_replace("edit_", "", $full_id);

            $sql = "SELECT blog_id, blog_title, blog_post_date, blog_image, blog_content
                    FROM blogs WHERE blog_id =  '$id' ";

            $query = $db->prepare($sql);

            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

            echo json_encode($result);

            break;

    }