<?php
/**
 * NewTemplate
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Team Pass API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NewTemplate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'logo_text' => 'string',
        'bg_color' => 'string',
        'logo_img' => 'string',
        'strip_img' => 'string',
        'gate_label' => 'string',
        'row_label' => 'string',
        'section_label' => 'string',
        'website_label' => 'string',
        'website_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'logo_text' => null,
        'bg_color' => null,
        'logo_img' => null,
        'strip_img' => null,
        'gate_label' => null,
        'row_label' => null,
        'section_label' => null,
        'website_label' => null,
        'website_value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'logo_text' => 'logo_text',
        'bg_color' => 'bg_color',
        'logo_img' => 'logo_img',
        'strip_img' => 'strip_img',
        'gate_label' => 'gate_label',
        'row_label' => 'row_label',
        'section_label' => 'section_label',
        'website_label' => 'website_label',
        'website_value' => 'website_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'logo_text' => 'setLogoText',
        'bg_color' => 'setBgColor',
        'logo_img' => 'setLogoImg',
        'strip_img' => 'setStripImg',
        'gate_label' => 'setGateLabel',
        'row_label' => 'setRowLabel',
        'section_label' => 'setSectionLabel',
        'website_label' => 'setWebsiteLabel',
        'website_value' => 'setWebsiteValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'logo_text' => 'getLogoText',
        'bg_color' => 'getBgColor',
        'logo_img' => 'getLogoImg',
        'strip_img' => 'getStripImg',
        'gate_label' => 'getGateLabel',
        'row_label' => 'getRowLabel',
        'section_label' => 'getSectionLabel',
        'website_label' => 'getWebsiteLabel',
        'website_value' => 'getWebsiteValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['logo_text'] = isset($data['logo_text']) ? $data['logo_text'] : null;
        $this->container['bg_color'] = isset($data['bg_color']) ? $data['bg_color'] : null;
        $this->container['logo_img'] = isset($data['logo_img']) ? $data['logo_img'] : null;
        $this->container['strip_img'] = isset($data['strip_img']) ? $data['strip_img'] : null;
        $this->container['gate_label'] = isset($data['gate_label']) ? $data['gate_label'] : null;
        $this->container['row_label'] = isset($data['row_label']) ? $data['row_label'] : null;
        $this->container['section_label'] = isset($data['section_label']) ? $data['section_label'] : null;
        $this->container['website_label'] = isset($data['website_label']) ? $data['website_label'] : null;
        $this->container['website_value'] = isset($data['website_value']) ? $data['website_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['logo_text'] === null) {
            $invalidProperties[] = "'logo_text' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo_text
     *
     * @return string
     */
    public function getLogoText()
    {
        return $this->container['logo_text'];
    }

    /**
     * Sets logo_text
     *
     * @param string $logo_text Logo text
     *
     * @return $this
     */
    public function setLogoText($logo_text)
    {
        $this->container['logo_text'] = $logo_text;

        return $this;
    }

    /**
     * Gets bg_color
     *
     * @return string|null
     */
    public function getBgColor()
    {
        return $this->container['bg_color'];
    }

    /**
     * Sets bg_color
     *
     * @param string|null $bg_color Background color
     *
     * @return $this
     */
    public function setBgColor($bg_color)
    {
        $this->container['bg_color'] = $bg_color;

        return $this;
    }

    /**
     * Gets logo_img
     *
     * @return string|null
     */
    public function getLogoImg()
    {
        return $this->container['logo_img'];
    }

    /**
     * Sets logo_img
     *
     * @param string|null $logo_img Logo image URI
     *
     * @return $this
     */
    public function setLogoImg($logo_img)
    {
        $this->container['logo_img'] = $logo_img;

        return $this;
    }

    /**
     * Gets strip_img
     *
     * @return string|null
     */
    public function getStripImg()
    {
        return $this->container['strip_img'];
    }

    /**
     * Sets strip_img
     *
     * @param string|null $strip_img Logo image URI
     *
     * @return $this
     */
    public function setStripImg($strip_img)
    {
        $this->container['strip_img'] = $strip_img;

        return $this;
    }

    /**
     * Gets gate_label
     *
     * @return string|null
     */
    public function getGateLabel()
    {
        return $this->container['gate_label'];
    }

    /**
     * Sets gate_label
     *
     * @param string|null $gate_label Gate label
     *
     * @return $this
     */
    public function setGateLabel($gate_label)
    {
        $this->container['gate_label'] = $gate_label;

        return $this;
    }

    /**
     * Gets row_label
     *
     * @return string|null
     */
    public function getRowLabel()
    {
        return $this->container['row_label'];
    }

    /**
     * Sets row_label
     *
     * @param string|null $row_label Row label
     *
     * @return $this
     */
    public function setRowLabel($row_label)
    {
        $this->container['row_label'] = $row_label;

        return $this;
    }

    /**
     * Gets section_label
     *
     * @return string|null
     */
    public function getSectionLabel()
    {
        return $this->container['section_label'];
    }

    /**
     * Sets section_label
     *
     * @param string|null $section_label Logo image URI
     *
     * @return $this
     */
    public function setSectionLabel($section_label)
    {
        $this->container['section_label'] = $section_label;

        return $this;
    }

    /**
     * Gets website_label
     *
     * @return string|null
     */
    public function getWebsiteLabel()
    {
        return $this->container['website_label'];
    }

    /**
     * Sets website_label
     *
     * @param string|null $website_label Website Label
     *
     * @return $this
     */
    public function setWebsiteLabel($website_label)
    {
        $this->container['website_label'] = $website_label;

        return $this;
    }

    /**
     * Gets website_value
     *
     * @return string|null
     */
    public function getWebsiteValue()
    {
        return $this->container['website_value'];
    }

    /**
     * Sets website_value
     *
     * @param string|null $website_value Website value
     *
     * @return $this
     */
    public function setWebsiteValue($website_value)
    {
        $this->container['website_value'] = $website_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


