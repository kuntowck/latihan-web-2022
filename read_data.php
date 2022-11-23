<?php
      require_once "koneksi.php";
      $sql = "SELECT*FROM tb_dosen";
      $result = mysqli_query($con,$sql);
?>

<html>
<head>
      <title>DATA DOSEN</title>
</head>

<body>
      <h1>DATA DOSEN 2022</h1>
      <table border="1">
            <tr>
                  <th>Nomor Induk</th>
                  <th>Nama Dosen</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Mata Kuliah</th>
                  <th>Tahun Masuk</th>
            </tr>
      <?php while ($data = mysqli_fetch_row($result)): ?>
            <tr>
                  <td><?php echo $data[0]; ?></td>
                  <td><?php echo $data[1]; ?></td>
                  <td><?php echo $data[2]; ?></td>
                  <td><?php echo $data[3]; ?></td>
                  <td><?php echo $data[4]; ?></td>
                  <td><?php echo $data[5]; ?></td>
            </tr>
      <?php endwhile; ?>
      </table>
</body>
</html>