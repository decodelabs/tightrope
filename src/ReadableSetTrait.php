<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

/**
 * @phpstan-require-implements ReadableSet
 */
trait ReadableSetTrait
{
    public bool $readable = false;

    /**
     * Is this readable?
     */
    public function isReadable(): bool
    {
        return $this->readable;
    }

    /**
     * Set readable
     *
     * @return $this
     */
    final public function setReadable(
        bool $readable
    ): static {
        $this->readable = $readable;
        return $this;
    }
}
