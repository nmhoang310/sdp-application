<?php

class PageReview_model extends CI_Model {
    public function get_page_review_list() {
        $this->load->library('pageReview');
        $sql = "select * from page_review order by reg_date desc";
        return $this->db->query($sql)->result('PageReview');
    }
}
