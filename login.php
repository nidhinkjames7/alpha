<?php
    $con=mysqli_connect("localhost","root","","alpha") or die();
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM login WHERE username = '".$username."' and password = '".$password."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count == 1) 
    {
        $_SESSION['login'] = $username;
        if(($username == 'jins') && ($password=='123'))
        {
            header("location: admin.php");
        }
    }
    else
    {
?>
    <script> alert("invalid");</script>
<?php        
    }
?>