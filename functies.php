<?php
function groet(): void {
    echo 'Hello World!';
}

function groetMetArgument(string $naam): void {
    echo "Hello {$naam}";
}

function groetReturned(): string {
    return 'Hello World!';
}

function groetMetArgumentReturned(string $naam): string {
    return "Hello {$naam}";
}

function defaultArgs(string $groet='Hallo',string $naam='gast'): void {
    echo "{$groet} {$naam}";
}

function differentTypes(int $first, int $second): int|float {
    return $first / $second;
}
?>