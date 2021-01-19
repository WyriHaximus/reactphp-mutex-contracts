<?php

declare(strict_types=1);

namespace WyriHaximus\React\Mutex\Contracts;

interface LockInterface
{
    public function key(): string;

    public function rng(): string;
}
