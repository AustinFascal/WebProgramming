<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>Demo</title> 
    </head> 
<body> 
    <h2>Latihan 1</h2> 
    <!-- LATIHAN 1.1 -->
    <?php echo 'Kode PHP di sini';?> 
    <p> LOREM IPSUM DOLOR </p> 
    <?php echo 'Kode PHP di sini';?> 
    <!-- LATIHAN 1.2 -->
    <p> Kode <?php echo "PHP";?> di HTML </p> 

    <h2>Latihan 2</h2> 
    <?php 
        // LATIHAN 2.1
        $bil = 3; 
        echo $bil; 
        // LATIHAN 2.2
        echo '<br/>';
        var_dump($bil); 
        print_r($bil); 
        // LATIHAN 2.3
        echo '<br/>';
        var_dump($bil);
        echo '<br/>';
        $var = ""; 
        var_dump($var);
        echo '<br/>';
        $var = null; 
        var_dump($var);
    ?>

    <h2>Latihan 3</h2>
    <?php
        // LATIHAN 3.1
        $bil = 3; 
        var_dump(is_int($bil));
        echo "<br/>";
        $var = ""; 
        var_dump(is_string($var));
        // LATIHAN 3.2
        echo "<br/>";
        $str = '123abc'; 
        echo gettype($str);
        echo "<br/>";
        echo gettype($bil);
    ?>

    <h2>Latihan 4</h2>
    <?php
        $a = 10; $b = 5; 
        $c = 5; $d = 10;
        $e = 10; $f = 5; 
        echo "a = " . $a . "<br/>";
        echo "b = " . $b . "<br/>";
        echo "c = " . $c . "<br/>";
        echo "d = " . $d . "<br/>";
        echo "e = " . $e . "<br/>";
        echo "f = " . $f . "<br/>";
        echo "<br/>";
        // LATIHAN 4.1
        if ($a > $b) {    
            echo 'a lebih besar dari b'; 
        }
        echo "<br/><br/>";
        // LATIHAN 4.2
        if ($c > $d) {
            echo 'c lebih besar dari d'; 
        } else {
            echo 'c TIDAK lebih besar dari d'; 
        } 
        // LATIHAN 4.3
        echo "<br/><br/>";
        if ($e > $f) {
            echo 'e lebih besar dari f';
        } elseif ($e == $f) {
            echo 'e sama dengan f'; 
        } else {
            echo 'e kurang dari f'; 
        } 
        // LATIHAN 4.4
        echo "<br/><br/>";
        $i = 0;
        if ($i == 0) {
            echo "i equals 0"; 
        } elseif ($i == 1) {
            echo "i equals 1"; 
        } elseif ($i == 2) {
            echo "i equals 2"; 
        } 
        echo "<br/>";
        switch ($i) { 
            case 0:    
            echo "i equals 0";    
            break; 
            case 1:    
            echo "i equals 1";    
            break; 
            case 2:   
            echo "i equals 2";    
            break; 
        } 
    ?>

    <h2>Latihan 5</h2>
    <?php
        // LATIHAN 5.1
        $i = 0; 
        while ($i < 10) {   
            echo $i." , "; 
            $i++; 
        }
        // LATIHAN 5.2
        echo "<br/><br/>";
        $j = 10; 
        do {
            echo $j." , "; 
            $j++; 
        } while ($j <= 20);
        // LATIHAN 5.3
        echo "<br/><br/>";
        for ($k = 20; $k <= 30; $k++) {  
            echo $k." , "; 
        }
        echo "<br/><br/>";
        $arr = array(1, 2, 3, 4); 
        foreach ($arr as $value) {
            echo $value." , "; 
        } 
    ?>

    <h2>Latihan 6</h2>
    <?php 
        // LATIHAN 6.1
        function do_print() {   
            echo time(); 
        }
        do_print();
        echo '<br/>'.(date("Y-m-d"));
        // LATIHAN 6.2
        echo '<br /><br />'; 
        function jumlah($a, $b) {
            return ($a + $b); 
        } 
        echo jumlah(2, 3);
        // LATIHAN 6.3
        echo '<br /><br />'; 
        function print_teks($teks, $bold = true) {   
            echo $bold ? '<b>' .$teks. '</b>' : $teks; 
        } 
        print_teks('Indonesiaku'); 
        echo '<br />'; 
        print_teks('Indonesiaku', false); 
    ?> 
        
</body> </html> 