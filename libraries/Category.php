<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category {

    public $category_id;
    public $name;
    public $parent_id;
    public $sort_num;
    public $level;

    public $category_child_list;
}