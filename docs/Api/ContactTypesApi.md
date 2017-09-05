# Spinen\ConnectWise\Clients\Company\ContactTypesApi
Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyContactsTypesCountGet**](ContactTypesApi.md#companyContactsTypesCountGet) | **GET** /company/contacts/types/count | 
[**companyContactsTypesGet**](ContactTypesApi.md#companyContactsTypesGet) | **GET** /company/contacts/types | 
[**companyContactsTypesIdDelete**](ContactTypesApi.md#companyContactsTypesIdDelete) | **DELETE** /company/contacts/types/{id} | 
[**companyContactsTypesIdGet**](ContactTypesApi.md#companyContactsTypesIdGet) | **GET** /company/contacts/types/{id} | 
[**companyContactsTypesIdPatch**](ContactTypesApi.md#companyContactsTypesIdPatch) | **PATCH** /company/contacts/types/{id} | 
[**companyContactsTypesIdPut**](ContactTypesApi.md#companyContactsTypesIdPut) | **PUT** /company/contacts/types/{id} | 
[**companyContactsTypesPost**](ContactTypesApi.md#companyContactsTypesPost) | **POST** /company/contacts/types | 


# **companyContactsTypesCountGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count companyContactsTypesCountGet($conditions)



Get Contact Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->companyContactsTypesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsTypesGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType[] companyContactsTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Contact Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->companyContactsTypesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType[]**](../Model/ContactType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsTypesIdDelete**
> companyContactsTypesIdDelete($id)



Delete Contact Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$id = 56; // int | 

try {
    $api_instance->companyContactsTypesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **companyContactsTypesIdGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType companyContactsTypesIdGet($id)



Get Contact Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$id = 56; // int | 

try {
    $result = $api_instance->companyContactsTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/ContactType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsTypesIdPatch**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType companyContactsTypesIdPatch($id, $operations)



Update Contact Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] | 

try {
    $result = $api_instance->companyContactsTypesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/ContactType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsTypesIdPut**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType companyContactsTypesIdPut($id, $contact_type)



Replace Contact Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$id = 56; // int | 
$contact_type = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType | 

try {
    $result = $api_instance->companyContactsTypesIdPut($id, $contact_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **contact_type** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/ContactType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsTypesPost**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType companyContactsTypesPost($contact_type)



Create Contact Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactTypesApi();
$contact_type = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType | 

try {
    $result = $api_instance->companyContactsTypesPost($contact_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactTypesApi->companyContactsTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_type** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\ContactType**](../Model/ContactType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
