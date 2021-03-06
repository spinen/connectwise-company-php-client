# Spinen\ConnectWise\Clients\Company\ContactNotesApi
Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyContactsIdNotesCountGet**](ContactNotesApi.md#companyContactsIdNotesCountGet) | **GET** /company/contacts/{id}/notes/count | 
[**companyContactsIdNotesGet**](ContactNotesApi.md#companyContactsIdNotesGet) | **GET** /company/contacts/{id}/notes | 
[**companyContactsIdNotesNoteIdDelete**](ContactNotesApi.md#companyContactsIdNotesNoteIdDelete) | **DELETE** /company/contacts/{id}/notes/{noteId} | 
[**companyContactsIdNotesNoteIdGet**](ContactNotesApi.md#companyContactsIdNotesNoteIdGet) | **GET** /company/contacts/{id}/notes/{noteId} | 
[**companyContactsIdNotesNoteIdPatch**](ContactNotesApi.md#companyContactsIdNotesNoteIdPatch) | **PATCH** /company/contacts/{id}/notes/{noteId} | 
[**companyContactsIdNotesNoteIdPut**](ContactNotesApi.md#companyContactsIdNotesNoteIdPut) | **PUT** /company/contacts/{id}/notes/{noteId} | 
[**companyContactsIdNotesPost**](ContactNotesApi.md#companyContactsIdNotesPost) | **POST** /company/contacts/{id}/notes | 


# **companyContactsIdNotesCountGet**
> \Spinen\ConnectWise\Clients\Company\Model\Count companyContactsIdNotesCountGet($id, $conditions)



Get Contact Notes Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->companyContactsIdNotesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesGet**
> \Spinen\ConnectWise\Clients\Company\Model\ContactNote[] companyContactsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Contact Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->companyContactsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\ContactNote[]**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesNoteIdDelete**
> companyContactsIdNotesNoteIdDelete($id, $note_id)



Delete Contact Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $api_instance->companyContactsIdNotesNoteIdDelete($id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesNoteIdGet**
> \Spinen\ConnectWise\Clients\Company\Model\ContactNote companyContactsIdNotesNoteIdGet($id, $note_id)



Get Contact Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $result = $api_instance->companyContactsIdNotesNoteIdGet($id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesNoteIdPatch**
> \Spinen\ConnectWise\Clients\Company\Model\ContactNote companyContactsIdNotesNoteIdPatch($id, $note_id, $operations)



Update Contact Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] | 

try {
    $result = $api_instance->companyContactsIdNotesNoteIdPatch($id, $note_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesNoteIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesNoteIdPut**
> \Spinen\ConnectWise\Clients\Company\Model\ContactNote companyContactsIdNotesNoteIdPut($id, $note_id, $contact_note)



Replace Contact Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$contact_note = new \Spinen\ConnectWise\Clients\Company\Model\ContactNote(); // \Spinen\ConnectWise\Clients\Company\Model\ContactNote | 

try {
    $result = $api_instance->companyContactsIdNotesNoteIdPut($id, $note_id, $contact_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **contact_note** | [**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/\Spinen\ConnectWise\Clients\Company\Model\ContactNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyContactsIdNotesPost**
> \Spinen\ConnectWise\Clients\Company\Model\ContactNote companyContactsIdNotesPost($id, $contact_note)



Create Contact Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\ContactNotesApi();
$id = 56; // int | 
$contact_note = new \Spinen\ConnectWise\Clients\Company\Model\ContactNote(); // \Spinen\ConnectWise\Clients\Company\Model\ContactNote | 

try {
    $result = $api_instance->companyContactsIdNotesPost($id, $contact_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactNotesApi->companyContactsIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **contact_note** | [**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/\Spinen\ConnectWise\Clients\Company\Model\ContactNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Model\ContactNote**](../Model/ContactNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

