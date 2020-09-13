<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ResourceRightsControllerType
 *
 * A Composite containing details of a RightsController for a Resource. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: ResourceRightsController
 */
class ResourceRightsControllerType
{

    /**
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A role that describes the Party involved in the administration of Rights.
     *
     * @var string[] $rightsControllerRole
     */
    private $rightsControllerRole = [
        
    ];

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @var \DedexBundle\Entity\Ern\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @var \DedexBundle\Entity\Ern\DelegatedUsageRightsType[] $delegatedUsageRights
     */
    private $delegatedUsageRights = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return self
     * @param string $rightsControllerRole
     */
    public function addToRightsControllerRole($rightsControllerRole)
    {
        $this->rightsControllerRole[] = $rightsControllerRole;
        return $this;
    }

    /**
     * isset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsControllerRole($index)
    {
        return isset($this->rightsControllerRole[$index]);
    }

    /**
     * unset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsControllerRole($index)
    {
        unset($this->rightsControllerRole[$index]);
    }

    /**
     * Gets as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return string[]
     */
    public function getRightsControllerRole()
    {
        return $this->rightsControllerRole;
    }

    /**
     * Sets a new rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param string $rightsControllerRole
     * @return self
     */
    public function setRightsControllerRole(array $rightsControllerRole)
    {
        $this->rightsControllerRole = $rightsControllerRole;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @return \DedexBundle\Entity\Ern\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @param \DedexBundle\Entity\Ern\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(\DedexBundle\Entity\Ern\PercentageType $rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Adds as delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DelegatedUsageRightsType $delegatedUsageRights
     */
    public function addToDelegatedUsageRights(\DedexBundle\Entity\Ern\DelegatedUsageRightsType $delegatedUsageRights)
    {
        $this->delegatedUsageRights[] = $delegatedUsageRights;
        return $this;
    }

    /**
     * isset delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelegatedUsageRights($index)
    {
        return isset($this->delegatedUsageRights[$index]);
    }

    /**
     * unset delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelegatedUsageRights($index)
    {
        unset($this->delegatedUsageRights[$index]);
    }

    /**
     * Gets as delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @return \DedexBundle\Entity\Ern\DelegatedUsageRightsType[]
     */
    public function getDelegatedUsageRights()
    {
        return $this->delegatedUsageRights;
    }

    /**
     * Sets a new delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param \DedexBundle\Entity\Ern\DelegatedUsageRightsType[] $delegatedUsageRights
     * @return self
     */
    public function setDelegatedUsageRights(array $delegatedUsageRights)
    {
        $this->delegatedUsageRights = $delegatedUsageRights;
        return $this;
    }


}
