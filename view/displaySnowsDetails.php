<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 24.01.2020
 * Time: 16:55
 */

ob_start();
$title = "RentASnow - Snows";
$compteur=0;
?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>