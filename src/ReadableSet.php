<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface ReadableSet extends ReadableGet
{
    public bool $readable { get; set; }

    /**
     * @return $this
     */
    public function setReadable(
        bool $readable
    ): static;
}
