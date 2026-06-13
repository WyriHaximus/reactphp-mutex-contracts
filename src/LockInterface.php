<?php

declare(strict_types=1);

namespace WyriHaximus\React\Mutex\Contracts;

/** @api */
interface LockInterface
{
    public function key(): string;

    public function rng(): string;
}
