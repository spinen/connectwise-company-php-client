# connectwise-company-php-client
ConnectWise Company API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 3.0.0-beta
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require spinen/connectwise-company-php-client
```

Or modify your `composer.json` file:

```json
{
    "require": {
        "spinen/connectwise-company-php-client": "^3.0.0-beta"
    }
}
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/connectwise-company-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Company\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Company\Api\CompaniesApi();
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->companyCompaniesCountGet($conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companyCompaniesCountGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompaniesApi* | [**companyCompaniesCountGet**](docs/Api/CompaniesApi.md#companycompaniescountget) | **GET** /company/companies/count | 
*CompaniesApi* | [**companyCompaniesGet**](docs/Api/CompaniesApi.md#companycompaniesget) | **GET** /company/companies | 
*CompaniesApi* | [**companyCompaniesIdDelete**](docs/Api/CompaniesApi.md#companycompaniesiddelete) | **DELETE** /company/companies/{id} | 
*CompaniesApi* | [**companyCompaniesIdGet**](docs/Api/CompaniesApi.md#companycompaniesidget) | **GET** /company/companies/{id} | 
*CompaniesApi* | [**companyCompaniesIdMergePost**](docs/Api/CompaniesApi.md#companycompaniesidmergepost) | **POST** /company/companies/{id}/merge | 
*CompaniesApi* | [**companyCompaniesIdPatch**](docs/Api/CompaniesApi.md#companycompaniesidpatch) | **PATCH** /company/companies/{id} | 
*CompaniesApi* | [**companyCompaniesIdPut**](docs/Api/CompaniesApi.md#companycompaniesidput) | **PUT** /company/companies/{id} | 
*CompaniesApi* | [**companyCompaniesPost**](docs/Api/CompaniesApi.md#companycompaniespost) | **POST** /company/companies | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsCountGet**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportscountget) | **GET** /company/companies/{id}/managementSummaryReports/count | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsGet**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportsget) | **GET** /company/companies/{id}/managementSummaryReports | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsPost**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportspost) | **POST** /company/companies/{id}/managementSummaryReports | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsReportIdDelete**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportsreportiddelete) | **DELETE** /company/companies/{id}/managementSummaryReports/{reportId} | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsReportIdGet**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportsreportidget) | **GET** /company/companies/{id}/managementSummaryReports/{reportId} | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsReportIdPatch**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportsreportidpatch) | **PATCH** /company/companies/{id}/managementSummaryReports/{reportId} | 
*CompanyManagementSummaryReportsApi* | [**companyCompaniesIdManagementSummaryReportsReportIdPut**](docs/Api/CompanyManagementSummaryReportsApi.md#companycompaniesidmanagementsummaryreportsreportidput) | **PUT** /company/companies/{id}/managementSummaryReports/{reportId} | 
*CompanyNotesApi* | [**companyCompaniesIdNotesCountGet**](docs/Api/CompanyNotesApi.md#companycompaniesidnotescountget) | **GET** /company/companies/{id}/notes/count | 
*CompanyNotesApi* | [**companyCompaniesIdNotesGet**](docs/Api/CompanyNotesApi.md#companycompaniesidnotesget) | **GET** /company/companies/{id}/notes | 
*CompanyNotesApi* | [**companyCompaniesIdNotesNoteIdDelete**](docs/Api/CompanyNotesApi.md#companycompaniesidnotesnoteiddelete) | **DELETE** /company/companies/{id}/notes/{noteId} | 
*CompanyNotesApi* | [**companyCompaniesIdNotesNoteIdGet**](docs/Api/CompanyNotesApi.md#companycompaniesidnotesnoteidget) | **GET** /company/companies/{id}/notes/{noteId} | 
*CompanyNotesApi* | [**companyCompaniesIdNotesNoteIdPatch**](docs/Api/CompanyNotesApi.md#companycompaniesidnotesnoteidpatch) | **PATCH** /company/companies/{id}/notes/{noteId} | 
*CompanyNotesApi* | [**companyCompaniesIdNotesNoteIdPut**](docs/Api/CompanyNotesApi.md#companycompaniesidnotesnoteidput) | **PUT** /company/companies/{id}/notes/{noteId} | 
*CompanyNotesApi* | [**companyCompaniesIdNotesPost**](docs/Api/CompanyNotesApi.md#companycompaniesidnotespost) | **POST** /company/companies/{id}/notes | 
*CompanySitesApi* | [**companyCompaniesIdSitesCountGet**](docs/Api/CompanySitesApi.md#companycompaniesidsitescountget) | **GET** /company/companies/{id}/sites/count | 
*CompanySitesApi* | [**companyCompaniesIdSitesGet**](docs/Api/CompanySitesApi.md#companycompaniesidsitesget) | **GET** /company/companies/{id}/sites | 
*CompanySitesApi* | [**companyCompaniesIdSitesPost**](docs/Api/CompanySitesApi.md#companycompaniesidsitespost) | **POST** /company/companies/{id}/sites | 
*CompanySitesApi* | [**companyCompaniesIdSitesSiteIdDelete**](docs/Api/CompanySitesApi.md#companycompaniesidsitessiteiddelete) | **DELETE** /company/companies/{id}/sites/{siteId} | 
*CompanySitesApi* | [**companyCompaniesIdSitesSiteIdGet**](docs/Api/CompanySitesApi.md#companycompaniesidsitessiteidget) | **GET** /company/companies/{id}/sites/{siteId} | 
*CompanySitesApi* | [**companyCompaniesIdSitesSiteIdPatch**](docs/Api/CompanySitesApi.md#companycompaniesidsitessiteidpatch) | **PATCH** /company/companies/{id}/sites/{siteId} | 
*CompanySitesApi* | [**companyCompaniesIdSitesSiteIdPut**](docs/Api/CompanySitesApi.md#companycompaniesidsitessiteidput) | **PUT** /company/companies/{id}/sites/{siteId} | 
*CompanyStatusesApi* | [**companyCompaniesStatusesCountGet**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusescountget) | **GET** /company/companies/statuses/count | 
*CompanyStatusesApi* | [**companyCompaniesStatusesGet**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusesget) | **GET** /company/companies/statuses | 
*CompanyStatusesApi* | [**companyCompaniesStatusesIdDelete**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusesiddelete) | **DELETE** /company/companies/statuses/{id} | 
*CompanyStatusesApi* | [**companyCompaniesStatusesIdGet**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusesidget) | **GET** /company/companies/statuses/{id} | 
*CompanyStatusesApi* | [**companyCompaniesStatusesIdPatch**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusesidpatch) | **PATCH** /company/companies/statuses/{id} | 
*CompanyStatusesApi* | [**companyCompaniesStatusesIdPut**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusesidput) | **PUT** /company/companies/statuses/{id} | 
*CompanyStatusesApi* | [**companyCompaniesStatusesPost**](docs/Api/CompanyStatusesApi.md#companycompaniesstatusespost) | **POST** /company/companies/statuses | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsCountGet**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamscountget) | **GET** /company/companies/{id}/teams/count | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsGet**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamsget) | **GET** /company/companies/{id}/teams | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsPost**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamspost) | **POST** /company/companies/{id}/teams | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsTeamIdDelete**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamsteamiddelete) | **DELETE** /company/companies/{id}/teams/{teamId} | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsTeamIdGet**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamsteamidget) | **GET** /company/companies/{id}/teams/{teamId} | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsTeamIdPatch**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamsteamidpatch) | **PATCH** /company/companies/{id}/teams/{teamId} | 
*CompanyTeamsApi* | [**companyCompaniesIdTeamsTeamIdPut**](docs/Api/CompanyTeamsApi.md#companycompaniesidteamsteamidput) | **PUT** /company/companies/{id}/teams/{teamId} | 
*CompanyTypesApi* | [**companyCompaniesTypesCountGet**](docs/Api/CompanyTypesApi.md#companycompaniestypescountget) | **GET** /company/companies/types/count | 
*CompanyTypesApi* | [**companyCompaniesTypesGet**](docs/Api/CompanyTypesApi.md#companycompaniestypesget) | **GET** /company/companies/types | 
*CompanyTypesApi* | [**companyCompaniesTypesIdDelete**](docs/Api/CompanyTypesApi.md#companycompaniestypesiddelete) | **DELETE** /company/companies/types/{id} | 
*CompanyTypesApi* | [**companyCompaniesTypesIdGet**](docs/Api/CompanyTypesApi.md#companycompaniestypesidget) | **GET** /company/companies/types/{id} | 
*CompanyTypesApi* | [**companyCompaniesTypesIdPatch**](docs/Api/CompanyTypesApi.md#companycompaniestypesidpatch) | **PATCH** /company/companies/types/{id} | 
*CompanyTypesApi* | [**companyCompaniesTypesIdPut**](docs/Api/CompanyTypesApi.md#companycompaniestypesidput) | **PUT** /company/companies/types/{id} | 
*CompanyTypesApi* | [**companyCompaniesTypesPost**](docs/Api/CompanyTypesApi.md#companycompaniestypespost) | **POST** /company/companies/types | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesCountGet**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusescountget) | **GET** /company/configurations/statuses/count | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesGet**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusesget) | **GET** /company/configurations/statuses | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesIdDelete**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusesiddelete) | **DELETE** /company/configurations/statuses/{id} | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesIdGet**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusesidget) | **GET** /company/configurations/statuses/{id} | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesIdPatch**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusesidpatch) | **PATCH** /company/configurations/statuses/{id} | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesIdPut**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusesidput) | **PUT** /company/configurations/statuses/{id} | 
*ConfigurationStatusesApi* | [**companyConfigurationsStatusesPost**](docs/Api/ConfigurationStatusesApi.md#companyconfigurationsstatusespost) | **POST** /company/configurations/statuses | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsCountGet**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionscountget) | **GET** /company/configurations/types/{id}/questions/count | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsGet**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionsget) | **GET** /company/configurations/types/{id}/questions | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsPost**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionspost) | **POST** /company/configurations/types/{id}/questions | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsQuestionIdDelete**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionsquestioniddelete) | **DELETE** /company/configurations/types/{id}/questions/{questionId} | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsQuestionIdGet**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionsquestionidget) | **GET** /company/configurations/types/{id}/questions/{questionId} | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsQuestionIdPatch**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionsquestionidpatch) | **PATCH** /company/configurations/types/{id}/questions/{questionId} | 
*ConfigurationTypeQuestionsApi* | [**companyConfigurationsTypesIdQuestionsQuestionIdPut**](docs/Api/ConfigurationTypeQuestionsApi.md#companyconfigurationstypesidquestionsquestionidput) | **PUT** /company/configurations/types/{id}/questions/{questionId} | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesCountGet**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypescountget) | **GET** /company/configurations/types/count | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesGet**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypesget) | **GET** /company/configurations/types | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesIdDelete**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypesiddelete) | **DELETE** /company/configurations/types/{id} | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesIdGet**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypesidget) | **GET** /company/configurations/types/{id} | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesIdPatch**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypesidpatch) | **PATCH** /company/configurations/types/{id} | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesIdPut**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypesidput) | **PUT** /company/configurations/types/{id} | 
*ConfigurationTypesApi* | [**companyConfigurationsTypesPost**](docs/Api/ConfigurationTypesApi.md#companyconfigurationstypespost) | **POST** /company/configurations/types | 
*ConfigurationsApi* | [**companyConfigurationsCountGet**](docs/Api/ConfigurationsApi.md#companyconfigurationscountget) | **GET** /company/configurations/count | 
*ConfigurationsApi* | [**companyConfigurationsGet**](docs/Api/ConfigurationsApi.md#companyconfigurationsget) | **GET** /company/configurations | 
*ConfigurationsApi* | [**companyConfigurationsIdDelete**](docs/Api/ConfigurationsApi.md#companyconfigurationsiddelete) | **DELETE** /company/configurations/{id} | 
*ConfigurationsApi* | [**companyConfigurationsIdGet**](docs/Api/ConfigurationsApi.md#companyconfigurationsidget) | **GET** /company/configurations/{id} | 
*ConfigurationsApi* | [**companyConfigurationsIdPatch**](docs/Api/ConfigurationsApi.md#companyconfigurationsidpatch) | **PATCH** /company/configurations/{id} | 
*ConfigurationsApi* | [**companyConfigurationsIdPut**](docs/Api/ConfigurationsApi.md#companyconfigurationsidput) | **PUT** /company/configurations/{id} | 
*ConfigurationsApi* | [**companyConfigurationsPost**](docs/Api/ConfigurationsApi.md#companyconfigurationspost) | **POST** /company/configurations | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsCommunicationIdDelete**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationscommunicationiddelete) | **DELETE** /company/contacts/{id}/communications/{communicationId} | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsCommunicationIdGet**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationscommunicationidget) | **GET** /company/contacts/{id}/communications/{communicationId} | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsCommunicationIdPatch**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationscommunicationidpatch) | **PATCH** /company/contacts/{id}/communications/{communicationId} | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsCommunicationIdPut**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationscommunicationidput) | **PUT** /company/contacts/{id}/communications/{communicationId} | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsCountGet**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationscountget) | **GET** /company/contacts/{id}/communications/count | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsGet**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationsget) | **GET** /company/contacts/{id}/communications | 
*ContactCommunicationsApi* | [**companyContactsIdCommunicationsPost**](docs/Api/ContactCommunicationsApi.md#companycontactsidcommunicationspost) | **POST** /company/contacts/{id}/communications | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsCountGet**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentscountget) | **GET** /company/contacts/departments/count | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsGet**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentsget) | **GET** /company/contacts/departments | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsIdDelete**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentsiddelete) | **DELETE** /company/contacts/departments/{id} | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsIdGet**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentsidget) | **GET** /company/contacts/departments/{id} | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsIdPatch**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentsidpatch) | **PATCH** /company/contacts/departments/{id} | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsIdPut**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentsidput) | **PUT** /company/contacts/departments/{id} | 
*ContactDepartmentsApi* | [**companyContactsDepartmentsPost**](docs/Api/ContactDepartmentsApi.md#companycontactsdepartmentspost) | **POST** /company/contacts/departments | 
*ContactNotesApi* | [**companyContactsIdNotesCountGet**](docs/Api/ContactNotesApi.md#companycontactsidnotescountget) | **GET** /company/contacts/{id}/notes/count | 
*ContactNotesApi* | [**companyContactsIdNotesGet**](docs/Api/ContactNotesApi.md#companycontactsidnotesget) | **GET** /company/contacts/{id}/notes | 
*ContactNotesApi* | [**companyContactsIdNotesNoteIdDelete**](docs/Api/ContactNotesApi.md#companycontactsidnotesnoteiddelete) | **DELETE** /company/contacts/{id}/notes/{noteId} | 
*ContactNotesApi* | [**companyContactsIdNotesNoteIdGet**](docs/Api/ContactNotesApi.md#companycontactsidnotesnoteidget) | **GET** /company/contacts/{id}/notes/{noteId} | 
*ContactNotesApi* | [**companyContactsIdNotesNoteIdPatch**](docs/Api/ContactNotesApi.md#companycontactsidnotesnoteidpatch) | **PATCH** /company/contacts/{id}/notes/{noteId} | 
*ContactNotesApi* | [**companyContactsIdNotesNoteIdPut**](docs/Api/ContactNotesApi.md#companycontactsidnotesnoteidput) | **PUT** /company/contacts/{id}/notes/{noteId} | 
*ContactNotesApi* | [**companyContactsIdNotesPost**](docs/Api/ContactNotesApi.md#companycontactsidnotespost) | **POST** /company/contacts/{id}/notes | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsCountGet**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipscountget) | **GET** /company/contacts/relationships/count | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsGet**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipsget) | **GET** /company/contacts/relationships | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsIdDelete**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipsiddelete) | **DELETE** /company/contacts/relationships/{id} | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsIdGet**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipsidget) | **GET** /company/contacts/relationships/{id} | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsIdPatch**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipsidpatch) | **PATCH** /company/contacts/relationships/{id} | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsIdPut**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipsidput) | **PUT** /company/contacts/relationships/{id} | 
*ContactRelationshipsApi* | [**companyContactsRelationshipsPost**](docs/Api/ContactRelationshipsApi.md#companycontactsrelationshipspost) | **POST** /company/contacts/relationships | 
*ContactTracksApi* | [**companyContactsIdTracksCountGet**](docs/Api/ContactTracksApi.md#companycontactsidtrackscountget) | **GET** /company/contacts/{id}/tracks/count | 
*ContactTracksApi* | [**companyContactsIdTracksGet**](docs/Api/ContactTracksApi.md#companycontactsidtracksget) | **GET** /company/contacts/{id}/tracks | 
*ContactTracksApi* | [**companyContactsIdTracksPost**](docs/Api/ContactTracksApi.md#companycontactsidtrackspost) | **POST** /company/contacts/{id}/tracks | 
*ContactTracksApi* | [**companyContactsIdTracksTrackIdDelete**](docs/Api/ContactTracksApi.md#companycontactsidtrackstrackiddelete) | **DELETE** /company/contacts/{id}/tracks/{trackId} | 
*ContactTracksApi* | [**companyContactsIdTracksTrackIdGet**](docs/Api/ContactTracksApi.md#companycontactsidtrackstrackidget) | **GET** /company/contacts/{id}/tracks/{trackId} | 
*ContactTypesApi* | [**companyContactsTypesCountGet**](docs/Api/ContactTypesApi.md#companycontactstypescountget) | **GET** /company/contacts/types/count | 
*ContactTypesApi* | [**companyContactsTypesGet**](docs/Api/ContactTypesApi.md#companycontactstypesget) | **GET** /company/contacts/types | 
*ContactTypesApi* | [**companyContactsTypesIdDelete**](docs/Api/ContactTypesApi.md#companycontactstypesiddelete) | **DELETE** /company/contacts/types/{id} | 
*ContactTypesApi* | [**companyContactsTypesIdGet**](docs/Api/ContactTypesApi.md#companycontactstypesidget) | **GET** /company/contacts/types/{id} | 
*ContactTypesApi* | [**companyContactsTypesIdPatch**](docs/Api/ContactTypesApi.md#companycontactstypesidpatch) | **PATCH** /company/contacts/types/{id} | 
*ContactTypesApi* | [**companyContactsTypesIdPut**](docs/Api/ContactTypesApi.md#companycontactstypesidput) | **PUT** /company/contacts/types/{id} | 
*ContactTypesApi* | [**companyContactsTypesPost**](docs/Api/ContactTypesApi.md#companycontactstypespost) | **POST** /company/contacts/types | 
*ContactsApi* | [**companyContactsCountGet**](docs/Api/ContactsApi.md#companycontactscountget) | **GET** /company/contacts/count | 
*ContactsApi* | [**companyContactsGet**](docs/Api/ContactsApi.md#companycontactsget) | **GET** /company/contacts | 
*ContactsApi* | [**companyContactsIdDelete**](docs/Api/ContactsApi.md#companycontactsiddelete) | **DELETE** /company/contacts/{id} | 
*ContactsApi* | [**companyContactsIdGet**](docs/Api/ContactsApi.md#companycontactsidget) | **GET** /company/contacts/{id} | 
*ContactsApi* | [**companyContactsIdImageGet**](docs/Api/ContactsApi.md#companycontactsidimageget) | **GET** /company/contacts/{id}/image | 
*ContactsApi* | [**companyContactsIdPatch**](docs/Api/ContactsApi.md#companycontactsidpatch) | **PATCH** /company/contacts/{id} | 
*ContactsApi* | [**companyContactsIdPortalSecurityGet**](docs/Api/ContactsApi.md#companycontactsidportalsecurityget) | **GET** /company/contacts/{id}/portalSecurity | 
*ContactsApi* | [**companyContactsIdPut**](docs/Api/ContactsApi.md#companycontactsidput) | **PUT** /company/contacts/{id} | 
*ContactsApi* | [**companyContactsPost**](docs/Api/ContactsApi.md#companycontactspost) | **POST** /company/contacts | 
*ContactsApi* | [**companyContactsRequestPasswordPost**](docs/Api/ContactsApi.md#companycontactsrequestpasswordpost) | **POST** /company/contacts/requestPassword | 
*ContactsApi* | [**companyContactsValidatePortalCredentialsPost**](docs/Api/ContactsApi.md#companycontactsvalidateportalcredentialspost) | **POST** /company/contacts/validatePortalCredentials | 


## Documentation For Models

 - [AgreementReference](docs/Model/AgreementReference.md)
 - [BillingDeliveryReference](docs/Model/BillingDeliveryReference.md)
 - [BillingTermsReference](docs/Model/BillingTermsReference.md)
 - [CalendarReference](docs/Model/CalendarReference.md)
 - [CommunicationTypeReference](docs/Model/CommunicationTypeReference.md)
 - [Company](docs/Model/Company.md)
 - [CompanyManagementSummary](docs/Model/CompanyManagementSummary.md)
 - [CompanyMerge](docs/Model/CompanyMerge.md)
 - [CompanyNote](docs/Model/CompanyNote.md)
 - [CompanyReference](docs/Model/CompanyReference.md)
 - [CompanySite](docs/Model/CompanySite.md)
 - [CompanyStatus](docs/Model/CompanyStatus.md)
 - [CompanyStatusReference](docs/Model/CompanyStatusReference.md)
 - [CompanyTeam](docs/Model/CompanyTeam.md)
 - [CompanyType](docs/Model/CompanyType.md)
 - [CompanyTypeReference](docs/Model/CompanyTypeReference.md)
 - [Configuration](docs/Model/Configuration.md)
 - [ConfigurationQuestion](docs/Model/ConfigurationQuestion.md)
 - [ConfigurationStatus](docs/Model/ConfigurationStatus.md)
 - [ConfigurationStatusReference](docs/Model/ConfigurationStatusReference.md)
 - [ConfigurationType](docs/Model/ConfigurationType.md)
 - [ConfigurationTypeQuestion](docs/Model/ConfigurationTypeQuestion.md)
 - [ConfigurationTypeReference](docs/Model/ConfigurationTypeReference.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactCommunication](docs/Model/ContactCommunication.md)
 - [ContactCommunicationItem](docs/Model/ContactCommunicationItem.md)
 - [ContactDepartment](docs/Model/ContactDepartment.md)
 - [ContactDepartmentReference](docs/Model/ContactDepartmentReference.md)
 - [ContactNote](docs/Model/ContactNote.md)
 - [ContactReference](docs/Model/ContactReference.md)
 - [ContactRelationship](docs/Model/ContactRelationship.md)
 - [ContactType](docs/Model/ContactType.md)
 - [ContactTypeReference](docs/Model/ContactTypeReference.md)
 - [Count](docs/Model/Count.md)
 - [CountryReference](docs/Model/CountryReference.md)
 - [CurrencyReference](docs/Model/CurrencyReference.md)
 - [CustomFieldValue](docs/Model/CustomFieldValue.md)
 - [EntityTypeReference](docs/Model/EntityTypeReference.md)
 - [Error](docs/Model/Error.md)
 - [Guid](docs/Model/Guid.md)
 - [InvoiceTemplateReference](docs/Model/InvoiceTemplateReference.md)
 - [ManagementSolutionReference](docs/Model/ManagementSolutionReference.md)
 - [ManufacturerReference](docs/Model/ManufacturerReference.md)
 - [MemberReference](docs/Model/MemberReference.md)
 - [Metadata](docs/Model/Metadata.md)
 - [NoteTypeReference](docs/Model/NoteTypeReference.md)
 - [OwnershipTypeReference](docs/Model/OwnershipTypeReference.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [PortalSecurity](docs/Model/PortalSecurity.md)
 - [PricingScheduleReference](docs/Model/PricingScheduleReference.md)
 - [RelationshipReference](docs/Model/RelationshipReference.md)
 - [RequestPasswordRequest](docs/Model/RequestPasswordRequest.md)
 - [SLAReference](docs/Model/SLAReference.md)
 - [SicCodeReference](docs/Model/SicCodeReference.md)
 - [SiteReference](docs/Model/SiteReference.md)
 - [SuccessResponse](docs/Model/SuccessResponse.md)
 - [TaxCodeReference](docs/Model/TaxCodeReference.md)
 - [TeamRoleReference](docs/Model/TeamRoleReference.md)
 - [TimeZoneReference](docs/Model/TimeZoneReference.md)
 - [Track](docs/Model/Track.md)
 - [TrackReference](docs/Model/TrackReference.md)
 - [ValidatePortalRequest](docs/Model/ValidatePortalRequest.md)
 - [ValidatePortalResponse](docs/Model/ValidatePortalResponse.md)
 - [ValidationError](docs/Model/ValidationError.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author

platform@connectwise.com

