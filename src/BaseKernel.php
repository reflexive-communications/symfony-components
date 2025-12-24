<?php

/*
 * Copyright (c) 2025 Sandor Semsey. All rights reserved.
 */

namespace ReflexiveCommunications\SymfonyComponents;

use Symfony\Component\HttpKernel\Kernel;

/**
 * HTTP Kernel base class.
 */
abstract class BaseKernel extends Kernel
{
    /**
     * Override default build directory.
     */
    public function getBuildDir(): string
    {
        return $this->getProjectDir().'/private/temp/compile/'.$this->environment;
    }

    /**
     * Override default cache directory.
     */
    public function getCacheDir(): string
    {
        return $this->getProjectDir().'/private/temp/cache/'.$this->environment;
    }

    /**
     * Override default log directory.
     */
    public function getLogDir(): string
    {
        return $this->getProjectDir().'/private/log';
    }
}
