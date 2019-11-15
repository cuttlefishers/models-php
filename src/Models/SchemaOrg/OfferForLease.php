<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class OfferForLease extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:OfferForLease";
    }

}
