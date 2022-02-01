<?php
namespace TDD;

require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$kostenBenefietConcert  = new kostenBenefietConcert();
$aantalBezoekers = 1200;
$prijsTickets = 45;
$__kostenBenefietConcert  = $kostenBenefietConcert ->KostenBenefietConcert($aantalBezoekers, $prijsTickets);
?>
<p>
	Er zijn vandaag <?=$aantalBezoekers?> tickets gekocht voor <?=$prijsTickets?> euro. <br>
	Er moet dus<?=$__kostenBenefietConcert?> euro zijn om een band in te huren.
</p>


