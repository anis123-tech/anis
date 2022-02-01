<?php


require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


use PHPUnit\Framework\TestCase;
use TDD\Maaltijden;

class MaaltijdenTest extends TestCase
{
    /**
     * @dataProvider providePersoneelsmaaltijden
     */
    public function testPersoneelsmaaltijden($aantalTafels, $aantalGasten, $expected, $message) {
        $output = (new Maaltijden)->personeelsMaaltijden($aantalTafels, $aantalGasten);
        $this->assertEquals($expected, $output, $message);
    }

    public function providePersoneelsmaaltijden() {
        return [
            [
                12,-3, "\$aantalGasten is less then 0", "Er zijn minder dan 0 gasten."
            ],
            [
                -1, 6, "\$aantalBezoekers is less then 0", "Er zijn minder dan 0 beszoekers"
            ],
            [
                20, 36, "\$koks is more then 12", "Er zijn te veel koks"
            ],
            [
                1, 100, "\$barmensen is more then 7", "Er zijn te veel barmensen"
            ],
            [
                13, 17, 23.5, "Er zijn 23.5 maaltijden nodig"
            ],
            [
                16, 5, 27, "Er zijn 27 maaltijden nodig"
            ],
            [
                18, 25, 31, "Er zijn 31 maaltijden nodig"
            ],
            [
                2, 1, 8, "Er zijn 8 maaltijden nodig"
            ]
        ];
    }
}