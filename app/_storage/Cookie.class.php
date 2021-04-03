<?php
/**
 * ★ Cookie ★
 *
 * @author: ulricaskarin
 * @version 1.0.0
 */

namespace _storage;

/**
 * Class Cookie
 * @package _storage
 */
class Cookie
{
    /**
     * Constants keeping time.
     */
    const MINUS_ONE_HOUR = -3600;
    const HALF_HOUR = 1800;
    const ONE_HOUR = 3600;
    const ONE_DAY = 86400;
    const SEVEN_DAYS = 604800;
    const TWO_WEEKS = 1209600;
    const ONE_MONTH = 2629743;

    /**
     * Sets Cookie.
     *
     * @param $key
     * @param $value
     * @param int $expire       Number of seconds before expires.
     * @param string $path      Default '/'. Restrict path cookie available to.
     * @param string $domain    Default null. Restrict domain cookie is available to.
     * @param bool $secure      Default false. True: only transmit over secure connections.
     * @param bool $httponly    Default true. Transmit cookies over http only, no JS access.
     */
    public static function set(string $key, $value, int $expire, string $path = '/',
                               string $domain = null, bool $secure = false, bool $httponly = true)
    {
        assert((is_string($key) && !empty($key)) && (is_int($expire) && !empty($expire)));

        if (is_numeric($expire)) {
            $expire +=time();
        }

        setcookie($key, $value, $expire, $path, $domain, $secure, $httponly);
    }

    /**
     * Deletes cookie.
     *
     * @param string $key
     */
    public static function delete(string $key)
    {
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, '', self::MINUS_ONE_HOUR);
        }
    }

    /**
     * Loads cookie.
     *
     * @param string $key
     * @return string, cookie if set.
     */
    public static function load(string $key)
    {
        assert(is_string($key) && !empty($key));
        return isset($_COOKIE[$key]) ? $_COOKIE[$key] : false;
    }
}
