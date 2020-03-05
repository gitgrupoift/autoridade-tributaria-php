<?php

namespace IFT_Faturas;

/**
 * Class which returns the class map definition
 * @package IFT_Faturas
 */
class IFT_FaturasClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'RegisterInvoiceResponseType' => '\\IFT_Faturas\\StructType\\IFT_FaturasRegisterInvoiceResponseType',
            'RegisterInvoiceType' => '\\IFT_Faturas\\StructType\\IFT_FaturasRegisterInvoiceType',
            'Line' => '\\IFT_Faturas\\StructType\\IFT_FaturasLine',
            'DocumentTotals' => '\\IFT_Faturas\\StructType\\IFT_FaturasDocumentTotals',
            'InternationalCustomerTaxID' => '\\IFT_Faturas\\StructType\\IFT_FaturasInternationalCustomerTaxID',
            'OrderReferences' => '\\IFT_Faturas\\StructType\\IFT_FaturasOrderReferences',
            'OrderReference' => '\\IFT_Faturas\\StructType\\IFT_FaturasOrderReference',
            'Tax' => '\\IFT_Faturas\\StructType\\IFT_FaturasTax',
        );
    }
}
