<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pengaturan Landing Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/navbar.css">

	</head>
	<body>
        <?php
		include '../navbar.php';
		?>
		<main class="container">
			<div class="mt-4 p-5 bg-primary text-white rounded">
				<h1>Akun Pengguna</h1>
				<p>Selamat datang <strong><?= $_SESSION['username'] ?></strong> Anda dapat mengelola akun pengguna disini... </p>
			</div>
			<div class="border border-primary rounded p-3">
                <a href="create.php" class="btn btn-info">Tambah Data</a>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Username</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
                    <?php
                        include '../config.php';
                        $nomor =1;
                        $query =mysqli_query($koneksi,"SELECT * FROM users");
                        while ($d =mysqli_fetch_array($query)) {
                    ?>
					<tbody>
						<tr>
							<th scope="row"><?= $nomor++ ?></th>
							<td><?= $d['name'];?></td>
							<td><?= $d['username'];?></td>
							<td>
								<a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning">Edit</a>
								<a href="delete.php?id=<?= $d['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?')" >Hapus</a>
							</td>
						</tr>
					</tbody>
                    <?php
                        }
                    ?>
				</table>
			</div>
		</main>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</body>
</html>