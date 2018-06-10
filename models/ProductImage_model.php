<?php

class ProductImage_model extends CI_Model {
    
    public function get_by_product_id($product_id) {
        $sql = "select * from product_image where product_id = ?";
        $query = $this->db->query($sql, $product_id);
        return $query->result();
    }

}
