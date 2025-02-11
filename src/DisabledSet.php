<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface DisabledSet extends DisabledGet
{
    public bool $disabled { get; set; }

    /**
     * @return $this
     */
    public function setDisabled(
        bool $disabled
    ): static;
}
