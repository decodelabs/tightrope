<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\ReadOnlyable as StaticReadOnlyable;

interface ReadOnlyable extends StaticReadOnlyable
{
    /**
     * @return $this
     */
    public function setReadOnly(bool $readOnly): static;
}
