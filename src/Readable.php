<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface Readable
{
    public function isReadable(): bool;
}
