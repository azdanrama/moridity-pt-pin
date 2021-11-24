<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Laporan Data Komoditas Kelor General</title>
</head>
<body>
  <h3><center>LAPORAN DATA KOMODITAS KELOR GENERAL</center></h3>
  <table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
      <tr>
        <th>id_datakelor</th>
        <th>id_user</th>
        <th>nama_kebun</th>
        <th>jenis_kelor</th>
        <th>tgl_panen</th>
        <th>jumlah_panen</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      foreach ($mori as $data) {
        $no++;
        echo "<tr>";
          echo "<td><center>".$data->id_datakelor."</center></td>";
          echo "<td>".$data->id_user."</td>";
          echo "<td>".$data->nama_kebun."</td>";
          echo "<td>".$data->jenis_kelor."</td>";
          echo "<td>".$data->tgl_panen."</td>";
          echo "<td>".$data->jumlah_panen."</td>";
        echo "</tr>";
      }
      
      ?>
    </tbody>
  </table>
</body>
</html>