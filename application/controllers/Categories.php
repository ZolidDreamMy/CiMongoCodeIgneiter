<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		   $this->load->model('categories_model');
		   $this->load->model('product_model');
    }
	
	public function index($categoriesId)
	{
		$data ['categories'] = $this->categories_model->findAll();
		$condition = array(
			'categories' => $this->mongo_db->create_document_id($categoriesId)		
		);
		$data ['products'] = $this->product_model->findAll($condition);

		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/menu', $data);
		$this->load->view('categories/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}
