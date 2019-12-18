<?php
declare(strict_types=1);

/**
 * ReportingCloud PHP SDK
 *
 * PHP SDK for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://github.com/TextControl/txtextcontrol-reportingcloud-php for the canonical source repository
 * @license   https://github.com/TextControl/txtextcontrol-reportingcloud-php/blob/master/LICENSE.md
 * @copyright © 2020 Text Control GmbH
 */

namespace TxTextControlTest\ReportingCloud\Filter;

use PHPUnit\Framework\TestCase;
use TxTextControl\ReportingCloud\Filter\Filter;

/**
 * Class BooleanToStringTest
 *
 * @package TxTextControlTest\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class BooleanToStringTest extends TestCase
{
    public function testTrueString(): void
    {
        $this->assertSame('true', Filter::filterBooleanToString(true));
    }

    public function testFalseString(): void
    {
        $this->assertSame('false', Filter::filterBooleanToString(false));
    }
}
