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
    <main>
        <div class="sumbookseat">
            <div> 
                <img src="../customer/image/home.jpg" height="450px" width="135%">
            </div>
            <?php if(isset($_POST['seatbtn'])){   
                    $nos = $_POST['nos'];
                    $_SESSION['nos'] = $nos;
                    $seat = $_POST['seats'];
                    $_SESSION['seats'] = $seat;
                    $m_id = $_SESSION['m_id'];
                    $th_id = $_SESSION['th_id'];
                    $sql = "SELECT * FROM show WHERE m_id = $m_id ";
                    $total = $nos * 200 + 20;
                    $_SESSION['total'] = $total;
                    $result = $conn->query($sql);
            ?>
            <div class="summary">
                <h2 style = "color:chocolate ;margin-bottom:20px; margin-left: 100px;">BOOKING DETAIL </h2>
                <div class="summarydata">
                    <?php
                        $sql = "SELECT * FROM movie WHERE m_id = $m_id ";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {?>
                    <h3><?php echo $row['m_name'];?><h3>
                    <h3>Screen Number : 1</h3>
                    <h3>Ticket Number :<?php echo $nos;?> <h3>
                    <h3>Seat Number :<?php echo $seat;?> </h3>
                    <h3>Ticket Price :200</h3>
                    <h3>Convenience fees :20 </h3>
                    <h3> Total :<?php echo $total;?></h3>
                </div>
                <form method = "post" action ="https://www.sandbox.paypal.com/cgi-bin/webscr" >
                <input type="hidden" name = "business" value="sb-mcdbk29881696@business.example.com">
                <input type="hidden" name = "item_name" value ="<?php echo "TICKETS";?>">
                <input type="hidden" name = "amount" value ="<?php echo $total;?>">
                <input type="hidden" name = "no_shipping" value ="1">
                <input type="hidden" name = "currency_code" value ="USD">
                <input type="hidden" name = "cmd" value ="_xclick">
                <input type="hidden" name = "return" value ="http://localhost/cinewindow/customer/success.php">
                <input type="hidden" name = "canel_return" value ="http://localhost/program/aashrayspot/home.php">
                <input type="submit" name = "book" id="pbtn" value ="Procced" >
                </form>
                <?php  } } }?>
            </div>
        </div>
    </main>
</body>
</html>