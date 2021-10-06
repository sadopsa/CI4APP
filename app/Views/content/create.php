<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Mahasiswa</h2>
        
            <form action="/Pages/Save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid':''; ?> " 
                        id="nama" autofocus placeholder="Nama Lenkap" value="<?= old('nama'); ?> ">
                   <div class="invalid-feedback">
                       <?= $validation->getError('nama'); ?> 
                   </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jurusan" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid':''; ?>" 
                        id="jurusan" placeholder="Jurusan" value="<?= old('jurusan'); ?> ">
                        <div class="invalid-feedback">
                       <?= $validation->getError('jurusan'); ?> 
                   </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" name="prodi" class="form-control <?= ($validation->hasError('prodi')) ? 'is-invalid':''; ?>" 
                        id="prodi" placeholder="Program Studi" value="<?= old('prodi'); ?> ">
                        <div class="invalid-feedback">
                        <?= $validation->getError('prodi'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelas" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid':''; ?>" 
                        id="kelas" placeholder="Kelas" value="<?= old('kelas'); ?> ">
                        <div class="invalid-feedback">
                        <?= $validation->getError('kelas'); ?>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="/pages" class="d-flex justify-content-end">Kembali ke Data Mahasiswa</a>
            </form>
            <div class="container mt-5">

            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>