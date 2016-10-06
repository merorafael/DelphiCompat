<?php

namespace Mero\DelphiCompat;

use PHPUnit\Framework\TestCase;

class TColorTest extends TestCase
{
    /**
     * @var array Colors in TColor format
     */
    private $colors = [
        [
            'tcolor' => '32768',
            'hex' => '#008000',
            'rgb' => [
                'r' => 0,
                'g' => 128,
                'b' => 0,
            ],
        ],
        [
            'tcolor' => '255',
            'hex' => '#ff0000',
            'rgb' => [
                'r' => 255,
                'g' => 0,
                'b' => 0,
            ],
        ],
        [
            'tcolor' => '16744576',
            'hex' => '#8080ff',
            'rgb' => [
                'r' => 128,
                'g' => 128,
                'b' => 255,
            ],
        ],
        [
            'tcolor' => '8421631',
            'hex' => '#ff8080',
            'rgb' => [
                'r' => 255,
                'g' => 128,
                'b' => 128,
            ],
        ],
        [
            'tcolor' => '0',
            'hex' => '#000000',
            'rgb' => [
                'r' => 0,
                'g' => 0,
                'b' => 0,
            ],
        ],
        [
            'tcolor' => '8388863',
            'hex' => '#ff0080',
            'rgb' => [
                'r' => 255,
                'g' => 0,
                'b' => 128,
            ],
        ],
    ];

    public function testConverters()
    {
        foreach ($this->colors as &$color) {
            $tcolor = new TColor($color['tcolor']);
            $this->assertEquals($color['rgb'], $tcolor->getRGB());
            $this->assertEquals($color['hex'], $tcolor->getHex());
            unset($tcolor);
        }
    }
}
