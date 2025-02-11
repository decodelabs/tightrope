<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

/**
 * @phpstan-require-implements DisabledSet
 */
trait DisabledSetTrait
{
    public bool $disabled = false;

    /**
     * Is this disabled?
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * Set disabled
     *
     * @return $this
     */
    final public function setDisabled(
        bool $disabled
    ): static {
        $this->disabled = $disabled;
        return $this;
    }
}
