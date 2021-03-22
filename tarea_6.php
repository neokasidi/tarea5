<?php
        
function getPalindromo($palabra)
{
    $arrayEnLetras = explode(" ", strtolower($palabra));
    $nuevo="";

    foreach($arrayEnLetras as $m)
    {
        trim($m);
        $nuevo .= $m;
    }
    
    if($nuevo == strrev($nuevo))
    {
        return "Es Palindromo";
    }
    else {
        return "No es Palindromo";
    }
}

$palabra="reconocer";
echo "<p>" . $palabra . " " . getPalindromo($palabra) . "</p>";

$palabra="ala";
echo "<p>" . $palabra . " " . getPalindromo($palabra) . "</p>";

$palabra="amalo";
echo "<p>" . $palabra . " " . getPalindromo($palabra) . "</p>";

$palabra="aviva";
echo "<p>" . $palabra . " " . getPalindromo($palabra) . "</p>";

?>