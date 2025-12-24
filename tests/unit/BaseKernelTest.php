<?php

/*
 * Copyright (c) 2025 Sandor Semsey. All rights reserved.
 */

namespace ReflexiveCommunications\SymfonyComponents;

use ReflexiveCommunications\SymfonyComponents\Test\BaseTestCase;
use ReflexiveCommunications\SymfonyComponents\Test\MockBaseKernel;

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
