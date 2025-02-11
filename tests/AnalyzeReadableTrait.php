<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Tests;

use DecodeLabs\Tightrope\ReadableSet;
use DecodeLabs\Tightrope\ReadableSetTrait;

class AnalyzeReadableTrait implements ReadableSet
{
    use ReadableSetTrait;

    public function testReadable(): bool
    {
        return $this->readable;
    }
}
