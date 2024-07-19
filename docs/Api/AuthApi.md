# Vgrish\YclientsOpenApi\AuthApi

All URIs are relative to *https://api.yclients.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUser**](AuthApi.md#authUser) | **POST** /auth | Авторизовать пользователя



## authUser

> \Vgrish\YclientsOpenApi\Model\AuthUserResponse authUser($accept, $content_type, $authorization, $auth_request)

Авторизовать пользователя

При смене пароля пользователем его API-ключ изменится и потребуется новая авторизация    | Атрибут  | Тип | Описание |  | ------------- | ------------- | ------------- |  | login  | string  | В качестве логина может быть использован номер телефона пользователя в формате 79161234567 или его Email |  | password  | string  | Пароль пользователя |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}}; // string | Bearer partner_token
$auth_request = {"login":"{{login}}","password":"{{password}}"}; // \Vgrish\YclientsOpenApi\Model\AuthRequest | 

try {
    $result = $apiInstance->authUser($accept, $content_type, $authorization, $auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token |
 **auth_request** | [**\Vgrish\YclientsOpenApi\Model\AuthRequest**](../Model/AuthRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\AuthUserResponse**](../Model/AuthUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

