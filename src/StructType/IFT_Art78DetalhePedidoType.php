<?php

namespace IFT_Art78\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetalhePedidoType StructType
 * @package IFT_Art78
 * @subpackage Structs
 */
class IFT_Art78DetalhePedidoType extends AbstractStructBase
{
    /**
     * The ValorTotalPedido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var float
     */
    public $ValorTotalPedido;
    /**
     * The DataCertificacaoROC
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $DataCertificacaoROC;
    /**
     * The DataAceitacaoAT
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $DataAceitacaoAT;
    /**
     * The DataNotificacaoCredor
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $DataNotificacaoCredor;
    /**
     * The ReferenciaNotificacaoCredor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $ReferenciaNotificacaoCredor;
    /**
     * The DataLimiteUtilizacao
     * Meta information extracted from the WSDL
     * - base: xs:date
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var string
     */
    public $DataLimiteUtilizacao;
    /**
     * The ValorIVADeferido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var float
     */
    public $ValorIVADeferido;
    /**
     * The ValorIVAIndeferido
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var float
     */
    public $ValorIVAIndeferido;
    /**
     * The NumeroDPAnexo40
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var int
     */
    public $NumeroDPAnexo40;
    /**
     * The PeriodoDPAnexo40
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \IFT_Art78\StructType\IFT_Art78PeriodoType
     */
    public $PeriodoDPAnexo40;
    /**
     * Constructor method for DetalhePedidoType
     * @uses IFT_Art78DetalhePedidoType::setValorTotalPedido()
     * @uses IFT_Art78DetalhePedidoType::setDataCertificacaoROC()
     * @uses IFT_Art78DetalhePedidoType::setDataAceitacaoAT()
     * @uses IFT_Art78DetalhePedidoType::setDataNotificacaoCredor()
     * @uses IFT_Art78DetalhePedidoType::setReferenciaNotificacaoCredor()
     * @uses IFT_Art78DetalhePedidoType::setDataLimiteUtilizacao()
     * @uses IFT_Art78DetalhePedidoType::setValorIVADeferido()
     * @uses IFT_Art78DetalhePedidoType::setValorIVAIndeferido()
     * @uses IFT_Art78DetalhePedidoType::setNumeroDPAnexo40()
     * @uses IFT_Art78DetalhePedidoType::setPeriodoDPAnexo40()
     * @param float $valorTotalPedido
     * @param string $dataCertificacaoROC
     * @param string $dataAceitacaoAT
     * @param string $dataNotificacaoCredor
     * @param string $referenciaNotificacaoCredor
     * @param string $dataLimiteUtilizacao
     * @param float $valorIVADeferido
     * @param float $valorIVAIndeferido
     * @param int $numeroDPAnexo40
     * @param \IFT_Art78\StructType\IFT_Art78PeriodoType $periodoDPAnexo40
     */
    public function __construct($valorTotalPedido = null, $dataCertificacaoROC = null, $dataAceitacaoAT = null, $dataNotificacaoCredor = null, $referenciaNotificacaoCredor = null, $dataLimiteUtilizacao = null, $valorIVADeferido = null, $valorIVAIndeferido = null, $numeroDPAnexo40 = null, \IFT_Art78\StructType\IFT_Art78PeriodoType $periodoDPAnexo40 = null)
    {
        $this
            ->setValorTotalPedido($valorTotalPedido)
            ->setDataCertificacaoROC($dataCertificacaoROC)
            ->setDataAceitacaoAT($dataAceitacaoAT)
            ->setDataNotificacaoCredor($dataNotificacaoCredor)
            ->setReferenciaNotificacaoCredor($referenciaNotificacaoCredor)
            ->setDataLimiteUtilizacao($dataLimiteUtilizacao)
            ->setValorIVADeferido($valorIVADeferido)
            ->setValorIVAIndeferido($valorIVAIndeferido)
            ->setNumeroDPAnexo40($numeroDPAnexo40)
            ->setPeriodoDPAnexo40($periodoDPAnexo40);
    }
    /**
     * Get ValorTotalPedido value
     * @return float
     */
    public function getValorTotalPedido()
    {
        return $this->ValorTotalPedido;
    }
    /**
     * Set ValorTotalPedido value
     * @param float $valorTotalPedido
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setValorTotalPedido($valorTotalPedido = null)
    {
        // validation for constraint: float
        if (!is_null($valorTotalPedido) && !(is_float($valorTotalPedido) || is_numeric($valorTotalPedido))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorTotalPedido, true), gettype($valorTotalPedido)), __LINE__);
        }
        $this->ValorTotalPedido = $valorTotalPedido;
        return $this;
    }
    /**
     * Get DataCertificacaoROC value
     * @return string|null
     */
    public function getDataCertificacaoROC()
    {
        return $this->DataCertificacaoROC;
    }
    /**
     * Set DataCertificacaoROC value
     * @param string $dataCertificacaoROC
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setDataCertificacaoROC($dataCertificacaoROC = null)
    {
        // validation for constraint: string
        if (!is_null($dataCertificacaoROC) && !is_string($dataCertificacaoROC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCertificacaoROC, true), gettype($dataCertificacaoROC)), __LINE__);
        }
        $this->DataCertificacaoROC = $dataCertificacaoROC;
        return $this;
    }
    /**
     * Get DataAceitacaoAT value
     * @return string|null
     */
    public function getDataAceitacaoAT()
    {
        return $this->DataAceitacaoAT;
    }
    /**
     * Set DataAceitacaoAT value
     * @param string $dataAceitacaoAT
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setDataAceitacaoAT($dataAceitacaoAT = null)
    {
        // validation for constraint: string
        if (!is_null($dataAceitacaoAT) && !is_string($dataAceitacaoAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataAceitacaoAT, true), gettype($dataAceitacaoAT)), __LINE__);
        }
        $this->DataAceitacaoAT = $dataAceitacaoAT;
        return $this;
    }
    /**
     * Get DataNotificacaoCredor value
     * @return string|null
     */
    public function getDataNotificacaoCredor()
    {
        return $this->DataNotificacaoCredor;
    }
    /**
     * Set DataNotificacaoCredor value
     * @param string $dataNotificacaoCredor
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setDataNotificacaoCredor($dataNotificacaoCredor = null)
    {
        // validation for constraint: string
        if (!is_null($dataNotificacaoCredor) && !is_string($dataNotificacaoCredor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNotificacaoCredor, true), gettype($dataNotificacaoCredor)), __LINE__);
        }
        $this->DataNotificacaoCredor = $dataNotificacaoCredor;
        return $this;
    }
    /**
     * Get ReferenciaNotificacaoCredor value
     * @return string|null
     */
    public function getReferenciaNotificacaoCredor()
    {
        return $this->ReferenciaNotificacaoCredor;
    }
    /**
     * Set ReferenciaNotificacaoCredor value
     * @param string $referenciaNotificacaoCredor
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setReferenciaNotificacaoCredor($referenciaNotificacaoCredor = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaNotificacaoCredor) && !is_string($referenciaNotificacaoCredor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaNotificacaoCredor, true), gettype($referenciaNotificacaoCredor)), __LINE__);
        }
        $this->ReferenciaNotificacaoCredor = $referenciaNotificacaoCredor;
        return $this;
    }
    /**
     * Get DataLimiteUtilizacao value
     * @return string|null
     */
    public function getDataLimiteUtilizacao()
    {
        return $this->DataLimiteUtilizacao;
    }
    /**
     * Set DataLimiteUtilizacao value
     * @param string $dataLimiteUtilizacao
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setDataLimiteUtilizacao($dataLimiteUtilizacao = null)
    {
        // validation for constraint: string
        if (!is_null($dataLimiteUtilizacao) && !is_string($dataLimiteUtilizacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataLimiteUtilizacao, true), gettype($dataLimiteUtilizacao)), __LINE__);
        }
        $this->DataLimiteUtilizacao = $dataLimiteUtilizacao;
        return $this;
    }
    /**
     * Get ValorIVADeferido value
     * @return float|null
     */
    public function getValorIVADeferido()
    {
        return $this->ValorIVADeferido;
    }
    /**
     * Set ValorIVADeferido value
     * @param float $valorIVADeferido
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setValorIVADeferido($valorIVADeferido = null)
    {
        // validation for constraint: float
        if (!is_null($valorIVADeferido) && !(is_float($valorIVADeferido) || is_numeric($valorIVADeferido))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorIVADeferido, true), gettype($valorIVADeferido)), __LINE__);
        }
        $this->ValorIVADeferido = $valorIVADeferido;
        return $this;
    }
    /**
     * Get ValorIVAIndeferido value
     * @return float|null
     */
    public function getValorIVAIndeferido()
    {
        return $this->ValorIVAIndeferido;
    }
    /**
     * Set ValorIVAIndeferido value
     * @param float $valorIVAIndeferido
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setValorIVAIndeferido($valorIVAIndeferido = null)
    {
        // validation for constraint: float
        if (!is_null($valorIVAIndeferido) && !(is_float($valorIVAIndeferido) || is_numeric($valorIVAIndeferido))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorIVAIndeferido, true), gettype($valorIVAIndeferido)), __LINE__);
        }
        $this->ValorIVAIndeferido = $valorIVAIndeferido;
        return $this;
    }
    /**
     * Get NumeroDPAnexo40 value
     * @return int|null
     */
    public function getNumeroDPAnexo40()
    {
        return $this->NumeroDPAnexo40;
    }
    /**
     * Set NumeroDPAnexo40 value
     * @param int $numeroDPAnexo40
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setNumeroDPAnexo40($numeroDPAnexo40 = null)
    {
        // validation for constraint: int
        if (!is_null($numeroDPAnexo40) && !(is_int($numeroDPAnexo40) || ctype_digit($numeroDPAnexo40))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroDPAnexo40, true), gettype($numeroDPAnexo40)), __LINE__);
        }
        $this->NumeroDPAnexo40 = $numeroDPAnexo40;
        return $this;
    }
    /**
     * Get PeriodoDPAnexo40 value
     * @return \IFT_Art78\StructType\IFT_Art78PeriodoType|null
     */
    public function getPeriodoDPAnexo40()
    {
        return $this->PeriodoDPAnexo40;
    }
    /**
     * Set PeriodoDPAnexo40 value
     * @param \IFT_Art78\StructType\IFT_Art78PeriodoType $periodoDPAnexo40
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
     */
    public function setPeriodoDPAnexo40(\IFT_Art78\StructType\IFT_Art78PeriodoType $periodoDPAnexo40 = null)
    {
        $this->PeriodoDPAnexo40 = $periodoDPAnexo40;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_Art78\StructType\IFT_Art78DetalhePedidoType
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
