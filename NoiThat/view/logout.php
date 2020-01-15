<?php
    session_start();
    unset($_SESSION['login']);
    ?>
        <script>
            alert("logout thanh cong");
            location.href = "index.php";
        </script>
    <?php
?>