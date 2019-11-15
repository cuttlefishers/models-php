<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AggregateOffer extends \OpenActive\Models\SchemaOrg\Offer
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AggregateOffer";
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * The number of offers for the product.
     *
     *
     * @var int|null
     */
    protected $offerCount;

    /**
     * The lowest price of all offers available.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var string|float|null
     */
    protected $lowPrice;

    /**
     * The highest price of all offers available.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var float|string|null
     */
    protected $highPrice;

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return int|null
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * @param int|null $offerCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOfferCount($offerCount)
    {
        $types = array(
            "int",
            "null",
        );

        $offerCount = self::checkTypes($offerCount, $types);

        $this->offerCount = $offerCount;
    }

    /**
     * @return string|float|null
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * @param string|float|null $lowPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLowPrice($lowPrice)
    {
        $types = array(
            "string",
            "float",
            "null",
        );

        $lowPrice = self::checkTypes($lowPrice, $types);

        $this->lowPrice = $lowPrice;
    }

    /**
     * @return float|string|null
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * @param float|string|null $highPrice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHighPrice($highPrice)
    {
        $types = array(
            "float",
            "string",
            "null",
        );

        $highPrice = self::checkTypes($highPrice, $types);

        $this->highPrice = $highPrice;
    }

}
