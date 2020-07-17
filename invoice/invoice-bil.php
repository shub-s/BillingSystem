<?php
    include("config.php");

    if($_POST['submit']){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $item = $_POST['item'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $gst = $_POST['gst'];
        $discount = $_POST['discount'];
        $gstamt = $_POST['gstamt'];
        $total = $_POST['total'];

        //Generate Invoice Number
        $str_result = '0123456789ABCDEFGH';
        $invoice_id = substr(str_shuffle($str_result),0, 6);

        // Created Date
        date_default_timezone_set("Asia/Kolkata");
        $create_dt = date("d-m-Y");

        // Status
        $status = "Paid";
        $msg = md5(rand(9,99));
        $error = md5(rand(9,99));

        $query = mysqli_query($conn,"insert into invoice_user values(null,'$invoice_id','$fname','$lname','$address','$phone','$create_dt','$status') ");
        if($query){
            $invoice = mysqli_query($conn,"insert into sales_invoice values(null,'$invoice_id','$item','$price','$qty','$gst','$discount','$total','$status') ");
            if($invoice){                
                header("Location: ../invoice/?s=$msg&i=$invoice_id");
            }else{
                $query = mysqli_query($conn,"delete from invoice_user where invoice_id='$invoice_id' ");
                header("Location: ../invoice/?e=$error");
            }
        }else{
            $query = mysqli_query($conn,"delete from invoice_user where invoice_id='$invoice_id' ");
            header("Location: ../invoice/?e=$error");
        }

    }else{
        echo "<script>history.back();</script>";
    }
?>