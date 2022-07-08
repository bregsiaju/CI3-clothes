<?php

class M_produk extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
   }

   // mengambil data dari tabel produk
   public function getProduk()
   {
      $sql = "SELECT * FROM produk";
      $query = $this->db->query($sql);
      return $query->result();
   }

   public function get_produk_one($in_idProduk)
   {
      return $this->db
         ->where('id_produk', $in_idProduk)
         ->get('produk')
         ->result();
   }

   public function insertProduk($data)
   {
      $sql = "INSERT INTO produk
      (nama_produk, harga, merk_produk, stok, kategori_produk, supplier)
      VALUES (?,?,?,?,?,?)";

      $this->db->query(
         $sql,
         array(
            $data['nama_produk'],
            $data['harga'],
            $data['merk_produk'],
            $data['stok'],
            $data['kategori_produk'],
            $data['supplier']
         )
      );
   }

   public function updateProduk($data)
   {
      $sql = "UPDATE produk SET
      nama_produk = ?, harga = ?, merk_produk = ?, stok = ?, kategori_produk = ?, supplier = ?
      WHERE id_produk = ?";

      $this->db->query(
         $sql,
         array(
            $data['nama_produk'],
            $data['harga'],
            $data['merk_produk'],
            $data['stok'],
            $data['kategori_produk'],
            $data['supplier'],
            $data['id_produk']
         )
      );
   }

   public function deleteProduk($id_produk_in)
   {
      $sql = "DELETE FROM produk WHERE id_produk = ?";
      $this->db->query(
         $sql,
         array(
            $id_produk_in
         )
      );
   }
}
