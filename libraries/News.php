<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News
{

    public $news_id;

    public $title;

    public $short_content;

    public $full_content;

    public $image_url;

    public $update_date;

    public $reg_date;

    public function reg_date()
    {
        return date_create($this->reg_date);
    }
}