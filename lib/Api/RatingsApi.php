<?php
/**
 * RatingsApi
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Rhuan Barreto
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

namespace Alfresco\Api;

use \Alfresco\ApiClient;
use \Alfresco\ApiException;
use \Alfresco\Configuration;
use \Alfresco\ObjectSerializer;

/**
 * RatingsApi Class Doc Comment
 *
 * @category Class
 * @package  Alfresco
 * @author   Rhuan Barreto
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatingsApi
{
    /**
     * API Client
     *
     * @var \Alfresco\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Alfresco\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Alfresco\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Alfresco\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Alfresco\ApiClient $apiClient set the API client
     *
     * @return RatingsApi
     */
    public function setApiClient(\Alfresco\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRating
     *
     * Create a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param \Alfresco\Model\RatingBody $rating_body_create For \&quot;myRating\&quot; the type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.  For example, to \&quot;like\&quot; a file the following body would be used:  &#x60;&#x60;&#x60;JSON   {     \&quot;id\&quot;: \&quot;likes\&quot;,     \&quot;myRating\&quot;: true   } &#x60;&#x60;&#x60; (required)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return \Alfresco\Model\RatingEntry
     */
    public function createRating($node_id, $rating_body_create, $fields = null)
    {
        list($response) = $this->createRatingWithHttpInfo($node_id, $rating_body_create, $fields);
        return $response;
    }

    /**
     * Operation createRatingWithHttpInfo
     *
     * Create a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param \Alfresco\Model\RatingBody $rating_body_create For \&quot;myRating\&quot; the type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.  For example, to \&quot;like\&quot; a file the following body would be used:  &#x60;&#x60;&#x60;JSON   {     \&quot;id\&quot;: \&quot;likes\&quot;,     \&quot;myRating\&quot;: true   } &#x60;&#x60;&#x60; (required)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return array of \Alfresco\Model\RatingEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRatingWithHttpInfo($node_id, $rating_body_create, $fields = null)
    {
        // verify the required parameter 'node_id' is set
        if ($node_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $node_id when calling createRating');
        }
        // verify the required parameter 'rating_body_create' is set
        if ($rating_body_create === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rating_body_create when calling createRating');
        }
        // parse inputs
        $resourcePath = "/nodes/{nodeId}/ratings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (is_array($fields)) {
            $fields = $this->apiClient->getSerializer()->serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($node_id !== null) {
            $resourcePath = str_replace(
                "{" . "nodeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($node_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($rating_body_create)) {
            $_tempBody = $rating_body_create;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Alfresco\Model\RatingEntry',
                '/nodes/{nodeId}/ratings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Alfresco\Model\RatingEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\RatingEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteRating
     *
     * Delete a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param string $rating_id The identifier of a rating. (required)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return void
     */
    public function deleteRating($node_id, $rating_id)
    {
        list($response) = $this->deleteRatingWithHttpInfo($node_id, $rating_id);
        return $response;
    }

    /**
     * Operation deleteRatingWithHttpInfo
     *
     * Delete a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param string $rating_id The identifier of a rating. (required)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRatingWithHttpInfo($node_id, $rating_id)
    {
        // verify the required parameter 'node_id' is set
        if ($node_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $node_id when calling deleteRating');
        }
        // verify the required parameter 'rating_id' is set
        if ($rating_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rating_id when calling deleteRating');
        }
        // parse inputs
        $resourcePath = "/nodes/{nodeId}/ratings/{ratingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($node_id !== null) {
            $resourcePath = str_replace(
                "{" . "nodeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($node_id),
                $resourcePath
            );
        }
        // path params
        if ($rating_id !== null) {
            $resourcePath = str_replace(
                "{" . "ratingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rating_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/nodes/{nodeId}/ratings/{ratingId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRating
     *
     * Get a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param string $rating_id The identifier of a rating. (required)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return \Alfresco\Model\RatingEntry
     */
    public function getRating($node_id, $rating_id, $fields = null)
    {
        list($response) = $this->getRatingWithHttpInfo($node_id, $rating_id, $fields);
        return $response;
    }

    /**
     * Operation getRatingWithHttpInfo
     *
     * Get a rating
     *
     * @param string $node_id The identifier of a node. (required)
     * @param string $rating_id The identifier of a rating. (required)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return array of \Alfresco\Model\RatingEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRatingWithHttpInfo($node_id, $rating_id, $fields = null)
    {
        // verify the required parameter 'node_id' is set
        if ($node_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $node_id when calling getRating');
        }
        // verify the required parameter 'rating_id' is set
        if ($rating_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rating_id when calling getRating');
        }
        // parse inputs
        $resourcePath = "/nodes/{nodeId}/ratings/{ratingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (is_array($fields)) {
            $fields = $this->apiClient->getSerializer()->serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($node_id !== null) {
            $resourcePath = str_replace(
                "{" . "nodeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($node_id),
                $resourcePath
            );
        }
        // path params
        if ($rating_id !== null) {
            $resourcePath = str_replace(
                "{" . "ratingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rating_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Alfresco\Model\RatingEntry',
                '/nodes/{nodeId}/ratings/{ratingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Alfresco\Model\RatingEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\RatingEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listRatings
     *
     * List ratings
     *
     * @param string $node_id The identifier of a node. (required)
     * @param int $skip_count The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. (optional, default to 0)
     * @param int $max_items The maximum number of items to return in the list.  If not supplied then the default value is 100. (optional, default to 100)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return \Alfresco\Model\RatingPaging
     */
    public function listRatings($node_id, $skip_count = '0', $max_items = '100', $fields = null)
    {
        list($response) = $this->listRatingsWithHttpInfo($node_id, $skip_count, $max_items, $fields);
        return $response;
    }

    /**
     * Operation listRatingsWithHttpInfo
     *
     * List ratings
     *
     * @param string $node_id The identifier of a node. (required)
     * @param int $skip_count The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. (optional, default to 0)
     * @param int $max_items The maximum number of items to return in the list.  If not supplied then the default value is 100. (optional, default to 100)
     * @param string[] $fields A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. (optional)
     * @throws \Alfresco\ApiException on non-2xx response
     * @return array of \Alfresco\Model\RatingPaging, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRatingsWithHttpInfo($node_id, $skip_count = '0', $max_items = '100', $fields = null)
    {
        // verify the required parameter 'node_id' is set
        if ($node_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $node_id when calling listRatings');
        }
        if (!is_null($skip_count) && ($skip_count < 0)) {
            throw new \InvalidArgumentException('invalid value for "$skip_count" when calling RatingsApi.listRatings, must be bigger than or equal to 0.');
        }

        if (!is_null($max_items) && ($max_items < 1)) {
            throw new \InvalidArgumentException('invalid value for "$max_items" when calling RatingsApi.listRatings, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/nodes/{nodeId}/ratings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($skip_count !== null) {
            $queryParams['skipCount'] = $this->apiClient->getSerializer()->toQueryValue($skip_count);
        }
        // query params
        if ($max_items !== null) {
            $queryParams['maxItems'] = $this->apiClient->getSerializer()->toQueryValue($max_items);
        }
        // query params
        if (is_array($fields)) {
            $fields = $this->apiClient->getSerializer()->serializeCollection($fields, 'csv', true);
        }
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($node_id !== null) {
            $resourcePath = str_replace(
                "{" . "nodeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($node_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Alfresco\Model\RatingPaging',
                '/nodes/{nodeId}/ratings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Alfresco\Model\RatingPaging', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\RatingPaging', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Alfresco\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
