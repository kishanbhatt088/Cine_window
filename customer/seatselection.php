<?php require 'uheader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="customer.css">
</head>
<body>
            <?php 
                if(isset($_GET['id'])){   
                    $m_id = $_GET['id'];
                    $_SESSION['m_id'] = $m_id;
                }?>
    <main>
        <div class="seat">
            <img src="seats.jpg" height="480px" width="100%">
        </div>
        <div class="bookseat">
            <div class="available">
                <h3>Available seats : </h3>
                <h3>
                    A-1.A-2.A-3.A-4.A-5.A-6.A-7.A-8.A-9.A-10.A-11.A-12.A-13.A-14.A-15.A-16.A-17.A-18<br>
                    B-1.B-2.B-3.B-4.B-5.B-6.B-7.B-8.B-9.B-10.B-11.B-12.B-13.B-14.B-15.B-16.B-17.B-18<br>
                    C-1.C-2.C-3.C-4.C-5.C-6.C-7.C-8.C-9.C-10.C-11.C-12.C-13.C-14.C-15.C-16.C-17.C-18<br>
                </h3>
                <label>Note : INSERT PROPER NUMBER NO REFUND ON EXTRA SEAT NUMBER INSERTED BY USER <label>
            </div>
            <div class="iseat">
                <h3 style="text-align: center;">INSERT  SEAT NUMBER:</h3>
                <form  method="POST" action = "pay.php">
                    <div class="seatcount">
                        <label>TOTAL SEATS:</label>
                        <input type = "text" name = "nos" >
                    </div>
                    <div class="seatcount">
                        <label>ROW NUMBER :</label>
                        <input type = "text" name = "seats">
                    </div>
                    <input type="submit" name="seatbtn" id="seatbtn">
                </form>
            </div>
        </div>
    </main>
</body>
</html>