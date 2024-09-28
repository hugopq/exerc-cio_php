<h1>Strings</h1>
<?php
    $str1 = "Hello";
    $str2 = "World";
    
    echo "<p> str1 = $str1 (".strlen($str1).")</p>";
    echo "<p> str2 = $str2 (".strlen($str1).")</p>";
    if(strcmp($str1, $str2) == 0)
    {
        echo "<p>As strings são iguais </p>";
    }
    else
    {
        echo "<p>As strings são diferentes </p>";
    }
    