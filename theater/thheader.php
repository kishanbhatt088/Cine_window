<?php require 'cwconn.php';
        session_start();
        $o_phone = $_SESSION['o_phone'];
        $sql = "SELECT * FROM theater WHERE o_phone = '$o_phone' ";
        $result = mysqli_query($conn,$sql);
        if(!$result)
        {   
            echo"nothing";
        }
        else
        {
            while($row = mysqli_fetch_assoc($result))
            {   
                $_SESSION['th_id']= $row['th_id'];
            }
        } ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header - nav bar</title>
        <link rel="stylesheet" href="theater.css">
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
        <script src="cw.js"></script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">Cine Window</div>
            <ul class="menubar">
                <li>
                    <a href="movie.php">
                        <i class="fa-solid fa-file-video"></i>
                        <span>Movie</span>
                    </a>
                </li>
                <li>
                    <a href="show.php">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span>show</span>
                    </a>
                </li>
                <li>
                    <a href="screen.php">
                        <i class="fa-solid fa-tv"></i>
                        <span>Screen</span>
                    </a>
                </li>
                <li>
                    <a href="ticket.php">
                        <i class="fa-solid fa-tv"></i>
                        <span>Tickets</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="#">
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
                    <img src="../image/admin/.png">
                    <h3>Vishw</h3>
                </div>
            </div>
        </header>
    </body>
</html>