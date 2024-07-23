<?php
    /* link php into database config */

    include 'config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM `warga_desa` WHERE `id` = '$id'";

        if (mysqli_query($conn, $query)) {
            echo "Record deleted successfully";
            header('Location: index.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

?>