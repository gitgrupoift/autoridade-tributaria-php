<?php

namespace IFT_DocTransportes\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Envio ServiceType
 * @package IFT_DocTransportes
 * @subpackage Services
 */
class IFT_DocTransportesEnvio extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named envioDocumentoTransporte
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement $stockMovement
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse|bool
     */
    public function envioDocumentoTransporte(\IFT_DocTransportes\StructType\IFT_DocTransportesStockMovement $stockMovement)
    {
        try {
            $this->setResult($this->getSoapClient()->envioDocumentoTransporte($stockMovement));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \IFT_DocTransportes\StructType\IFT_DocTransportesStockMovementResponse
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
