<?php require'cwheader.php'?>
<?php 
if(isset($_GET['id']))
{
    $req_id = $_GET['id'];
    $sqlDelete = "DELETE FROM threquest WHERE req_id='$req_id'";
    if(mysqli_query($conn,$sqlDelete))
    {
        header("location:threquest.php");
    }
    else
    {
        header("location:theater.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THEATER REQUESTS</title>
</head>
<body>
    <main>
    <h4>Theater Request<h4>
            <div class="tableview">
                <div class="heading">
                    <div class="tablesearchbox">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="search" onkeyup="search()">
                    </div>
                    <div class="filter">
                        
                    </div>    
                </div>
                <div>
                    <table id="table">
                        <tr>
                            <td>ID</td>
                            <td>OWNER</td>
                            <td>THEATER NAME</td>
                            <td>ADDRESS</td>
                            <td>PHONE NO</td>
                            <td>DATE</td>
                            <td></td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM threquest";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                                    <tr>
                                        <td><?php echo $row['req_id'];?></td>
                                        <td><?php echo $row['owner_name'];?></td>
                                        <td><?php echo $row['th_name'];?></td>
                                        <td><?php echo $row['th_address'];?></td>
                                        <td><?php echo $row['own_phone'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><a href = "threquest.php?id=<?php echo $row['req_id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
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