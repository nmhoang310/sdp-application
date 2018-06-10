<?php

class Category_model extends CI_Model {
    public function get_category_list() {
        $this->load->library('category');
        $sql1 = "select * from category where parent_id is null";
        $categoryLevel1List = $this->db->query($sql1)->result();
        foreach ($categoryLevel1List as $categoryLevel1) {
            $param = array($categoryLevel1->category_id);
            $sql2 = "select * from category where parent_id = ?";
            $categoryLevel1->category_child_list = $this->db->query($sql2, $categoryLevel1->category_id)->result();
        }
        return $categoryLevel1List;
    }
}
