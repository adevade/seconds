<?php

namespace Adevade\Seconds\Tests;

use Adevade\Seconds\Seconds;
use PHPUnit\Framework\TestCase;

class SecondsTest extends TestCase
{
    /** @test */
    function it_converts_from_minutes_to_seconds()
    {
        $this->assertSame(60, Seconds::fromMinutes(1));
        $this->assertSame(120, Seconds::fromMinutes(2));
        $this->assertSame(0, Seconds::fromMinutes(0));

        $this->assertSame(60, Seconds::fromMinute());
        $this->assertSame(60, Seconds::fromMinute(999));
    }

    /** @test */
    function it_converts_from_hours_to_seconds()
    {
        $this->assertSame(3600, Seconds::fromHours(1));
        $this->assertSame(7200, Seconds::fromHours(2));
        $this->assertSame(0, Seconds::fromHours(0));

        $this->assertSame(3600, Seconds::fromHour());
        $this->assertSame(3600, Seconds::fromHour(999));
    }

    /** @test */
    function it_converts_from_days_to_seconds()
    {
        $this->assertSame(86400, Seconds::fromDays(1));
        $this->assertSame(172800, Seconds::fromDays(2));
        $this->assertSame(0, Seconds::fromDays(0));

        $this->assertSame(86400, Seconds::fromDay());
        $this->assertSame(86400, Seconds::fromDay(999));
    }

    /** @test */
    function it_converts_from_weeks_to_seconds()
    {
        $this->assertSame(604800, Seconds::fromWeeks(1));
        $this->assertSame(1209600, Seconds::fromWeeks(2));
        $this->assertSame(0, Seconds::fromWeeks(0));

        $this->assertSame(604800, Seconds::fromWeek());
        $this->assertSame(604800, Seconds::fromWeek(999));
    }

    /** @test */
    function it_converts_from_months_to_seconds()
    {
        $this->assertSame(2628288, Seconds::fromMonths(1));
        $this->assertSame(5256576, Seconds::fromMonths(2));
        $this->assertSame(0, Seconds::fromMonths(0));

        $this->assertSame(2628288, Seconds::fromMonth());
        $this->assertSame(2628288, Seconds::fromMonth(999));
    }

    /** @test */
    function it_converts_from_years_to_seconds()
    {
        $this->assertSame(31556736, Seconds::fromYears(1));
        $this->assertSame(63113472, Seconds::fromYears(2));
        $this->assertSame(0, Seconds::fromYears(0));

        $this->assertSame(31556736, Seconds::fromYear());
        $this->assertSame(31556736, Seconds::fromYear(999));
    }
}
