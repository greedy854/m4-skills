<?php
$dag_van_de_week = 3;
switch ($dag_van_de_week) {
    case 0:
        echo "Zondag";
        break;
        case 1:
        echo "Maandag";
        break;
        case 2:
        echo "Dinsdag";
        break;
        case 3:
        echo "Woensdag";
        break;
        case 4:
        echo "Donderdag";
        break;
        case 5:
        echo "Vrijdag";
        break;
        case 0:
        echo "Zaterdag";
        break;
        default:
        echo "Onbekende dag";
}
?>
<?php
$dag = 'wo';
switch ($dag) {
        case   'zo':
        echo "Zondag";
        break;
        case 'ma':
        echo "Maandag";
        break;
        case 'di':
        echo "Dinsdag";
        break;
        case 'wo':
        echo "Woensdag";
        break;
        case 'do':
        echo "Donderdag";
        break;
        case 'vrij':
        echo "Vrijdag";
        break;
        case 'za':
        echo "Zaterdag";
        break;
        default:
        echo "Onbekende dag";
}
?>