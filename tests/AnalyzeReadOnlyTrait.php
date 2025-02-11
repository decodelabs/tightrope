<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Tests;

use DecodeLabs\Tightrope\ReadOnlySet;
use DecodeLabs\Tightrope\ReadOnlySetTrait;

class AnalyzeReadOnlyTrait implements ReadOnlySet
{
    use ReadOnlySetTrait;

    public function testReadOnly(): bool
    {
        return $this->readOnly;
    }
}
