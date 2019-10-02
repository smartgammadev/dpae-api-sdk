# DPAE\ConsultationApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/DPAE/1.0.0-oas3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsultation**](ConsultationApi.md#getconsultation) | **GET** /lister-retours-flux/1.0/{contractId} | 

# **getConsultation**
> \DPAE\Model\Response getConsultation($contractId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = DPAE\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DPAE\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new DPAE\SDK\ConsultationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractId = 56; // int | 

try {
    $result = $apiInstance->getConsultation($contractId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsultationApi->getConsultation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractId** | **int**|  |

### Return type

[**\DPAE\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

