<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Stock_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stock'] = $this->Stock_model->getAllProduct();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('inventory/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->Stock_model->getProductById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('inventory/detail', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('sku', 'SKU', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('inventory/add');
            $this->load->view('templates/footer');
        } else {
            $this->Stock_model->addProduct();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
            Product data has been added!
          </div>');
            redirect('inventory');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Stock';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['product'] = $this->Stock_model->getProductById($id);

        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('sku', 'SKU', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('qty', 'Qty', 'required|numeric');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('inventory/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Stock_model->editProduct();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
            Product data has been edited!
          </div>');
            redirect('inventory');
        }
    }

    public function delete($id)
    {
        $this->Stock_model->deleteProduct($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
        Product data has been deleted!
      </div>');
        redirect('inventory');
    }
}
