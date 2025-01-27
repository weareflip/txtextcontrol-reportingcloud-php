<?php
declare(strict_types=1);

/**
 * ReportingCloud PHP SDK
 *
 * PHP SDK for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://git.io/Jejj2 for the canonical source repository
 * @license   https://git.io/Jejjr
 * @copyright © 2021 Text Control GmbH
 */

namespace TxTextControl\ReportingCloud\Filter;

use DateTime;
use DateTimeZone;
use Exception;
use TxTextControl\ReportingCloud\Exception\InvalidArgumentException;
use TxTextControl\ReportingCloud\ReportingCloud;

/**
 * Trait FilterTimestampToDateTimeTrait
 *
 * @package TxTextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
trait FilterTimestampToDateTimeTrait
{
    /**
     * Convert a UNIX timestamp to the date/time format used by the backend (e.g. "2016-04-15T19:05:18+00:00").
     *
     * @param int $timestamp
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public static function filterTimestampToDateTime(int $timestamp): string
    {
        $timeZone   = ReportingCloud::DEFAULT_TIME_ZONE;
        $dateFormat = ReportingCloud::DEFAULT_DATE_FORMAT;

        try {
            $dateTimeZone = new DateTimeZone($timeZone);
            $dateTime     = new DateTime();
            $dateTime->setTimestamp($timestamp);
            $dateTime->setTimezone($dateTimeZone);
            $ret = $dateTime->format($dateFormat);
        } catch (Exception $e) {
            $message = $e->getMessage();
            $code    = $e->getCode();
            assert(is_int($code));
            throw new InvalidArgumentException($message, $code);
        }

        return $ret;
    }
}
