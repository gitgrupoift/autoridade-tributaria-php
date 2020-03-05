<?php

namespace IFT_Faturas\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Register ServiceType
 * @package IFT_Faturas
 * @subpackage Services
 */
class IFT_FaturasRegister extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RegisterInvoice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType $registerInvoiceRequest
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceResponseType|bool
     */
    public function RegisterInvoice(\IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceType $registerInvoiceRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->RegisterInvoice($registerInvoiceRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Faturas\StructType\IFT_FaturasRegisterInvoiceResponseType
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
