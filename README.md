# Seconds

[![Tests](https://github.com/adevade/seconds/workflows/Tests/badge.svg)](https://github.com/adevade/seconds)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/adevade/seconds.svg)](https://packagist.org/packages/adevade/seconds)
[![Total Downloads](https://img.shields.io/packagist/dt/adevade/seconds.svg)](https://packagist.org/packages/adevade/seconds)

Helpers for converting time to seconds.

## Installation

You can install the package via composer:

```bash
composer require adevade/seconds
```

## Usage

```php
use Adevade\Seconds\Seconds;

Seconds::fromMinutes(2); // returns => (int) 120
```

### Available methods

```php
Seconds::fromMinutes($seconds);
Seconds::fromHours($seconds);
Seconds::fromDays($seconds);
Seconds::fromWeeks($seconds);
Seconds::fromMonths($seconds);
Seconds::fromYears($seconds);

Seconds::fromMinute();
Seconds::fromHour();
Seconds::fromDay();
Seconds::fromWeek();
Seconds::fromMonth();
Seconds::fromYear();
```

### Available constants

```php
Seconds::MINUTE;
Seconds::HOUR;
Seconds::DAY;
Seconds::WEEK;
Seconds::MONTH;
Seconds::YEAR;
```

> Months have an average length of 30.42 days.\
> Years have an average length of 365.24 days.

## Credits

- [Andréas Lundgren](https://github.com/adevade)

Idea came from [this tweet by @LasseRafn](https://twitter.com/LasseRafn/status/1225017098373685255). Thanks!
