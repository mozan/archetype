<?php

/*
 * This file is part of the Fosyl Archetype package.
 *
 * (c) Adam Elsodaney
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Archetype\Model;

use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
interface ArchetypeTranslationInterface extends ResourceInterface
{
    /**
     * Get name, in most cases it will be displayed by user only in backend.
     * Can be something like 't-shirt' or 'tv'.
     *
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);
}
