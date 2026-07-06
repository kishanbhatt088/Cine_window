<?php require 'thheader.php';
    if(isset($_GET['id']))
    {
        $m_id = $_GET['id'];
        $sqlDelete = "DELETE FROM movie WHERE m_id='$m_id'";
        if(mysqli_query($conn,$sqlDelete))
        {
            header("Location: movie.php");
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
        $cast = $_POST['cast'];
        $r_date = $_POST['r_date'];
        $m_time = $_POST['m_time'];
        $type = $_POST['type'];
        $trailer = $_POST['trailer'];
        $m_img = $_POST['m_img'];
        $sqlinsert = "INSERT INTO movie(m_name,th_id,cast,r_date,m_time,type,trailer,m_img)VALUES('$m_name','$th_id','$cast','$r_date','$m_time','$type','$trailer','$m_img')";
        if(mysqli_query($conn,$sqlinsert))
        {   
            header("Location: movie.php");
        }
        else
        {
            header("Location: seroperation.php");
            echo'<script>alert("No data inserted")';
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
                        <h5>Movie Details</h5>
                        <form action="movieinsert.php" method="post">
                            <div class="input">
                                <label>Movie Name:</label>
                                <input type="text" name="m_name">
                            </div>
                            
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Type:</label>
                                    <input type="text" name="type">
                                </div>
                                <div class="input">
                                    <label>Release Date:</label>
                                    <input type="date" name="r_date">
                                </div>
                            </div>
                            <div class="fieldinput">
                                <div class="input">
                                    <label>cast:</label>
                                    <input type="text" name="cast" style = "width:400px; height: 100px;">
                                </div>
                            </div>
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Trailer:</label>
                                    <input type="text" name="trailer" style = "width:200px; height: 40px;">
                                </div>
                                <div class="input">
                                    <label>Duration:</label>
                                    <input type="text" name="m_time">
                                </div>
                            </div>
                            <div class="decimbox">
                                <div class="input">
                                    <label>Image:</label>
                                    <input type="file" name="m_img" id="img">
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