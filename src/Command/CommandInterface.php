<?php
/*
 * This file is part of InterfaceLib.
 *
 * (c) "Mikolaj Przybysz" <mikolaj.przybysz@home24.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace InterfaceLib\Command;

/**
 * Command implementing this interface is expected
 * to provide output based on input arguments.
 * It is expected that the implementation can differ
 * in method arguments and return types.
 *
 * @since Interface available since Release 1.0.0
 */
interface CommandInterface
{
    /**
     * Proper command process input params
     * and return some output based on that.
     * It is expected that params passed
     * by reference will not get changed.
     *
     * @return mixed
     */
    public function execute();
}
