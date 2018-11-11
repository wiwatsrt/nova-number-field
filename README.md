# A numberfield for Nova apps

use numeral.js for formatted number

## Installation

```bash
composer require wiwatsrt/nova-number-field
```

## Usage

```php
namespace App\Nova;

use Wiwatsrt\NovaNumberField\NovaNumberField as Currency;

class Invoice extends Resource
{
    // ...
    
    public function fields(Request $request)
    {
        return [
            // ...
            
            Currency::make('Subtotal')
                ->format('0,0.00'),

            // ...
        ];
    }
}
```
