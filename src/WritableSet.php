<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface WritableSet extends WritableGet
{
    public bool $writable { get; set; }

    /**
     * @return $this
     */
    public function setWritable(
        bool $writable
    ): static;
}
