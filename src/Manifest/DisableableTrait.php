<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

/**
 * @phpstan-require-implements Disableable
 */
trait DisableableTrait
{
    protected bool $disabled = false;

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
    public function setDisabled(
        bool $disabled
    ): static {
        $this->disabled = $disabled;
        return $this;
    }
}
