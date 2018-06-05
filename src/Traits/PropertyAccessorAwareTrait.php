<?php

namespace Adtechpotok\Aware\Traits;

use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

trait PropertyAccessorAwareTrait
{
    /**
     * @var PropertyAccessorInterface
     */
    protected $propertyAccessor;

    /**
     * @required
     *
     * @param PropertyAccessorInterface $propertyAccessor
     */
    public function setPropertyAccessor(PropertyAccessorInterface $propertyAccessor)
    {
        $this->propertyAccessor = $propertyAccessor;
    }
}
