<?php
/*
 * This file is part of InterfaceLib.
 *
 * (c) "Mikolaj Przybysz" <mikolaj.przybysz@home24.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace InterfaceLib\Lock;

/**
 * Lock implementing this interface should acquire
 * the lock on lock method and release it on unlock method.
 * It is expected that the implementation can differ
 * in method arguments and return types.
 *
 * @since Interface available since Release 1.0.0
 */
interface SemaphoreInterface
{
    /**
     * Lock the resource and return the lock identifier.
     *
     * @param mixed $resource to be locked
     *
     * @return $lockId
     */
    public function lock($resource);

    /**
     * Unlock the resource based on the lock identifier.
     *
     * @param mixed $lockId to be unlocked
     *
     * @return bool
     */
    public function unlock($lockId);
}
