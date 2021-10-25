# Changelog

All notable changes to this project will be documented in this file.

## [Unreleased]

## 3.0.0 - 2021-10-25

### Removed

- Drop support for PHP <= 7.3.
- Drop support for PHPUnit 8.

## 2.1.0 - 2021-04-16

### Added

- Support for PHP 8.0.

### Changed

- Exception messages use correct variable names.

## 2.0.0 - 2020-04-17

:boom: Breaking changes! New namespace. Run `composer dump-autoload` after update.

### Changed

- Change namespace to top level `Adevade`. Use `Adevade\Seconds::class` instead of `Adevade\Seconds\Seconds::class` in ^2.0.

## 1.1.0 - 2020-04-17

### Added

- Added support for PHPUnit `^8|^9`.

## [1.0.2] - 2020-02-28

### Changed

- Better variable names for DocBlock helpers.

## [1.0.1] - 2020-02-08

### Added

- DocBlock helpers for IDEs.

### Fixed

- Throw exceptions if method does not exist or if parameter is invalid.

## [1.0.0] - 2020-02-06

- Initial release

[unreleased]: https://github.com/adevade/seconds/compare/1.0.2...HEAD
[1.0.2]: https://github.com/adevade/seconds/compare/1.0.1...1.0.2
[1.0.1]: https://github.com/adevade/seconds/compare/1.0.0...1.0.1
[1.0.0]: https://github.com/adevade/seconds/releases/tag/1.0.0
