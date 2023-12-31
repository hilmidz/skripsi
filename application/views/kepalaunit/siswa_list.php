<title>SIAK biMBA</title>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Siswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url('welcome') ?>">Home</a></li>
        <li class="breadcrumb-item active">Siswa</li>

      </ol>
    </nav>

    <a href="<?= site_url('kepalaunit/add_siswa') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Siswa</a>
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
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;
                  foreach ($siswa as $users) { ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= $users->nim_siswa ?></td>
                      <td><?= $users->nama_siswa ?></td>
                      <td><?= $users->tempatlahir_siswa ?></td>
                      <td><?= $users->tgllahir_siswa ?></td>
                      <td><?= $users->jk_siswa ?></td>
                      <td><?= $users->agama_siswa ?></td>
                      <td><?= $users->alamat_siswa ?></td>
                      <td><?= $users->status_siswa ?></td>
                      <td><?= $users->nama_kelas ?> <?= $users->nama_kategori ?></td>

                      <td><a href="<?= site_url('kepalaunit/edit_siswa/' . $users->id_siswa) ?>"class="btn btn-sm btn-warning" style="background-color:#FFB000"><i class="bi bi-pencil-square" style="color:white"></i></a>
                          <a href="<?= site_url('kepalaunit/deletesiswa/' . $users->id_siswa) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>

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