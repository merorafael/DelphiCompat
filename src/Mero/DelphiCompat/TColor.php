<?php

namespace Mero\DelphiCompat;

class TColor
{
    /**
     * @var string Color in TColor format
     */
    private $tcolor;

    /**
     * @var array Color in RGB format
     */
    private $rgb;

    /**
     * @var string Color in hex format
     */
    private $hex;

    /**
     * TColor constructor.
     *
     * @param string $color Color in TColor format
     */
    public function __construct($color)
    {
        $this->setColor($color);
    }

    /**
     * Define color using TColor format.
     *
     * @param string $color Color in TColor format
     *
     * @return TColor
     */
    public function setColor($color)
    {
        $this->tcolor = $color;
        $this->rgb = [
            'r' => $color & 0xFF,
            'g' => ($color >> 8) & 0xFF,
            'b' => ($color >> 16) & 0xFF,
        ];
        $hexRed = str_pad(dechex($this->rgb['r']), 2, '0', STR_PAD_LEFT);
        $hexGreen = str_pad(dechex($this->rgb['g']), 2, '0', STR_PAD_LEFT);
        $hexBlue = str_pad(dechex($this->rgb['b']), 2, '0', STR_PAD_LEFT);
        $this->hex = '#'.$hexRed.$hexGreen.$hexBlue;

        return $this;
    }

    /**
     * Return color in TColor format.
     *
     * @return string Color in TColor format string
     */
    public function getTColor()
    {
        return $this->tcolor;
    }

    /**
     * Return color in RGB format.
     *
     * @return array Color in RGB format
     */
    public function getRGB()
    {
        return $this->rgb;
    }

    /**
     * Return color in hex format.
     *
     * @return string Color in hex format
     */
    public function getHex()
    {
        return $this->hex;
    }
}
