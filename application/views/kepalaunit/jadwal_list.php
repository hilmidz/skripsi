<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Jadwal</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('Kepalaunit') ?>">Home</a></li>
                <li class="breadcrumb-item active">Jadwal</li>
            </ol>
        </nav>

        <a href="<?= site_url('kepalaunit/add_jadwal') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Jadwal</a>
        </div>
        </div>
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
                                        <th scope="col">Hari, Tanggal</th>
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
                                            <td><?= $jadwal->hari_jadwal ?>, <?= $jadwal->tanggal ?></td>
                                            <td><?= $jadwal->tema_pelajaran ?></td>
                                            <td><?= $jadwal->jam_mulai ?></td>
                                            <td><?= $jadwal->jam_selesai ?></td>
                                            <td><?= $jadwal->nama_petugas ?></td>
                                            <td><?= $jadwal->nama_kelas ?> <?= $jadwal->nama_kategori ?></td>

                                            <td><a class="btn btn-primary btn-sm" href="<?= site_url('kepalaunit/detail_jadwal/' . $jadwal->id_jadwal) ?>">Detail </a>
                                                <a class="btn btn-warning btn-sm" href="<?= site_url('kepalaunit/edit_jadwal/' . $jadwal->id_jadwal) ?>" class="btn btn-sm btn-warning" style="background-color:#FFB000"><i class="bi bi-pencil-square" style="color:white"></i></a>
                                                <a class="btn btn-danger btn-sm" href="<?= site_url('kepalaunit/deletejadwal/' . $jadwal->id_jadwal) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
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
        </table>