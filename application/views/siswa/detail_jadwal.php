<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1 class="mb-3">Detail Jadwal</h1>

        <section class="section">
            <div class="row">

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body p-3">
                            <p class="fw-bold fs-5">Nama Pengajar: <?= $jadwal['nama_petugas'] ?> | <?= $jadwal['nip'] ?></p>
                            <p class="fw-medium">Tema Pelajaran: <?= $jadwal['tema_pelajaran'] ?></p>
                            <p class="fw-medium" style="margin-top: -12px">Jadwal: <?= $jadwal['hari_jadwal'] ?> | <?= $jadwal['jam_mulai'] ?> - <?= $jadwal['jam_selesai'] ?></p>
                            <p class="fw-medium" style="margin-top: -12px">Kelas: <?= $jadwal['nama_kelas'] ?> <?= $jadwal['nama_kategori'] ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body p-3">
                            <p class="fw-bold fs-5">Siswa </p>

                            <ul class="list-group list-group-flush">
                                <?php foreach ($siswa as $siswa) { ?>
                                    <li class="list-group-item"><b><?= $siswa->nama_siswa ?></b> | Nis: <?= $siswa->nim_siswa ?> | Status: <?= $siswa->status_siswa ?></li>
                                <?php } ?>
                            </ul>

                            <?php if (empty($siswa)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    Data Siswa Belum Ada
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        </table>