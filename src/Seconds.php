<?php

namespace Adevade\Seconds;

class Seconds
{
    public const MINUTE = 60;
    public const HOUR = 3600;
    public const DAY = 86400;
    public const WEEK = 604800;
    public const MONTH = 2628288; // 30.42 days
    public const YEAR = 31556736; // 365.24 days

    /**
     * Return the calculated seconds.
     *
     * @param string $method
     * @param array $parameters
     * @return int
     */
    public static function __callStatic($method, $parameters)
    {
        if (static::isSingular($method)) {
            return static::getConstantFromMethod($method);
        }

        return static::getConstantFromMethod($method) * $parameters[0];
    }

    /**
     * Check if method is singular or plural.
     *
     * @param string $method
     * @return boolean
     */
    protected static function isSingular($method)
    {
        return !preg_match('/s$/', $method);
    }

    /**
     * Get constant from method name.
     *
     * @param string $method
     * @return int
     */
    protected static function getConstantFromMethod($method)
    {
        $constant = preg_replace('/^from/', '', $method);
        $constant = preg_replace('/s$/', '', $constant);
        $constant = strtoupper($constant);

        return constant("static::{$constant}");
    }
}
