<?php

function betweenDays($ba, $bi)
{
        $waktu_sekarang = strtotime($bi);

        $tanggalpertama = strtotime($ba);
        $diff = $waktu_sekarang - $tanggalpertama;

        // Bulatkan diff dengan menggunakan function round
        $round = round($diff / (60 * 60 * 24));

        //lakukan perulangan untuk menyelisih tanggal pertama dan tanggal kedua
        for($i= 1; $i<=$round; $i++)
        {
            $result = date('d-m-Y',strtotime($ba. "+".$i." days")-1);
            echo "'".$result.",'";
        }
        echo $bi."'";
    }

    $hasil = betweenDays("20-05-2019","25-05-2019");
    echo $hasil;

?>