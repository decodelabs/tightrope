<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

trait RequirableTrait
{
    protected bool $required = false;

    /**
     * Is this required?
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * Set required
     *
     * @return $this
     */
    public function setRequired(
        bool $required
    ): static {
        $this->required = $required;
        return $this;
    }
}
