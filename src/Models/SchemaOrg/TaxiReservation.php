<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TaxiReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TaxiReservation";
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     *
     * @var DateTime|null
     */
    protected $pickupTime;

    /**
     * Number of people the reservation should accommodate.
     *
     *
     * @var int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    protected $partySize;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $pickupLocation;

    /**
     * @return DateTime|null
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * @param DateTime|null $pickupTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupTime($pickupTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $pickupTime = self::checkTypes($pickupTime, $types);

        $this->pickupTime = $pickupTime;
    }

    /**
     * @return int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }

    /**
     * @param int|\OpenActive\Models\SchemaOrg\QuantitativeValue|null $partySize
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPartySize($partySize)
    {
        $types = array(
            "int",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "null",
        );

        $partySize = self::checkTypes($partySize, $types);

        $this->partySize = $partySize;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $pickupLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
    }

}
