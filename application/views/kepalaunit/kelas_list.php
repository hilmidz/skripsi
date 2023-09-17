<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Kelas & Kategori Kelas</h1>

        <section class="section">
            <div class="row">

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Kategori Kelas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($kelas as $kelas) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $kelas->nama_kelas ?></td>
                                            <td><?= $kelas->nama_kategori ?></td>
                                            <td><a href="<?= site_url('kepalaunit/edit_kelas/' . $kelas->id_kelas) ?>">Edit
                                                    <a href="<?= site_url('kepalaunit/deletekelas/' . $kelas->id_kelas) ?>" onclick="return confirm('Are you sure?')">Delete</td>

                                        </tr><?php } ?>
                                </tbody>
                                
                            </table>
                            <!-- End Table with stripped rows -->
                            <a href="<?= site_url('kepalaunit/add_kelas') ?>">Tambah Data Kelas</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori Kelas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($kategori_kelas as $kategori) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $kategori->nama_kategori ?></td>


                                            <td><a href="<?= site_url('kepalaunit/edit_siswa/' . $kategori->id) ?>">Edit
                                                    <a href="<?= site_url('kepalaunit/deletesiswa/' . $kategori->id) ?>" onclick="return confirm('Are you sure?')">Delete</td>

                                        </tr><?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>

        </section>
        </table>