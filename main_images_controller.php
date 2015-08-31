<?php
/**
 * Created by PhpStorm.
 * User: leora.sliney
 * Date: 8/31/2015
 * Time: 10:32 AM
 */

require_once("database.php");
//require_once("../CMS Testing/image_class.php");

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'list';
}

switch($action) {

    case "show_images_all":

        /*class Image_content
        {
            public $image;
            public $upload_date;
        }*/

        //GET IMAGES FROM DATABASE
        $sql = "SELECT image_id, image, image_upload_date
                FROM images
                ORDER BY image_upload_date";

        $result = $db->query($sql);

        $display_images = array();

        foreach ($result as $image) {

            $all_images = new Image_Content();

            $all_images->img_id = $image['image_id'];
            $all_images->img = $image['image'];
            $all_images->img_upload_date = $image['image_upload_date'];

            array_push($display_images, $all_images);
        }

        print_r(json_encode($display_images));

        break;

    case "show_images_tattoos":

        class Image_content
        {
            public $image;
            public $upload_date;
            public $title;
        }

        $sql = "SELECT image_id, image_upload_date, image, image_title, image_type, image_tags
                FROM images ORDER BY image_upload_date";

        $result = $db->query($sql);

        $display_images = array();

        foreach ($result as $image) {
            $all_tattoos = new Image_content();

            $all_tattoos->image_id = $image['image_id'];
            $all_tattoos->image_upload_date = $image['image_upload_date'];
            $all_tattoos->image_title = $image['image_title'];
            $all_tattoos->image_type = $image['image_type'];
            $all_tattoos->image_tags = $image['image_tags'];
            $all_tattoos->image_image = $image['image'];

            array_push($display_images, $all_tattoos);
        }

        print_r(json_encode($display_images));

        break;

    case "show_images_drawings":

}