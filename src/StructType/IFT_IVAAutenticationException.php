<?php

namespace IFT_IVA\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutenticationException StructType
 * @package IFT_IVA
 * @subpackage Structs
 */
class IFT_IVAAutenticationException extends AbstractStructBase
{
    /**
     * The AuthenticationFailed
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \IFT_IVA\StructType\IFT_IVAAuthenticationFailed[]
     */
    public $AuthenticationFailed;
    /**
     * Constructor method for AutenticationException
     * @uses IFT_IVAAutenticationException::setAuthenticationFailed()
     * @param \IFT_IVA\StructType\IFT_IVAAuthenticationFailed[] $authenticationFailed
     */
    public function __construct(array $authenticationFailed = array())
    {
        $this
            ->setAuthenticationFailed($authenticationFailed);
    }
    /**
     * Get AuthenticationFailed value
     * @return \IFT_IVA\StructType\IFT_IVAAuthenticationFailed[]
     */
    public function getAuthenticationFailed()
    {
        return $this->AuthenticationFailed;
    }
    /**
     * This method is responsible for validating the values passed to the setAuthenticationFailed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAuthenticationFailed method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAuthenticationFailedForArrayConstraintsFromSetAuthenticationFailed(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $autenticationExceptionAuthenticationFailedItem) {
            // validation for constraint: itemType
            if (!$autenticationExceptionAuthenticationFailedItem instanceof \IFT_IVA\StructType\IFT_IVAAuthenticationFailed) {
                $invalidValues[] = is_object($autenticationExceptionAuthenticationFailedItem) ? get_class($autenticationExceptionAuthenticationFailedItem) : sprintf('%s(%s)', gettype($autenticationExceptionAuthenticationFailedItem), var_export($autenticationExceptionAuthenticationFailedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AuthenticationFailed property can only contain items of type \IFT_IVA\StructType\IFT_IVAAuthenticationFailed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AuthenticationFailed value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAAuthenticationFailed[] $authenticationFailed
     * @return \IFT_IVA\StructType\IFT_IVAAutenticationException
     */
    public function setAuthenticationFailed(array $authenticationFailed = array())
    {
        // validation for constraint: array
        if ('' !== ($authenticationFailedArrayErrorMessage = self::validateAuthenticationFailedForArrayConstraintsFromSetAuthenticationFailed($authenticationFailed))) {
            throw new \InvalidArgumentException($authenticationFailedArrayErrorMessage, __LINE__);
        }
        $this->AuthenticationFailed = $authenticationFailed;
        return $this;
    }
    /**
     * Add item to AuthenticationFailed value
     * @throws \InvalidArgumentException
     * @param \IFT_IVA\StructType\IFT_IVAAuthenticationFailed $item
     * @return \IFT_IVA\StructType\IFT_IVAAutenticationException
     */
    public function addToAuthenticationFailed(\IFT_IVA\StructType\IFT_IVAAuthenticationFailed $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \IFT_IVA\StructType\IFT_IVAAuthenticationFailed) {
            throw new \InvalidArgumentException(sprintf('The AuthenticationFailed property can only contain items of type \IFT_IVA\StructType\IFT_IVAAuthenticationFailed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AuthenticationFailed[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \IFT_IVA\StructType\IFT_IVAAutenticationException
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
