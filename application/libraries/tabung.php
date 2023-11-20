<?php

class tabung
{
    function hasilTabung ($jari, $tinggi)
    {
        $phi = 3.14;

        echo "Phi: " . $phi;
        echo "<br />";
        echo "Jari-jari: " . $jari;
        echo "<br />";
        echo "Tinggi: " . $tinggi;
        echo "<hr />";

        $volume = $phi * $jari * $jari * $tinggi;
        echo "volume tabung adalah: " . $volume;
        echo "<hr />";

        $luasPermukaan = 2 * $phi * $jari * ($jari + $tinggi);
        echo "luas permukaan tabung adalah: " . $luasPermukaan;
        echo "<hr />";

        $luasSelimut = 2 * $phi * $jari * $tinggi;
        echo "luas selimut tabung adalah: " . $luasSelimut;
        echo "<hr />";

    }
}

?>