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

namespace TxTextControl\ReportingCloud\Assert;

/**
 * Trait AssertTimestampTrait
 *
 * @package TxTextControl\ReportingCloud
 */
trait AssertTimestampTrait
{
    /**
     * Minimum timestamp (EPOC)
     *
     * @var int
     */
    private static $timestampMin = 0;

    /**
     * Maximum timestamp
     *
     * @var int
     */
    private static $timestampMax = PHP_INT_MAX;

    /**
     * Validate timestamp
     *
     * @param int    $value
     * @param string $message
     *
     * @return null
     */
    public static function assertTimestamp(int $value, string $message = '')
    {
        if ($value < self::$timestampMin || $value > self::$timestampMax) {
            $format  = 'Timestamp must be in the range [%d..%d]';
            $message = sprintf($message ?: $format,
                               static::valueToString(self::$timestampMin),
                               static::valueToString(self::$timestampMax));
            static::reportInvalidArgument($message);
        }

        return null;
    }
}