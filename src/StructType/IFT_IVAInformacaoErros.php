<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informacaoErros StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAInformacaoErros extends AbstractStructBase
{
    /**
     * The temMaisErros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $temMaisErros;
    /**
     * The erro
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[]
     */
    public $erro;
    /**
     * Constructor method for informacaoErros
     * @uses IFT_IVAInformacaoErros::setTemMaisErros()
     * @uses IFT_IVAInformacaoErros::setErro()
     * @param bool $temMaisErros
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[] $erro
     */
    public function __construct($temMaisErros = null, array $erro = array())
    {
        $this
            ->setTemMaisErros($temMaisErros)
            ->setErro($erro);
    }
    /**
     * Get temMaisErros value
     * @return bool
     */
    public function getTemMaisErros()
    {
        return $this->temMaisErros;
    }
    /**
     * Set temMaisErros value
     * @param bool $temMaisErros
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErros
     */
    public function setTemMaisErros($temMaisErros = null)
    {
        // validation for constraint: boolean
        if (!is_null($temMaisErros) && !is_bool($temMaisErros)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($temMaisErros, true), gettype($temMaisErros)), __LINE__);
        }
        $this->temMaisErros = $temMaisErros;
        return $this;
    }
    /**
     * Get erro value
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[]
     */
    public function getErro()
    {
        return $this->erro;
    }
    /**
     * This method is responsible for validating the values passed to the setErro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErroForArrayConstraintsFromSetErro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $informacaoErrosErroItem) {
            // validation for constraint: itemType
            if (!$informacaoErrosErroItem instanceof \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta) {
                $invalidValues[] = is_object($informacaoErrosErroItem) ? get_class($informacaoErrosErroItem) : sprintf('%s(%s)', gettype($informacaoErrosErroItem), var_export($informacaoErrosErroItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The erro property can only contain items of type \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set erro value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[] $erro
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErros
     */
    public function setErro(array $erro = array())
    {
        // validation for constraint: array
        if ('' !== ($erroArrayErrorMessage = self::validateErroForArrayConstraintsFromSetErro($erro))) {
            throw new \InvalidArgumentException($erroArrayErrorMessage, __LINE__);
        }
        $this->erro = $erro;
        return $this;
    }
    /**
     * Add item to erro value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta $item
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErros
     */
    public function addToErro(\IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta) {
            throw new \InvalidArgumentException(sprintf('The erro property can only contain items of type \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->erro[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErros
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
