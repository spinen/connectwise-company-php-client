<?php
/**
 * ContactCommunicationsApi
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

namespace Spinen\ConnectWise\Clients\Company\Api;

use \Spinen\ConnectWise\Clients\Company\ApiClient;
use \Spinen\ConnectWise\Clients\Company\ApiException;
use \Spinen\ConnectWise\Clients\Company\Configuration;
use \Spinen\ConnectWise\Clients\Company\ObjectSerializer;

/**
 * ContactCommunicationsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactCommunicationsApi
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
     * @return ContactCommunicationsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Company\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return void
     */
    public function companyContactsIdCommunicationsCommunicationIdDelete($id, $communication_id)
    {
        list($response) = $this->companyContactsIdCommunicationsCommunicationIdDeleteWithHttpInfo($id, $communication_id);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsCommunicationIdDeleteWithHttpInfo($id, $communication_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsCommunicationIdDelete');
        }
        // verify the required parameter 'communication_id' is set
        if ($communication_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $communication_id when calling companyContactsIdCommunicationsCommunicationIdDelete');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications/{communicationId}";
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
        // path params
        if ($communication_id !== null) {
            $resourcePath = str_replace(
                "{" . "communicationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($communication_id),
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
                '/company/contacts/{id}/communications/{communicationId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication
     */
    public function companyContactsIdCommunicationsCommunicationIdGet($id, $communication_id)
    {
        list($response) = $this->companyContactsIdCommunicationsCommunicationIdGetWithHttpInfo($id, $communication_id);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsCommunicationIdGetWithHttpInfo($id, $communication_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsCommunicationIdGet');
        }
        // verify the required parameter 'communication_id' is set
        if ($communication_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $communication_id when calling companyContactsIdCommunicationsCommunicationIdGet');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications/{communicationId}";
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
        // path params
        if ($communication_id !== null) {
            $resourcePath = str_replace(
                "{" . "communicationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($communication_id),
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
                '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication',
                '/company/contacts/{id}/communications/{communicationId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication
     */
    public function companyContactsIdCommunicationsCommunicationIdPatch($id, $communication_id, $operations)
    {
        list($response) = $this->companyContactsIdCommunicationsCommunicationIdPatchWithHttpInfo($id, $communication_id, $operations);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsCommunicationIdPatchWithHttpInfo($id, $communication_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsCommunicationIdPatch');
        }
        // verify the required parameter 'communication_id' is set
        if ($communication_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $communication_id when calling companyContactsIdCommunicationsCommunicationIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling companyContactsIdCommunicationsCommunicationIdPatch');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications/{communicationId}";
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
        // path params
        if ($communication_id !== null) {
            $resourcePath = str_replace(
                "{" . "communicationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($communication_id),
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
                '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication',
                '/company/contacts/{id}/communications/{communicationId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication $contact_communication  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication
     */
    public function companyContactsIdCommunicationsCommunicationIdPut($id, $communication_id, $contact_communication)
    {
        list($response) = $this->companyContactsIdCommunicationsCommunicationIdPutWithHttpInfo($id, $communication_id, $contact_communication);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsCommunicationIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $communication_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication $contact_communication  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsCommunicationIdPutWithHttpInfo($id, $communication_id, $contact_communication)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsCommunicationIdPut');
        }
        // verify the required parameter 'communication_id' is set
        if ($communication_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $communication_id when calling companyContactsIdCommunicationsCommunicationIdPut');
        }
        // verify the required parameter 'contact_communication' is set
        if ($contact_communication === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_communication when calling companyContactsIdCommunicationsCommunicationIdPut');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications/{communicationId}";
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
        // path params
        if ($communication_id !== null) {
            $resourcePath = str_replace(
                "{" . "communicationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($communication_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($contact_communication)) {
            $_tempBody = $contact_communication;
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
                '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication',
                '/company/contacts/{id}/communications/{communicationId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\Count
     */
    public function companyContactsIdCommunicationsCountGet($id, $conditions = null)
    {
        list($response) = $this->companyContactsIdCommunicationsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsCountGet');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications/count";
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
                '\Spinen\ConnectWise\Clients\Company\Model\Count',
                '/company/contacts/{id}/communications/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication[]
     */
    public function companyContactsIdCommunicationsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->companyContactsIdCommunicationsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsGet');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications";
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
                '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication[]',
                '/company/contacts/{id}/communications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation companyContactsIdCommunicationsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication $contact_communication  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication
     */
    public function companyContactsIdCommunicationsPost($id, $contact_communication)
    {
        list($response) = $this->companyContactsIdCommunicationsPostWithHttpInfo($id, $contact_communication);
        return $response;
    }

    /**
     * Operation companyContactsIdCommunicationsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication $contact_communication  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ContactCommunication, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyContactsIdCommunicationsPostWithHttpInfo($id, $contact_communication)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyContactsIdCommunicationsPost');
        }
        // verify the required parameter 'contact_communication' is set
        if ($contact_communication === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_communication when calling companyContactsIdCommunicationsPost');
        }
        // parse inputs
        $resourcePath = "/company/contacts/{id}/communications";
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
        if (isset($contact_communication)) {
            $_tempBody = $contact_communication;
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
                '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication',
                '/company/contacts/{id}/communications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ContactCommunication', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
