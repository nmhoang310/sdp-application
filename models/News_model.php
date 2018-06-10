<?php

class News_model extends CI_Model
{

    public function get_last_news_list()
    {
        $this->load->library('news');
        $sql = "select * from news where is_publish = '1' order by reg_date desc limit 3";
        return $this->db->query($sql)->result('News');
    }
    
    public function get_total() {
        $sql = "select count(1) from news where is_publish = '1'";
        return $this->db->query($sql)->result('News');
    }
    
    public function get_current_page_records($limit, $start) {
        
    }
}
