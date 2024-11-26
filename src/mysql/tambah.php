<?php
    require('koneksi.php'); // Pastikan file koneksi sudah ada dan benar.

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari formulir
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgllahir'];
        $jenis_kelamin = $_POST['jk'];
        $nik = $_POST['nik'];
        $email = $_POST['email'];
        $cabor = $_POST['cabor'];

        // Validasi sederhana
        if (!empty($nama) && !empty($tgl_lahir) && !empty($jenis_kelamin) && !empty($nik) && !empty($email) && !empty($cabor)) {
            // Query untuk menambahkan data ke database
            $sql = "INSERT INTO pendaftar (nama, tgl_lahir, jenis_kelamin, nik, email, cabor) 
                    VALUES ('$nama', '$tgl_lahir', '$jenis_kelamin', '$nik', '$email', '$cabor')";

            if ($koneksi->query($sql) === TRUE) {
                echo "<script>
                        alert('Data anda sudah masuk kedalam sistem kami, harap tunggu balasan email dari kami :)');
                        window.location.href = '../../index.html';
                      </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
        } else {
            echo "Semua kolom wajib diisi!";
        }
    }
?>
