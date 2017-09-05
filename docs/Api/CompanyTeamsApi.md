# Spinen\ConnectWise\Clients\Company\CompanyTeamsApi
Spinen&#39;s PHP ConnectWise Client for Company API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCompaniesIdTeamsCountGet**](CompanyTeamsApi.md#companyCompaniesIdTeamsCountGet) | **GET** /company/companies/{id}/teams/count | 
[**companyCompaniesIdTeamsGet**](CompanyTeamsApi.md#companyCompaniesIdTeamsGet) | **GET** /company/companies/{id}/teams | 
[**companyCompaniesIdTeamsPost**](CompanyTeamsApi.md#companyCompaniesIdTeamsPost) | **POST** /company/companies/{id}/teams | 
[**companyCompaniesIdTeamsTeamIdDelete**](CompanyTeamsApi.md#companyCompaniesIdTeamsTeamIdDelete) | **DELETE** /company/companies/{id}/teams/{teamId} | 
[**companyCompaniesIdTeamsTeamIdGet**](CompanyTeamsApi.md#companyCompaniesIdTeamsTeamIdGet) | **GET** /company/companies/{id}/teams/{teamId} | 
[**companyCompaniesIdTeamsTeamIdPatch**](CompanyTeamsApi.md#companyCompaniesIdTeamsTeamIdPatch) | **PATCH** /company/companies/{id}/teams/{teamId} | 
[**companyCompaniesIdTeamsTeamIdPut**](CompanyTeamsApi.md#companyCompaniesIdTeamsTeamIdPut) | **PUT** /company/companies/{id}/teams/{teamId} | 


# **companyCompaniesIdTeamsCountGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count companyCompaniesIdTeamsCountGet($id, $conditions)



Get Company Teams Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->companyCompaniesIdTeamsCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam[] companyCompaniesIdTeamsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Company Teams

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->companyCompaniesIdTeamsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam[]**](../Model/CompanyTeam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsPost**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam companyCompaniesIdTeamsPost($id, $company_team)



Create Company Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$company_team = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam | 

try {
    $result = $api_instance->companyCompaniesIdTeamsPost($id, $company_team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_team** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/CompanyTeam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsTeamIdDelete**
> companyCompaniesIdTeamsTeamIdDelete($id, $team_id)



Delete Company Team By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$team_id = 56; // int | 

try {
    $api_instance->companyCompaniesIdTeamsTeamIdDelete($id, $team_id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsTeamIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **team_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsTeamIdGet**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam companyCompaniesIdTeamsTeamIdGet($id, $team_id)



Get Company Team By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$team_id = 56; // int | 

try {
    $result = $api_instance->companyCompaniesIdTeamsTeamIdGet($id, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsTeamIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **team_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/CompanyTeam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsTeamIdPatch**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam companyCompaniesIdTeamsTeamIdPatch($id, $team_id, $operations)



Update Company Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$team_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[] | 

try {
    $result = $api_instance->companyCompaniesIdTeamsTeamIdPatch($id, $team_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsTeamIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **team_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/CompanyTeam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCompaniesIdTeamsTeamIdPut**
> \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam companyCompaniesIdTeamsTeamIdPut($id, $team_id, $company_team)



Replace Company Team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompanyTeamsApi();
$id = 56; // int | 
$team_id = 56; // int | 
$company_team = new \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam(); // \Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam | 

try {
    $result = $api_instance->companyCompaniesIdTeamsTeamIdPut($id, $team_id, $company_team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyTeamsApi->companyCompaniesIdTeamsTeamIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **team_id** | **int**|  |
 **company_team** | [**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Company\Spinen\ConnectWise\Clients\Company\Model\CompanyTeam**](../Model/CompanyTeam.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
