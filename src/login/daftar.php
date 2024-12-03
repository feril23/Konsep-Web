<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-daftar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Form Pendaftaran</title>
</head>
<body>

    <form action="proses.php" method="post" class="form-container">
        <h1>Sign Up</h1>
        <div class="form-body">
            <label for="nama">Masukkan Nama Anda</label>
            <input type="text" name="nama" id="nama" placeholder="masukkan nama anda" required>
        </div>
        <div class="form-body">
            <label for="email">Masukkan Email Anda</label>
            <input type="email" name="email" id="email" placeholder="masukkan email anda" required>
        </div>
        <div class="form-body">
            <label for="password">Masukkan Password Anda</label>
            <input type="password" name="password" id="password" placeholder="masukkan password anda" required>
        </div>
        <div class="form-body">
            <label for="passwordulang">Masukkan Ulang Password Anda</label>
            <input type="password" name="passwordulang" id="passwordulang" placeholder="masukkan ulang password anda" required>
        </div>
        <?= isset($_COOKIE['info']) ? '<p style="color: red;">'. $_COOKIE['info'] . '</p>' : '' ?>
        <button type="submit" onsubmit="alert('terimakasih sudah mengisi'); window.location = '../../'" class="btn-submit">Buat Akun</button>
    </form>

</body>
</html>