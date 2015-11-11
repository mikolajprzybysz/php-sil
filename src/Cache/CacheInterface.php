<?php
/*
 * This file is part of InterfaceLib.
 *
 * (c) "Mikolaj Przybysz" <mikolaj.przybysz@home24.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace InterfaceLib\Cache;

/**
 * It is expected that the implementation can differ
 * in method arguments and return types.
 *
 * @since Interface available since Release 1.0.0
 */
interface CacheInterface
{
    /**
     * Get value from cache
     *
     * @param string $key key assigned to stored value
     *
     * @return string
     */
    public function get($key);

    /**
     * Cache payload under given identifier
     *
     * @param string $key   identifier
     * @param string $value payload
     *
     * @return void
     */
    public function set($key, $value);

    /**
     * Delete cache entry under given identifier
     *
     * @param string $key identifier
     *
     * @return void
     */
    public function del($key);
}
