<?php
/*
 * This file is part of PHPUnit.
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
 *
 * @since Interface available since Release 1.0.0
 */
interface Semaphore
{
    public function lock($resource, $ttl);
    public function unlock($resourece);
}
