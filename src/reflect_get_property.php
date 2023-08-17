<?php

namespace Leo980\Reflector;

use ReflectionClass;

/**
 * Get value of unaccessible properties in object
 * @param  object $object   Object to work with
 * @param  string $property Name of property
 * @return mixed            Value of property
 */
function reflect_get_property(object $object, string $property): mixed
{
    $rc = new ReflectionClass($object);
    $p = $rc->getProperty($property);
    $p->setAccessible(true);
    return $p->getValue($object);
}
