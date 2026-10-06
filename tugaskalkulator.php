<?php

// 1. Pengecekan jika nominal <= 0
function konversikeIDR($nominal, $mataUang){
    if($nominal <= 0){
        return "Nominal harus lebih dari 0!";
    } else {

    // 2. 2. proses hitung perkalian ke Rupiah menggunakan switch case
    switch($mataUang){
    case "USD":
      $hasil = $nominal * 17884;
      break;

    case "SGD":
      $hasil = $nominal * 13500;
      break;

    case "JPY":
      $hasil = $nominal * 115;
      break;

    default:
      return "Mata uang tidak dikenali";
}
    // 3. Return hasil akhir
    return "Rp" . $hasil;
    }
}

// Contoh tes output
$usd = 100; 
echo konversiKeIDR($usd, "USD");

?>