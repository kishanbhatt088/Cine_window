<?php require 'cwheader.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Theater</title>
    <link rel="stylesheet" href="cw.css">
    <script src="https://kit.fontawesome.com/61163db8e0.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div id="updatetheater">
            <h5>Details </h5>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sqlupdate = "SELECT * FROM cinema WHERE cinema_id = $id";
                $result = mysqli_query($conn, $sqlupdate);
                if (!$result) {
                    die("query Failed" . mysqli_error());
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form method="post" action="thupdate.php?id_new=<?php echo $id; ?>" enctype="multipart/form-data">
                            <div class="show">
                                <lable>Theater :</lable>
                                <input type="text" value="<?php echo $row['cinema_name']; ?>" name="th_name">
                            </div>
                            <div class="show">
                                <lable>Owner :</lable>
                                <input type="text" value="<?php echo $row['own_name']; ?>" name="own_name">
                            </div>
                            <div class="show">
                                <lable>Address:</lable>
                                <input type="text" value="<?php echo $row['cinema_location']; ?>" name="th_address">
                            </div>
                            <div class="show">
                                <lable>File</lable>
                                <input type="file" value="<?php echo $row['cinema_img']; ?>" name="file">
                            </div>
                            <div class="uinline">
                                <div class="show">
                                    <lable>Phone Number:</lable>
                                    <input type="text" value="<?php echo $row['cinema_phone']; ?>" name="th_phone">
                                </div>
                                <div class="show">
                                    <lable>Owner Contact</lable>
                                    <input type="text" value="<?php echo $row['own_phone']; ?>" name="own_phone">
                                </div>
                            </div>
                            <button type="submit" name="thupdate">UPDATE</button>
                        </form>
                    <?php
                    }
                }
            } ?>
        </div>
        <?php
        if (isset($_POST['thupdate'])) {
            if (isset($_GET['id_new'])) {
                $id_new = $_GET['id_new'];
            }
            $th_name = $_POST['th_name'];
            $own_name = $_POST['own_name'];
            $th_address = $_POST['th_address'];
            $th_phone = $_POST['th_phone'];
            $own_phone = $_POST['own_phone'];
            //image insert 
        
            $img_name = $_FILES['file']['name'];
            $img_typ = $_FILES['file']['type'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_extension = end($img_explode);
            $extensions = ['png', 'jpg', 'jpeg','webp'];
            if (in_array($img_extension, $extensions) === true) {
                $time = time();
                $newimagename = $time . $img_name;
                $folder = '../img/' . $newimagename;
                move_uploaded_file($tmp_name, $folder);
            }





            $sql = "UPDATE cinema SET  cinema_name='$th_name', own_name = '$own_name', cinema_location = '$th_address',cinema_phone = '$th_phone',own_phone = '$own_phone' ,cinema_img='$folder' WHERE cinema_id= '$id_new'";
            if (mysqli_query($conn, $sql)) {
                header("Location: theater.php");
            } else {
                header("Location: thupdate.php");
            }
        }
        ?>
    </main>
</body>

</html>