<?php

namespace Leo980\Reflector;

use ReflectionClass;

/**
 * Invoke unaccessible method in object with arguments
 * @param  object $object Object to work with
 * @param  string $method Name of method to invoke
 * @param  mixed  $args   Arguments of method
 * @return mixed          Return of invocation
 */
function reflect_method(object $object, string $method, ...$args): mixed
{
    $rc = new ReflectionClass($object);
    $m = $rc->getMethod($method);
    $m->setAccessible(true);
    return $m->invoke($object, ...$args);
}
