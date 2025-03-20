<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran Mahasiswa</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="number" id="nim" name="nim" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required>
            </div>

            <div class="form-group">
                <label for="fakultas">Fakultas:</label>
                <input type="text" id="fakultas" name="fakultas" required>
            </div>

            <div class="button-container">
                <button type="submit">Daftar</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $nim = htmlspecialchars($_POST['nim']);
            $jurusan = htmlspecialchars($_POST['jurusan']);
            $fakultas = htmlspecialchars($_POST['fakultas']);
        ?>
        <h3>Data Pendaftaran:</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Fakultas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $nim; ?></td>
                        <td><?php echo $jurusan; ?></td>
                        <td><?php echo $fakultas; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>
</body>
</html>
