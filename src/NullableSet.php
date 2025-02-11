<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface NullableSet extends NullableGet
{
    public bool $nullable { get; set; }

    /**
     * @return $this
     */
    public function setNullable(
        bool $nullable
    ): static;
}
