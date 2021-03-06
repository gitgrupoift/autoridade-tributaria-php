<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locador StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoLocador extends AbstractStructBase
{
    /**
     * The nif
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nif;
    /**
     * The quotaParte
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d(\d{0,5}/\d{1,6})?
     * @var string
     */
    public $quotaParte;
    /**
     * The regimeCasamento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $regimeCasamento;
    /**
     * The nifConjuge
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{9}
     * @var int
     */
    public $nifConjuge;
    /**
     * The beneficio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $beneficio;
    /**
     * Constructor method for locador
     * @uses IFT_ArrendamentoLocador::setNif()
     * @uses IFT_ArrendamentoLocador::setQuotaParte()
     * @uses IFT_ArrendamentoLocador::setRegimeCasamento()
     * @uses IFT_ArrendamentoLocador::setNifConjuge()
     * @uses IFT_ArrendamentoLocador::setBeneficio()
     * @param int $nif
     * @param string $quotaParte
     * @param string $regimeCasamento
     * @param int $nifConjuge
     * @param string $beneficio
     */
    public function __construct($nif = null, $quotaParte = null, $regimeCasamento = null, $nifConjuge = null, $beneficio = null)
    {
        $this
            ->setNif($nif)
            ->setQuotaParte($quotaParte)
            ->setRegimeCasamento($regimeCasamento)
            ->setNifConjuge($nifConjuge)
            ->setBeneficio($beneficio);
    }
    /**
     * Get nif value
     * @return int
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param int $nif
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
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
     * Get quotaParte value
     * @return string
     */
    public function getQuotaParte()
    {
        return $this->quotaParte;
    }
    /**
     * Set quotaParte value
     * @param string $quotaParte
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
     */
    public function setQuotaParte($quotaParte = null)
    {
        // validation for constraint: string
        if (!is_null($quotaParte) && !is_string($quotaParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotaParte, true), gettype($quotaParte)), __LINE__);
        }
        // validation for constraint: pattern(\d(\d{0,5}/\d{1,6})?)
        if (!is_null($quotaParte) && !preg_match('/\\d(\\d{0,5}\/\\d{1,6})?/', $quotaParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d(\d{0,5}/\d{1,6})?', var_export($quotaParte, true)), __LINE__);
        }
        $this->quotaParte = $quotaParte;
        return $this;
    }
    /**
     * Get regimeCasamento value
     * @return string|null
     */
    public function getRegimeCasamento()
    {
        return $this->regimeCasamento;
    }
    /**
     * Set regimeCasamento value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoRegimeCasamento::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoRegimeCasamento::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regimeCasamento
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
     */
    public function setRegimeCasamento($regimeCasamento = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoRegimeCasamento::valueIsValid($regimeCasamento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoRegimeCasamento', is_array($regimeCasamento) ? implode(', ', $regimeCasamento) : var_export($regimeCasamento, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoRegimeCasamento::getValidValues())), __LINE__);
        }
        $this->regimeCasamento = $regimeCasamento;
        return $this;
    }
    /**
     * Get nifConjuge value
     * @return int|null
     */
    public function getNifConjuge()
    {
        return $this->nifConjuge;
    }
    /**
     * Set nifConjuge value
     * @param int $nifConjuge
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
     */
    public function setNifConjuge($nifConjuge = null)
    {
        // validation for constraint: int
        if (!is_null($nifConjuge) && !(is_int($nifConjuge) || ctype_digit($nifConjuge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifConjuge, true), gettype($nifConjuge)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifConjuge) && !preg_match('/\\d{9}/', $nifConjuge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifConjuge, true)), __LINE__);
        }
        $this->nifConjuge = $nifConjuge;
        return $this;
    }
    /**
     * Get beneficio value
     * @return string|null
     */
    public function getBeneficio()
    {
        return $this->beneficio;
    }
    /**
     * Set beneficio value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoBeneficio::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoBeneficio::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $beneficio
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
     */
    public function setBeneficio($beneficio = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoBeneficio::valueIsValid($beneficio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoBeneficio', is_array($beneficio) ? implode(', ', $beneficio) : var_export($beneficio, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoBeneficio::getValidValues())), __LINE__);
        }
        $this->beneficio = $beneficio;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocador
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
