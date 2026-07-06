<?php require 'thheader.php';
    $th_id = $_SESSION['th_id']?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MOVIE LIST</title>
        <script src="cw.js"></script>
    </head>
    <body>
        <main>
        <h4>Movie List<h4>
                <div class="tableview">
                    <div class="heading">
                        <a href="movieinsert.php" alt="operation file"><i class="fa-solid fa-plus"></i>Add</a> 
                         
                    </div>
                    <div>
                        <table id="table">
                            <tr>
                                <td>ID</td>
                                <td>NAME</td>
                                <td>TYPE</td>
                                <td>Image</td>
                                <td>RELEASE DATE</td>
                                <td>TRAILER</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM movie WHERE th_id = $th_id ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['m_id'];?></td>
                                            <td><?php echo $row['m_name'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><img src="../theater/movie/<?php echo"$row[m_img]"; ?>" style = "height:100px; width:100px"></td>
                                            <td><?php echo $row['r_date'];?></td>
                                            <td><a href="<?php echo $row['trailer'];?>">Trailer</a></td>
                                            <td><a href = "movieinsert.php?id=<?php echo $row['m_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                        </tr>
                            <?php
                                    }
                                } 
                            ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>
