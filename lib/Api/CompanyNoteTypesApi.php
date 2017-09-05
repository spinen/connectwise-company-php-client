<?php
/**
 * CompanyNoteTypesApi
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
 * CompanyNoteTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyNoteTypesApi
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
     * @return CompanyNoteTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Company\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation companyNoteTypesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count
     */
    public function companyNoteTypesCountGet($conditions = null)
    {
        list($response) = $this->companyNoteTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation companyNoteTypesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/company/noteTypes/count";
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
                '/company/noteTypes/count'
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
     * Operation companyNoteTypesGet
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
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType[]
     */
    public function companyNoteTypesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->companyNoteTypesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation companyNoteTypesGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/company/noteTypes";
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType[]',
                '/company/noteTypes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType[]', $e->getResponseHeaders());
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
     * Operation companyNoteTypesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return void
     */
    public function companyNoteTypesIdDelete($id)
    {
        list($response) = $this->companyNoteTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation companyNoteTypesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyNoteTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/company/noteTypes/{id}";
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
                '/company/noteTypes/{id}'
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
     * Operation companyNoteTypesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType
     */
    public function companyNoteTypesIdGet($id)
    {
        list($response) = $this->companyNoteTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation companyNoteTypesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyNoteTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/company/noteTypes/{id}";
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType',
                '/company/noteTypes/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $e->getResponseHeaders());
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
     * Operation companyNoteTypesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType
     */
    public function companyNoteTypesIdPatch($id, $operations)
    {
        list($response) = $this->companyNoteTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation companyNoteTypesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyNoteTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling companyNoteTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/company/noteTypes/{id}";
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType',
                '/company/noteTypes/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $e->getResponseHeaders());
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
     * Operation companyNoteTypesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType $note_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType
     */
    public function companyNoteTypesIdPut($id, $note_type)
    {
        list($response) = $this->companyNoteTypesIdPutWithHttpInfo($id, $note_type);
        return $response;
    }

    /**
     * Operation companyNoteTypesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType $note_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesIdPutWithHttpInfo($id, $note_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyNoteTypesIdPut');
        }
        // verify the required parameter 'note_type' is set
        if ($note_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_type when calling companyNoteTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/company/noteTypes/{id}";
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
        if (isset($note_type)) {
            $_tempBody = $note_type;
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType',
                '/company/noteTypes/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $e->getResponseHeaders());
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
     * Operation companyNoteTypesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType $note_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType
     */
    public function companyNoteTypesPost($note_type)
    {
        list($response) = $this->companyNoteTypesPostWithHttpInfo($note_type);
        return $response;
    }

    /**
     * Operation companyNoteTypesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType $note_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyNoteTypesPostWithHttpInfo($note_type)
    {
        // verify the required parameter 'note_type' is set
        if ($note_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_type when calling companyNoteTypesPost');
        }
        // parse inputs
        $resourcePath = "/company/noteTypes";
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
        if (isset($note_type)) {
            $_tempBody = $note_type;
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
                '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType',
                '/company/noteTypes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\NoteType', $e->getResponseHeaders());
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
