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
    <?php 
        if(isset($_GET['id'])){   
        $id = $_GET['id'];
        $sql = "SELECT *FROM movie WHERE m_id = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
             $m_name = $row['m_name'];   
            ?>
        <div class="moviedetail">
            <div>
                <img src = "..\theater\movie\<?php echo $row['m_img'];?>" >
            </div>
            <div class="servicelist">
                <h3>Theaters</h3>
                <div class="list">
                    <?php 
                        $sql = "SELECT * FROM theater";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0)
                        {
                        while($row = $result->fetch_assoc())
                        {?>
                            <a href="theater.php?id=<?php echo $row['th_id'];?>">
                                <div class="box">
                                    <img src="..\admin\theater/<?php echo $row['th_img'];?>" alt="<?php echo $row['th_name'];?>">
                                    <h4><?php echo $row['th_name'];?></h4>
                                </div>
                            </a> 
                </div>
                <?php  } }}} } ?>
            </div>
        </div>
    </main>
    <?php require 'ufooter.php'; ?>
    
</body>
</html>