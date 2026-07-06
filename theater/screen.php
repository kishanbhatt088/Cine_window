<?php require 'thheader.php';
    if(isset($_GET['id']))
    {
        $m_id = $_GET['id'];
        $sqlDelete = "DELETE FROM screen WHERE sc_id='$sc_id'";
        if(mysqli_query($conn,$sqlDelete))
        {
            header("Location: screen.php");
        }
        else
        {
            header("location:servicetable.php");
        }
    }
    if(isset($_POST['insert']))
    {
        $m_name = $_POST['m_name'];
        $th_id = $_POST['th_id'];
        $sqlinsert = "INSERT INTO screen(type,no_seat)VALUES('$type','$no_seat')";
        if(mysqli_query($conn,$sqlinsert))
        {   
            header("Location: screen.php");
        }
        else
        {
            header("Location: dashboard.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div>
                <div class="forms">
                    <div class="insertform">
                        <h5>Add Screen</h5>
                        <form action="movieinsert.php" method="post">
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Type:</label>
                                    <input type="text" name="type">
                                </div>
                                <div class="input">
                                    <label>No Of Seat:</label>
                                    <input type="text" name="no_seat">
                                </div>
                            </div>
                            <button type="submit" name="insert" id="insertbtn">Add</button>
                        </form>
                    </div>  
                </div> 
            </div>
            <h4>Movie List<h4>
                <div class="tableview">
                    <div class="heading">
                        <a href="movieinsert.php" alt="operation file"><i class="fa-solid fa-plus"></i>Add</a>    
                    </div>
                    <div>
                        <table id="table">
                            <tr>
                                <td>ID</td>
                                <td>No Of Seats</td>
                                <td>TYPE</td>
                                <td></td>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM screen";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc())
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['sc_id'];?></td>
                                            <td><?php echo $row['no_seat'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><a href = "screen.php?id=<?php echo $row['sc_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
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