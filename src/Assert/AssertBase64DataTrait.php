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

namespace TxTextControl\ReportingCloud\Assert;

use TxTextControl\ReportingCloud\Exception\InvalidArgumentException;

/**
 * Trait AssertBase64DataTrait
 *
 * @package TxTextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
trait AssertBase64DataTrait
{
    use ValueToStringTrait;

    /**
     * Check value is valid base64 encoded data
     *
     * @param string $value
     * @param string $message
     *
     * @return void
     * @throws InvalidArgumentException
     */
    public static function assertBase64Data(string $value, string $message = ''): void
    {
        $binaryData = base64_decode($value, true);
        if (is_bool($binaryData) || 0 === strlen($binaryData)) {
            $format  = 0 === strlen($message) ? '%1$s must be base64 encoded' : $message;
            $message = sprintf($format, self::valueToString($value));
            throw new InvalidArgumentException($message);
        }
    }
}
