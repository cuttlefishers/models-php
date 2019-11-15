<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class InvestmentFund extends \OpenActive\Models\SchemaOrg\InvestmentOrDeposit
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:InvestmentFund";
    }

}
