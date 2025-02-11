<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface ImmutableSet extends ImmutableGet
{
    public bool $immutable { get; set; }

    /**
     * @return $this
     */
    public function setImmutable(
        bool $immutable
    ): static;
}
