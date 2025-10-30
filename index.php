<?php
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

    echo "<h3>Daftar Buah:</h3>";
    for($i = 0; $i < count($buah); $i++) {
        echo ($i + 1) . ". " . $buah[$i] . "<br>";
    }
?>
