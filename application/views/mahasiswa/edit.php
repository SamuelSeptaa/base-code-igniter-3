<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if($this->session->flashdata('flash')) {?>
                    <div class="alert alert-success" role="alert">
                       <?= $this->session->flashdata('flash'); ?> 
                    </div>
                    <?php } ?>
                    <?php if(validation_errors()) {?>
                    <div class="alert alert-danger" role="alert">
                       <?= validation_errors(); ?> 
                    </div>
                    <?php } ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']?>">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No_HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $mahasiswa['no_hp']?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']?>">
                        <button type="submit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>