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
        <form action="<?= site_url('kepalaunit/do_add_guru') ?>" method="post">
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_petugas">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nip">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email_petugas">
                </div>
            </div>

            <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_petugas" value="Laki-laki">
                      <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_petugas" value="Perempuan">
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
            </fieldset>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempatlahir_petugas">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgllahir_petugas">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="agama_petugas">
                      <option selected>Open this select menu</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telp_petugas">
                </div>
            </div>

            <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="alamat_petugas" ></textarea>
                  </div>
                </div>


            <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_petugas" value="Aktif">
                      <label class="form-check-label" for="gridRadios1">
                        Aktif
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="status_petugas" value="Non-Aktif">
                      <label class="form-check-label" for="gridRadios2">
                        Non-Aktif
                      </label>
                    </div>
                  </div>
            </fieldset>

            <div class="row mb-3">
                <div class="col-sm-10">
                <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                </div>
            </div>
        </table>
    </form>