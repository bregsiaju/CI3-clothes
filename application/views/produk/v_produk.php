<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $judul; ?></title>

   <!-- css bootstrap -->
   <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>

<body>
   <div class="container mt-4">
      <div class="mt-3 mb-5 text-center">
         <h1><?= $judul; ?></h1>
      </div>
      <?php if ($this->session->flashdata('flash')) : ?>
         <div class="row mt-1">
            <div class="col-md-6">
               <div class="alert alert-success alert-dismissible" role="alert">
                  Produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            </div>
         </div>
      <?php endif; ?>
      <table border="1" class="table table-bordered border-dark align-middle table-sm">
         <thead>
            <tr class="table-primary text-center table-bordered border-dark">
               <th>No</th>
               <th>Nama Produk</th>
               <th>Harga (Rp)</th>
               <th>Merk</th>
               <th>Stok</th>
               <th>Kategori Produk</th>
               <th>Supplier</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1; ?>
            <?php foreach ($produk as $barang) : ?>
               <tr>
                  <td class="text-center"><?= $i++ ?></td>
                  <td><?= $barang->nama_produk; ?></td>
                  <td class="text-end"><?= number_format($barang->harga, 0, '', '.'); ?></td>
                  <td class="text-center"><?= $barang->merk_produk; ?></td>
                  <td class="text-center"><?= $barang->stok; ?></td>
                  <td><?= $barang->kategori_produk; ?></td>
                  <td><?= $barang->supplier; ?></td>
                  <td class="text-center">
                     <a href="<?= base_url(); ?>index.php/produk/update/<?= $barang->id_produk; ?>"><button type="button" class="btn btn-primary">Update</button></a>
                     <a href="<?= base_url(); ?>index.php/produk/delete/<?= $barang->id_produk; ?>" onclick="return confirm('Apakah Anda yakin menghapus produk?')"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
      <div class="mt-3">
         <a href=" <?= base_url(); ?>index.php/produk/create" class="butt"><button type="button" class="btn btn-success">Tambah Produk</button></a>
      </div>
   </div>

   <!-- script -->
   <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>

</html>