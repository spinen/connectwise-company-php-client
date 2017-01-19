# Company

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**identifier** | **string** |  | 
**name** | **string** |  | 
**status** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyStatusReference**](CompanyStatusReference.md) |  | 
**type** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyTypeReference**](CompanyTypeReference.md) |  | 
**address_line1** | **string** | At least one address field is required -- addressLine1, addressLine2, city, state, and/or zip | [optional] 
**address_line2** | **string** | At least one address field is required -- addressLine1, addressLine2, city, state, and/or zip | [optional] 
**city** | **string** | At least one address field is required -- addressLine1, addressLine2, city, state, and/or zip | [optional] 
**state** | **string** | At least one address field is required -- addressLine1, addressLine2, city, state, and/or zip | [optional] 
**zip** | **string** | At least one address field is required -- addressLine1, addressLine2, city, state, and/or zip | [optional] 
**country** | [**\Spinen\ConnectWise\Clients\Company\Model\CountryReference**](CountryReference.md) |  | [optional] 
**phone_number** | **string** |  | [optional] 
**fax_number** | **string** |  | [optional] 
**website** | **string** |  | [optional] 
**territory_id** | **int** |  | [optional] 
**market_id** | **int** |  | [optional] 
**account_number** | **string** |  | [optional] 
**default_contact** | [**\Spinen\ConnectWise\Clients\Company\Model\ContactReference**](ContactReference.md) |  | [optional] 
**date_acquired** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sic_code** | [**\Spinen\ConnectWise\Clients\Company\Model\SicCodeReference**](SicCodeReference.md) |  | [optional] 
**parent_company** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**annual_revenue** | **double** |  | [optional] 
**number_of_employees** | **int** |  | [optional] 
**ownership_type** | [**\Spinen\ConnectWise\Clients\Company\Model\OwnershipTypeReference**](OwnershipTypeReference.md) |  | [optional] 
**time_zone** | [**\Spinen\ConnectWise\Clients\Company\Model\TimeZoneReference**](TimeZoneReference.md) |  | [optional] 
**lead_source** | **string** |  | [optional] 
**lead_flag** | **bool** |  | [optional] 
**unsubscribe_flag** | **bool** |  | [optional] 
**calendar_id** | **int** |  | [optional] 
**user_defined_field1** | **string** |  | [optional] 
**user_defined_field2** | **string** |  | [optional] 
**user_defined_field3** | **string** |  | [optional] 
**user_defined_field4** | **string** |  | [optional] 
**user_defined_field5** | **string** |  | [optional] 
**user_defined_field6** | **string** |  | [optional] 
**user_defined_field7** | **string** |  | [optional] 
**user_defined_field8** | **string** |  | [optional] 
**user_defined_field9** | **string** |  | [optional] 
**user_defined_field10** | **string** |  | [optional] 
**vendor_identifier** | **string** |  | [optional] 
**tax_identifier** | **string** |  | [optional] 
**tax_code** | [**\Spinen\ConnectWise\Clients\Company\Model\TaxCodeReference**](TaxCodeReference.md) | New companies will be created with the default tax code unless otherwise specified. | [optional] 
**billing_terms** | [**\Spinen\ConnectWise\Clients\Company\Model\BillingTermsReference**](BillingTermsReference.md) |  | [optional] 
**invoice_template** | [**\Spinen\ConnectWise\Clients\Company\Model\InvoiceTemplateReference**](InvoiceTemplateReference.md) |  | [optional] 
**pricing_schedule** | [**\Spinen\ConnectWise\Clients\Company\Model\PricingScheduleReference**](PricingScheduleReference.md) |  | [optional] 
**company_entity_type** | [**\Spinen\ConnectWise\Clients\Company\Model\EntityTypeReference**](EntityTypeReference.md) | Based on CompanyEntityType Report | [optional] 
**bill_to_company** | [**\Spinen\ConnectWise\Clients\Company\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**billing_site** | [**\Spinen\ConnectWise\Clients\Company\Model\SiteReference**](SiteReference.md) |  | [optional] 
**billing_contact** | [**\Spinen\ConnectWise\Clients\Company\Model\ContactReference**](ContactReference.md) |  | [optional] 
**invoice_delivery_method** | [**\Spinen\ConnectWise\Clients\Company\Model\BillingDeliveryReference**](BillingDeliveryReference.md) |  | [optional] 
**invoice_to_email_address** | **string** |  | [optional] 
**invoice_cc_email_address** | **string** |  | [optional] 
**deleted_flag** | **bool** |  | [optional] 
**date_deleted** | [**\DateTime**](\DateTime.md) |  | [optional] 
**deleted_by** | **string** |  | [optional] 
**mobile_guid** | [**\Spinen\ConnectWise\Clients\Company\Model\Guid**](Guid.md) |  | [optional] 
**currency** | [**\Spinen\ConnectWise\Clients\Company\Model\CurrencyReference**](CurrencyReference.md) |  | [optional] 
**territory_manager** | [**\Spinen\ConnectWise\Clients\Company\Model\MemberReference**](MemberReference.md) |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Company\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 
**custom_fields** | [**\Spinen\ConnectWise\Clients\Company\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


