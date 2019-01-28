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

namespace TxTextControlTest\ReportingCloud\Assert;

use TxTextControl\ReportingCloud\Exception\InvalidArgumentException;
use TxTextControl\ReportingCloud\Assert\Assert;

/**
 * Trait AssertLanguageTestTrait
 *
 * @package TxTextControlTest\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
trait AssertLanguageTestTrait
{
    public function testAssertLanguage(): void
    {
        $this->assertNull(Assert::assertLanguage('de_CH_frami.dic'));
        $this->assertNull(Assert::assertLanguage('pt_BR.dic'));
        $this->assertNull(Assert::assertLanguage('nb_NO.dic'));
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage "pt_BR" contains an unsupported language
     */
    public function testAssertLanguageInvalid(): void
    {
        Assert::assertLanguage('pt_BR');
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Custom error message ("xx_XX")
     */
    public function testAssertLanguageInvalidWithCustomMessage(): void
    {
        Assert::assertLanguage('xx_XX', 'Custom error message (%s)');
    }
}
