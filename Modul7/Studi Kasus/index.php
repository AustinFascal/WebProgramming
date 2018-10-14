<html> 
    <head> 
        <title>Studi Kasus - Modul 7</title> 
    </head> 
    <link rel="stylesheet" href="css/style.css">
    <body>
        <div class="greetinfo">
            <?php 
                $ini_string_kosong="";
                // Fungsi penampilan pesan sapaan
                function greeting() { 
                    // Menyesuaikan Timezone
                    date_default_timezone_set("Asia/Bangkok");
                    // Format Waktu (Jam:Menit)
                    $time = date ("H:i"); 
                    // If Statement - Greetings
                    if ($time>=01 and $time<=11) { 
                        echo "Selamat Pagi Bro!<br/>";
                        echo "<font class='desc'>Mulai harimu dengan secangkir teh.</font>"; 
                    } else if ($time>11 and $time<=15) { 
                        echo "Selamat Siang Bro!<br/>";
                        echo "<font class='desc'>Istirahatlah sejenak, kesehatanmu loh.</font>";  
                    } else if ($time>15 and $time<=19) { 
                        echo "Selamat Sore Bro!<br/>";
                        echo "<font class='desc'>Waktunya bertemu dengan keluarga tercinta.</font>"; 
                    } else if ($time>19 and $time<=23) { 
                        echo "Selamat Malam Bray!<br/>"; 
                        echo "<font class='desc'>Waktunya kerja lembur bagai buroq.</font>"; 
                    } else {
                        $ini_string_kosong; 
                    }
                } 
                // Pemanggilan Fungsi
                greeting(); 
            ?>
        </div>
        <div class="infolink">
            <div style="float: left; margin-right: 10px">
                <img src="img/search.png" width="25px">
            </div>
            <div style="float: right">
                Pemandangan yang bagus kan bray?<br/>
                <a href="https://www.instagram.com/austinfascal">
                &COPY 2018 Austin Fascal 
                </a>
            </div>
        </div>
        <div class="wrapinfo">
            <div class="timeinfo">
                <?php
                    // Menyesuaikan Timezone
                    date_default_timezone_set("Asia/Bangkok");
                    // Format Waktu (Jam:Menit)
                    $time = date("H:i"); 
                    echo "$time WIB</br>";
                ?>
            </div>
            <div class="dateinfo">
                <?php 
                    // Array untuk hari dan bulan
                    $array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu"); 
                    $array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember"); 
                    // Pengambilan array
                    $hari = $array_hari[date("N")]; 
                    $bulan = $array_bulan[date("n")];
                    // Tanggal tanpa angka 0 di depan
                    $tanggal = date ("j"); 
                    // Tahun 4 digit
                    $tahun = date("Y"); 
                    echo "$hari, $tanggal $bulan $tahun"; 
                ?> 
            </div>
        </div>
    </body> 
</html>