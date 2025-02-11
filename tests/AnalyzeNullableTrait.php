<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Tests;

use DecodeLabs\Tightrope\NullableSet;
use DecodeLabs\Tightrope\NullableSetTrait;

class AnalyzeNullableTrait implements NullableSet
{
    use NullableSetTrait;

    public function testNullable(): bool
    {
        return $this->nullable;
    }
}
