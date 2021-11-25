<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Laporan Data Komoditas Kelor</title>
</head>
<body>
  <table align="center">
    <tr>
      <td style="padding-right: 30px;">
        <img src="<?=base_url('assets');?>/images/user/logo_ptpin.jpg" width="100 px">
      </td>
      <td>
      <h3 style="line-height:0.5; margin-top:50px;"><center>LAPORAN DATA PANEN KOMODITAS KELOR</center></h3>
      <h5 style="line-height:0.5;"><center>Dipublikasikan oleh PT PIN dan MoriDity</center></h5>
      </td>
      <td style="padding-left: 30px;">
        <img src="<?=base_url('assets');?>/images/user/logo_moridity.jpg" width="70 px">
      </td>
    </tr>
  </table>
  <hr><br>
  <table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kebun</th>
        <th>Jenis Kelor</th>
        <th>Tanggal Panen<br>(TTTT-BB-HH)</th>
        <th>Jumlah Panen (kg)</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no=0;
      foreach ($mori as $data) {
        $no++;
        echo "<tr>";
          echo "<td><center>".$no."</center></td>";
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

