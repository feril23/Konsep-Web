<?php
    require('../mysql/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success my-4" onclick="window.location = '../form/index.html'">Datar Menjadi Peserta</button>
            </div>
            <form action="" method="GET" class="input-group col-md-6">
                <input type="text" class="form-control" placeholder="Masukkan Pencarian" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
            </form>
        </div>

    
        <table class="table table-light mt-4">
    
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cabor</th>
                </tr>
            </thead>
    
            <tbody>
                <?php

                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                
                    if ($search) {
                        $sql = "SELECT * FROM pendaftar WHERE nama LIKE '%$search%' OR email LIKE '%$search%' OR cabor LIKE '%$search%'";
                    } else {
                        $sql = "SELECT * FROM pendaftar";
                    }

                    $result = $koneksi->query($sql);
    
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            ?>
                                <tr>
                                    <th scope="row"><?= $row['id'] ?></th>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['cabor'] ?></td>
                                </tr>
                            <?php
                        }
                    }
    
                ?>
            </tbody>
    
    
        </table>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>