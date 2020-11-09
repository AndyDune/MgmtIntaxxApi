# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**hash** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**firstName** | **string** |  | [optional] 
**lastName** | **string** |  | [optional] 
**gender** | **string** |  | [optional] 
**birthday** | [**\DateTime**](\DateTime.md) |  | [optional] 
**phone** | **string** |  | [optional] 
**countryCode** | **string** |  | [optional] 
**countryName** | **string** |  | [optional] 
**city** | **string** |  | [optional] 
**street** | **string** |  | [optional] 
**house** | **string** |  | [optional] 
**room** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**zip** | **string** |  | [optional] 
**items** | [**\AndyDune\MgmtIntaxxApi\Model\OrderItem[]**](OrderItem.md) | If items is null - site must have only one product to use. | [optional] 
**ip** | **string** |  | [optional] 
**userAgent** | **string** |  | [optional] 
**domain** | **string** |  | [optional] 
**cookie** | **map[string,object]** |  | [optional] 
**creditRequestInfo** | [**\AndyDune\MgmtIntaxxApi\Model\CreditRequestInfo**](CreditRequestInfo.md) |  | [optional] 
**utmSource** | **string** |  | [optional] 
**utmContent** | **string** |  | [optional] 
**utmCampaign** | **string** |  | [optional] 
**utmMedium** | **string** |  | [optional] 
**isInsurance** | **bool** |  | [optional] 
**middleName** | **string** |  | [optional] 
**anotherSurname** | **string** |  | [optional] 
**anotherEmail** | **string** |  | [optional] 
**landlinePhoneNumber** | **string** |  | [optional] 
**isDataConfirmed** | **bool** |  | [optional] 
**pfsId** | **string** |  | [optional] 
**debt** | **float** | Order debt. If negative it can create payment. | [optional] 
**sourceOrderId** | **int** | External order id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

