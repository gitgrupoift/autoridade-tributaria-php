<?php

namespace IFT_Arrendamento\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emitirReciboRequest StructType
 * @package IFT_Arrendamento
 * @subpackage Structs
 */
class IFT_ArrendamentoEmitirReciboRequest extends AbstractStructBase
{
    /**
     * The numeroContrato
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $numeroContrato;
    /**
     * The nifEmitente
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nifEmitente;
    /**
     * The locadores
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores
     */
    public $locadores;
    /**
     * The locatarios
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public $locatarios;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipo;
    /**
     * The dataInicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataInicio;
    /**
     * The dataFim
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataFim;
    /**
     * The tipoImportancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipoImportancia;
    /**
     * The valor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $valor;
    /**
     * The dataRecebimento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataRecebimento;
    /**
     * The herdeiros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros
     */
    public $herdeiros;
    /**
     * Constructor method for emitirReciboRequest
     * @uses IFT_ArrendamentoEmitirReciboRequest::setNumeroContrato()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setNifEmitente()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setLocadores()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setLocatarios()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setTipo()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setDataInicio()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setDataFim()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setTipoImportancia()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setValor()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setDataRecebimento()
     * @uses IFT_ArrendamentoEmitirReciboRequest::setHerdeiros()
     * @param int $numeroContrato
     * @param int $nifEmitente
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios
     * @param string $tipo
     * @param string $dataInicio
     * @param string $dataFim
     * @param string $tipoImportancia
     * @param float $valor
     * @param string $dataRecebimento
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros $herdeiros
     */
    public function __construct($numeroContrato = null, $nifEmitente = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios = null, $tipo = null, $dataInicio = null, $dataFim = null, $tipoImportancia = null, $valor = null, $dataRecebimento = null, \IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros $herdeiros = null)
    {
        $this
            ->setNumeroContrato($numeroContrato)
            ->setNifEmitente($nifEmitente)
            ->setLocadores($locadores)
            ->setLocatarios($locatarios)
            ->setTipo($tipo)
            ->setDataInicio($dataInicio)
            ->setDataFim($dataFim)
            ->setTipoImportancia($tipoImportancia)
            ->setValor($valor)
            ->setDataRecebimento($dataRecebimento)
            ->setHerdeiros($herdeiros);
    }
    /**
     * Get numeroContrato value
     * @return int
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }
    /**
     * Set numeroContrato value
     * @param int $numeroContrato
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setNumeroContrato($numeroContrato = null)
    {
        // validation for constraint: int
        if (!is_null($numeroContrato) && !(is_int($numeroContrato) || ctype_digit($numeroContrato))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroContrato, true), gettype($numeroContrato)), __LINE__);
        }
        $this->numeroContrato = $numeroContrato;
        return $this;
    }
    /**
     * Get nifEmitente value
     * @return int
     */
    public function getNifEmitente()
    {
        return $this->nifEmitente;
    }
    /**
     * Set nifEmitente value
     * @param int $nifEmitente
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setNifEmitente($nifEmitente = null)
    {
        // validation for constraint: int
        if (!is_null($nifEmitente) && !(is_int($nifEmitente) || ctype_digit($nifEmitente))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifEmitente, true), gettype($nifEmitente)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifEmitente) && !preg_match('/\\d{9}/', $nifEmitente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifEmitente, true)), __LINE__);
        }
        $this->nifEmitente = $nifEmitente;
        return $this;
    }
    /**
     * Get locadores value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores
     */
    public function getLocadores()
    {
        return $this->locadores;
    }
    /**
     * Set locadores value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setLocadores(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocadores $locadores = null)
    {
        $this->locadores = $locadores;
        return $this;
    }
    /**
     * Get locatarios value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios
     */
    public function getLocatarios()
    {
        return $this->locatarios;
    }
    /**
     * Set locatarios value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setLocatarios(\IFT_Arrendamento\StructType\IFT_ArrendamentoLocatarios $locatarios = null)
    {
        $this->locatarios = $locatarios;
        return $this;
    }
    /**
     * Get tipo value
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * Set tipo value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipo
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setTipo($tipo = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::valueIsValid($tipo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo', is_array($tipo) ? implode(', ', $tipo) : var_export($tipo, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipo::getValidValues())), __LINE__);
        }
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * Get dataInicio value
     * @return string
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }
    /**
     * Set dataInicio value
     * @param string $dataInicio
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setDataInicio($dataInicio = null)
    {
        // validation for constraint: string
        if (!is_null($dataInicio) && !is_string($dataInicio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataInicio, true), gettype($dataInicio)), __LINE__);
        }
        $this->dataInicio = $dataInicio;
        return $this;
    }
    /**
     * Get dataFim value
     * @return string
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }
    /**
     * Set dataFim value
     * @param string $dataFim
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setDataFim($dataFim = null)
    {
        // validation for constraint: string
        if (!is_null($dataFim) && !is_string($dataFim)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataFim, true), gettype($dataFim)), __LINE__);
        }
        $this->dataFim = $dataFim;
        return $this;
    }
    /**
     * Get tipoImportancia value
     * @return string
     */
    public function getTipoImportancia()
    {
        return $this->tipoImportancia;
    }
    /**
     * Set tipoImportancia value
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipoImportancia::valueIsValid()
     * @uses \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipoImportancia::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoImportancia
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setTipoImportancia($tipoImportancia = null)
    {
        // validation for constraint: enumeration
        if (!\IFT_Arrendamento\EnumType\IFT_ArrendamentoTipoImportancia::valueIsValid($tipoImportancia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipoImportancia', is_array($tipoImportancia) ? implode(', ', $tipoImportancia) : var_export($tipoImportancia, true), implode(', ', \IFT_Arrendamento\EnumType\IFT_ArrendamentoTipoImportancia::getValidValues())), __LINE__);
        }
        $this->tipoImportancia = $tipoImportancia;
        return $this;
    }
    /**
     * Get valor value
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }
    /**
     * Set valor value
     * @param float $valor
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setValor($valor = null)
    {
        // validation for constraint: float
        if (!is_null($valor) && !(is_float($valor) || is_numeric($valor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        $this->valor = $valor;
        return $this;
    }
    /**
     * Get dataRecebimento value
     * @return string
     */
    public function getDataRecebimento()
    {
        return $this->dataRecebimento;
    }
    /**
     * Set dataRecebimento value
     * @param string $dataRecebimento
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setDataRecebimento($dataRecebimento = null)
    {
        // validation for constraint: string
        if (!is_null($dataRecebimento) && !is_string($dataRecebimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRecebimento, true), gettype($dataRecebimento)), __LINE__);
        }
        $this->dataRecebimento = $dataRecebimento;
        return $this;
    }
    /**
     * Get herdeiros value
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros|null
     */
    public function getHerdeiros()
    {
        return $this->herdeiros;
    }
    /**
     * Set herdeiros value
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros $herdeiros
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
     */
    public function setHerdeiros(\IFT_Arrendamento\StructType\IFT_ArrendamentoHerdeiros $herdeiros = null)
    {
        $this->herdeiros = $herdeiros;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest
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
