<?php
declare(strict_types=1);
include "functies.php";

groet();

groetMetArgument(1);
defaultArgs("Hello", "Simon");

echo gettype(differentTypes(1, 2));