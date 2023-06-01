<?php
function toon_array_in_browser($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
// Maak een array met cijfers
$cijfers = vul_array_met_cijfers(5);

// Toon de array-inhoud in de browser
toon_array_in_browser($cijfers);