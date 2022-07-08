<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Data Produk</title>

   <!-- css bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
   <div class="container mt-5">
      <div class="col-sm-8">
         <div class="card">
            <h4 class="card-header"><?= $judul; ?></h4>
            <div class="card-body">
               <form action="<?= base_url(); ?>index.php/produk/update" method="POST">
                  <?php foreach ($produk as $barang) : ?>
                     <div class="mb-3 row">
                        <label for="id_produk" class="col-form-label col-sm-3">ID Produk</label>
                        <div class="col-sm-9">
                           <input type="text" name="id_produk" class="form-control" value="<?= $barang->id_produk; ?>" readonly>
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="nama_produk" class="col-form-label col-sm-3">Nama Produk</label>
                        <div class="col-sm-9">
                           <input type="text" name="nama_produk" class="form-control" value="<?= $barang->nama_produk; ?>">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="harga" class="col-form-label col-sm-3">Harga Produk</label>
                        <div class="col-sm-9">
                           <input type="text" name="harga" class="form-control" value="<?= $barang->harga; ?>">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="merk_produk" class="col-form-label col-sm-3">Merk Produk</label>
                        <div class="col-sm-9">
                           <input type="text" name="merk_produk" class="form-control" value="<?= $barang->merk_produk; ?>">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="stok" class="col-form-label col-sm-3">Stok</label>
                        <div class="col-sm-9">
                           <input type="text" name="stok" class="form-control" value="<?= $barang->stok; ?>">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="kategori_produk" class="col-form-label col-sm-3">Kategori Produk</label>
                        <div class="col-sm-9">
                           <input type="text" name="kategori_produk" class="form-control" value="<?= $barang->kategori_produk; ?>">
                        </div>
                     </div>
                     <div class="mb-3 row">
                        <label for="supplier" class="col-form-label col-sm-3">Supplier</label>
                        <div class="col-sm-9">
                           <input type="text" name="supplier" class="form-control" value="<?= $barang->supplier; ?>">
                        </div>
                     </div>
                     <input type="submit" value="Update" class="btn btn-primary float-end">
                  <?php endforeach; ?>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</html>