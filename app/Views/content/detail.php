<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $dMhs['Nama']; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jurusan : <?= $dMhs['Jurusan']; ?> Prodi : <?= $dMhs['Prodi']; ?> </h6>
                    <p class="card-text">Kelas : <?= $dMhs['Kelas']; ?> </p>
                    <P>Aktif Mulai: <?= $dMhs['created_at']; ?></P>
                    <div class="container">
                        <div class="row">
                            <div class="col lg-6">
                                <a href="/pages/edit/<?= $dMhs['id']; ?> " class="btn btn-warning">Edit</a>
                            </div>

                            <div class="col lg-6">
                                <form action="/pages/<?= $dMhs['id']; ?> " method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger " onclick="return confirm('Yakin Hapus Data ?')">Delete</button>
                                </form>
                                <!-- <a href="/pages/delete/<?= $dMhs['id']; ?> " class="btn btn-danger">Delete</a> -->
                            </div>
                        </div>
                        <a href="/pages">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>