<?php
    require('koneksi.php'); // Pastikan file koneksi sudah ada dan benar.

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari formulir
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgllahir'];
        $jenis_kelamin = $_POST['jk'];
        $nik = $_POST['nik'];
        $email = $_POST['email'];
        $cabor = $_POST['cabor'];

        $sql = "UPDATE pendaftar SET nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', nik='$nik', email='$email', cabor='$cabor' WHERE id=$id";

        if ($koneksi->query($sql) === TRUE) {
            echo "<script>
                    window.location.href = '../dashboard/admin.php';
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    }
?>
