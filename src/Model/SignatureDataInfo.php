<?php
/**
 * SignatureDataInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * SignatureDataInfo Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignatureDataInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'signatureDataInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_security_store' => '\DocuSign\eSign\Model\DocumentSecurityStore',
        'signature_data' => 'string',
        'signature_field_name' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'document_security_store' => 'documentSecurityStore',
        'signature_data' => 'signatureData',
        'signature_field_name' => 'signatureFieldName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'document_security_store' => 'setDocumentSecurityStore',
        'signature_data' => 'setSignatureData',
        'signature_field_name' => 'setSignatureFieldName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'document_security_store' => 'getDocumentSecurityStore',
        'signature_data' => 'getSignatureData',
        'signature_field_name' => 'getSignatureFieldName'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['document_security_store'] = isset($data['document_security_store']) ? $data['document_security_store'] : null;
        $this->container['signature_data'] = isset($data['signature_data']) ? $data['signature_data'] : null;
        $this->container['signature_field_name'] = isset($data['signature_field_name']) ? $data['signature_field_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets document_security_store
     * @return \DocuSign\eSign\Model\DocumentSecurityStore
     */
    public function getDocumentSecurityStore()
    {
        return $this->container['document_security_store'];
    }

    /**
     * Sets document_security_store
     * @param \DocuSign\eSign\Model\DocumentSecurityStore $document_security_store
     * @return $this
     */
    public function setDocumentSecurityStore($document_security_store)
    {
        $this->container['document_security_store'] = $document_security_store;

        return $this;
    }

    /**
     * Gets signature_data
     * @return string
     */
    public function getSignatureData()
    {
        return $this->container['signature_data'];
    }

    /**
     * Sets signature_data
     * @param string $signature_data 
     * @return $this
     */
    public function setSignatureData($signature_data)
    {
        $this->container['signature_data'] = $signature_data;

        return $this;
    }

    /**
     * Gets signature_field_name
     * @return string
     */
    public function getSignatureFieldName()
    {
        return $this->container['signature_field_name'];
    }

    /**
     * Sets signature_field_name
     * @param string $signature_field_name 
     * @return $this
     */
    public function setSignatureFieldName($signature_field_name)
    {
        $this->container['signature_field_name'] = $signature_field_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


