<title>SIAK biMBA</title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1 class="mb-3">Data Nilai</h1>

        <section class="section">
            <div class="row">
                <?php foreach ($jadwal as $jadwal) { ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <p class="fw-bold fs-5">Tema Belajar: <?= $jadwal->tema_pelajaran ?></p>
                                <p class="fw-bold">Siswa </p>
                                <ol start="1">
                                    <li><b><?= $jadwal->nama_siswa ?></b> | Nis: <?= $jadwal->nim_siswa ?> | Status: <?= $jadwal->status_siswa ?>
                                        <a href="<?= site_url('Petugas/do_add_nilai/' . $jadwal->id_siswa) ?>" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Tambah Nilai</a>
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </section>
        </table>