# Symfony components

[![CI](https://github.com/reflexive-communications/symfony-components/actions/workflows/main.yml/badge.svg)](https://github.com/reflexive-communications/symfony-components/actions/workflows/main.yml)

This library contains customized Symfony components that can be used to create a headless web API.

Supported Symfony version: 7.4 LTS

## Installation

You can install this library via Composer:

```bash
composer require reflexive-communications/symfony-components
```

## Components

The following Symfony components are included (listed with their main customizations):

- BaseKernel: a wrapper around the HttpKernel component
    - default project structure is changed (`/private` instead of `/var`)

For details about the modifications, please refer to the source code.

## Usage

See the [Developer Notes](DEVELOPER.md) file for instructions on how to use the components in your project.
