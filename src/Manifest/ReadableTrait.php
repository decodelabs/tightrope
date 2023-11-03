<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

trait ReadableTrait
{
    protected bool $readable = false;

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
    public function setReadable(
        bool $readable
    ): static {
        $this->readable = $readable;
        return $this;
    }
}
