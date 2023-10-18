# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**series** | **string** |  | [optional] 
**number** | **int** |  | [optional] 
**provider** | **string** |  | 
**customer** | **string** |  | 
**archived_provider** | **object** |  | [optional] 
**archived_customer** | **object** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**issue_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**paid_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**cancel_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sales_tax_name** | **string** |  | [optional] 
**sales_tax_percent** | **string** |  | [optional] 
**currency** | **string** | The currency used for billing. | [optional] 
**transaction_currency** | **string** | The currency used when making a transaction. | [optional] 
**transaction_xe_rate** | **string** | Currency exchange rate from document currency to transaction_currency. | [optional] 
**transaction_xe_date** | [**\DateTime**](\DateTime.md) | Date of the transaction exchange rate. | [optional] 
**state** | **string** | The state the invoice is in. | [optional] 
**proforma** | **string** |  | [optional] 
**invoice_entries** | [**\Swagger\Client\Model\DocumentEntry[]**](DocumentEntry.md) |  | [optional] 
**total** | **string** |  | [optional] 
**total_in_transaction_currency** | **string** |  | [optional] 
**pdf_url** | **string** |  | [optional] 
**transactions** | [**\Swagger\Client\Model\Transaction[]**](Transaction.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


