<?php

namespace IFT_Art78\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Submeter ServiceType
 * @package IFT_Art78
 * @subpackage Services
 */
class IFT_Art78Submeter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SubmeterPedidoCobrancaDuvidosa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType $submeterPedidoCobrancaDuvidosaRequest
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType|bool
     */
    public function SubmeterPedidoCobrancaDuvidosa(\IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaRequestType $submeterPedidoCobrancaDuvidosaRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SubmeterPedidoCobrancaDuvidosa($submeterPedidoCobrancaDuvidosaRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_Art78\StructType\IFT_Art78SubmeterPedidoCobrancaDuvidosaResponseType
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
