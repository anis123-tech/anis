<?php
namespace TDD;

class BenefietAvond
{
    function KostenBenefietConcert($aantalBezoekers, $PrijsTickets) {

        // 
        $totaalbedrag = round($aantalBezoekers * $PrijsTickets);

        // 
        $maxBandUitgaven = round((20/100 )* $totaalbedrag);

        if ($aantalBezoekers < 600 || $aantalBezoekers >2500) {
            return "\$aantalBezoekers is less then 600 or greater then 2500";
        }
        if ($PrijsTickets < 25 || $PrijsTickets >75) {
            return "\$PrijsTickets is less then 25 or greater then 75";
        }

        if ($maxBandUitgaven < 3500) {
            return "\$maxBandUitgaven voor dit bedrag is geen band beschickbaar, verhoog de ticketprijs";
        }


        return $maxBandUitgaven;
    }
}