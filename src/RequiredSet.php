<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface RequiredSet extends RequiredGet
{
    public bool $required { get; set; }

    /**
     * @return $this
     */
    public function setRequired(
        bool $required
    ): static;
}
