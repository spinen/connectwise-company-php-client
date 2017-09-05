<?php
/**
 * ConfigurationTypesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Company API
 *
 * ConnectWise Company API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Api;

use \Spinen\ConnectWise\Clients\Company\ApiClient;
use \Spinen\ConnectWise\Clients\Company\ApiException;
use \Spinen\ConnectWise\Clients\Company\Configuration;
use \Spinen\ConnectWise\Clients\Company\ObjectSerializer;

/**
 * ConfigurationTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationTypesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Company\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Company\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Company\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Company\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Company\ApiClient $apiClient set the API client
     *
     * @return ConfigurationTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Company\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation companyConfigurationsTypesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count
     */
    public function companyConfigurationsTypesCountGet($conditions = null)
    {
        list($response) = $this->companyConfigurationsTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/company/configurations/types/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count',
                '/company/configurations/types/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType[]
     */
    public function companyConfigurationsTypesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->companyConfigurationsTypesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/company/configurations/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType[]',
                '/company/configurations/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return void
     */
    public function companyConfigurationsTypesIdDelete($id)
    {
        list($response) = $this->companyConfigurationsTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '/company/configurations/types/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType
     */
    public function companyConfigurationsTypesIdGet($id)
    {
        list($response) = $this->companyConfigurationsTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType',
                '/company/configurations/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType
     */
    public function companyConfigurationsTypesIdPatch($id, $operations)
    {
        list($response) = $this->companyConfigurationsTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling companyConfigurationsTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType',
                '/company/configurations/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType $configuration_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType
     */
    public function companyConfigurationsTypesIdPut($id, $configuration_type)
    {
        list($response) = $this->companyConfigurationsTypesIdPutWithHttpInfo($id, $configuration_type);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType $configuration_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdPutWithHttpInfo($id, $configuration_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdPut');
        }
        // verify the required parameter 'configuration_type' is set
        if ($configuration_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $configuration_type when calling companyConfigurationsTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($configuration_type)) {
            $_tempBody = $configuration_type;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType',
                '/company/configurations/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyConfigurationsTypesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType $configuration_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType
     */
    public function companyConfigurationsTypesPost($configuration_type)
    {
        list($response) = $this->companyConfigurationsTypesPostWithHttpInfo($configuration_type);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType $configuration_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesPostWithHttpInfo($configuration_type)
    {
        // verify the required parameter 'configuration_type' is set
        if ($configuration_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $configuration_type when calling companyConfigurationsTypesPost');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($configuration_type)) {
            $_tempBody = $configuration_type;
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType',
                '/company/configurations/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ConfigurationType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
