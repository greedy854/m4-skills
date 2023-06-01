<?php function vul_array_met_cijfers($aantal_cijfers) {
    if ($aantal_cijfers < 5) {
        throw new Exception("Het aantal cijfers moet minimaal 5 zijn.");
    }

    $cijfers = array();
    for ($i = 0; $i < $aantal_cijfers; $i++) {
        $cijfer = readline("Voer cijfer " . ($i+1) . " in: ");
        array_push($cijfers, $cijfer);
    }

    return $cijfers;
}