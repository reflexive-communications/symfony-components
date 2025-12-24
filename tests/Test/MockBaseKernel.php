<?php

/*
 * Copyright (c) 2025 Sandor Semsey. All rights reserved.
 */

namespace ReflexiveCommunications\SymfonyComponents\Test;

use ReflexiveCommunications\SymfonyComponents\BaseKernel;

/**
 * Mock kernel for unit tests.
 */
class MockBaseKernel extends BaseKernel
{
    public function registerBundles(): iterable
    {
    }

    public function registerContainerConfiguration(\Symfony\Component\Config\Loader\LoaderInterface $loader)
    {
    }
}
