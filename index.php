<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mada Project</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Start Navigation Bar -->
    <header class="navbar-container">
        <div class="logo">
            <img src="assets/img/logo m.jpg" alt="Mada Project">
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Apa yang baru</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Navigation Bar -->

    <!-- Start Content -->
    <main>
        <div class="content">
            <?php
                include 'config.php';

                $query = mysqli_query($koneksi,"SELECT * FROM settings WHERE id=1");
                $data = mysqli_fetch_assoc($query);
            ?>            
            <div class="content-description">
                <h1 class="title"><?= $data['title'] ?></h1>
                <p><?= $data['description'] ?>
                </p>
                <button><?= $data['button_name'] ?></button>
            </div>
            <div class="content-image">
                <img src="assets/img/<?= $data['logo'];?>" alt="Mada Project">
            </div>
        </div>
        <aside>
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
        </aside>
    </main>
        <!-- End Content -->
    </body>
    </html>