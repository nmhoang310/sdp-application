<?php

/**
 * controllers/Home
 */
class Home extends MY_Main_Controller {

	public function index()
	{
	    $this->load->model("Category_model");
	    $this->putData('categoryList', $this->Category_model->get_category_list());
	    
		$this->load->model("Product_model");
		$this->load->model("PageReview_model");
		$this->load->model("News_model");

		$this->putData('lastNewsList', $this->News_model->get_last_news_list());
		$this->putData('pageReviewList', $this->PageReview_model->get_page_review_list());
		$this->putData('productList', $this->Product_model->get_last_ten_entries());
		$this->putData('productFeatList', $this->Product_model->get_feat_product_list());
		$this->putData('main_view', 'home');
		
		$this->load->view('layout/main_layout', $this->getData());
	}
	
}

?>
