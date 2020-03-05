<?php

namespace IFT_Arrendamento\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Obter ServiceType
 * @package IFT_Arrendamento
 * @subpackage Services
 */
class IFT_ArrendamentoObter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named obterRecibo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoObterReciboRequest $obterReciboRequest
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoObterReciboResponse|bool
     */
    public function obterRecibo(\IFT_Arrendamento\StructType\IFT_ArrendamentoObterReciboRequest $obterReciboRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->obterRecibo($obterReciboRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoObterReciboResponse
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
