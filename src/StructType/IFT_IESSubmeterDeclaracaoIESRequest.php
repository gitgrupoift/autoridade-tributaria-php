<?php

namespace IFT_IES\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for submeterDeclaracaoIESRequest StructType
 * @package IFT_IES
 * @subpackage Structs
 */
class IFT_IESSubmeterDeclaracaoIESRequest extends AbstractStructBase
{
    /**
     * The versaoDeclaracao
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 40
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $versaoDeclaracao;
    /**
     * The declaracao
     * Meta information extracted from the WSDL
     * - contentType: application/octet-stream
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $declaracao;
    /**
     * Constructor method for submeterDeclaracaoIESRequest
     * @uses IFT_IESSubmeterDeclaracaoIESRequest::setVersaoDeclaracao()
     * @uses IFT_IESSubmeterDeclaracaoIESRequest::setDeclaracao()
     * @param string $versaoDeclaracao
     * @param string $declaracao
     */
    public function __construct($versaoDeclaracao = null, $declaracao = null)
    {
        $this
            ->setVersaoDeclaracao($versaoDeclaracao)
            ->setDeclaracao($declaracao);
    }
    /**
     * Get versaoDeclaracao value
     * @return string
     */
    public function getVersaoDeclaracao()
    {
        return $this->versaoDeclaracao;
    }
    /**
     * Set versaoDeclaracao value
     * @param string $versaoDeclaracao
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESRequest
     */
    public function setVersaoDeclaracao($versaoDeclaracao = null)
    {
        // validation for constraint: string
        if (!is_null($versaoDeclaracao) && !is_string($versaoDeclaracao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versaoDeclaracao, true), gettype($versaoDeclaracao)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($versaoDeclaracao) && mb_strlen($versaoDeclaracao) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($versaoDeclaracao)), __LINE__);
        }
        $this->versaoDeclaracao = $versaoDeclaracao;
        return $this;
    }
    /**
     * Get declaracao value
     * @return string
     */
    public function getDeclaracao()
    {
        return $this->declaracao;
    }
    /**
     * Set declaracao value
     * @param string $declaracao
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESRequest
     */
    public function setDeclaracao($declaracao = null)
    {
        // validation for constraint: string
        if (!is_null($declaracao) && !is_string($declaracao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declaracao, true), gettype($declaracao)), __LINE__);
        }
        $this->declaracao = $declaracao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IES\StructType\IFT_IESSubmeterDeclaracaoIESRequest
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
