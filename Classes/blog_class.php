<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 8/9/15
 * Time: 4:50 PM
 */
//This will allow PHP to submit correct format to mySQL
//We can use this function for anything that needs a datetime at time of posting
//I felt this is more clear than using "now()" in mySQL
function get_date_sql_format()
{
    $date = date('Y-m-d H:i:s');

    return $date;
}

class Blog
{

    private $blog_date;
    private $blog_title;
    private $blog_image;
    private $blog_content;

    public function __construct($blog_date, $blog_title, $blog_image, $blog_content)
    {
        $this->blog_date = $blog_date;
        $this->blog_title = $blog_title;
        $this->blog_image = $blog_image;
        $this->blog_content = $blog_content;
    }

    //Build in validation to setter
    public function set_blog_date($value)
    {
        $this->blog_date =  $value;
    }
    public function get_blog_date()
    {
        return $this->blog_date;
    }

    public function set_blog_title($value)
    {
        $this->blog_title = $value;
    }

    public function get_blog_title()
    {
        return $this->blog_title;
    }

    public function set_blog_image($value)
    {
        $this->blog_image = $value;
    }

    public function get_blog_image()
    {
        return $this->blog_image;
    }

    public function set_blog_content($value)
    {
        $this->blog_content = $value;
    }

    public function get_blog_content()
    {
        return $this->blog_content;
    }
}