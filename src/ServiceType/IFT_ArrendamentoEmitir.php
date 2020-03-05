<?php

namespace IFT_Arrendamento\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Emitir ServiceType
 * @package IFT_Arrendamento
 * @subpackage Services
 */
class IFT_ArrendamentoEmitir extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named emitirRecibo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest $emitirReciboRequest
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse|bool
     */
    public function emitirRecibo(\IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboRequest $emitirReciboRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->emitirRecibo($emitirReciboRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Arrendamento\StructType\IFT_ArrendamentoEmitirReciboResponse
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
