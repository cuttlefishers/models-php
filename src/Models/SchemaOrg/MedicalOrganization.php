<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MedicalOrganization extends \OpenActive\Models\SchemaOrg\Organization
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MedicalOrganization";
    }

    /**
     * Whether the provider is accepting new patients.
     *
     *
     * @var bool|null
     */
    protected $isAcceptingNewPatients;

    /**
     * Name or unique ID of network. (Networks are often reused across different insurance plans).
     *
     *
     * @var string
     */
    protected $healthPlanNetworkId;

    /**
     * @return bool|null
     */
    public function getIsAcceptingNewPatients()
    {
        return $this->isAcceptingNewPatients;
    }

    /**
     * @param bool|null $isAcceptingNewPatients
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAcceptingNewPatients($isAcceptingNewPatients)
    {
        $types = array(
            "bool",
            "null",
        );

        $isAcceptingNewPatients = self::checkTypes($isAcceptingNewPatients, $types);

        $this->isAcceptingNewPatients = $isAcceptingNewPatients;
    }

    /**
     * @return string
     */
    public function getHealthPlanNetworkId()
    {
        return $this->healthPlanNetworkId;
    }

    /**
     * @param string $healthPlanNetworkId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanNetworkId($healthPlanNetworkId)
    {
        $types = array(
            "string",
        );

        $healthPlanNetworkId = self::checkTypes($healthPlanNetworkId, $types);

        $this->healthPlanNetworkId = $healthPlanNetworkId;
    }

}
