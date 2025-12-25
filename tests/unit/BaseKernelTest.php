<?php

/*
 * Copyright (c) 2025 Sandor Semsey. All rights reserved.
 */

namespace ReflexiveComms\SymfonyComponents;

use ReflexiveComms\SymfonyComponents\Test\BaseTestCase;
use ReflexiveComms\SymfonyComponents\Test\MockBaseKernel;

/**
 * @group kernel
 */
class BaseKernelTest extends BaseTestCase
{
    public function testGetBuildDir(): void
    {
        $kernel = new MockBaseKernel('test', true);
        self::assertSame($kernel->getProjectDir().'/private/temp/compile/test', $kernel->getBuildDir(), 'Wrong build directory');
    }

    public function testGetCacheDir(): void
    {
        $kernel = new MockBaseKernel('test', true);
        self::assertSame($kernel->getProjectDir().'/private/temp/cache/test', $kernel->getCacheDir(), 'Wrong cache directory');
    }

    public function testGetLogDir(): void
    {
        $kernel = new MockBaseKernel('test', true);
        self::assertSame($kernel->getProjectDir().'/private/log', $kernel->getLogDir(), 'Wrong log directory');
    }
}
