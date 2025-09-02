<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $num1_string = $_POST["num1"];
    $num2_string = $_POST["num2"];

    $num1 = intval($num1_string);
    $num2 = intval($num2_string);
    

    $mult = $num1 * $num2;

    echo "<h3> A multiplicação dos números " . $num1 . " e " . $num2 . " resulta em: " . $mult . "</h3>";

   }




?>