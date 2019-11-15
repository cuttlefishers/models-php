<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class PaymentCard extends \OpenActive\Models\SchemaOrg\FinancialProduct
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:PaymentCard";
    }

    /**
     * A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
     *
     *
     * @var bool|float|null
     */
    protected $cashBack;

    /**
     * A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
     *
     *
     * @var bool|null
     */
    protected $contactlessPayment;

    /**
     * A floor limit is the amount of money above which credit card transactions must be authorized.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    protected $floorLimit;

    /**
     * @return bool|float|null
     */
    public function getCashBack()
    {
        return $this->cashBack;
    }

    /**
     * @param bool|float|null $cashBack
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCashBack($cashBack)
    {
        $types = array(
            "bool",
            "float",
            "null",
        );

        $cashBack = self::checkTypes($cashBack, $types);

        $this->cashBack = $cashBack;
    }

    /**
     * @return bool|null
     */
    public function getContactlessPayment()
    {
        return $this->contactlessPayment;
    }

    /**
     * @param bool|null $contactlessPayment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContactlessPayment($contactlessPayment)
    {
        $types = array(
            "bool",
            "null",
        );

        $contactlessPayment = self::checkTypes($contactlessPayment, $types);

        $this->contactlessPayment = $contactlessPayment;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MonetaryAmount
     */
    public function getFloorLimit()
    {
        return $this->floorLimit;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MonetaryAmount $floorLimit
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFloorLimit($floorLimit)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MonetaryAmount",
        );

        $floorLimit = self::checkTypes($floorLimit, $types);

        $this->floorLimit = $floorLimit;
    }

}
