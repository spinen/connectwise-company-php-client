# Spinen\ConnectWise\Clients\Company\TeamRolesApi
Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyTeamRolesCountGet**](TeamRolesApi.md#companyTeamRolesCountGet) | **GET** /company/teamRoles/count | 
[**companyTeamRolesGet**](TeamRolesApi.md#companyTeamRolesGet) | **GET** /company/teamRoles | 
[**companyTeamRolesIdDelete**](TeamRolesApi.md#companyTeamRolesIdDelete) | **DELETE** /company/teamRoles/{id} | 
[**companyTeamRolesIdGet**](TeamRolesApi.md#companyTeamRolesIdGet) | **GET** /company/teamRoles/{id} | 
[**companyTeamRolesIdPatch**](TeamRolesApi.md#companyTeamRolesIdPatch) | **PATCH** /company/teamRoles/{id} | 
[**companyTeamRolesIdPut**](TeamRolesApi.md#companyTeamRolesIdPut) | **PUT** /company/teamRoles/{id} | 
[**companyTeamRolesPost**](TeamRolesApi.md#companyTeamRolesPost) | **POST** /company/teamRoles | 


# **companyTeamRolesCountGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count companyTeamRolesCountGet($conditions)



Get Team Role Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->companyTeamRolesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **companyTeamRolesGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole[] companyTeamRolesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Team Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->companyTeamRolesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole[]**](../Model/TeamRole.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRolesIdDelete**
> companyTeamRolesIdDelete($id)



Delete Team Role By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$id = 56; // int | 

try {
    $api_instance->companyTeamRolesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **companyTeamRolesIdGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole companyTeamRolesIdGet($id)



Get Team Role By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$id = 56; // int | 

try {
    $result = $api_instance->companyTeamRolesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/TeamRole.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRolesIdPatch**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole companyTeamRolesIdPatch($id, $operations)



Update Team Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] | 

try {
    $result = $api_instance->companyTeamRolesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/TeamRole.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRolesIdPut**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole companyTeamRolesIdPut($id, $team_role)



Replace Team Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$id = 56; // int | 
$team_role = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole | 

try {
    $result = $api_instance->companyTeamRolesIdPut($id, $team_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **team_role** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/TeamRole.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyTeamRolesPost**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole companyTeamRolesPost($team_role)



Create Team Role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\TeamRolesApi();
$team_role = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole | 

try {
    $result = $api_instance->companyTeamRolesPost($team_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamRolesApi->companyTeamRolesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_role** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\TeamRole**](../Model/TeamRole.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
