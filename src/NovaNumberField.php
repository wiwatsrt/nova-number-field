<?php

namespace Wiwatsrt\NovaNumberField;

use Laravel\Nova\Fields\Number;

class NovaNumberField extends Number
{
    public $textAlign = 'right';

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-number-field';

    public function format(string $format)
    {
        return $this->withMeta(['format' => $format]);
    }
}
