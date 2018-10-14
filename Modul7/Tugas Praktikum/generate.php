<html>
    <head>
    <title>Hasil Table Generator</title>
    </head>
    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table{
            padding: 10px;
            border: 1px solid black;
        }
        td{
            height: 50px;
        }
    </style>
    <body>
        <div align="center">
            <?php
                $rows = 1;
                $columns = 1;
                $cells = 1;
            ?>
            <?php $rows = (int) $_POST["JumlahRow"]; ?>
            <?php $columns = (int) $_POST["JumlahColum"]; ?> 
            <?php $cells = (int) $_POST["JumlahCell"]; ?>
            
            <strong>Anda memilih</strong> <?php echo $rows;?> rows, <?php echo $columns; ?> columns,<br />
            <strong>dan Anda membutuhkan</strong> <?php echo $cells; ?> cells,<br />
            <br />
            <?php
                $width = $columns * 75;
                echo "<table width=".$width." border=1>";
                $rw = 0;
                $cel = 1;
                while ($rw < $rows && $cel <= $cells) {
                    echo "<tr>";
                    $cl = 0;
                    while ($cl < $columns) {
                        if ($cel <= $cells) {
                            echo "<td><div align=center>".$cel."</div></td>";
                            $cel++;
                        }
                        $cl++;
                    }
                    echo "</tr>";
                    $rw++;
                }
                echo "</table>";
            ?>
        </div>
    </body>
</html>
