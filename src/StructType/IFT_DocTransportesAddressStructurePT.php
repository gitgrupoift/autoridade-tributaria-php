<?php

namespace IFT_DocTransportes\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressStructurePT StructType
 * @package IFT_DocTransportes
 * @subpackage Structs
 */
class IFT_DocTransportesAddressStructurePT extends AbstractStructBase
{
    /**
     * The Addressdetail
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $Addressdetail;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - pattern: ([0-9]{4}-[0-9]{3})
     * @var string
     */
    public $PostalCode;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - fixed: PT
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * Constructor method for AddressStructurePT
     * @uses IFT_DocTransportesAddressStructurePT::setAddressdetail()
     * @uses IFT_DocTransportesAddressStructurePT::setCity()
     * @uses IFT_DocTransportesAddressStructurePT::setPostalCode()
     * @uses IFT_DocTransportesAddressStructurePT::setCountry()
     * @param string $addressdetail
     * @param string $city
     * @param string $postalCode
     * @param string $country
     */
    public function __construct($addressdetail = null, $city = null, $postalCode = null, $country = null)
    {
        $this
            ->setAddressdetail($addressdetail)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setCountry($country);
    }
    /**
     * Get Addressdetail value
     * @return string|null
     */
    public function getAddressdetail()
    {
        return $this->Addressdetail;
    }
    /**
     * Set Addressdetail value
     * @param string $addressdetail
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public function setAddressdetail($addressdetail = null)
    {
        // validation for constraint: string
        if (!is_null($addressdetail) && !is_string($addressdetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressdetail, true), gettype($addressdetail)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($addressdetail) && mb_strlen($addressdetail) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($addressdetail)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($addressdetail) && mb_strlen($addressdetail) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($addressdetail)), __LINE__);
        }
        $this->Addressdetail = $addressdetail;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($city) && mb_strlen($city) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($city)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($city) && mb_strlen($city) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{4}-[0-9]{3}))
        if (!is_null($postalCode) && !preg_match('/([0-9]{4}-[0-9]{3})/', $postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression ([0-9]{4}-[0-9]{3})', var_export($postalCode, true)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesAddressStructurePT
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
