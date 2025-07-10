<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morev-Landing Page</title>
    <link rel="stylesheet" href="<?= base_url('/cssDashboard/landing.css?v=' . time()); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?= base_url('/dashboard/index'); ?>">
                <img src="<?= base_url('/assets/logos/logo.svg'); ?>" alt="Hero">
                <h2>Morev</h2>
            </a>
        </div>
        <ul>
            <li><a href="<?= base_url('/dashboard/film'); ?>">Film</a></li>
            <li><a href="<?= base_url('/dashboard/news'); ?>">Berita</a></li>
            <li><a href="<?= base_url('/dashboard/review'); ?>">Review</a></li>
            <li><a href="<?= base_url('/dashboard/about'); ?>">Tentang Kami</a></li>
        </ul>
        <div class="profile">
            <p id="name">User</p>
            <i class='bx bx-chevron-down'></i>
            <div class="dropdown-menu">
                <a href="<?= base_url('/'); ?>">Home</a>
                <a href="<?= base_url('/auth/login'); ?>">Logout</a>
            </div>
        </div>
    </nav>
    <main>
        <img src="<?= base_url('/assets/hero/heroLanding.jpg'); ?>" alt="hero">
        <p>Your go-to source for honest film and series reviews. Discover your next favorite watch!</p>
        <button><a href="<?= base_url('/dashboard/film'); ?>">start review</a></button>
        <div class="linearGradient"></div>
    </main>
    <section>
        <div class="linearGradient"></div>
        <h3>Top Shows This Month</h3>
        <ol>
            <li>
                <div class="wrap">
                    <i class='bx bxs-comment-dots'></i>
                    <p>100k</p>
                    <i class='bx bxs-like'></i>
                    <p>300k</p>
                </div>
                <img src="<?= base_url('/assets/posters/agak laen.jpg'); ?>" alt="Agak Laen">
            </li>
            <li>
                <div class="wrap">
                    <i class='bx bxs-comment-dots'></i>
                    <p>100k</p>
                    <i class='bx bxs-like'></i>
                    <p>300k</p>
                </div>
                <img src="<?= base_url('/assets/posters/ancika.jpg'); ?>" alt="Ancika">
            </li>
            <li>
                <div class="wrap">
                    <i class='bx bxs-comment-dots'></i>
                    <p>100k</p>
                    <i class='bx bxs-like'></i>
                    <p>300k</p>
                </div>
                <img src="<?=  base_url('/assets/posters/borderless fog.jpg'); ?>" alt=" Borderless Fog">
            </li>
            <li>
                <div class="wrap">
                    <i class='bx bxs-comment-dots'></i>
                    <p>100k</p>
                    <i class='bx bxs-like'></i>
                    <p>300k</p>
                </div>
                <img src="<?= base_url('/assets/posters/dancing villages.jpg'); ?>" alt="Dancing Village">
            </li>
        </ol>
    </section>
    <footer>
        <ul>
            <li><a href=""><i class='bx bxl-facebook-circle'></i></a></li>
            <li><a href=""><i class='bx bxl-tiktok'></i></a></li>
            <li><a href=""><i class='bx bxl-instagram-alt'></i></a></li>
            <li><a href=""><i class='bx bxl-youtube'></i></a></li>
        </ul>
        <p>
            <small>Copyright © 2024 Morev. All rights reserved.</small>
        </p>
    </footer>

    <script>
        // Dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            const profile = document.querySelector('.profile');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            profile.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownMenu.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                dropdownMenu.classList.remove('show');
            });

            // Prevent dropdown from closing when clicking inside it
            dropdownMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>
</body>

</html>