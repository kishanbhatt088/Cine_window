<?php require'cwconn.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header - nav bar</title>
        <link rel="stylesheet" href="../cw.css">
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
        <script src="cw.js"></script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">Cine Window</div>
            <ul class="menubar">
                <li>
                    <a href="theater.php">
                        <i class="fa-solid fa-address-card"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="theater.php">
                        <i class="fa-solid fa-film"></i>
                        <span>Theater</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="movie.php">
                        <i class="fa-solid fa-file-video"></i>
                        <span>Movie</span>
                    </a>
                </li> -->
                <li>
                    <a href="threquest.php">
                        <i class="fa-solid fa-bell"></i>
                        <span>New Request</span>
                    </a>
                </li>
                <li>
                    <a href="thpayment.php">
                        <i class="fa-solid fa-money-bill-1-wave"></i>
                        <span>Payment</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <header>
            <div class="searchbar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="search">
            </div>
            <div class="headerlink">
                <a href=""><i class="fa-solid fa-envelope-open-text"></i></a>
                <div class="admin">
                    <img src="1.png">
                    <h3>Pratham</h3>
                </div>
            </div>
        </header>
    </body>
</html>