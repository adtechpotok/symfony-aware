<?php

namespace Adtechpotok\Aware\Interfaces;

use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

interface PropertyAccessorAwareInterface
{
    /**
     * @param PropertyAccessorInterface $propertyAccessor
     */
    public function setPropertyAccessor(PropertyAccessorInterface $propertyAccessor);
}
