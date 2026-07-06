<?php require 'uheader.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet"  href="customer.css">
</head>
<body>
    <main>
        <div class="servicelist">
                <h3>Movies</h3>
                <div class="list">
                <?php 
                if(isset($_GET['id'])){   
                    $id = $_GET['id'];
                    $_SESSION['th_id'] = $id;
                    $sql = "SELECT * FROM movie WHERE th_id = $id ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {?>
                            <a href="seatselection.php?id=<?php echo $row['m_id'];?>">
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
        <?php  } ?>
    </main>
    <?php require 'ufooter.php';?>
</body>
</html>