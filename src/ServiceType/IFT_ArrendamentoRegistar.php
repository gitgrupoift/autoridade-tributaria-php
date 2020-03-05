<?php

namespace IFT_Arrendamento\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Registar ServiceType
 * @package IFT_Arrendamento
 * @subpackage Services
 */
class IFT_ArrendamentoRegistar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named registarDadosContrato
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest $registarDadosContratoRequest
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoResponse|bool
     */
    public function registarDadosContrato(\IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoRequest $registarDadosContratoRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->registarDadosContrato($registarDadosContratoRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoRegistarDadosContratoResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
