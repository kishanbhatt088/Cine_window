<?php require 'uheader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <main>
        <div class="imagebar">
        </div>
        <div class="category">
        <div class="sertitle">
                    <h2>City</h2>
                </div>
        </div>
        <div class="categorylist">
            <a href="ahmedabad.php">
            <div class="catbox" >
                <img src="../customer/image/Ahmedabad.png" alt="Ahmedabad">
                <h4>Ahmedabad</h4>
            </div>
            </a>
            <a href="gandhinagar.php">
            <div class="catbox">
                <img src="../customer/image/Gandhinagar.png" alt="Gandhinagar">
                <h4>Gandhinagar</h4>
            </div></a>
        </div>
        <div class="servicelist">
                <h3>Theater</h3>
                <div class="list">
                <?php 
                    $sql = "SELECT *FROM theater";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {?>
                            <a href="theater.php?id=<?php echo $row['th_id'];?>">
                                <div class="box">
                                    <img src="../admin/theater/<?php echo $row['th_img'];?>" alt="<?php echo $row['th_name'];?>">
                                    <h4><?php echo $row['th_name'];?></h4>
                                </div>
                            </a>
                            <?php 
                        }
                    }?>
                </div>
        </div>
        <div class="servicelist">
                <h3>Movies</h3>
                <div class="list">
                <?php 
                    $sql = "SELECT *FROM movie ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {?>
                            <a href="movie.php?id=<?php echo $row['m_id'];?>">
                                <div class="box">
                                    <img src="../theater/movie/<?php echo $row['m_img'];?>" alt="<?php echo $row['m_name'];?>">
                                    <h4><?php echo $row['m_name'];?></h4>
                                    <h4><?php echo $row['type'];?></h4>
                                </div>
                            </a>
                            <?php 
                        }
                    }?>
                </div>
        </div>
        <div class="block">
            <h1>Every Ticket Has Different Journey</h1>
            <a href="service.php"><button>Book Now</button></a>
        </div>
    </main>
    <?php require 'ufooter.php'; ?>
</body>
</html>