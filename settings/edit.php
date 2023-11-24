<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            
            <h1>Edit Data</h1>
            <p>
                Silahkan diisi semua...
            </p>
        </div>
        
        <div class="border border-primary rounded p-3">
            <?php
                include '../config.php';
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM settings WHERE id= '$id'");
                $data = mysqli_fetch_assoc($query);
                // var_dump($data);
            ?>
            <form action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="hidden" name="logo_old" value="../assets/img/<?=$data['logo']?>">
                <div class="my-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" value="<?= $data['title'] ?>" required>
                </div>
                <div class="my-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="description" id="description" value="<?= $data['description'] ?>" required>
                </div>
                <div class="my-3">
                    <label for="button_name" class="form-label">Nama Tombol</label>
                    <input type="text" class="form-control" name="button_name" id="button_namee" value="<?= $data['button_name'] ?>" required>
                </div>
                <div class="my-3">
                    <label for="logo" class="form-label">Unggah Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control"></div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
    </div>

    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>