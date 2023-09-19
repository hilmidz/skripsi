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
                                        <th scope="col">Tanggal</th>
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
                                            <?php
                                            $tanggal_awal = $jadwal->tanggal;
                                            $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

                                            $tanggal_array = explode("-", $tanggal_awal);
                                            $hari = date("w", strtotime($tanggal_awal));
                                            $bulan = date("F", strtotime($tanggal_awal));
                                            $tahun = $tanggal_array[0];
                                            ?>
                                            <td> <?= $nama_hari[$hari] ?>, <?= $tanggal_array[2] ?> <?= $bulan ?> <?= $tahun ?></td>
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
        </table>