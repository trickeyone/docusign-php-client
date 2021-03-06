<?php
/**
 * DocumentHtmlDisplayAnchor
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
 * DocumentHtmlDisplayAnchor Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentHtmlDisplayAnchor implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'documentHtmlDisplayAnchor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'case_sensitive' => 'bool',
        'display_settings' => '\DocuSign\eSign\Model\DocumentHtmlDisplaySettings',
        'end_anchor' => 'string',
        'remove_end_anchor' => 'bool',
        'remove_start_anchor' => 'bool',
        'start_anchor' => 'string'
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
        'case_sensitive' => 'caseSensitive',
        'display_settings' => 'displaySettings',
        'end_anchor' => 'endAnchor',
        'remove_end_anchor' => 'removeEndAnchor',
        'remove_start_anchor' => 'removeStartAnchor',
        'start_anchor' => 'startAnchor'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'case_sensitive' => 'setCaseSensitive',
        'display_settings' => 'setDisplaySettings',
        'end_anchor' => 'setEndAnchor',
        'remove_end_anchor' => 'setRemoveEndAnchor',
        'remove_start_anchor' => 'setRemoveStartAnchor',
        'start_anchor' => 'setStartAnchor'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'case_sensitive' => 'getCaseSensitive',
        'display_settings' => 'getDisplaySettings',
        'end_anchor' => 'getEndAnchor',
        'remove_end_anchor' => 'getRemoveEndAnchor',
        'remove_start_anchor' => 'getRemoveStartAnchor',
        'start_anchor' => 'getStartAnchor'
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
        $this->container['case_sensitive'] = isset($data['case_sensitive']) ? $data['case_sensitive'] : null;
        $this->container['display_settings'] = isset($data['display_settings']) ? $data['display_settings'] : null;
        $this->container['end_anchor'] = isset($data['end_anchor']) ? $data['end_anchor'] : null;
        $this->container['remove_end_anchor'] = isset($data['remove_end_anchor']) ? $data['remove_end_anchor'] : null;
        $this->container['remove_start_anchor'] = isset($data['remove_start_anchor']) ? $data['remove_start_anchor'] : null;
        $this->container['start_anchor'] = isset($data['start_anchor']) ? $data['start_anchor'] : null;
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
     * Gets case_sensitive
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->container['case_sensitive'];
    }

    /**
     * Sets case_sensitive
     * @param bool $case_sensitive 
     * @return $this
     */
    public function setCaseSensitive($case_sensitive)
    {
        $this->container['case_sensitive'] = $case_sensitive;

        return $this;
    }

    /**
     * Gets display_settings
     * @return \DocuSign\eSign\Model\DocumentHtmlDisplaySettings
     */
    public function getDisplaySettings()
    {
        return $this->container['display_settings'];
    }

    /**
     * Sets display_settings
     * @param \DocuSign\eSign\Model\DocumentHtmlDisplaySettings $display_settings
     * @return $this
     */
    public function setDisplaySettings($display_settings)
    {
        $this->container['display_settings'] = $display_settings;

        return $this;
    }

    /**
     * Gets end_anchor
     * @return string
     */
    public function getEndAnchor()
    {
        return $this->container['end_anchor'];
    }

    /**
     * Sets end_anchor
     * @param string $end_anchor 
     * @return $this
     */
    public function setEndAnchor($end_anchor)
    {
        $this->container['end_anchor'] = $end_anchor;

        return $this;
    }

    /**
     * Gets remove_end_anchor
     * @return bool
     */
    public function getRemoveEndAnchor()
    {
        return $this->container['remove_end_anchor'];
    }

    /**
     * Sets remove_end_anchor
     * @param bool $remove_end_anchor 
     * @return $this
     */
    public function setRemoveEndAnchor($remove_end_anchor)
    {
        $this->container['remove_end_anchor'] = $remove_end_anchor;

        return $this;
    }

    /**
     * Gets remove_start_anchor
     * @return bool
     */
    public function getRemoveStartAnchor()
    {
        return $this->container['remove_start_anchor'];
    }

    /**
     * Sets remove_start_anchor
     * @param bool $remove_start_anchor 
     * @return $this
     */
    public function setRemoveStartAnchor($remove_start_anchor)
    {
        $this->container['remove_start_anchor'] = $remove_start_anchor;

        return $this;
    }

    /**
     * Gets start_anchor
     * @return string
     */
    public function getStartAnchor()
    {
        return $this->container['start_anchor'];
    }

    /**
     * Sets start_anchor
     * @param string $start_anchor 
     * @return $this
     */
    public function setStartAnchor($start_anchor)
    {
        $this->container['start_anchor'] = $start_anchor;

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


