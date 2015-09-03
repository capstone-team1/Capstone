<?php

class Link
{

    public function __construct($link_title, $link_description, $link_image)
    {
        $this->link_title = $link_title;
        $this->link_description = $link_description;
        $this->link_image = $link_image;
    }

    public function set_link_title($value)
    {
        $this->link_title = $value;
    }

    public function get_link_title()
    {
        return $this->link_title;
    }

    public function set_link_description($value)
    {
        $this->link_description = $value;
    }

    public function get_link_description()
    {
        $this->link_description;
    }

    public function set_link_image($value)
    {
        $this->link_image = $value;
    }

    public function get_link_image()
    {
        return $this->link_image;
    }
}