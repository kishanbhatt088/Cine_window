<?php require 'thheader.php';
    if(isset($_GET['id']))
    {
        $s_id = $_GET['id'];
        $sqlDelete = "DELETE FROM show WHERE s_id='$s_id'";
        if(mysqli_query($conn,$sqlDelete))
        {
            header("Location: show.php");
        }
        else
        {
            header("location:showinsert.php");
        }
    }
    if(isset($_POST['insert']))
    {
        $m_id = $_POST['m_id'];
        $s_date = $_POST['s_date'];
        $s_time = $_POST['s_time'];
        $sc_id = $_POST['sc_id'];
        $seat = $_POST['seat'];
        $sqlinsert = "INSERT INTO shows(m_id,s_date,s_time,sc_id,seat)VALUES('$m_id','$s_date','$s_time','$sc_id','$seat')";
        if(mysqli_query($conn,$sqlinsert))
        {   
            header("Location: movie.php");
        }
        else
        {
            header("Location: seroperation.php");
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
                        <h5>Show Details</h5>
                        <form action="showinsert.php" method="post">
                            <div class="input">
                                <label>Movie ID:</label>
                                <input type="text" name="m_id">
                            </div>
                            
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Date:</label>
                                    <input type="date" name="s_date">
                                </div>
                                <div class="input">
                                    <label>Show Time:</label>
                                    <input type="text" name="s_time">
                                </div>
                            </div>
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Screen ID:</label>
                                    <input type="text" name="sc_id" >
                                </div>
                            </div>
                            <div class="fieldinput">
                                <div class="input">
                                    <label>Seats:</label>
                                    <input type="text" name="seat" style = "height:100px;width : 450px;">
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