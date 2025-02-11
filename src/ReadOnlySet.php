<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope;

interface ReadOnlySet extends ReadOnlyGet
{
    public bool $readOnly { get; set; }

    /**
     * @return $this
     */
    public function setReadOnly(
        bool $readOnly
    ): static;
}
