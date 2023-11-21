<div class=layoutSidenav_content>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Ubah Data Calon Ketua Umum PSSI
                    </div>
                    <div class="card-body">
                        <!-- <form action="<?= base_url('index.php/Caketum_pssi/update'); ?>" method="post"> -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $caketum_pssi['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $caketum_pssi['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" value="<?= $caketum_pssi['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" value="<?= $caketum_pssi['asal']; ?>" class="form-control" id="asal" placeholder="Asal">
                                <?= form_error('asal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" value="<?= $caketum_pssi['umur']; ?>"
                                    class="form-control" id="umur" placeholder="Umur">
                                <?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman">Pengalaman</label>
                                <input type="text" name="pengalaman" value="<?= $caketum_pssi['pengalaman']; ?>" class="form-control" id="pengalaman" 
                                placeholder="Pengalaman Sepak Bola Professional">
                                <?= form_error('pengalaman', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="durasi">Durasi</label>
                                <input type="text" name="durasi" value="<?= $caketum_pssi['durasi']; ?>"
                                    class="form-control" id="durasi" placeholder="Durasi Pengalaman Sepak Bola Professional">
                                <?= form_error('durasi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                            <img src="<?= base_url('assets/assets/img/caketum_pssi/') . $caketum_pssi['foto']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="foto">
                                <label for="foto" class="custom-file-label">Choose File</label>
                                <?= form_error('foto', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>
                            <div class="form-group mt-3">
                                <a href="<?= base_url('index.php/') ?>Caketum_pssi/" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                    Calon Ketua Umum PSSI</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>