<?php

/**
 * controllers/Product
 */
class Product extends MY_Main_Controller {
    
    public function info($product_id)
    {
        $this->load->model('Category_model');
        $this->putData('categoryList', $this->Category_model->get_category_list());
        
        $this->load->model('Product_model');
        
        $product = $this->Product_model->get_by_id($product_id);
        if (isset($product)) {
            $this->load->library('typography');
            $product[0]->short_description = $this->typography->auto_typography($product[0]->short_description);
            $product[0]->full_description = $this->typography->auto_typography($product[0]->full_description);
            $this->load->model('ProductImage_model');
            $product_image_array = $this->ProductImage_model->get_by_product_id($product_id);
            if (isset($product_image_array)) {
                $product[0]->product_image_array = $product_image_array;
            }
            $this->putData('product', $product[0]);
        }
        
        $productRelateList = $this->Product_model->get_relate_product_by_id($product_id);
        $this->putData('productRelateList', $productRelateList);
        
        $this->putData('main_view', 'product_detail');
        $this->putData('relate_product_view', 'relate_product');
        $this->load->view('layout/main_layout', $this->getData());
    }

    
}

?>
