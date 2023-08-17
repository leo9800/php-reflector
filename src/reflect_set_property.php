<?php

namespace Leo980\Reflector;

use ReflectionClass;

/**
 * Set value of unaccessible properties in object
 * @param  object $object   Object to work with
 * @param  string $property Name of property
 * @param  mixed  $value    Value of property to be set
 * @return void
 */
function reflect_set_property(object $object, string $property, mixed $value): void
{
    $rc = new ReflectionClass($object);
    $p = $rc->getProperty($property);
    $p->setAccessible(true);
    $p->setValue($object, $value);
}
