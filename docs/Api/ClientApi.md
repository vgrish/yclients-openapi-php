# Vgrish\YclientsOpenApi\ClientApi

All URIs are relative to *https://api.yclients.com/api/v1*, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clientCreate()**](ClientApi.md#clientCreate) | **POST** /clients/{company_id} | Добавить клиента |
| [**clientGet()**](ClientApi.md#clientGet) | **GET** /client/{company_id}/{id} | Получить клиента |
| [**clientGetList()**](ClientApi.md#clientGetList) | **POST** /company/{company_id}/clients/search | Получить список клиентов |
| [**clientRemove()**](ClientApi.md#clientRemove) | **DELETE** /client/{company_id}/{id} | Удалить клиента |
| [**clientUpdate()**](ClientApi.md#clientUpdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента |


## `clientCreate()`

```php
clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request): \Vgrish\YclientsOpenApi\Model\ClientCreateResponse
```

Добавить клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_create_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","categories":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientCreateRequest

try {
    $result = $apiInstance->clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **client_create_request** | [**\Vgrish\YclientsOpenApi\Model\ClientCreateRequest**](../Model/ClientCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientCreateResponse**](../Model/ClientCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientGet()`

```php
clientGet($company_id, $id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\ClientGetResponse
```

Получить клиента

company_id: ID компании client_id: ID клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = application/json; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->clientGet($company_id, $id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **id** | **int**| ID клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientGetResponse**](../Model/ClientGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientGetList()`

```php
clientGetList($company_id, $accept, $content_type, $authorization, $client_get_list_request): \Vgrish\YclientsOpenApi\Model\ClientGetListResponse
```

Получить список клиентов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_get_list_request = {"page":1,"page_size":3,"fields":["id","name"],"order_by":"name","order_by_direction":"desc","operation":"AND","filters":[{"type":"id","state":{"value":[1,2,3]}},{"type":"sold_amount","state":{"from":0,"to":100.77}},{"type":"quick_search","state":{"value":"Иван"}},{"type":"importance","state":{"value":[0,1,2,3]}},{"type":"has_mobile_app","state":{"value":true}},{"type":"category","state":{"value":[1,7]}},{"type":"has_passteam_card","state":{"value":true}},{"type":"passteam_card_ids","state":{"value":["111122223333aaaabbbbcccc"]}},{"type":"birthday","state":{"from":"2000-01-01","to":"2000-01-01"}},{"type":"gender","state":{"value":[0,1,2]}},{"type":"record","state":{"staff":{"value":[1,2]},"service":{"value":[2,3]},"service_category":{"value":[4,5]},"status":{"value":[1]},"created":{"from":"2020-01-01","to":"2020-05-01"},"records_count":{"from":1,"to":99999},"sold_amount":{"from":1.001,"to":99999.09}}},{"type":"client","state":{"id":{"value":[1,2,3]},"birthday":{"from":"2000-01-01","to":"2000-03-01"}}},{"type":"sale","state":{"abonement_balance":{"from":2,"to":3}}}]}; // \Vgrish\YclientsOpenApi\Model\ClientGetListRequest

try {
    $result = $apiInstance->clientGetList($company_id, $accept, $content_type, $authorization, $client_get_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **accept** | **string**| application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **client_get_list_request** | [**\Vgrish\YclientsOpenApi\Model\ClientGetListRequest**](../Model/ClientGetListRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientGetListResponse**](../Model/ClientGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientRemove()`

```php
clientRemove($company_id, $id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\ClientRemoveResponse
```

Удалить клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->clientRemove($company_id, $id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **id** | **int**| ID клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientRemoveResponse**](../Model/ClientRemoveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientUpdate()`

```php
clientUpdate($company_id, $id, $accept, $content_type, $authorization, $client_update_request): \Vgrish\YclientsOpenApi\Model\ClientUpdateResponse
```

Редактировать клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_update_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","labels":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientUpdateRequest

try {
    $result = $apiInstance->clientUpdate($company_id, $id, $accept, $content_type, $authorization, $client_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **id** | **int**| ID клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **client_update_request** | [**\Vgrish\YclientsOpenApi\Model\ClientUpdateRequest**](../Model/ClientUpdateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientUpdateResponse**](../Model/ClientUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
