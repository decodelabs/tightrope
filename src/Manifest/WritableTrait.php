<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

trait WritableTrait
{
    protected bool $writable = false;

    /**
     * Is this writable?
     */
    public function isWritable(): bool
    {
        return $this->writable;
    }

    /**
     * Set writable
     *
     * @return $this
     */
    public function setWritable(bool $writable): static
    {
        $this->writable = $writable;
        return $this;
    }
}
