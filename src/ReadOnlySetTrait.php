<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

/**
 * @phpstan-require-implements ReadOnlySet
 */
trait ReadOnlySetTrait
{
    public bool $readOnly = false;

    /**
     * Is this read only?
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * Set read only
     *
     * @return $this
     */
    final public function setReadOnly(
        bool $readOnly
    ): static {
        $this->readOnly = $readOnly;
        return $this;
    }
}
