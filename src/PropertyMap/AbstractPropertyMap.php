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

namespace TxTextControl\ReportingCloud\PropertyMap;

/**
 * Abstract AbstractPropertyMap
 *
 * @package TxTextControl\ReportingCloud\PropertyMap
 * @author  Jonathan Maron (@JonathanMaron)
 */
abstract class AbstractPropertyMap implements PropertyMapInterface
{
    /**
     * Assoc array of properties
     * camelCase properties => Lower case underscore array keys
     *
     * @var array<string, string>
     */
    protected array $map;

    /**
     * Return the property map
     *
     * @return array<string, string>
     */
    public function getMap(): array
    {
        return $this->map ?? [];
    }

    /**
     * Set the property map
     *
     * @param array<string, string> $map Assoc array of property data
     *
     * @return self
     */
    public function setMap(array $map): self
    {
        $this->map = $map;

        return $this;
    }
}
