<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Profile</h1>
        <br>
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <form action="<?= site_url('kepalaunit/do_add_siswa') ?>" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nip" value="<?= $petugas['nip'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Petugas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_petugas" value="<?= $petugas['nama_petugas'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email_petugas" value="<?= $petugas['email_petugas'] ?>" readonly>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempatlahir_petugas" value="<?= $petugas['tempatlahir_petugas'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tgllahir_petugas" value="<?= $petugas['tgllahir_petugas'] ?>">
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk_petugas" value="Laki-laki" <?= $petugas['jk_petugas'] == 'Laki-laki' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk_petugas" value="Perempuan" <?= $petugas['jk_petugas'] == 'Perempuan' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="agama_petugas">
                                            <option selected>Open this select menu</option>
                                            <option value="Islam" <?= $petugas['agama_petugas'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                            <option value="Kristen" <?= $petugas['agama_petugas'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                            <option value="Hindu" <?= $petugas['agama_petugas'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                            <option value="Budha" <?= $petugas['agama_petugas'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                                            <option value="Konghucu" <?= $petugas['agama_petugas'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="alamat_siswa"><?= $petugas['alamat_petugas'] ?></textarea>
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_petugas" value="Aktif" <?= $petugas['status_petugas'] == 'Aktif' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_petugas" value="Non-Aktif" <?= $petugas['status_petugas'] == 'Non-Aktif' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios2">
                                                Non-Aktif
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                                    </div>
                                </div>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ganti Password</h5>
                            <form action="<?= site_url('kepalaunit/do_add_siswa') ?>" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                                    </div>
                                </div>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>