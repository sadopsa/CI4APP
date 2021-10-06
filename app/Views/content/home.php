<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Mahasiswa</h1>
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class=" d-flex justify-content-end">
                <a href="/pages/create" class="btn btn-primary mb-2 mt-3">Tambah Mahasiswa</a>
            </div>
            <table class="table">
                <thead class="TableAlignTengah">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($mahasiswa as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?> </th>
                            <td><?= $m['Nama']; ?> </td>
                            <td><?= $m['Jurusan']; ?> </td>
                            <td><?= $m['Prodi']; ?> </td>
                            <td><?= $m['Kelas']; ?> </td>
                            <td>
                                <a href="/Pages/Detail/<?= $m['id']; ?> " class="btn btn-success jarak">detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>