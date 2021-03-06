<?php

declare(strict_types=1);

namespace WyriHaximus\React\Mutex\Contracts;

use React\Promise\PromiseInterface;

interface MutexInterface
{
    /**
     * Acquire a mutex. Will resolve with either a Lock object or false when it can't acquire the lock because another
     * requester already acquired it.
     *
     * @return PromiseInterface<?LockInterface>
     *
     * @phpstan-ignore-next-line
     * @psalm-suppress TooManyTemplateParams
     */
    public function acquire(string $key, float $ttl): PromiseInterface;

    /**
     * Release a previously acquired lock.
     *
     * @return PromiseInterface<bool>
     *
     * @phpstan-ignore-next-line
     * @psalm-suppress TooManyTemplateParams
     */
    public function release(LockInterface $lock): PromiseInterface;
}
