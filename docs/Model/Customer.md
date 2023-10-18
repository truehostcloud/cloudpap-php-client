# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**url** | **string** |  | [optional] 
**customer_reference** | **string** | It&#39;s a reference to be passed between silver and clients. It usually points to an account ID. | [optional] 
**first_name** | **string** | The customer&#39;s first name. | 
**last_name** | **string** | The customer&#39;s last name. | 
**company** | **string** | The company to which the bill is issued. | [optional] 
**email** | **string** |  | [optional] 
**address_1** | **string** |  | 
**address_2** | **string** |  | [optional] 
**city** | **string** |  | 
**state** | **string** |  | [optional] 
**zip_code** | **string** |  | [optional] 
**country** | **string** |  | 
**currency** | **string** | Used to enforce a certain currency when making transactionsfor the customer. | [optional] 
**phone** | **string** |  | [optional] 
**extra** | **string** | Extra information to display on the invoice (markdown formatted). | [optional] 
**sales_tax_number** | **string** |  | [optional] 
**sales_tax_name** | **string** | Sales tax name (eg. &#39;sales tax&#39; or &#39;VAT&#39;). | [optional] 
**sales_tax_percent** | **string** | Whenever to add sales tax. If null, it won&#39;t show up on the invoice. | [optional] 
**consolidated_billing** | **bool** | A flag indicating consolidated billing. | [optional] 
**subscriptions** | **string[]** |  | [optional] 
**payment_methods** | **string** |  | [optional] 
**transactions** | **string** |  | [optional] 
**meta** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


