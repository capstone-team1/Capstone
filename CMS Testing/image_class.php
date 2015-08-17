<?php

/**
 * Created by PhpStorm.
 * User: mattbowen
 * Date: 8/16/15
 * Time: 7:40 PM
 */
class Image {
    private $image_date;
    private $image_title;
    private $image_type;
    private $image_tags;
    private $image;

public function __construct($image_date, $image_title, $image_type, $image_tags, $image){
    $this->image_date =  $image_date;
    $this->image_title = $image_title;
    $this->image_type = $image_type;
    $this->image_tags = $image_tags;
    $this->image = $image;
}

    public function set_image_date($value){
        $this->image_date = $value;
    }

    public function get_image_date(){
        return $this->image_date;
    }

    public function set_image_title($value){
        $this->image_title = $value;
    }

    public function get_image_title(){
        return $this->image_title;
    }

    public function set_image_type($value){
        $this->image_type = $value;
    }

    public function get_image_type(){
        return $this->image_type;
    }

    public function set_image_tags($value){
        $this->image_tags = $value;
    }

    public function get_image_tags(){
        return $this->image_tags;
    }

    public function set_image($value){
        $this->image = $value;
    }

    public function get_image(){
        return $this->image;
    }

}