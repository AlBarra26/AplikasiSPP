<?php
    $koneksi = mysqli_connect("localhost","root","","albarraxirpl2");
    if (mysqli_connect_errno()){
        echo "koneksi database gagal : ". mysqli_connect_error();
    }
?>