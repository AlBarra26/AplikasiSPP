<?php
    session_start();
    if($_SESSION['level']==""){
        header("loction:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col">
                <p class="display-1">Selamat datang <?php echo $_SESSION['nama']; ?></p>
            </div>
        </div>
    </section>
</div>

<?php require('../template/footer.php'); ?>