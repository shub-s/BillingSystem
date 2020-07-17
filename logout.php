<title>Processing...</title>
<?php
    if($_POST['logout']){
        session_start();
        session_destroy();
        session_unset("uname");
        header("Location: index.php");
    }else{ ?>
        <script>
            history.back();
        </script>
    <?php }
?>