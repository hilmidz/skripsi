<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Jadwal</h1>
        <br>
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Jadwal</h5>
                            <form action="<?= site_url('kepalaunit/do_add_jadwal') ?>" method="post">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Hari</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="hari_jadwal">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jum'at">Jum'at</option>
                                            <option value="Sabtu">Sabtu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tema Pelajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tema_pelajaran">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Jam Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jam_mulai" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Jam Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jam_selesai" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Petugas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_petugas">
                                            <?php foreach ($petugas as $petugas) { ?>
                                                <option value="<?= $petugas->id_petugas ?>"><?= $petugas->nama_petugas ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_kelas">
                                            <?php foreach ($kelas as $kelas) { ?>
                                                <option value="<?= $kelas->id_kelas ?>"><?= $kelas->nama_kelas ?> <?= $kelas->nama_kategori ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                                    </div>
                                </div>
                                </table>
                            </form>