<?php 
    include 'qaconn.php';
    session_start();
    if(!empty($_GET)){
        $amt = $_GET['amt'];
        $user_id = $_SESSION['user_id'];
        $th_id = $_SESSION['th_id'];
        $s_id = 1;
        $m_id = $_SESSION['m_id'];
        $nos = $_SESSION['nos']; 
        $seats = $_SESSION['seats'];
        $t_price = $_SESSION['total'];
        $sql = "INSERT INTO tickets(th_id,m_id,s_id,u_id,no_ticket,seat_no,t_price)VALUES('$th_id','$m_id','$s_id','$u_id','$nos','$seats','$t_price')";
        $result = mysqli_query($conn, $sql);
                        if ($result)
                        { 
                            header('location: home.php');
                        }
                        else 
                        {
                            echo "not inserted";
                        }
    } 