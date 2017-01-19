# Spinen\ConnectWise\Clients\Company\CompanyTypesApi
Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCompaniesTypesCountGet**](CompanyTypesApi.md#companyCompaniesTypesCountGet) | **GET** /company/companies/types/count | 
[**companyCompaniesTypesGet**](CompanyTypesApi.md#companyCompaniesTypesGet) | **GET** /company/companies/types | 
[**companyCompaniesTypesIdDelete**](CompanyTypesApi.md#companyCompaniesTypesIdDelete) | **DELETE** /company/companies/types/{id} | 
[**companyCompaniesTypesIdGet**](CompanyTypesApi.md#companyCompaniesTypesIdGet) | **GET** /company/companies/types/{id} | 
[**companyCompaniesTypesIdPatch**](CompanyTypesApi.md#companyCompaniesTypesIdPatch) | **PATCH** /company/companies/types/{id} | 
[**companyCompaniesTypesIdPut**](CompanyTypesApi.md#companyCompaniesTypesIdPut) | **PUT** /company/companies/types/{id} | 
[**companyCompaniesTypesPost**](CompanyTypesApi.md#companyCompaniesTypesPost) | **POST** /company/companies/types | 


# **companyCompaniesTypesCountGet**
> \Spinen\ConnectWise\Clients\Company\Model\Count companyCompaniesTypesCountGet($conditions)



Get Company Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->companyCompaniesTypesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesGet**
> \Spinen\ConnectWise\Clients\Company\Model\CompanyType[] companyCompaniesTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Company Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->companyCompaniesTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\CompanyType[]**](../Model/CompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesIdDelete**
> companyCompaniesTypesIdDelete($id)



Delete Company Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$id = 56; // int | 

try {
    $api_instance->companyCompaniesTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesIdGet**
> \Spinen\ConnectWise\Clients\Company\Model\CompanyType companyCompaniesTypesIdGet($id)



Get Company Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$id = 56; // int | 

try {
    $result = $api_instance->companyCompaniesTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/CompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesIdPatch**
> \Spinen\ConnectWise\Clients\Company\Model\CompanyType companyCompaniesTypesIdPatch($id, $operations)



Update Company Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] | 

try {
    $result = $api_instance->companyCompaniesTypesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/CompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesIdPut**
> \Spinen\ConnectWise\Clients\Company\Model\CompanyType companyCompaniesTypesIdPut($id, $company_type)



Replace Company Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$id = 56; // int | 
$company_type = new \Spinen\ConnectWise\Clients\Company\Model\CompanyType(); // \Spinen\ConnectWise\Clients\Company\Model\CompanyType | 

try {
    $result = $api_instance->companyCompaniesTypesIdPut($id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_type** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/\Spinen\ConnectWise\Clients\Company\Model\CompanyType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/CompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesTypesPost**
> \Spinen\ConnectWise\Clients\Company\Model\CompanyType companyCompaniesTypesPost($company_type)



Create Company Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTypesApi();
$company_type = new \Spinen\ConnectWise\Clients\Company\Model\CompanyType(); // \Spinen\ConnectWise\Clients\Company\Model\CompanyType | 

try {
    $result = $api_instance->companyCompaniesTypesPost($company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTypesApi->companyCompaniesTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_type** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/\Spinen\ConnectWise\Clients\Company\Model\CompanyType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\CompanyType**](../Model/CompanyType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
