<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Jadwal Saya</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('welcome') ?>">Home</a></li>
                <li class="breadcrumb-item active">Jadwal Saya</li>

            </ol>
        </nav>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Tema Pelajaran</th>
                                        <th scope="col">Jam Mulai</th>
                                        <th scope="col">Jam Selesai</th>
                                        <th scope="col">Nama Petugas</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($jadwal as $jadwal) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $jadwal->hari_jadwal ?></td>
                                            <td><?= $jadwal->tema_pelajaran ?></td>
                                            <td><?= $jadwal->jam_mulai ?></td>
                                            <td><?= $jadwal->jam_selesai ?></td>
                                            <td><?= $jadwal->nama_petugas ?></td>
                                            <td><?= $jadwal->nama_kelas ?> <?= $jadwal->nama_kategori ?></td>

                                            <td><a class="btn btn-primary btn-sm" href="<?= site_url('Petugas/detail_jadwal/' . $jadwal->id_jadwal) ?>">Detail </a>

                                            </td>

                                        </tr><?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <a href="<?= site_url('kepalaunit/add_jadwal') ?>">Tambah Jadwal</a>
        </table>