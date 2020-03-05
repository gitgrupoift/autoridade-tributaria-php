<?php

namespace IFT_DocTransportes;

/**
 * Class which returns the class map definition
 * @package IFT_DocTransportes
 */
class IFT_DocTransportesClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'StockMovement' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesStockMovement',
            'StockMovementResponse' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesStockMovementResponse',
            'ResponseStatus' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesResponseStatus',
            'Line' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesLine',
            'OrderReferences' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesOrderReferences',
            'AddressStructurePT' => '\\IFT_DocTransportes\\StructType\\IFT_DocTransportesAddressStructurePT',
        );
    }
}
