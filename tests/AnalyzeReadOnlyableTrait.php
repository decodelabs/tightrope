<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Tests;

use DecodeLabs\Tightrope\Manifest\ReadOnlyable;
use DecodeLabs\Tightrope\Manifest\ReadOnlyableTrait;

class AnalyzeReadOnlyableTrait implements ReadOnlyable
{
    use ReadOnlyableTrait;
}
