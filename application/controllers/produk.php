<?php

class Produk extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('M_produk');
      $this->load->library('form_validation');
   }

   public function index()
   {
      $this->load->helper('url');
      $data['produk'] = $this->M_produk->getProduk();
      $data['judul'] = "Katalog Produk";
      $this->load->view('produk/v_produk', $data);
   }

   public function create()
   {
      // rules form validation CI
      $this->form_validation->set_rules('harga', '"harga produk"', 'numeric');
      $this->form_validation->set_rules('stok', '"stok produk"', 'numeric');

      if ($this->form_validation->run() == FALSE) {
         $data['judul'] = "Tambah Produk Baru";
         $this->load->view('produk/v_create', $data);
      } else {
         if ($this->input->post()) {
            $data_produk = $this->input->post();
            $this->M_produk->insertProduk($data_produk);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('produk');
         } else {
            $data['judul'] = "Tambah Produk Baru";
            $this->load->view('produk/v_create', $data);
         }
      }
   }

   public function update($id_produk = null)
   {
      if ($this->input->post()) {
         $data_produk = $this->input->post();
         $this->M_produk->updateProduk($data_produk);
         $this->session->set_flashdata('flash', 'diubah');
         redirect('produk');
      } else {
         $data['judul'] = "Update Data Produk";
         $data['produk'] = $this->M_produk->get_produk_one($id_produk);
         $this->load->view('produk/v_update', $data);
      }
   }

   public function delete($id_produk = null)
   {
      $this->M_produk->deleteProduk($id_produk);
      $this->session->set_flashdata('flash', 'dihapus');
      redirect('produk');
   }
};

// Nama  : Bregsi Atingsari Julastri
// NPM   : 20081010211
// Kelas : Pemrograman Web E081