<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN gabut aam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="mx-5 mt-3">
    <h2>Form Input Absensi Warga Desa</h2>
    <form method="POST" action="insert.php">
        <div class="">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" required><br>
        </div>
        <div class="">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required><br>
        </div>
        <div class="">
            <label for="dusun" class="form-label">Dusun</label>
            <input type="text" class="form-control" name="dusun" required><br>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary mb-4">
    </form>

    <h2>Data Warga</h2> 
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Dusun</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>