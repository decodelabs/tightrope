<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Readable as StaticReadable;

interface Readable extends StaticReadable
{
    /**
     * @return $this
     */
    public function setReadable(bool $readable): static;
}
