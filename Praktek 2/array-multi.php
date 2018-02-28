<?php
$data = array(
    "web.prog" => array(
    "dwiki" => 7,
    "supmar" => 8,
    "hernanda" => 6
    ),
    "kalkulus" => array(
        "hernanda" => 9,
        "supmar" => 8,
        "dwiki" => 5
    )
    );

echo "Nilai web.prog untuk Dwiki : "
.$data["web.prog"]["dwiki"] . "<br>";
echo "Nilai kalkulus untuk Dwiki : "
.$data["kalkulus"]["dwiki"]. "<br>";

?>