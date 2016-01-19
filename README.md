DelphiCompat
============

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8183d0f4-e57f-44da-a11b-e9c746427deb/small.png)](https://insight.sensiolabs.com/projects/8183d0f4-e57f-44da-a11b-e9c746427deb)
[![Latest Stable Version](https://poser.pugx.org/mero/delphi-compat/v/stable.svg)](https://packagist.org/packages/mero/delphi-compat)
[![Total Downloads](https://poser.pugx.org/mero/delphi-compat/downloads.svg)](https://packagist.org/packages/mero/delphi-compat)
[![License](https://poser.pugx.org/mero/delphi-compat/license.svg)](https://packagist.org/packages/mero/delphi-compat)

Interpret data generated by Delphi resources.

Requeriments
------------

- PHP 5.5.9 or above

Instalation with composer
-------------------------

1. Open your project directory;
2. Run `composer require mero/delphi-compat` to add DelphiCompat in your project vendor;
3. Run `composer update` command.

TColor converter
----------------

Abstract controller with basic methods for easy identification framework resources.

| Name                         | Atributes   | Description                           |
| ---------------------------- | ------------| ------------------------------------- |
| convertToRGB                 | $color      | Convert TColor format to RGB          |
| convertToHex                 | $color      | Convert TColor format to hex          |


### Usage example:
```php
namespace Acme\Bundle\BlogBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mero\DelphiCompat\Converter\TColor;

class NewsController extends Controller
{

    /**
     * @Route("/", name="news")
     */
    public function indexAction(Request $request)
    {
        $color = '16744576';
        $converter = new TColor();
        $colorRGB = $this->convertToRGB($color); // Return Array([r] => 128, [g] => 128, [b] => 255)
        $colorHex = $this->convertToHex($color); // Return "#8080ff"
    }

}
```
