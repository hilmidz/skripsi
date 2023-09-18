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
                            <form action="<?= site_url('siswa/do_update_siswa') ?>" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username_siswa" value="<?= $siswa['username_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">NIS</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nim_siswa" value="<?= $siswa['nim_siswa'] ?>" readonly>
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk_siswa" value="Laki-laki" <?= $siswa['jk_siswa'] == 'Laki-laki' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios1">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk_siswa" value="Perempuan" <?= $siswa['jk_siswa'] == 'Perempuan' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="gridRadios2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tempatlahir_siswa" value="<?= $siswa['tempatlahir_siswa'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tgllahir_siswa" value="<?= $siswa['tgllahir_siswa'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="agama_siswa">
                                            <option selected>Open this select menu</option>
                                            <option value="Islam" <?= $siswa['agama_siswa'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                            <option value="Kristen" <?= $siswa['agama_siswa'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                            <option value="Hindu" <?= $siswa['agama_siswa'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                            <option value="Budha" <?= $siswa['agama_siswa'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                                            <option value="Konghucu" <?= $siswa['agama_siswa'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px" name="alamat_siswa"><?= $siswa['alamat_siswa'] ?></textarea>
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
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ganti Password</h5>
                            <form action="<?= site_url('siswa/change_password_siswa') ?>" method="post">
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
                    <?= $this->session->flashdata('success')?>
                    <?= $this->session->flashdata('error')?>
                </div>
            </div>
            <?php if (empty($cekortu)) { ?>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Orang Tua</h5>
                                <form action="<?= site_url('siswa/do_add_ortu') ?>" method="post">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ayah">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pekerjaan_ayah">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Agama Ayah</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="agama_ayah">
                                                <option selected>Open this select menu</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Ayah</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px" name="alamat_ayah"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Telepon Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="telp_ayah">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ibu">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pekerjaan_ibu">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Agama Ibu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="agama_ibu">
                                                <option selected>Open this select menu</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Ibu</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px" name="alamat_ibu"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Telepon Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="telp_ibu">
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
            <?php } else { ?>
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Orang Tua</h5>
                                <form action="<?= site_url('siswa/do_update_ortu') ?>" method="post">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ayah" value="<?= $cekortu['nama_ayah'] ?>">
                                            <input type="hidden" class="form-control" name="id" value="<?= $cekortu['id'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pekerjaan_ayah" value="<?= $cekortu['pekerjaan_ayah'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Agama Ayah</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="agama_ayah">
                                                <option selected>Open this select menu</option>
                                                <option value="Islam" <?= $cekortu['agama_ayah'] == "Islam" ? 'selected' : '' ?>>Islam</option>
                                                <option value="Kristen" <?= $cekortu['agama_ayah'] == "Kristen" ? 'selected' : '' ?>>Kristen</option>
                                                <option value="Hindu" <?= $cekortu['agama_ayah'] == "Hindu" ? 'selected' : '' ?>>Hindu</option>
                                                <option value="Budha" <?= $cekortu['agama_ayah'] == "Budha" ? 'selected' : '' ?>>Budha</option>
                                                <option value="Konghucu" <?= $cekortu['agama_ayah'] == "Konghucu" ? 'selected' : '' ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Ayah</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px" name="alamat_ayah"><?= $cekortu['alamat_ayah'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Telepon Ayah</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="telp_ayah" value="<?= $cekortu['telp_ayah'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Nama Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_ibu" value="<?= $cekortu['nama_ibu'] ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="pekerjaan_ibu" value="<?= $cekortu['pekerjaan_ibu'] ?>">
                                        </div>
                                    </div>
                                    <div class=" row mb-3">
                                        <label class="col-sm-2 col-form-label">Agama Ibu</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" name="agama_ibu">
                                                <option value="Islam" <?= $cekortu['agama_ibu'] == "Islam" ? 'selected' : '' ?>>Islam</option>
                                                <option value="Kristen" <?= $cekortu['agama_ibu'] == "Kristen" ? 'selected' : '' ?>>Kristen</option>
                                                <option value="Hindu" <?= $cekortu['agama_ibu'] == "Hindu" ? 'selected' : '' ?>>Hindu</option>
                                                <option value="Budha" <?= $cekortu['agama_ibu'] == "Budha" ? 'selected' : '' ?>>Budha</option>
                                                <option value="Konghucu" <?= $cekortu['agama_ibu'] == "Konghucu" ? 'selected' : '' ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Ibu</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px" name="alamat_ibu"><?= $cekortu['alamat_ibu'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Telepon Ibu</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="telp_ibu" value="<?= $cekortu['telp_ibu'] ?>">
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
            <?php } ?>
        </section>