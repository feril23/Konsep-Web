<?php

    require('../../mysql/koneksi.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM pendaftar WHERE id=$id";

    $result = $koneksi->query($sql);

    $row  = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Form Pendaftaran</title>
</head>
<body>

    <form action="../../mysql/update.php" method="post" class="form-container">
        <h1>Update Data Pendaftaran Peserta Lomba</h1>
        <div class="form-body">
            <label for="nama">Masukkan Nama Anda</label>
            <input type="text" name="nama" id="nama" value="<?= $row['nama']; ?>" placeholder="masukkan nama anda" required>
        </div>
        <div class="form-body">
            <label for="tgllahir">Masukkan Tanggal Lahir Anda</label>
            <input type="date" value="<?= $row['tgl_lahir']; ?>" name="tgllahir" id="tgllahir" required>
        </div>
        <div class="form-body">
            <label for="">Pilih Jenis Kelamin Anda</label>
            <div class="radio-container">
                <div class="radio-style">
                    <label for="laki">Laki laki</label>
                    <input type="radio" <?= $row['jenis_kelamin'] == 'laki' ? 'checked' : ''; ?> name="jk" id="laki" value="laki" required>
                </div>
                <div class="radio-style">
                    <label for="perempuan">Perempuan</label>
                    <input type="radio" name="jk" <?= $row['jenis_kelamin'] == 'perempuan' ? 'checked' : ''; ?> id="perempuan" value="perempuan">
                </div>
            </div>
        </div>
        <div class="form-body">
            <label for="nik">Masukkan NIK Anda</label>
            <input type="text" value="<?= $row['nik']; ?>" name="nik" id="nik" placeholder="masukkan NIK anda" required>
        </div>
        <div class="form-body">
            <label for="email">Masukkan Email Anda</label>
            <input type="email" value="<?= $row['email']; ?>" name="email" id="email" placeholder="masukkan email anda" required>
        </div>
        <div class="form-body">
            <label for="tgllahir">Pilih Cabor Yang Ingin Diikuti</label>
            <select name="cabor" id="" required>
                <option value="<?= $row['cabor']; ?>"><?= $row['cabor']; ?></option>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="btn-submit">Ubah</button>
    </form>


    <script>

        const select = document.querySelector('select');
        const daftarOlahraga = [
            "Sepak Bola",
            "Bola Basket",
            "Bola Voli",
            "Bulutangkis",
            "Tenis Meja",
            "Tenis Lapangan",
            "Renang",
            "Atletik",
            "Tinju",
            "Pencak Silat",
            "Karate",
            "Golf",
            "Senam",
            "Angkat Besi",
            "Panahan",
            "Sepeda",
            "Hoki",
            "Rugby",
            "Berkuda",
            "Gulat"
        ];

        daftarOlahraga.forEach((e, i) => {
            const option = document.createElement('option');
            option.value = e;
            option.textContent = e;
            select.appendChild(option);
        })
    </script>
</body>
</html>