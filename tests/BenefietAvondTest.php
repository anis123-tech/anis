<?php


require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


use PHPUnit\Framework\TestCase;
use TDD\BenefietAvond;

class kostenBenefietConcertTest extends TestCase
{
    /**
     * @dataProvider provideKostenBenefietConcert
     */
    public function testKostenBenefietConcert($aantalBezoekers, $prijsTickets, $expected, $message) {
        $output = (new BenefietAvond)->KostenBenefietConcert($aantalBezoekers, $prijsTickets);
        $this->assertEquals($expected, $output, $message);
    }

    public function provideKostenBenefietConcert() {
        return [
            [
                400, 45, "\$aantalBezoekers is less then 600 or greater then 2500", "verkeerde bezoekersaantal"
            ],
            [
                800, 61, 9760.0, "verkeerde bezoekersaantal"
            ],
            [
                1100, 60, 13200.0, "verkeerde bezoekersaantal"
            ],
            [
                1200, 48, 11520.0, "verkeerde bezoekersaantal"
            ],
            [
                800, 45, 7200.0, "verkeerde Prijsticket"
            ],
            [
                700, 76, "\$PrijsTickets is less then 25 or greater then 75", "verkeerde Prijsticket"
            ],
            [
                600, 45, 5400.0,  "verkeerde Prijsticket"
            ],
            [
                2300, 40, 18400.0, "18400.0 zijn"
            ]
        ];
    }
}