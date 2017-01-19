<?php
/**
 * ConfigurationTypeQuestionsApi
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
 * ConfigurationTypeQuestionsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Company
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationTypeQuestionsApi
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
     * @return ConfigurationTypeQuestionsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Company\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsCountGet
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
    public function companyConfigurationsTypesIdQuestionsCountGet($id, $conditions = null)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsCountGetWithHttpInfo
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
    public function companyConfigurationsTypesIdQuestionsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsCountGet');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions/count";
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
                '/company/configurations/types/{id}/questions/count'
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
     * Operation companyConfigurationsTypesIdQuestionsGet
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
     * @return \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion[]
     */
    public function companyConfigurationsTypesIdQuestionsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsGet');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions";
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
                '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion[]',
                '/company/configurations/types/{id}/questions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion[]', $e->getResponseHeaders());
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
     * Operation companyConfigurationsTypesIdQuestionsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion $configuration_type_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion
     */
    public function companyConfigurationsTypesIdQuestionsPost($id, $configuration_type_question)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsPostWithHttpInfo($id, $configuration_type_question);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion $configuration_type_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsPostWithHttpInfo($id, $configuration_type_question)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsPost');
        }
        // verify the required parameter 'configuration_type_question' is set
        if ($configuration_type_question === null) {
            throw new \InvalidArgumentException('Missing the required parameter $configuration_type_question when calling companyConfigurationsTypesIdQuestionsPost');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions";
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
        if (isset($configuration_type_question)) {
            $_tempBody = $configuration_type_question;
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
                '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion',
                '/company/configurations/types/{id}/questions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $e->getResponseHeaders());
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
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return void
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdDelete($id, $question_id)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsQuestionIdDeleteWithHttpInfo($id, $question_id);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdDeleteWithHttpInfo($id, $question_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsQuestionIdDelete');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling companyConfigurationsTypesIdQuestionsQuestionIdDelete');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions/{questionId}";
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
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
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
                '/company/configurations/types/{id}/questions/{questionId}'
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
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdGet($id, $question_id)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsQuestionIdGetWithHttpInfo($id, $question_id);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdGetWithHttpInfo($id, $question_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsQuestionIdGet');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling companyConfigurationsTypesIdQuestionsQuestionIdGet');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions/{questionId}";
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
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
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
                '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion',
                '/company/configurations/types/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $e->getResponseHeaders());
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
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdPatch($id, $question_id, $operations)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsQuestionIdPatchWithHttpInfo($id, $question_id, $operations);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdPatchWithHttpInfo($id, $question_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsQuestionIdPatch');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling companyConfigurationsTypesIdQuestionsQuestionIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling companyConfigurationsTypesIdQuestionsQuestionIdPatch');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions/{questionId}";
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
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
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
                '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion',
                '/company/configurations/types/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $e->getResponseHeaders());
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
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion $configuration_type_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdPut($id, $question_id, $configuration_type_question)
    {
        list($response) = $this->companyConfigurationsTypesIdQuestionsQuestionIdPutWithHttpInfo($id, $question_id, $configuration_type_question);
        return $response;
    }

    /**
     * Operation companyConfigurationsTypesIdQuestionsQuestionIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $question_id  (required)
     * @param \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion $configuration_type_question  (required)
     * @throws \Spinen\ConnectWise\Clients\Company\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion, HTTP status code, HTTP response headers (array of strings)
     */
    public function companyConfigurationsTypesIdQuestionsQuestionIdPutWithHttpInfo($id, $question_id, $configuration_type_question)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling companyConfigurationsTypesIdQuestionsQuestionIdPut');
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $question_id when calling companyConfigurationsTypesIdQuestionsQuestionIdPut');
        }
        // verify the required parameter 'configuration_type_question' is set
        if ($configuration_type_question === null) {
            throw new \InvalidArgumentException('Missing the required parameter $configuration_type_question when calling companyConfigurationsTypesIdQuestionsQuestionIdPut');
        }
        // parse inputs
        $resourcePath = "/company/configurations/types/{id}/questions/{questionId}";
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
        if ($question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($question_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($configuration_type_question)) {
            $_tempBody = $configuration_type_question;
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
                '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion',
                '/company/configurations/types/{id}/questions/{questionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Company\Model\ConfigurationTypeQuestion', $e->getResponseHeaders());
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