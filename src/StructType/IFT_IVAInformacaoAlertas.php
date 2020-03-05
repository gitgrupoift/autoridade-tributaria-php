<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for informacaoAlertas StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAInformacaoAlertas extends AbstractStructBase
{
    /**
     * The temMaisAlertas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $temMaisAlertas;
    /**
     * The alerta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[]
     */
    public $alerta;
    /**
     * Constructor method for informacaoAlertas
     * @uses IFT_IVAInformacaoAlertas::setTemMaisAlertas()
     * @uses IFT_IVAInformacaoAlertas::setAlerta()
     * @param bool $temMaisAlertas
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[] $alerta
     */
    public function __construct($temMaisAlertas = null, array $alerta = array())
    {
        $this
            ->setTemMaisAlertas($temMaisAlertas)
            ->setAlerta($alerta);
    }
    /**
     * Get temMaisAlertas value
     * @return bool
     */
    public function getTemMaisAlertas()
    {
        return $this->temMaisAlertas;
    }
    /**
     * Set temMaisAlertas value
     * @param bool $temMaisAlertas
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoAlertas
     */
    public function setTemMaisAlertas($temMaisAlertas = null)
    {
        // validation for constraint: boolean
        if (!is_null($temMaisAlertas) && !is_bool($temMaisAlertas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($temMaisAlertas, true), gettype($temMaisAlertas)), __LINE__);
        }
        $this->temMaisAlertas = $temMaisAlertas;
        return $this;
    }
    /**
     * Get alerta value
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[]
     */
    public function getAlerta()
    {
        return $this->alerta;
    }
    /**
     * This method is responsible for validating the values passed to the setAlerta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlerta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertaForArrayConstraintsFromSetAlerta(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $informacaoAlertasAlertaItem) {
            // validation for constraint: itemType
            if (!$informacaoAlertasAlertaItem instanceof \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta) {
                $invalidValues[] = is_object($informacaoAlertasAlertaItem) ? get_class($informacaoAlertasAlertaItem) : sprintf('%s(%s)', gettype($informacaoAlertasAlertaItem), var_export($informacaoAlertasAlertaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The alerta property can only contain items of type \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set alerta value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta[] $alerta
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoAlertas
     */
    public function setAlerta(array $alerta = array())
    {
        // validation for constraint: array
        if ('' !== ($alertaArrayErrorMessage = self::validateAlertaForArrayConstraintsFromSetAlerta($alerta))) {
            throw new \InvalidArgumentException($alertaArrayErrorMessage, __LINE__);
        }
        $this->alerta = $alerta;
        return $this;
    }
    /**
     * Add item to alerta value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta $item
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoAlertas
     */
    public function addToAlerta(\IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta) {
            throw new \InvalidArgumentException(sprintf('The alerta property can only contain items of type \IFT_IVA\StructType\IFT_IVAInformacaoErroOuAlerta, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->alerta[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IVA\StructType\IFT_IVAInformacaoAlertas
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
