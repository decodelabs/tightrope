<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Disableable as StaticDisableable;

interface Disableable extends StaticDisableable
{
    /**
     * @return $this
     */
    public function setDisabled(bool $disabled): static;
}
