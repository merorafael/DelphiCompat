<?php
namespace Mero\DelphiCompat\Converter;

class TColor
{

    /**
     * Convert TColor format to RGB.
     *
     * @param string $color Color in TColor format
     *
     * @return array Color in RGB format
     */
    public function convertToRGB($color)
    {
        return [
            'r' => $color & 0xFF,
            'g' => ($color >> 8) & 0xFF,
            'b' => ($color >> 16) & 0xFF
        ];
    }

    /**
     * Convert TColor format to hex.
     *
     * @param string $color Color in TColor format
     *
     * @return string Color in hex format
     */
    public function convertToHex($color)
    {
        $rgb = $this->convertToRGB($color);
        $hexRed = str_pad(dechex($rgb['r']), 2, '0', STR_PAD_LEFT);
        $hexGreen = str_pad(dechex($rgb['g']), 2, '0', STR_PAD_LEFT);
        $hexBlue = str_pad(dechex($rgb['b']), 2, '0', STR_PAD_LEFT);

        return '#'.$hexRed.$hexGreen.$hexBlue;
    }

}
