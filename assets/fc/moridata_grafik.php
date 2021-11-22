<?php
  $server ="localhost";
  $un = "root";
  $ps = "";
  $db = "new_moridity";
  $con = mysqli_connect($server,$un,$ps,$db);

  $hsl = mysqli_query($con,"SELECT * FROM data_komoditas_kelor");

  $d=array();

  while ($rcrd = mysqli_fetch_assoc($hsl)){
    array_push($d,array("label"=>$rcrd['tgl_panen'], "value"=>$rcrd['jumlah_panen']));
  }

  $c = array("caption"=>"Grafik Komoditas Kelor",
              "subcaption"=>"Kebun Kelor Sumber Jaya",
              "xAxisName"=>"Tanggal Panen",
              "yAxisName"=>"Jumlah Panen (kg)",
              "numbersuffix"=> " kg",
              "theme"=>"ocean");

  $gab = array("chart"=>$c, "data"=>$d);
  $j = json_encode($gab);
  echo $j; 
?>