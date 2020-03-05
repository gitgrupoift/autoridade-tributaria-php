<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locatarios StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoLocatarios extends AbstractStructBase
{
    /**
     * The locatario
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario[]
     */
    public $locatario;
    /**
     * Constructor method for locatarios
     * @uses IFT_ArrendamentoLocatarios::setLocatario()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario[] $locatario
     */
    public function __construct(array $locatario = array())
    {
        $this
            ->setLocatario($locatario);
    }
    /**
     * Get locatario value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario[]
     */
    public function getLocatario()
    {
        return $this->locatario;
    }
    /**
     * This method is responsible for validating the values passed to the setLocatario method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocatario method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocatarioForArrayConstraintsFromSetLocatario(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $locatariosLocatarioItem) {
            // validation for constraint: itemType
            if (!$locatariosLocatarioItem instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario) {
                $invalidValues[] = is_object($locatariosLocatarioItem) ? get_class($locatariosLocatarioItem) : sprintf('%s(%s)', gettype($locatariosLocatarioItem), var_export($locatariosLocatarioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The locatario property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set locatario value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario[] $locatario
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public function setLocatario(array $locatario = array())
    {
        // validation for constraint: array
        if ('' !== ($locatarioArrayErrorMessage = self::validateLocatarioForArrayConstraintsFromSetLocatario($locatario))) {
            throw new \InvalidArgumentException($locatarioArrayErrorMessage, __LINE__);
        }
        $this->locatario = $locatario;
        return $this;
    }
    /**
     * Add item to locatario value
     * @throws \InvalidArgumentException
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario $item
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public function addToLocatario(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario) {
            throw new \InvalidArgumentException(sprintf('The locatario property can only contain items of type \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->locatario[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
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
