<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">
                <?php echo $judul2; ?>
            </h1>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class=" card-header justify-content-center">
                            Form Tambah Data Program Studi
                        </div>

                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">

                                </div>
                                <div class="form-group">
                                    <label for="ruangan">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control" id="ruangan"
                                        placeholder="ruangan">

                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" class="form-control" id="jurusan" class="form-control">
                                        <option value="">Jurusan</option>
                                        <option value="JTI">JTI</option>
                                        <option value="Industri">Industri</option>
                                        <option value="Akuntan">Akuntansi Perpajakan</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <input type="text" name="akreditasi" class="form-control" id="akreditasi"
                                        placeholder="akreditasi">

                                </div>
                                <div class="form-group">
                                    <label for="nama_kaprodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi"
                                        placeholder="nama kapordi">

                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"
                                        placeholder="tahun berdiri">

                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" class="form-control" id="lulusan"
                                        placeholder="Output Lulusan">

                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose File</label>
                                    </div>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Program
                                    Studi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>