<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Produk</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
   <div class="container mt-5">
      <div class="col-sm-8">
         <div class="card">
            <h4 class="card-header"><?= $judul; ?></h4>
            <div class="card-body">
               <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger" role="alert">
                     <?php echo validation_errors(); ?>
                  </div>
               <?php endif; ?>
               <form action="<?= base_url(); ?>index.php/produk/create" method="POST">
                  <div class="mb-3 row">
                     <label for="nama_produk" class="col-form-label col-sm-3">Nama Produk</label>
                     <div class="col-sm-9">
                        <input type="text" name="nama_produk" class="form-control" required>
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="harga" class="col-form-label col-sm-3">Harga Produk</label>
                     <div class="col-sm-9">
                        <input type="text" name="harga" class="form-control" required>
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="merk_produk" class="col-form-label col-sm-3">Merk Produk</label>
                     <div class="col-sm-9">
                        <input type="text" name="merk_produk" class="form-control" required>
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="stok" class="col-form-label col-sm-3">Stok</label>
                     <div class="col-sm-9">
                        <input type="text" name="stok" class="form-control" required>
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="kategori_produk" class="col-form-label col-sm-3">Kategori Produk</label>
                     <div class="col-sm-9">
                        <input type="text" name="kategori_produk" class="form-control" required>
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="supplier" class="col-form-label col-sm-3">Supplier</label>
                     <div class="col-sm-9">
                        <input type="text" name="supplier" class="form-control" required>
                     </div>
                  </div>
                  <input type="submit" value="Simpan" class="btn btn-primary float-end">
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</html>