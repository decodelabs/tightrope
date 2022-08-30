<?php

/**
 * @package Tightrope
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Tightrope\Manifest;

use DecodeLabs\Tightrope\Writable as StaticWritable;

interface Writable extends StaticWritable
{
    /**
     * @return $this
     */
    public function setWritable(bool $writable): static;
}
