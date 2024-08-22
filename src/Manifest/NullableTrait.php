<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

/**
 * @phpstan-require-implements Nullable
 */
trait NullableTrait
{
    protected bool $nullable = false;

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
    public function setNullable(
        bool $nullable
    ): static {
        $this->nullable = $nullable;
        return $this;
    }
}
