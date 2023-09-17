<main id="main" class="main">

<div class="pagetitle">
  <h1>Data Kelas</h1>
  <br>
    <section class="section">
      <div class="row">
      <div class="col-lg-6">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>
        <form action="<?= site_url('kepalaunit/do_add_kelas') ?>" method="post">
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kelas">
                </div>
            </div>

            <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kategori Kelas</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="id_kategori">
                      <?php foreach ($kategori as $kategori) { ?>
                        <option value="<?= $kategori->id ?>"><?= $kategori->nama_kategori ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                <input type="submit" value="Simpan" name="save" class="btn btn-danger btn-user">
                </div>
            </div>
        </table>
    </form>