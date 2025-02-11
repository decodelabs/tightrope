<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

/**
 * @phpstan-require-implements NullableSet
 */
trait NullableSetTrait
{
    public bool $nullable = false;

    /**
     * Is this nullable?
     */
    public function isNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * Set nullable
     *
     * @return $this
     */
    final public function setNullable(
        bool $nullable
    ): static {
        $this->nullable = $nullable;
        return $this;
    }
}
