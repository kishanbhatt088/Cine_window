<?php require'cwheader.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THEATER REQUESTS</title>
        <script src="cw.js"></script>
    </head>
    <body>
        <main>
        <h4>Theater List<h4>
                <div class="tableview">
                    <div class="heading">
                        <div class="tablesearchbox">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="search" onkeyup="thsearch()">
                        </div>
                        <div class="filter">
                            
                        </div> 
                        <a href="thinsert.php" alt="operation file"><i class="fa-solid fa-plus"></i>Add</a>    
                    </div>
                    <div>
                        <table id="table">
                            <tr>
                                <td>ID</td>
                                <td>NAME</td>
                                <td>OWNER</td>
                                <td>ADDRESS</td>
                                <td>PHONE NO</td>
                                <td>DATE</td>
                                <td>Image</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM theater";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['th_id'];?></td>
                                            <td><?php echo $row['th_name'];?></td>
                                            <td><?php echo $row['o_name'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['o_phone'];?></td>
                                            <td><?php echo $row['join_date'];?></td>
                                            <td><img src="../admin/theater/<?php echo $row['th_img'];?>" style="width : 50px;"></td>
                                            <td><a href="thupdate.php?id=<?php echo $row['th_id'];?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                            <td><a href = "thinsert.php?id=<?php echo $row['th_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
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
