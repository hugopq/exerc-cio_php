<h1>Arrays</h1>
<?php
    $array_i = ["janeiro", "Fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
    $array_a = ["dia" => "23", "mes" => "10", "ano" => "2024"];

    $string_ai = print_r($array_i,true);
    $string_aa = print_r($array_a,true);

    echo "<p><b> Array indexado:</b> $string_ai </p>";
    echo "<p><b> Array associativo:</b> $string_aa </p>";