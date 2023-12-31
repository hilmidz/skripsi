<title>SIAK biMBA</title>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Guru</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url('Kepalaunit') ?>">Home</a></li>
        <li class="breadcrumb-item active">Guru</li>
      </ol>
    </nav>

    <a href="<?= site_url('kepalaunit/add_guru') ?>" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah Data Guru</a>
    </div>
    </div>
    <?= $this->session->flashdata('success')?>
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
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;
                  foreach ($guru as $users) { ?>
                    <tr>
                      <td><?= $i++ ?></td>
                      <td><?= $users->nip ?></td>
                      <td><?= $users->nama_petugas ?></td>
                      <td><?= $users->email_petugas ?></td>
                      <td><?= $users->tempatlahir_petugas ?></td>
                      <td><?= $users->tgllahir_petugas ?></td>
                      <td><?= $users->jk_petugas ?></td>
                      <td><?= $users->agama_petugas ?></td>
                      <td><?= $users->telp_petugas ?></td>
                      <td><?= $users->alamat_petugas ?></td>
                      <?php if($users->status_petugas == "Aktif" ){?>
                      <td><span class="badge text-bg-success"><?= $users->status_petugas ?></span></td>
                      <?php } else { ?>
                        <td><span class="badge text-bg-danger"><?= $users->status_petugas ?></span></td>
                        <?php } ?>
                      <td><a href="<?= site_url('kepalaunit/edit_guru/' . $users->id_petugas) ?>" class="btn btn-sm btn-warning" style="background-color:#FFB000" ><i class="bi bi-pencil-square" style="color:white"></i></a>
                          <a href="<?= site_url('kepalaunit/deleteguru/' . $users->id_petugas) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a></td>
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