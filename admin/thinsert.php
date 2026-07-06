<?php require 'cwheader.php' ?>
<?php
if (isset($_GET['id'])) {
    $th_id = $_GET['id'];
    $sqlDelete = "DELETE FROM theater WHERE th_id='$th_id'";
    if (mysqli_query($conn, $sqlDelete)) {
        header("location:theater.php");
    } else {
        header("location:theater.php");
    }
}
?>
<?php
if (isset($_POST['insert'])) {
    $th_name = $_POST['th_name'];
    $o_name = $_POST['o_name'];
    $address = $_POST['address'];
    $o_phone = $_POST['o_phone'];
    $join_date = $_POST['join_date'];
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cw.css">
</head>

<body>
    <main>
        <div>
            <div class="forms">
                <div class="insertform">
                    <h5>Theater Details</h5>
                    <form method="post">
                        <div class="input">
                            <label>Name:</label>
                            <input type="text" name="th_name">
                        </div>
                        <div class="fieldinput">
                            <div class="input">
                                <label>Owner:</label>
                                <input type="text" name="own_name">
                            </div>
                            <div class="input">
                                <label>Movie_Fk:</label>
                                <input type="text" name="th_pass">
                            </div>
                        </div>
                        <div class="fieldinput">
                            <div class="input">
                                <label>Phone No:</label>
                                <input type="text" name="th_phone">
                            </div>
                            <div class="input">
                                <label>Owner Contact:</label>
                                <input type="text" name="own_phone">
                            </div>
                        </div>
                        <div class="decimbox">
                            <div class="input">
                                <label>Image:</label>
                                <input type="file" name="file" id="img">
                            </div>
                            <div class="input">
                                <label>Address:</label>
                                <input type="text" name="th_address">
                            </div>
                        </div>
                        <button type="submit" name="insert" id="insertbtn">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>