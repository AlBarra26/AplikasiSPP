<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan-gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
        <h1>Tambah Data Kelas</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Input Data Kelas</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="id_kelas">ID Kelas</label>
                  <input id="IdKelas" type="text" class="form-control" name="IdKelas" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Id Kelas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nama_kelas">Nama Kelas</label>
                  <input id="NamaKelas" type="text" class="form-control" name="NamaKelas" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Nama Kelas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="kompetensi_keahlian">Kompetensi Keahllian</label> <br>
                      <select class="form-select w-100" style="height: 40px;" name="KompetensiKeahlian" id="KompetensiKeahlian" tabindex="3" required>
                        <option selected>Kompetensi Keahlian</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Audio Vidio">Teknik Audio Vidio</option>
                        <option value="Desain Pemodelan Informasi Bangunan">Desain Pemodelan Informasi Bangunan</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                      </select>
                    </div>
                      <div class="form-group">
                      <button type="submit" value="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">submit</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>
<?php require('../template/footer.php');?>