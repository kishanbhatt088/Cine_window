<?php require 'thheader.php'; ?>
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
        <h4>Show List<h4>
                <div class="tableview">
                    <div class="heading">
                        <a href="showinsert.php" alt="operation file"><i class="fa-solid fa-plus"></i>Add</a>   
                    </div>
                    <div>
                        <table id="table">
                            <tr>
                                <td>ID</td>
                                <td>Movie Name</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Screen No</td>
                                <td>Availabel Seat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM shows INNER JOIN movie ON shows.m_id = movie.m_id ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['s_id'];?></td>
                                            <td><?php echo $row['m_name'];?></td>
                                            <td><?php echo $row['s_date'];?></td>
                                            <td><?php echo $row['s_time'];?></td>
                                            <td><?php echo $row['sc_id'];?></td>
                                            <td style="width:200px;"><?php echo $row['seat'];?></td>
                                            <td><a href = "showupdate.php?id=<?php echo $row['m_id'];?>"><i class="fa-solid fa-trash-can"></i>UPDATE</a></td>
                                            <td><a href = "show.php?id=<?php echo $row['s_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
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
