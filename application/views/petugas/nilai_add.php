<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Nilai</h1>
    <br>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Nilai</h5>
              <form action="<?= site_url('kepalaunit/do_add_nilai') ?>" method="post">

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Siswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_satu" value="<?= $siswa['nama_siswa'] ?>" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tema Pelajaran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_satu" value="<?= $jadwal['tema_pelajaran'] ?>" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Level 1</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_satu">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Level 2</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_dua">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Level 3</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_tiga">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Level 4</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="level_empat">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kognitif</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kognitif">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Komunikasi dan Bahasa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="komunikasi">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Perilaku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="perilaku">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Emosional</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="emosional">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Sosial</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sosial">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                  </div>
                </div>
                </table>
              </form>