# Plan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name of the plan. | 
**url** | **string** |  | [optional] 
**interval** | **string** | The frequency with which a subscription should be billed. | [optional] 
**interval_count** | **int** | The number of intervals between each subscription billing | 
**amount** | **string** | The amount in the specified currency to be charged on the interval specified. | 
**currency** | **string** | The currency in which the subscription will be charged. | [optional] 
**trial_period_days** | **int** | Number of trial period days granted when subscribing a customer to this plan. | [optional] 
**generate_after** | **int** | Number of seconds to wait after current billing cycle ends before generating the invoice. This can be used to allow systems to finish updating feature counters. | [optional] 
**enabled** | **bool** | Whether to accept subscriptions. | [optional] 
**private** | **bool** | Indicates if a plan is private. | [optional] 
**product_code** | **string** |  | 
**metered_features** | [**\Swagger\Client\Model\MeteredFeature[]**](MeteredFeature.md) |  | [optional] 
**provider** | **string** |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


