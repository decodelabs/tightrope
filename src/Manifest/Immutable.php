<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Immutable as StaticImmutable;

interface Immutable extends StaticImmutable
{
    /**
     * @return $this
     */
    public function setImmutable(bool $immutable): static;
}
