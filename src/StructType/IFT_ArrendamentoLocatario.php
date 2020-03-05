<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locatario StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoLocatario extends AbstractStructBase
{
    /**
     * The pais
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $pais;
    /**
     * The nif
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{9}
     * @var int
     */
    public $nif;
    /**
     * The docIdentificacao
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $docIdentificacao;
    /**
     * The nomeEstrangeiro
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 170
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $nomeEstrangeiro;
    /**
     * The retencaoFonte
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $retencaoFonte;
    /**
     * Constructor method for locatario
     * @uses IFT_ArrendamentoLocatario::setPais()
     * @uses IFT_ArrendamentoLocatario::setNif()
     * @uses IFT_ArrendamentoLocatario::setDocIdentificacao()
     * @uses IFT_ArrendamentoLocatario::setNomeEstrangeiro()
     * @uses IFT_ArrendamentoLocatario::setRetencaoFonte()
     * @param string $pais
     * @param int $nif
     * @param string $docIdentificacao
     * @param string $nomeEstrangeiro
     * @param string $retencaoFonte
     */
    public function __construct($pais = null, $nif = null, $docIdentificacao = null, $nomeEstrangeiro = null, $retencaoFonte = null)
    {
        $this
            ->setPais($pais)
            ->setNif($nif)
            ->setDocIdentificacao($docIdentificacao)
            ->setNomeEstrangeiro($nomeEstrangeiro)
            ->setRetencaoFonte($retencaoFonte);
    }
    /**
     * Get pais value
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }
    /**
     * Set pais value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoPais::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoPais::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pais
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
     */
    public function setPais($pais = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoPais::valueIsValid($pais)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoPais', is_array($pais) ? implode(', ', $pais) : var_export($pais, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoPais::getValidValues())), __LINE__);
        }
        $this->pais = $pais;
        return $this;
    }
    /**
     * Get nif value
     * @return int|null
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param int $nif
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
     */
    public function setNif($nif = null)
    {
        // validation for constraint: int
        if (!is_null($nif) && !(is_int($nif) || ctype_digit($nif))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nif) && !preg_match('/\\d{9}/', $nif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nif, true)), __LINE__);
        }
        $this->nif = $nif;
        return $this;
    }
    /**
     * Get docIdentificacao value
     * @return string|null
     */
    public function getDocIdentificacao()
    {
        return $this->docIdentificacao;
    }
    /**
     * Set docIdentificacao value
     * @param string $docIdentificacao
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
     */
    public function setDocIdentificacao($docIdentificacao = null)
    {
        // validation for constraint: string
        if (!is_null($docIdentificacao) && !is_string($docIdentificacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docIdentificacao, true), gettype($docIdentificacao)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($docIdentificacao) && mb_strlen($docIdentificacao) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen($docIdentificacao)), __LINE__);
        }
        $this->docIdentificacao = $docIdentificacao;
        return $this;
    }
    /**
     * Get nomeEstrangeiro value
     * @return string|null
     */
    public function getNomeEstrangeiro()
    {
        return $this->nomeEstrangeiro;
    }
    /**
     * Set nomeEstrangeiro value
     * @param string $nomeEstrangeiro
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
     */
    public function setNomeEstrangeiro($nomeEstrangeiro = null)
    {
        // validation for constraint: string
        if (!is_null($nomeEstrangeiro) && !is_string($nomeEstrangeiro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomeEstrangeiro, true), gettype($nomeEstrangeiro)), __LINE__);
        }
        // validation for constraint: maxLength(170)
        if (!is_null($nomeEstrangeiro) && mb_strlen($nomeEstrangeiro) > 170) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 170', mb_strlen($nomeEstrangeiro)), __LINE__);
        }
        $this->nomeEstrangeiro = $nomeEstrangeiro;
        return $this;
    }
    /**
     * Get retencaoFonte value
     * @return string|null
     */
    public function getRetencaoFonte()
    {
        return $this->retencaoFonte;
    }
    /**
     * Set retencaoFonte value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoRetencaoFonte::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoRetencaoFonte::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $retencaoFonte
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
     */
    public function setRetencaoFonte($retencaoFonte = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoRetencaoFonte::valueIsValid($retencaoFonte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoRetencaoFonte', is_array($retencaoFonte) ? implode(', ', $retencaoFonte) : var_export($retencaoFonte, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoRetencaoFonte::getValidValues())), __LINE__);
        }
        $this->retencaoFonte = $retencaoFonte;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatario
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
