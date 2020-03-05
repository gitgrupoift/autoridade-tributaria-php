<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for imoveis StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoImoveis extends AbstractStructBase
{
    /**
     * The imovel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel[]
     */
    public $imovel;
    /**
     * Constructor method for imoveis
     * @uses IFT_ArrendamentoImoveis::setImovel()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel[] $imovel
     */
    public function __construct(array $imovel = array())
    {
        $this
            ->setImovel($imovel);
    }
    /**
     * Get imovel value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel[]
     */
    public function getImovel()
    {
        return $this->imovel;
    }
    /**
     * This method is responsible for validating the values passed to the setImovel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImovel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImovelForArrayConstraintsFromSetImovel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $imoveisImovelItem) {
            // validation for constraint: itemType
            if (!$imoveisImovelItem instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel) {
                $invalidValues[] = is_object($imoveisImovelItem) ? get_class($imoveisImovelItem) : sprintf('%s(%s)', gettype($imoveisImovelItem), var_export($imoveisImovelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The imovel property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set imovel value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel[] $imovel
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis
     */
    public function setImovel(array $imovel = array())
    {
        // validation for constraint: array
        if ('' !== ($imovelArrayErrorMessage = self::validateImovelForArrayConstraintsFromSetImovel($imovel))) {
            throw new \InvalidArgumentException($imovelArrayErrorMessage, __LINE__);
        }
        $this->imovel = $imovel;
        return $this;
    }
    /**
     * Add item to imovel value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel $item
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis
     */
    public function addToImovel(\IFT_Arrendamento\StructType\IFT_ArrendamentoImovel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel) {
            throw new \InvalidArgumentException(sprintf('The imovel property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoImovel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->imovel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoImoveis
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
