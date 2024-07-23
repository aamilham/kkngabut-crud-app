<?php
    /* link php into database config */

    include 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $dusun = $_POST['dusun'];

        $query = "INSERT INTO `warga_desa` (`id`, `nama`, `dusun`) VALUES ('$id', '$nama', '$dusun')";

        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
            header('Location: index.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

?>
