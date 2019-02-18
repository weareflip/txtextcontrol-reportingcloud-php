<?php
declare(strict_types=1);

/**
 * ReportingCloud PHP Wrapper
 *
 * PHP wrapper for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://github.com/TextControl/txtextcontrol-reportingcloud-php for the canonical source repository
 * @license   https://raw.githubusercontent.com/TextControl/txtextcontrol-reportingcloud-php/master/LICENSE.md
 * @copyright © 2019 Text Control GmbH
 */

namespace TxTextControlTest\ReportingCloud\Filter;

use PHPUnit\Framework\TestCase;
use TxTextControl\ReportingCloud\Filter\Filter;

/**
 * Class TimestampToDateTimeTest
 *
 * @package TxTextControlTest\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class TimestampToDateTimeTest extends TestCase
{
    /**
     * @var string
     * @psalm-suppress PropertyNotSetInConstructor
     */
    protected $defaultTimezone;

    public function setUp(): void
    {
        $this->defaultTimezone = date_default_timezone_get();
    }

    public function tearDown(): void
    {
        date_default_timezone_set($this->defaultTimezone);
    }

    /**
     * @param string $timeZone
     * @param string $dateTimeString
     * @param int $timestamp
     *
     * @dataProvider TxTextControlTest\ReportingCloud\Filter\TestAsset\DefaultProvider::defaultProvider
     */
    public function testValid(string $timeZone, string $dateTimeString, int $timestamp): void
    {
        if (in_array($timeZone, timezone_identifiers_list())) {
            date_default_timezone_set($timeZone);
            $this->assertSame($dateTimeString, Filter::filterTimestampToDateTime($timestamp));
        }
    }
}
