<?php

    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])){    
        // include 'db_conn.php';
        include 'local.php';

        function validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validation($_POST['username']);
        $email = validation($_POST['email']);
        $password = validation($_POST['password']);
        $cpassword = validation($_POST['cpassword']);                  
    
        if(empty($username)  || empty($email)  || empty($password)  || empty($cpassword))
        {
             header("Location: Booking.html");

        }else
        {
            $sql = "INSERT INTO register(username, email, password, cpassword) VALUES('$username', '$email', '$password', '$cpassword')";
       
            $res = mysqli_query($local, $sql);
            if($res){
                echo "your Data Updated successfully";
                header("Location: home.html");
        }
        else{
            echo "You Data could not be sent";
        }
        }
    }
    else{
       header("Location: home.html");

    };
?>