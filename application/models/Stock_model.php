<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock_model extends CI_Model
{
    public function getAllProduct()
    {
        $query = $this->db->get('product');
        return $query->result_array();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('product', ['id' => $id])->row_array();
    }

    public function addProduct()
    {
        $data = [
            "product_name" => htmlspecialchars($this->input->post('product_name', true)),
            "sku" => htmlspecialchars($this->input->post('sku', true)),
            "price" => htmlspecialchars($this->input->post('price', true)),
            "qty" => htmlspecialchars($this->input->post('qty', true)),
            "description" => htmlspecialchars($this->input->post('description', true)),
            "supplier" => htmlspecialchars($this->input->post('supplier', true))
        ];

        $data = $this->security->xss_clean($data);
        $this->db->insert('product', $data);
    }

    public function editProduct()
    {
        $data = [
            "product_name" => htmlspecialchars($this->input->post('product_name', true)),
            "sku" => htmlspecialchars($this->input->post('sku', true)),
            "price" => htmlspecialchars($this->input->post('price', true)),
            "qty" => htmlspecialchars($this->input->post('qty', true)),
            "description" => htmlspecialchars($this->input->post('description', true)),
            "supplier" => htmlspecialchars($this->input->post('supplier', true))
        ];

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('product', $data);
    }

    public function deleteProduct($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }

    public function count()
    {
        return $this->db->count_all_results('product');
    }
}
