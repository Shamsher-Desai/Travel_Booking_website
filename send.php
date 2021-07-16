<?php

    if (isset($_POST['name']) && isset($_POST['Email']) && isset($_POST['number']) && isset($_POST['date']) && isset($_POST['todate']) && isset($_POST['days']) && isset($_POST['amount']))
    {
        // include 'db_conn.php';
        include 'local.php';

        function validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validation($_POST['name']);
        $Email = validation($_POST['Email']);
        $number = validation($_POST['number']);
        $date = validation($_POST['date']);
        $todate = validation($_POST['todate']);
        $days = validation($_POST['days']);
        $amount = validation($_POST['amount']);                   
    


        if(empty($name)  || empty($Email)  || empty($number)  || empty($date)  || empty($todate)  || empty($days)  || empty($amount))
        {
             header("Location: Booking.php");

        }else
        {
            $sql = "INSERT INTO booking(name, Email, number, date, todate, days, amount) VALUES('$name', '$Email', '$number', '$date', '$todate', '$days', '$amount')";
       
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
       header("Location: Booking.html");

    };
?>