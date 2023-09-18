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
                            <form action="<?= site_url('kepalaunit/do_update_admin') ?>" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_admin" value="<?= $admin['nama_admin'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username_admin" value="<?= $admin['username_admin'] ?>" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email_admin" value="<?= $admin['email_admin'] ?>" >
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
                            <form action="<?= site_url('kepalaunit/change_password_admin') ?>" method="post">
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