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
 * AccountSettings property map
 *
 * @package TxTextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class AccountSettings extends AbstractPropertyMap
{
    /**
     * Set the property map of AccountSettings
     */
    public function __construct()
    {
        $map = [
            'createdDocuments'        => 'created_documents',
            'maxDocuments'            => 'max_documents',
            'maxProofingTransactions' => 'max_proofing_transactions',
            'maxTemplates'            => 'max_templates',
            'proofingTransactions'    => 'proofing_transactions',
            'serialNumber'            => 'serial_number',
            'uploadedTemplates'       => 'uploaded_templates',
            'validUntil'              => 'valid_until',
        ];

        $this->setMap($map);
    }
}
