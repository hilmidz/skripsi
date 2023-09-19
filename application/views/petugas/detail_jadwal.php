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
                            <?php
                            $tanggal_awal = $jadwal['tanggal'];
                            $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

                            $tanggal_array = explode("-", $tanggal_awal);
                            $hari = date("w", strtotime($tanggal_awal));
                            $bulan = date("F", strtotime($tanggal_awal));
                            $tahun = $tanggal_array[0];
                            ?>


                            <p class="fw-medium" style="margin-top: -12px">Jadwal: <?= $nama_hari[$hari] ?>, <?= $tanggal_array[2] ?> <?= $bulan ?> <?= $tahun ?> | <?= $jadwal['jam_mulai'] ?> - <?= $jadwal['jam_selesai'] ?></p>
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