<?php

class Product_model extends CI_Model {
    public function get_last_ten_entries() {
        $query = $this->db->get('product', 10);
        return $query->result();
    }

    public function get_feat_product_list() {
        $this->load->library('product');

        $sql = "select * from product where feat_flg = '1'";
        $query = $this->db->query($sql);
        return $query->result('Product');
    }
    
    public function get_by_id($product_id) {
        
        $sql = "select * from product where product_id = ?";
        $query = $this->db->query($sql, $product_id);
        return $query->result();
    }
    
    public function get_relate_product_by_id($product_id) {
        $sql = "select p.* 
                from product p inner join product_relate pr on p.product_id = pr.product_relate_id 
                where pr.product_id = ?";
        $query = $this->db->query($sql, $product_id);
        return $query->result();
    }
}
