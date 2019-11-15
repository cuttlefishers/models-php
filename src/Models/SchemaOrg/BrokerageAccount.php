<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BrokerageAccount extends \OpenActive\Models\SchemaOrg\InvestmentOrDeposit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BrokerageAccount";
    }

}
