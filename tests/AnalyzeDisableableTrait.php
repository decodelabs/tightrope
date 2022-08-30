<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Tests;

use DecodeLabs\Tightrope\Manifest\Disableable;
use DecodeLabs\Tightrope\Manifest\DisableableTrait;

class AnalyzeDisableableTrait implements Disableable
{
    use DisableableTrait;
}
