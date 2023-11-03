<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Requirable as StaticRequirable;

interface Requirable extends StaticRequirable
{
    /**
     * @return $this
     */
    public function setRequired(
        bool $required
    ): static;
}
