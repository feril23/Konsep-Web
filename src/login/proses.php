<?php
    session_start();
    require('../mysql/koneksi.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordulang = $_POST['passwordulang'];

        if (empty($nama) || empty($email) || empty($password)) {
            setcookie("info", "Semua kolom wajib diisi!", time() + 1);
            header('Location: daftar.php');
            exit;
        }

        // Validasi email unik
        $checkEmail = "SELECT * FROM login WHERE email = '$email'";
        $result = $koneksi->query($checkEmail);

        if ($result->num_rows > 0) {
            setcookie("info", "Email sudah digunakan! Silakan gunakan email lain.", time() + 1);
            header('Location: daftar.php');
            exit;
        }

        if($password != $passwordulang){
            setcookie("info", "Password dan ulangi password harus sama!", time() + 1);
            header('Location: daftar.php');
            exit;
        }

        // Masukkan data ke database
        $sql = "INSERT INTO login (nama, email, password, role) VALUES ('$nama', '$email', '$password', 'user')";

        if ($koneksi->query($sql) === TRUE) {
            echo "<script>
                    alert('Akun berhasil dibuat!');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
    }
?>