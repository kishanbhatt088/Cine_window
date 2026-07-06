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
                                <td>Ticket Count</td>
                                <td>Price</td>
                                <td>Seat NO</td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM tickets INNER JOIN movie ON movie.m_id = tickets.m_id WHERE th_id = $th_id ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['t_id'];?></td>
                                            <td><?php echo $row['m_name'];?></td>
                                            <td><?php echo $row['no_ticket'];?></td>
                                            <td><?php echo"$row[t_price]"; ?></td>
                                            <td><?php echo $row['seat_no'];?></td>
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
