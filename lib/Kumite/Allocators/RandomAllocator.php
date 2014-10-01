<?php

namespace Kumite\Allocators;

use Kumite\Allocator;
use Kumite\Test;

class RandomAllocator implements Allocator
{
    public function allocate(Test $test, array $options)
    {
        $keys = $test->variantKeys();
        $index = array_rand($keys);
        return $keys[$index];
    }
}
