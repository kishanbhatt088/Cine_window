<?php require 'qaconn.php'; 
     session_start();
    
    if(isset($_POST['cusreg']))
    {
        $u_name = $_POST['u_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $password= $_POST['password'];
        $sqlinsert = "INSERT INTO user(u_name,password,email,phone,city,password)VALUES('$u_name',$password','$email','$phone','$city','password')";
        if(mysqli_query($conn,$sqlinsert))
        {   
            header("Location: login.php");
        }
        else
        {
            header("Location: login.php");
        }
    }
    if(isset($_POST['cuslgn']))
    {
        $cus_phno = $_POST['u_phno'];
        $password = $_POST['password'];
        $sqlinsert = "SELECT * FROM user WHERE phone = '$cus_phno' AND password = '$password' ";
        if(mysqli_query($conn,$sqlinsert))
        {   
            $_SESSION['cus_phno'] = $cus_phno;
            header("Location: home.php");
            exit;
        }
        else
        {
            header("Location: login.php");
        }
    }
    if(isset($_POST['wreg']))
    {
        $own_name = $_POST['own_name'];
        $th_name = $_POST['th_name'];
        $own_phone = $_POST['own_phone'];
        $th_address = $_POST['address'];
        $password= $_POST['password'];
        $sqlinsert = "INSERT INTO threquest(own_name,wor_email,own_phone,th_address,password)VALUES('$own_name','$wor_email','$own_phone','$th_address','$password')";
        if(mysqli_query($conn,$sqlinsert))
        {   
            header("Location: login.php");
        }
        else
        {
            header("Location: login.php");
        }
    }
    if(isset($_POST['wlgn']))
    {
        $o_phone = $_POST['o_phone'];
        $password = $_POST['password'];
        $sqlinsert = "SELECT * FROM theater WHERE o_phone = '$o_phone' AND password = '$password' ";
        if(mysqli_query($conn,$sqlinsert))
        {   
            $_SESSION['o_phone'] = $o_phone;
            header("Location: ../theater/movie.php");
        }
        else
        {
            header("Location: login.php");
        }
    }
    if(isset($_POST['algn']))
    {
        $ad_name = $_POST['ad_name'];
        $password = $_POST['password'];
        $sqlinsert = "SELECT * FROM admin WHERE name = '$ad_name' AND password = '$ad_pass' ";
        if(mysqli_query($conn,$sqlinsert))
        {   
            $_SESSION['ad_name'] = $ad_name;
            header("Location: ../admin/theater.php");
            exit;
        }
        else
        {
            header("Location: login.php");
        }
    }

?>