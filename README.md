DelphiCompat
============

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
        $color = '255';
        $converter = new TColor();
        $colorRGB = $this->convertToRGB($color); // Return Array([r] => 255, [g] => 0, [b] => 0)
        $colorHex = $this->convertToHex($color); // Return "#ff0000"
    }

}
```
