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
                $query = mysqli_query($koneksi, "SELECT * FROM users WHERE id= '$id'");
                $data = mysqli_fetch_assoc($query);
                // var_dump($data);
            ?>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="my-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="masukkan nama" value="<?= $data['name'] ?>" required>
                </div>
                <div class="my-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username" value="<?= $data['username'] ?>" required>
                </div>
                <div class="my-3">
                    <label for="name" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" id="password" name="password" placeholder="masukkan password" value="<?= $data['password'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
    </div>

    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>