<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Petugas</h1>
  <br>
    
    <section class="section">
      <div class="row">
      <div class="col-lg-6">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>
        <form action="<?= site_url('kepalaunit/update_siswa') ?>" method="post">
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>">
                    <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'] ?>" class="form-control" id="exampleFirstName" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username_siswa" value="<?= $siswa['username_siswa'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nim_siswa" value="<?= $siswa['nim_siswa'] ?>">
                </div>
            </div>

            <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_siswa" value="Laki-laki" <?= $siswa['jk_siswa'] == 'Laki-laki' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_siswa" value="Perempuan" <?= $siswa['jk_siswa'] == 'Perempuan' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
            </fieldset>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempatlahir_siswa" value="<?= $siswa['tempatlahir_siswa'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgllahir_siswa" value="<?= $siswa['tgllahir_siswa'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="agama_siswa" value="<?= $siswa['agama_siswa'] ?>">
                      <option selected>Open this select menu</option>
                      <option value="Islam" <?= $siswa['agama_siswa'] === 'Islam' ? 'selected' : '' ?>>Islam</option>
                      <option value="Kristen" <?= $siswa['agama_siswa'] === 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                      <option value="Hindu" <?= $siswa['agama_siswa'] === 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                      <option value="Budha" <?= $siswa['agama_siswa'] === 'Budha' ? 'selected' : '' ?>>Budha</option>
                      <option value="Konghucu" <?= $siswa['agama_siswa'] === 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="alamat_siswa" ><?=$siswa['alamat_siswa']?></textarea>
                  </div>
                </div>

            <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_siswa" value="Aktif" <?= $siswa['status_siswa'] == 'Aktif' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="gridRadios1">
                        Aktif
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_siswa" value="Non-Aktif" <?= $siswa['status_siswa'] == 'Non-Aktif' ? 'checked' : '' ?>>
                      <label class="form-check-label" for="gridRadios2">
                        Non-Aktif
                      </label>
                    </div>
                  </div>
            </fieldset>

            <div class="row mb-3">
                <div class="col-sm-10">
                <input type="submit" value="Edit Siswa" name="save" class="btn btn-danger btn-user">
                </div>
            </div>
        </table>
    </form>