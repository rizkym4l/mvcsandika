
<br>

<div class="container mt-3">



    <?php Flasher::flash(); ?>

    <div class="row mb-4">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tomboTambahData" data-bs-toggle="modal"
                data-bs-target="#forModal">
                Tambah data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group ">
                    <input autocomplete="off" type="text" class="form-control" placeholder="Neangan Murid" name="keyword" id="keyword">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Teang</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">



            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item">
                        <?= $mhs["nama"] . '<br>' ?>

                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                            class="badge text-bg-primary   justify-content-between pa">detail</a>

                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                            class="badge text-bg-success pa   justify-content-between tampilModalUbah"
                            data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">Ubah</a>

                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                            class="badge text-bg-danger pa  justify-content-between"
                            onclick="return confirm('Yakin?')">Hapus</a>

                    </li>

                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>


<!-- MODAl -->

<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="teslabel">Tambah data Mahasiswa</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">

                    </div>


                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" aria-describedby="emailHelp" name="nrp">

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">

                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Perkebunan">Teknik Perkebunan</option>
                            <option value="Teknik Masak">Teknik Masak</option>
                            <option value="Teknik Otomotif">Teknik Otomotif</option>
                            <option value="Teknik Kehutanan">Teknik Kehutanan</option>
                        </select>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>

                </form>
            </div>
        </div>
    </div>
</div>