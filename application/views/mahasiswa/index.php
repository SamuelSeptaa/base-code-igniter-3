<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                    <a class="btn btn-outline-success"  href="<?= base_url();?>mahasiswa/reset">Reset Pencarian</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Data Mahasiswa</h3>
            <?php if($this->session->flashdata('flash')) {?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('flash'); ?> 
                </div>
            <?php } ?>
           
            <div class="alert alert-primary" role="alert">
                <?= 'Menampilkan '.$total_rows.' data'; ?> 
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No-HP</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= ++$start_at ?></td>
                    <td><?= $mhs['nama']; ?> </td>
                    <td><?= $mhs['nim']; ?> </td>
                    <td><?= $mhs['alamat']; ?> </td>
                    <td><?= $mhs['no_hp']; ?> </td>
                    <td>
                        <a href="<?= base_url() ?>mahasiswa/hapus/<?=$mhs['id'];?>" onclick="return confirm('hapus data <?= $mhs['nama']; ?>?')" class="badge badge-danger">Hapus</a>
                        <a href="<?= base_url() ?>mahasiswa/edit/<?=$mhs['id'];?>"   class="badge badge-warning">Edit</a>
                    </td>

                    </tr>
                <?php endforeach ?>
                    
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
    
</div>
