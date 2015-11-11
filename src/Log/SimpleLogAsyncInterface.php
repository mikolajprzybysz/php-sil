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
 * to provide simple non-blocking string logging method.
 * It is expected that the implementation can differ
 * in method arguments and return types.
 *
 * @since Interface available since Release 1.0.0
 */
interface SimpleLogAsyncInterface
{
    /**
     * Log message passed to this method is suppose
     * to be eventually in the logs. Implementation
     * should provide non-blocking way to log messages.
     *
     * @param string $message to be logged in a non-blocking manner
     *
     * @return void
     */
    public function log($message);
}
