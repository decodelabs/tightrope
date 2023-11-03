<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Nullable as StaticNullable;

interface Nullable extends StaticNullable
{
    /**
     * @return $this
     */
    public function setNullable(
        bool $nullable
    ): static;
}
