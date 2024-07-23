<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN gabut aam</title>
</head>
<body>
    <h2>Form Input Absensi Warga Desa</h2>
    <form method="POST" action="insert.php">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        <label for="dusun">Dusun:</label>
        <input type="text" name="dusun" required><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Data Warga</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Dusun</th>
            <th>Action</th>
        </tr>
        <?php
        /* link php into database config */
        include 'config.php';
        $result = mysqli_query($conn, "SELECT * FROM `warga_desa`");

        /* fetching data from database */
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['dusun']."</td>";
            echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>