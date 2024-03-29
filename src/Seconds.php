<?php

namespace Adevade;

use BadMethodCallException;
use InvalidArgumentException;

/**
 * @method static int fromMinute()
 * @method static int fromMinutes(int $minutes)
 * @method static int fromHour()
 * @method static int fromHours(int $hours)
 * @method static int fromDay()
 * @method static int fromDays(int $days)
 * @method static int fromWeek()
 * @method static int fromWeeks(int $weeks)
 * @method static int fromMonth()
 * @method static int fromMonths(int $months)
 * @method static int fromYear()
 * @method static int fromYears(int $years)
 */
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
     * @throws \InvalidArgumentException
     */
    public static function __callStatic(string $method, array $parameters): int
    {
        if (static::isSingular($method)) {
            return static::getConstantFromMethodName($method);
        }

        if (! static::hasValidParameters($parameters)) {
            throw new InvalidArgumentException(
                sprintf(
                    '%s::%s(int $%s) expects an integer.',
                    static::class,
                    $method,
                    str_replace('from', '', strtolower($method))
                )
            );
        }

        return static::getConstantFromMethodName($method) * $parameters[0];
    }

    /**
     * Check if method is singular or plural.
     */
    protected static function isSingular(string $method): bool
    {
        return ! str_ends_with($method, 's');
    }

    /**
     * Check if the passed parameters are present and valid.
     */
    protected static function hasValidParameters(array $parameters): bool
    {
        return isset($parameters[0]) && is_int($parameters[0]);
    }

    /**
     * Get constant from method name.
     *
     * @throws \BadMethodCallException
     */
    protected static function getConstantFromMethodName(string $method): int
    {
        $constant = preg_replace('/^from/', '', $method);
        $constant = preg_replace('/s$/', '', $constant);
        $constant = strtoupper($constant);

        if (! defined("static::{$constant}")) {
            throw new BadMethodCallException(
                sprintf('%s::%s() does not exist.', static::class, $method)
            );
        }

        return constant("static::{$constant}");
    }
}
