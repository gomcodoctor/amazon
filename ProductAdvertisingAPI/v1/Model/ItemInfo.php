<?php
 
/**
 * Copyright 2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */
 
namespace Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model;

use \ArrayAccess;
use Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\ObjectSerializer;

/**
 * ItemInfo Class Doc Comment
 *
 * @category Class
 * @package  Amazon\ProductAdvertisingAPI\v1
 * @author   Product Advertising API team
 */
class ItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'byLineInfo' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ByLineInfo',
        'classifications' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\Classifications',
        'contentInfo' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentInfo',
        'contentRating' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentRating',
        'externalIds' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ExternalIds',
        'features' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\MultiValuedAttribute',
        'manufactureInfo' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ManufactureInfo',
        'productInfo' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ProductInfo',
        'technicalInfo' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\TechnicalInfo',
        'title' => '\Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\SingleStringValuedAttribute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'byLineInfo' => null,
        'classifications' => null,
        'contentInfo' => null,
        'contentRating' => null,
        'externalIds' => null,
        'features' => null,
        'manufactureInfo' => null,
        'productInfo' => null,
        'technicalInfo' => null,
        'title' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'byLineInfo' => 'ByLineInfo',
        'classifications' => 'Classifications',
        'contentInfo' => 'ContentInfo',
        'contentRating' => 'ContentRating',
        'externalIds' => 'ExternalIds',
        'features' => 'Features',
        'manufactureInfo' => 'ManufactureInfo',
        'productInfo' => 'ProductInfo',
        'technicalInfo' => 'TechnicalInfo',
        'title' => 'Title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'byLineInfo' => 'setByLineInfo',
        'classifications' => 'setClassifications',
        'contentInfo' => 'setContentInfo',
        'contentRating' => 'setContentRating',
        'externalIds' => 'setExternalIds',
        'features' => 'setFeatures',
        'manufactureInfo' => 'setManufactureInfo',
        'productInfo' => 'setProductInfo',
        'technicalInfo' => 'setTechnicalInfo',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'byLineInfo' => 'getByLineInfo',
        'classifications' => 'getClassifications',
        'contentInfo' => 'getContentInfo',
        'contentRating' => 'getContentRating',
        'externalIds' => 'getExternalIds',
        'features' => 'getFeatures',
        'manufactureInfo' => 'getManufactureInfo',
        'productInfo' => 'getProductInfo',
        'technicalInfo' => 'getTechnicalInfo',
        'title' => 'getTitle'
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
        return self::$swaggerModelName;
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
        $this->container['byLineInfo'] = isset($data['byLineInfo']) ? $data['byLineInfo'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['contentInfo'] = isset($data['contentInfo']) ? $data['contentInfo'] : null;
        $this->container['contentRating'] = isset($data['contentRating']) ? $data['contentRating'] : null;
        $this->container['externalIds'] = isset($data['externalIds']) ? $data['externalIds'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['manufactureInfo'] = isset($data['manufactureInfo']) ? $data['manufactureInfo'] : null;
        $this->container['productInfo'] = isset($data['productInfo']) ? $data['productInfo'] : null;
        $this->container['technicalInfo'] = isset($data['technicalInfo']) ? $data['technicalInfo'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets byLineInfo
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ByLineInfo
     */
    public function getByLineInfo()
    {
        return $this->container['byLineInfo'];
    }

    /**
     * Sets byLineInfo
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ByLineInfo $byLineInfo byLineInfo
     *
     * @return $this
     */
    public function setByLineInfo($byLineInfo)
    {
        $this->container['byLineInfo'] = $byLineInfo;

        return $this;
    }

    /**
     * Gets classifications
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\Classifications
     */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
     * Sets classifications
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\Classifications $classifications classifications
     *
     * @return $this
     */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;

        return $this;
    }

    /**
     * Gets contentInfo
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentInfo
     */
    public function getContentInfo()
    {
        return $this->container['contentInfo'];
    }

    /**
     * Sets contentInfo
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentInfo $contentInfo contentInfo
     *
     * @return $this
     */
    public function setContentInfo($contentInfo)
    {
        $this->container['contentInfo'] = $contentInfo;

        return $this;
    }

    /**
     * Gets contentRating
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentRating
     */
    public function getContentRating()
    {
        return $this->container['contentRating'];
    }

    /**
     * Sets contentRating
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ContentRating $contentRating contentRating
     *
     * @return $this
     */
    public function setContentRating($contentRating)
    {
        $this->container['contentRating'] = $contentRating;

        return $this;
    }

    /**
     * Gets externalIds
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ExternalIds
     */
    public function getExternalIds()
    {
        return $this->container['externalIds'];
    }

    /**
     * Sets externalIds
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ExternalIds $externalIds externalIds
     *
     * @return $this
     */
    public function setExternalIds($externalIds)
    {
        $this->container['externalIds'] = $externalIds;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\MultiValuedAttribute
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\MultiValuedAttribute $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets manufactureInfo
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ManufactureInfo
     */
    public function getManufactureInfo()
    {
        return $this->container['manufactureInfo'];
    }

    /**
     * Sets manufactureInfo
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ManufactureInfo $manufactureInfo manufactureInfo
     *
     * @return $this
     */
    public function setManufactureInfo($manufactureInfo)
    {
        $this->container['manufactureInfo'] = $manufactureInfo;

        return $this;
    }

    /**
     * Gets productInfo
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ProductInfo
     */
    public function getProductInfo()
    {
        return $this->container['productInfo'];
    }

    /**
     * Sets productInfo
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\ProductInfo $productInfo productInfo
     *
     * @return $this
     */
    public function setProductInfo($productInfo)
    {
        $this->container['productInfo'] = $productInfo;

        return $this;
    }

    /**
     * Gets technicalInfo
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\TechnicalInfo
     */
    public function getTechnicalInfo()
    {
        return $this->container['technicalInfo'];
    }

    /**
     * Sets technicalInfo
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\TechnicalInfo $technicalInfo technicalInfo
     *
     * @return $this
     */
    public function setTechnicalInfo($technicalInfo)
    {
        $this->container['technicalInfo'] = $technicalInfo;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\SingleStringValuedAttribute
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \Gomcodoctor\Amazon\ProductAdvertisingAPI\v1\Model\SingleStringValuedAttribute $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


