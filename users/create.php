<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            
            <h1>Tambah Data</h1>
            <p>
                Silahkan diisi semua...
            </p>
        </div>
        
        <div class="border border-primary rounded p-3">
            <form action="store.php" method="post">
            <div class="my-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control <?php if(isset($_GET['name'])){ if ($_GET['username'] == '') { echo 'is-invalid'; } } ?>" name="name" id="name" placeholder="Isi nama anda...">
                    <?php
                        if (isset($_GET['name'])){
                            if($_GET['name'] ==''){
                                ?>
                                <div class="invalid-feedback">
                                Tolong nama diisi!
                                </div>
                                <?php
                            }
                        }
                        ?>
                </div>
                <div class="my-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control <?php if(isset($_GET['username'])){ if ($_GET['username'] == '') { echo 'is-invalid'; } } ?>" name="username" id="username" placeholder="Isi username anda...">
                    <?php
                        if (isset($_GET['username'])){
                            if($_GET['username'] ==''){
                                ?>
                                <div class="invalid-feedback">
                                Tolong nama diisi!
                                </div>
                                <?php
                            }
                        }
                        ?>
                </div>
                <div class="my-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control <?php if(isset($_GET['password'])){ if ($_GET['password'] == '') { echo 'is-invalid'; } } ?>" name="password" id="password" placeholder="masukkan password">
                    <?php
                        if (isset($_GET['password'])){
                            if($_GET['password'] ==''){
                                ?>
                                <div class="invalid-feedback">
                                Tolong nama diisi!
                                </div>
                                <?php
                            }
                        }
                        ?>
                    <!-- <input type="password" class="form-control" name="password" id="password" placeholder="masukkan password" required> -->
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
    </div>

    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>