<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfferForPurchase extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OfferForPurchase";
    }

}
