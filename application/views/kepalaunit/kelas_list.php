<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Kelas & Kategori Kelas</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('Kepalaunit') ?>">Home</a></li>
            <li class="breadcrumb-item active">Kelas & Kategori Kelas</li>
        </ol>
        </nav>
        <a href="<?= site_url('kepalaunit/add_kelas') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Kelas</a>
        </div>
        </div>
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
                                            <td><a href="<?= site_url('kepalaunit/edit_kelas/' . $kelas->id_kelas) ?>"class="btn btn-sm btn-warning" style="background-color:#FFB000"><i class="bi bi-pencil-square" style="color:white"></i></a>
                                                <a href="<?= site_url('kepalaunit/deletekelas/' . $kelas->id_kelas) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>

                                        </tr><?php } ?>
                                </tbody>

                            </table>

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


                                            <td><a href="<?= site_url('kepalaunit/edit_siswa/' . $kategori->id_kategori) ?>" class="btn btn-sm btn-warning" style="background-color:#FFB000"><i class="bi bi-pencil-square" style="color:white"></i></a>
                                                    <a href="<?= site_url('kepalaunit/deletesiswa/' . $kategori->id_kategori) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>

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