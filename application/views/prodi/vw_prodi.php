<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul; ?>
            </h1>
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Add Program Study</a></div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Program Study Name</td>
                                <td>Room</td>
                                <td>Department</td>
                                <td>Accreditation</td>
                                <td>Name of The Program Study Chief</td>
                                <td>Year Established</td>
                                <td>Graduate Output</td>
                                <td>Picture</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                            <?php foreach ($prodi as $ud): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>.
                                    </td>
                                    <td>
                                        <?= $ud['nama_prodi']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['ruangan']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['jurusan']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['akreditasi']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['nama_kaprodi']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['tahun_berdiri']; ?>
                                    </td>
                                    <td>
                                        <?= $ud['lulusan_output']; ?>
                                    </td>
                                    <td>
                                        <img src="<?=base_url('assets/img/prodi/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('Prodi/hapus/') . $ud['id']; ?>"
                                            class="btn btn-danger">Delete</a>
                                        <a href="<?= base_url('Prodi/edit/') . $ud['id']; ?>"
                                            class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Prodi/detail/') . $ud['id']; ?>"
                                            class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>