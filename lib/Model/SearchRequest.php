<?php
/**
 * SearchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **API**  Provides access to the features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Model;

use \ArrayAccess;

/**
 * SearchRequest Class Doc Comment
 *
 * @category    Class
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'query' => '\Alfresco\Model\RequestQuery',
        'paging' => '\Alfresco\Model\RequestPagination',
        'include' => '\Alfresco\Model\RequestInclude',
        'include_request' => 'bool',
        'fields' => '\Alfresco\Model\RequestFields',
        'sort' => '\Alfresco\Model\RequestSortDefinition',
        'templates' => '\Alfresco\Model\RequestTemplates',
        'defaults' => '\Alfresco\Model\RequestDefaults',
        'localization' => '\Alfresco\Model\RequestLocalization',
        'filter_queries' => '\Alfresco\Model\RequestFilterQueries',
        'facet_queries' => '\Alfresco\Model\RequestFacetQueries',
        'facet_fields' => '\Alfresco\Model\RequestFacetFields',
        'facet_intervals' => '\Alfresco\Model\RequestFacetIntervals',
        'pivots' => '\Alfresco\Model\RequestPivot[]',
        'stats' => '\Alfresco\Model\RequestStats[]',
        'spellcheck' => '\Alfresco\Model\RequestSpellcheck',
        'scope' => '\Alfresco\Model\RequestScope',
        'limits' => '\Alfresco\Model\RequestLimits',
        'highlight' => '\Alfresco\Model\RequestHighlight',
        'ranges' => '\Alfresco\Model\RequestRange[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'query' => null,
        'paging' => null,
        'include' => null,
        'include_request' => null,
        'fields' => null,
        'sort' => null,
        'templates' => null,
        'defaults' => null,
        'localization' => null,
        'filter_queries' => null,
        'facet_queries' => null,
        'facet_fields' => null,
        'facet_intervals' => null,
        'pivots' => null,
        'stats' => null,
        'spellcheck' => null,
        'scope' => null,
        'limits' => null,
        'highlight' => null,
        'ranges' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'query' => 'query',
        'paging' => 'paging',
        'include' => 'include',
        'include_request' => 'includeRequest',
        'fields' => 'fields',
        'sort' => 'sort',
        'templates' => 'templates',
        'defaults' => 'defaults',
        'localization' => 'localization',
        'filter_queries' => 'filterQueries',
        'facet_queries' => 'facetQueries',
        'facet_fields' => 'facetFields',
        'facet_intervals' => 'facetIntervals',
        'pivots' => 'pivots',
        'stats' => 'stats',
        'spellcheck' => 'spellcheck',
        'scope' => 'scope',
        'limits' => 'limits',
        'highlight' => 'highlight',
        'ranges' => 'ranges'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'paging' => 'setPaging',
        'include' => 'setInclude',
        'include_request' => 'setIncludeRequest',
        'fields' => 'setFields',
        'sort' => 'setSort',
        'templates' => 'setTemplates',
        'defaults' => 'setDefaults',
        'localization' => 'setLocalization',
        'filter_queries' => 'setFilterQueries',
        'facet_queries' => 'setFacetQueries',
        'facet_fields' => 'setFacetFields',
        'facet_intervals' => 'setFacetIntervals',
        'pivots' => 'setPivots',
        'stats' => 'setStats',
        'spellcheck' => 'setSpellcheck',
        'scope' => 'setScope',
        'limits' => 'setLimits',
        'highlight' => 'setHighlight',
        'ranges' => 'setRanges'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'paging' => 'getPaging',
        'include' => 'getInclude',
        'include_request' => 'getIncludeRequest',
        'fields' => 'getFields',
        'sort' => 'getSort',
        'templates' => 'getTemplates',
        'defaults' => 'getDefaults',
        'localization' => 'getLocalization',
        'filter_queries' => 'getFilterQueries',
        'facet_queries' => 'getFacetQueries',
        'facet_fields' => 'getFacetFields',
        'facet_intervals' => 'getFacetIntervals',
        'pivots' => 'getPivots',
        'stats' => 'getStats',
        'spellcheck' => 'getSpellcheck',
        'scope' => 'getScope',
        'limits' => 'getLimits',
        'highlight' => 'getHighlight',
        'ranges' => 'getRanges'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['paging'] = isset($data['paging']) ? $data['paging'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['include_request'] = isset($data['include_request']) ? $data['include_request'] : false;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['defaults'] = isset($data['defaults']) ? $data['defaults'] : null;
        $this->container['localization'] = isset($data['localization']) ? $data['localization'] : null;
        $this->container['filter_queries'] = isset($data['filter_queries']) ? $data['filter_queries'] : null;
        $this->container['facet_queries'] = isset($data['facet_queries']) ? $data['facet_queries'] : null;
        $this->container['facet_fields'] = isset($data['facet_fields']) ? $data['facet_fields'] : null;
        $this->container['facet_intervals'] = isset($data['facet_intervals']) ? $data['facet_intervals'] : null;
        $this->container['pivots'] = isset($data['pivots']) ? $data['pivots'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['spellcheck'] = isset($data['spellcheck']) ? $data['spellcheck'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['highlight'] = isset($data['highlight']) ? $data['highlight'] : null;
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['query'] === null) {
            $invalid_properties[] = "'query' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['query'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets query
     * @return \Alfresco\Model\RequestQuery
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     * @param \Alfresco\Model\RequestQuery $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets paging
     * @return \Alfresco\Model\RequestPagination
     */
    public function getPaging()
    {
        return $this->container['paging'];
    }

    /**
     * Sets paging
     * @param \Alfresco\Model\RequestPagination $paging
     * @return $this
     */
    public function setPaging($paging)
    {
        $this->container['paging'] = $paging;

        return $this;
    }

    /**
     * Gets include
     * @return \Alfresco\Model\RequestInclude
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     * @param \Alfresco\Model\RequestInclude $include
     * @return $this
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets include_request
     * @return bool
     */
    public function getIncludeRequest()
    {
        return $this->container['include_request'];
    }

    /**
     * Sets include_request
     * @param bool $include_request When true, include the original request in the response
     * @return $this
     */
    public function setIncludeRequest($include_request)
    {
        $this->container['include_request'] = $include_request;

        return $this;
    }

    /**
     * Gets fields
     * @return \Alfresco\Model\RequestFields
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     * @param \Alfresco\Model\RequestFields $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets sort
     * @return \Alfresco\Model\RequestSortDefinition
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param \Alfresco\Model\RequestSortDefinition $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets templates
     * @return \Alfresco\Model\RequestTemplates
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     * @param \Alfresco\Model\RequestTemplates $templates
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets defaults
     * @return \Alfresco\Model\RequestDefaults
     */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
     * Sets defaults
     * @param \Alfresco\Model\RequestDefaults $defaults
     * @return $this
     */
    public function setDefaults($defaults)
    {
        $this->container['defaults'] = $defaults;

        return $this;
    }

    /**
     * Gets localization
     * @return \Alfresco\Model\RequestLocalization
     */
    public function getLocalization()
    {
        return $this->container['localization'];
    }

    /**
     * Sets localization
     * @param \Alfresco\Model\RequestLocalization $localization
     * @return $this
     */
    public function setLocalization($localization)
    {
        $this->container['localization'] = $localization;

        return $this;
    }

    /**
     * Gets filter_queries
     * @return \Alfresco\Model\RequestFilterQueries
     */
    public function getFilterQueries()
    {
        return $this->container['filter_queries'];
    }

    /**
     * Sets filter_queries
     * @param \Alfresco\Model\RequestFilterQueries $filter_queries
     * @return $this
     */
    public function setFilterQueries($filter_queries)
    {
        $this->container['filter_queries'] = $filter_queries;

        return $this;
    }

    /**
     * Gets facet_queries
     * @return \Alfresco\Model\RequestFacetQueries
     */
    public function getFacetQueries()
    {
        return $this->container['facet_queries'];
    }

    /**
     * Sets facet_queries
     * @param \Alfresco\Model\RequestFacetQueries $facet_queries
     * @return $this
     */
    public function setFacetQueries($facet_queries)
    {
        $this->container['facet_queries'] = $facet_queries;

        return $this;
    }

    /**
     * Gets facet_fields
     * @return \Alfresco\Model\RequestFacetFields
     */
    public function getFacetFields()
    {
        return $this->container['facet_fields'];
    }

    /**
     * Sets facet_fields
     * @param \Alfresco\Model\RequestFacetFields $facet_fields
     * @return $this
     */
    public function setFacetFields($facet_fields)
    {
        $this->container['facet_fields'] = $facet_fields;

        return $this;
    }

    /**
     * Gets facet_intervals
     * @return \Alfresco\Model\RequestFacetIntervals
     */
    public function getFacetIntervals()
    {
        return $this->container['facet_intervals'];
    }

    /**
     * Sets facet_intervals
     * @param \Alfresco\Model\RequestFacetIntervals $facet_intervals
     * @return $this
     */
    public function setFacetIntervals($facet_intervals)
    {
        $this->container['facet_intervals'] = $facet_intervals;

        return $this;
    }

    /**
     * Gets pivots
     * @return \Alfresco\Model\RequestPivot[]
     */
    public function getPivots()
    {
        return $this->container['pivots'];
    }

    /**
     * Sets pivots
     * @param \Alfresco\Model\RequestPivot[] $pivots
     * @return $this
     */
    public function setPivots($pivots)
    {
        $this->container['pivots'] = $pivots;

        return $this;
    }

    /**
     * Gets stats
     * @return \Alfresco\Model\RequestStats[]
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     * @param \Alfresco\Model\RequestStats[] $stats
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets spellcheck
     * @return \Alfresco\Model\RequestSpellcheck
     */
    public function getSpellcheck()
    {
        return $this->container['spellcheck'];
    }

    /**
     * Sets spellcheck
     * @param \Alfresco\Model\RequestSpellcheck $spellcheck
     * @return $this
     */
    public function setSpellcheck($spellcheck)
    {
        $this->container['spellcheck'] = $spellcheck;

        return $this;
    }

    /**
     * Gets scope
     * @return \Alfresco\Model\RequestScope
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param \Alfresco\Model\RequestScope $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets limits
     * @return \Alfresco\Model\RequestLimits
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     * @param \Alfresco\Model\RequestLimits $limits
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets highlight
     * @return \Alfresco\Model\RequestHighlight
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight
     * @param \Alfresco\Model\RequestHighlight $highlight
     * @return $this
     */
    public function setHighlight($highlight)
    {
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets ranges
     * @return \Alfresco\Model\RequestRange[]
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges
     * @param \Alfresco\Model\RequestRange[] $ranges
     * @return $this
     */
    public function setRanges($ranges)
    {
        $this->container['ranges'] = $ranges;

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
            return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this));
    }
}


