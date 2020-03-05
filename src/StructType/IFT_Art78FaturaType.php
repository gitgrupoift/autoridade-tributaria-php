<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaturaType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78FaturaType extends AbstractStructBase
{
    /**
     * The NumeroFatura
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 60
     * - maxOccurs: 1
     * - minLength: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $NumeroFatura;
    /**
     * The DataEmissaoFatura
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $DataEmissaoFatura;
    /**
     * The BaseTributavel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var float
     */
    public $BaseTributavel;
    /**
     * The ImpostoFat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var float
     */
    public $ImpostoFat;
    /**
     * The DataVencimentoCredito
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $DataVencimentoCredito;
    /**
     * The Periodo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78PeriodoType
     */
    public $Periodo;
    /**
     * The IVARegularizar
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var float
     */
    public $IVARegularizar;
    /**
     * Constructor method for FaturaType
     * @uses IFT_Art78FaturaType::setNumeroFatura()
     * @uses IFT_Art78FaturaType::setDataEmissaoFatura()
     * @uses IFT_Art78FaturaType::setBaseTributavel()
     * @uses IFT_Art78FaturaType::setImpostoFat()
     * @uses IFT_Art78FaturaType::setDataVencimentoCredito()
     * @uses IFT_Art78FaturaType::setPeriodo()
     * @uses IFT_Art78FaturaType::setIVARegularizar()
     * @param string $numeroFatura
     * @param string $dataEmissaoFatura
     * @param float $baseTributavel
     * @param float $impostoFat
     * @param string $dataVencimentoCredito
     * @param \IFT_Art78\StructType\IFT_Art78PeriodoType $periodo
     * @param float $iVARegularizar
     */
    public function __construct($numeroFatura = null, $dataEmissaoFatura = null, $baseTributavel = null, $impostoFat = null, $dataVencimentoCredito = null, \IFT_Art78\StructType\IFT_Art78PeriodoType $periodo = null, $iVARegularizar = null)
    {
        $this
            ->setNumeroFatura($numeroFatura)
            ->setDataEmissaoFatura($dataEmissaoFatura)
            ->setBaseTributavel($baseTributavel)
            ->setImpostoFat($impostoFat)
            ->setDataVencimentoCredito($dataVencimentoCredito)
            ->setPeriodo($periodo)
            ->setIVARegularizar($iVARegularizar);
    }
    /**
     * Get NumeroFatura value
     * @return string
     */
    public function getNumeroFatura()
    {
        return $this->NumeroFatura;
    }
    /**
     * Set NumeroFatura value
     * @param string $numeroFatura
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setNumeroFatura($numeroFatura = null)
    {
        // validation for constraint: string
        if (!is_null($numeroFatura) && !is_string($numeroFatura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroFatura, true), gettype($numeroFatura)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($numeroFatura) && mb_strlen($numeroFatura) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($numeroFatura)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroFatura) && mb_strlen($numeroFatura) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numeroFatura)), __LINE__);
        }
        $this->NumeroFatura = $numeroFatura;
        return $this;
    }
    /**
     * Get DataEmissaoFatura value
     * @return string
     */
    public function getDataEmissaoFatura()
    {
        return $this->DataEmissaoFatura;
    }
    /**
     * Set DataEmissaoFatura value
     * @param string $dataEmissaoFatura
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setDataEmissaoFatura($dataEmissaoFatura = null)
    {
        // validation for constraint: string
        if (!is_null($dataEmissaoFatura) && !is_string($dataEmissaoFatura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataEmissaoFatura, true), gettype($dataEmissaoFatura)), __LINE__);
        }
        $this->DataEmissaoFatura = $dataEmissaoFatura;
        return $this;
    }
    /**
     * Get BaseTributavel value
     * @return float
     */
    public function getBaseTributavel()
    {
        return $this->BaseTributavel;
    }
    /**
     * Set BaseTributavel value
     * @param float $baseTributavel
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setBaseTributavel($baseTributavel = null)
    {
        // validation for constraint: float
        if (!is_null($baseTributavel) && !(is_float($baseTributavel) || is_numeric($baseTributavel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseTributavel, true), gettype($baseTributavel)), __LINE__);
        }
        $this->BaseTributavel = $baseTributavel;
        return $this;
    }
    /**
     * Get ImpostoFat value
     * @return float
     */
    public function getImpostoFat()
    {
        return $this->ImpostoFat;
    }
    /**
     * Set ImpostoFat value
     * @param float $impostoFat
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setImpostoFat($impostoFat = null)
    {
        // validation for constraint: float
        if (!is_null($impostoFat) && !(is_float($impostoFat) || is_numeric($impostoFat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($impostoFat, true), gettype($impostoFat)), __LINE__);
        }
        $this->ImpostoFat = $impostoFat;
        return $this;
    }
    /**
     * Get DataVencimentoCredito value
     * @return string|null
     */
    public function getDataVencimentoCredito()
    {
        return $this->DataVencimentoCredito;
    }
    /**
     * Set DataVencimentoCredito value
     * @param string $dataVencimentoCredito
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setDataVencimentoCredito($dataVencimentoCredito = null)
    {
        // validation for constraint: string
        if (!is_null($dataVencimentoCredito) && !is_string($dataVencimentoCredito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataVencimentoCredito, true), gettype($dataVencimentoCredito)), __LINE__);
        }
        $this->DataVencimentoCredito = $dataVencimentoCredito;
        return $this;
    }
    /**
     * Get Periodo value
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType|null
     */
    public function getPeriodo()
    {
        return $this->Periodo;
    }
    /**
     * Set Periodo value
     * @param \IFT_Art78\StructType\IFT_Art78PeriodoType $periodo
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setPeriodo(\IFT_Art78\StructType\IFT_Art78PeriodoType $periodo = null)
    {
        $this->Periodo = $periodo;
        return $this;
    }
    /**
     * Get IVARegularizar value
     * @return float|null
     */
    public function getIVARegularizar()
    {
        return $this->IVARegularizar;
    }
    /**
     * Set IVARegularizar value
     * @param float $iVARegularizar
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
     */
    public function setIVARegularizar($iVARegularizar = null)
    {
        // validation for constraint: float
        if (!is_null($iVARegularizar) && !(is_float($iVARegularizar) || is_numeric($iVARegularizar))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($iVARegularizar, true), gettype($iVARegularizar)), __LINE__);
        }
        $this->IVARegularizar = $iVARegularizar;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78FaturaType
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
