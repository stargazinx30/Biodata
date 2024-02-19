<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Biodata</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <H4> TAMBAH BIODATA </H4>
            </div>
            <div class="card-body">
              <form action="simpan-data.php" method="POST">
                
              <div class="form-group">
                  <label><strong>No. ID (Nomor ID berupa Angka 1-XXX)</strong></label>
                  <input type="text" name="id" placeholder="Masukkan ID Anda" required class="form-control">
                </div>

              <div class="form-group">
                  <label><strong>Nama Lengkap</strong></label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" required class="form-control">
                </div>

                <div class="form-group">
                  <label><strong>Tempat Lahir</strong></label>
                  <input type="text" name="tempat_lahir" placeholder="Masukkan Kota Lahir" required class="form-control">
                </div>
                
                <div class="form-group">
                  <label><strong>Tgl. Lahir</strong></label>
                  <input type="date" name="tgl_lahir" placeholder="Masukkan Tgl. Lahir" required class="form-control">
                </div>
                
                <div class="form-group">
                  <label><strong>Agama</strong></label>
                  <select name="agama" required class="form-control">
                    <option value="-">- Pilih Agama -
                    <option value="Islam">Islam
                    <option value="Kristen">Kristen
                    <option value="Katolik">Katolik
                    <option value="Hindu">Hindu
                    <option value="Budha">Budha
                  </select>
                </div>
                
                <div class="form-group">
                  <label><strong>Alamat Lengkap</strong></label>
                  <input type="text" name="alamat" placeholder="Masukkan Alamat" required class="form-control">
                </div>

                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>