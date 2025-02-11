<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

/**
 * @phpstan-require-implements ImmutableSet
 */
trait ImmutableSetTrait
{
    public bool $immutable = false;

    /**
     * Is this immutable?
     */
    public function isImmutable(): bool
    {
        return $this->immutable;
    }

    /**
     * Set immutable
     *
     * @return $this
     */
    final public function setImmutable(
        bool $immutable
    ): static {
        $this->immutable = $immutable;
        return $this;
    }
}
