<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locadoresPrevios StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoLocadoresPrevios extends AbstractStructBase
{
    /**
     * The locadorPrevio
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio[]
     */
    public $locadorPrevio;
    /**
     * Constructor method for locadoresPrevios
     * @uses IFT_ArrendamentoLocadoresPrevios::setLocadorPrevio()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio[] $locadorPrevio
     */
    public function __construct(array $locadorPrevio = array())
    {
        $this
            ->setLocadorPrevio($locadorPrevio);
    }
    /**
     * Get locadorPrevio value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio[]
     */
    public function getLocadorPrevio()
    {
        return $this->locadorPrevio;
    }
    /**
     * This method is responsible for validating the values passed to the setLocadorPrevio method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocadorPrevio method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocadorPrevioForArrayConstraintsFromSetLocadorPrevio(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $locadoresPreviosLocadorPrevioItem) {
            // validation for constraint: itemType
            if (!$locadoresPreviosLocadorPrevioItem instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio) {
                $invalidValues[] = is_object($locadoresPreviosLocadorPrevioItem) ? get_class($locadoresPreviosLocadorPrevioItem) : sprintf('%s(%s)', gettype($locadoresPreviosLocadorPrevioItem), var_export($locadoresPreviosLocadorPrevioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The locadorPrevio property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set locadorPrevio value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio[] $locadorPrevio
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios
     */
    public function setLocadorPrevio(array $locadorPrevio = array())
    {
        // validation for constraint: array
        if ('' !== ($locadorPrevioArrayErrorMessage = self::validateLocadorPrevioForArrayConstraintsFromSetLocadorPrevio($locadorPrevio))) {
            throw new \InvalidArgumentException($locadorPrevioArrayErrorMessage, __LINE__);
        }
        $this->locadorPrevio = $locadorPrevio;
        return $this;
    }
    /**
     * Add item to locadorPrevio value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio $item
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios
     */
    public function addToLocadorPrevio(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio) {
            throw new \InvalidArgumentException(sprintf('The locadorPrevio property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadorPrevio, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->locadorPrevio[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadoresPrevios
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
