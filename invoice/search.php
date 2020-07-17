<?php
    include("config.php");
    $data = $_GET['s'];
    
    $query = mysqli_query($conn,"select * from product_details where product_name like '%$data%' ");
    $row = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) > 0){
        echo $row['product_name'];
    }else{
        echo "Result Not Found";
    }
?>