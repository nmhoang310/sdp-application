<?php

/**
 * controllers/manage/Home
 */
class Home extends MY_Controller {

	public function index()
	{
		$data['title'] = "Home page title";
		$data['content'] = "Content of home page";
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		$this->load->model("Product_model");
		$data['product'] = $this->Product_model->get_last_ten_entries();
		$data['productFeat'] = $this->Product_model->get_feat_product_list();

		// $this->load->view('manage/home', $data);
		$this->load->helper("url");
		$string = $this->load->view('manage/home', $data, TRUE);
		echo $string;
	}
}

?>
