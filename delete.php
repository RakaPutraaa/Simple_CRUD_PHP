<?php

    require 'controller.php';

    $id = $_GET["id"];

    if (deleteUser($id) > 0) {
        echo "
            <script>
                alert('User Successfuly Deleted !!!');
                document.location.href='admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed !!!');
            </script>
        ";
    }

?>