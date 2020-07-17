<?php
    include("config.php");
    date_default_timezone_set("Asia/Kolkata");
    $create_dt = date("d-m-Y");

    if($_POST['submit']){
        $item_name = $_POST['item_name'];
        $item_code = $_POST['item_code'];
        $qty = $_POST['Qty'];        
        $price = $_POST['price'];
        $total = $_POST['amount'];

        // Status
        $status = "Available";
        $msg = md5(rand(9,99));
        $error = md5(rand(9,99));
        $select = mysqli_query($conn,"select * from product_details where product_name='$item_name' ");        
        if(mysqli_num_rows($select) > 0){
            $update_qty = mysqli_query($conn,"select * from product_details where product_name='$item_name' ");
            $row = mysqli_fetch_array($update_qty);
            $db_qty = $row['quantity'];
            $db_amt = $row['total_amount'];
            $upd_qty = $db_qty + $qty;
            $total_amount = $db_amt + $total;
            $update = mysqli_query($conn,"update product_details set quantity='$upd_qty', status='$status',total_amount='$total_amount',rate='$price' ,last_updated='$create_dt' where product_name='$item_name' ");
            if($update){
                header("Location: ../invoice/purchese.php?s=$msg&i=$upd_qty");
            }else{
                header("Location: ../invoice/purchese.php?e=$error");
            }
        }else{
            $query = mysqli_query($conn,"insert into product_details values(null,'$item_name','$item_code','$qty','$price','$total','$status','$create_dt') ");
            if($query){                          
                    header("Location: ../invoice/purchese.php?s=$msg&i=$qty");
            }else{
                $query = mysqli_query($conn,"delete from product_details where product_code='$item_code' ");
                header("Location: ../invoice/purchese.php?e=$error");
            }
        }

    }else{
        echo "<script>history.back();</script>";
    }
?>