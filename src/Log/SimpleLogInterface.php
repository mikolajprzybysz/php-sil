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
 * Log implementing this interface is expected
 * to provide simple string logging method.
 * It is expected that the implementation can differ
 * in method arguments and return types.
 *
 * @since Interface available since Release 1.0.0
 */
interface SimpleLogInterface
{
    /**
     * Store message or pass it to system that will
     * persist it.
     *
     * @param string $message to be logged
     *
     * @return void
     */
    public function log($message);
}
