# Vgrish\YclientsOpenApi\DefaultApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authUser**](DefaultApi.md#authUser) | **POST** /auth | Авторизовать пользователя
[**clientCreate**](DefaultApi.md#clientCreate) | **POST** /clients/{company_id} | Добавить клиента
[**clientGet**](DefaultApi.md#clientGet) | **GET** /client/{company_id}/{id} | Получить клиента
[**clientGetList**](DefaultApi.md#clientGetList) | **POST** /company/{company_id}/clients/search | Получить список клиентов
[**clientRemove**](DefaultApi.md#clientRemove) | **DELETE** /client/{company_id}/{id} | Удалить клиента
[**clientUpdate**](DefaultApi.md#clientUpdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента
[**financeTransactionByVisitOrRecordGet**](DefaultApi.md#financeTransactionByVisitOrRecordGet) | **GET** /timetable/transactions/{company_id} | Получение транзакций по ID визита или записи
[**financeTransactionCreate**](DefaultApi.md#financeTransactionCreate) | **POST** /finance_transactions/{company_id} | Создание финансовой транзакции
[**financeTransactionGet**](DefaultApi.md#financeTransactionGet) | **GET** /finance_transactions/{company_id}/{transaction_id} | Получение финансовой транзакции
[**financeTransactionGetList**](DefaultApi.md#financeTransactionGetList) | **GET** /transactions/{company_id} | Получить транзакции
[**financeTransactionRemove**](DefaultApi.md#financeTransactionRemove) | **DELETE** /finance_transactions/{company_id}/{transaction_id} | Удаление транзакции
[**financeTransactionUpdate**](DefaultApi.md#financeTransactionUpdate) | **PUT** /finance_transactions/{company_id}/{transaction_id} | Обновление финансовой транзакции



## authUser

> \Vgrish\YclientsOpenApi\Model\AuthUserResponse authUser($accept, $content_type, $authorization, $auth_request)

Авторизовать пользователя

При смене пароля пользователем его API-ключ изменится и потребуется новая авторизация    | Атрибут  | Тип | Описание |  | ------------- | ------------- | ------------- |  | login  | string  | В качестве логина может быть использован номер телефона пользователя в формате 79161234567 или его Email |  | password  | string  | Пароль пользователя |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->authUser: ', $e->getMessage(), PHP_EOL;
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


## clientCreate

> \Vgrish\YclientsOpenApi\Model\ClientCreateResponse clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request)

Добавить клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_create_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","categories":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientCreateRequest | 

try {
    $result = $apiInstance->clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **client_create_request** | [**\Vgrish\YclientsOpenApi\Model\ClientCreateRequest**](../Model/ClientCreateRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientCreateResponse**](../Model/ClientCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clientGet

> \Vgrish\YclientsOpenApi\Model\ClientGetResponse clientGet($company_id, $id, $accept, $content_type, $authorization)

Получить клиента

company_id: ID компании client_id: ID клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->clientGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **id** | **int**| ID клиента |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientGetResponse**](../Model/ClientGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clientGetList

> \Vgrish\YclientsOpenApi\Model\ClientGetListResponse clientGetList($company_id, $accept, $content_type, $authorization, $client_get_list_request)

Получить список клиентов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_get_list_request = {"page":1,"page_size":3,"fields":["id","name"],"order_by":"name","order_by_direction":"desc","operation":"AND","filters":[{"type":"id","state":{"value":[1,2,3]}},{"type":"sold_amount","state":{"from":0,"to":100.77}},{"type":"quick_search","state":{"value":"Иван"}},{"type":"importance","state":{"value":[0,1,2,3]}},{"type":"has_mobile_app","state":{"value":true}},{"type":"category","state":{"value":[1,7]}},{"type":"has_passteam_card","state":{"value":true}},{"type":"passteam_card_ids","state":{"value":["111122223333aaaabbbbcccc"]}},{"type":"birthday","state":{"from":"2000-01-01","to":"2000-01-01"}},{"type":"gender","state":{"value":[0,1,2]}},{"type":"record","state":{"staff":{"value":[1,2]},"service":{"value":[2,3]},"service_category":{"value":[4,5]},"status":{"value":[1]},"created":{"from":"2020-01-01","to":"2020-05-01"},"records_count":{"from":1,"to":99999},"sold_amount":{"from":1.001,"to":99999.09}}},{"type":"client","state":{"id":{"value":[1,2,3]},"birthday":{"from":"2000-01-01","to":"2000-03-01"}}},{"type":"sale","state":{"abonement_balance":{"from":2,"to":3}}}]}; // \Vgrish\YclientsOpenApi\Model\ClientGetListRequest | 

try {
    $result = $apiInstance->clientGetList($company_id, $accept, $content_type, $authorization, $client_get_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **accept** | **string**| application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **client_get_list_request** | [**\Vgrish\YclientsOpenApi\Model\ClientGetListRequest**](../Model/ClientGetListRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientGetListResponse**](../Model/ClientGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clientRemove

> \Vgrish\YclientsOpenApi\Model\ClientRemoveResponse clientRemove($company_id, $id, $accept, $content_type, $authorization)

Удалить клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->clientRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **id** | **int**| ID клиента |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientRemoveResponse**](../Model/ClientRemoveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## clientUpdate

> \Vgrish\YclientsOpenApi\Model\ClientUpdateResponse clientUpdate($company_id, $id, $accept, $content_type, $authorization, $client_update_request)

Редактировать клиента

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$client_update_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","labels":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientUpdateRequest | 

try {
    $result = $apiInstance->clientUpdate($company_id, $id, $accept, $content_type, $authorization, $client_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **id** | **int**| ID клиента |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **client_update_request** | [**\Vgrish\YclientsOpenApi\Model\ClientUpdateRequest**](../Model/ClientUpdateRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\ClientUpdateResponse**](../Model/ClientUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionByVisitOrRecordGet

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionByVisitOrRecordGetResponse financeTransactionByVisitOrRecordGet($company_id, $accept, $content_type, $authorization, $record_id, $visit_id)

Получение транзакций по ID визита или записи

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$record_id = 0; // int | ID записи
$visit_id = 0; // int | ID визита

try {
    $result = $apiInstance->financeTransactionByVisitOrRecordGet($company_id, $accept, $content_type, $authorization, $record_id, $visit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionByVisitOrRecordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **record_id** | **int**| ID записи | [optional]
 **visit_id** | **int**| ID визита | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionByVisitOrRecordGetResponse**](../Model/FinanceTransactionByVisitOrRecordGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionCreate

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateResponse financeTransactionCreate($company_id, $accept, $content_type, $authorization, $finance_transaction_create_request)

Создание финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$finance_transaction_create_request = {"expense_id":2640,"amount":100,"account_id":39105,"client_id":4240788,"supplier_id":0,"master_id":0,"comment":"Transaction comment","date":"2023-01-01 10:00:00"}; // \Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateRequest | 

try {
    $result = $apiInstance->financeTransactionCreate($company_id, $accept, $content_type, $authorization, $finance_transaction_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **finance_transaction_create_request** | [**\Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateRequest**](../Model/FinanceTransactionCreateRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateResponse**](../Model/FinanceTransactionCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionGet

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionGetResponse financeTransactionGet($company_id, $transaction_id, $accept, $content_type, $authorization)

Получение финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$transaction_id = 56; // int | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->financeTransactionGet($company_id, $transaction_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **transaction_id** | **int**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionGetResponse**](../Model/FinanceTransactionGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionGetList

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionGetListResponse financeTransactionGetList($company_id, $accept, $content_type, $authorization, $page, $count, $account_id, $supplier_id, $client_id, $user_id, $master_id, $type, $real_money, $deleted, $start_date, $end_date, $balance_is, $document_id)

Получить транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$page = 1; // int | Номер страницы
$count = 50; // int | Количество клиентов на странице
$account_id = 0; // int | ID кассы
$supplier_id = 0; // int | ID контрагента
$client_id = 0; // int | ID клиента
$user_id = 0; // int | ID пользователя
$master_id = 0; // int | ID сотрудника
$type = 0; // int | тип транзакции
$real_money = 0; // int | транзакция реальными деньгами
$deleted = 0; // int | была ли удалена транзакция
$start_date = 2023-01-01; // string | дата начала периода
$end_date = 2023-03-01; // string | дата окончания периода
$balance_is = 0; // int | 0 - любой баланс, 1 - положительный, 2 - оттрицательный
$document_id = 0; // int | идентификатор документа

try {
    $result = $apiInstance->financeTransactionGetList($company_id, $accept, $content_type, $authorization, $page, $count, $account_id, $supplier_id, $client_id, $user_id, $master_id, $type, $real_money, $deleted, $start_date, $end_date, $balance_is, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **page** | **int**| Номер страницы | [optional]
 **count** | **int**| Количество клиентов на странице | [optional]
 **account_id** | **int**| ID кассы | [optional]
 **supplier_id** | **int**| ID контрагента | [optional]
 **client_id** | **int**| ID клиента | [optional]
 **user_id** | **int**| ID пользователя | [optional]
 **master_id** | **int**| ID сотрудника | [optional]
 **type** | **int**| тип транзакции | [optional]
 **real_money** | **int**| транзакция реальными деньгами | [optional]
 **deleted** | **int**| была ли удалена транзакция | [optional]
 **start_date** | **string**| дата начала периода | [optional]
 **end_date** | **string**| дата окончания периода | [optional]
 **balance_is** | **int**| 0 - любой баланс, 1 - положительный, 2 - оттрицательный | [optional]
 **document_id** | **int**| идентификатор документа | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionGetListResponse**](../Model/FinanceTransactionGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionRemove

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionRemoveResponse financeTransactionRemove($company_id, $transaction_id, $accept, $content_type, $authorization)

Удаление транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$transaction_id = 56; // int | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->financeTransactionRemove($company_id, $transaction_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **transaction_id** | **int**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionRemoveResponse**](../Model/FinanceTransactionRemoveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## financeTransactionUpdate

> \Vgrish\YclientsOpenApi\Model\FinanceTransactionUpdateResponse financeTransactionUpdate($company_id, $transaction_id, $accept, $content_type, $authorization, $finance_transaction_create_request)

Обновление финансовой транзакции

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 56; // int | ID компании
$transaction_id = 56; // int | ID транзакции
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$finance_transaction_create_request = new \Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateRequest(); // \Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateRequest | 

try {
    $result = $apiInstance->financeTransactionUpdate($company_id, $transaction_id, $accept, $content_type, $authorization, $finance_transaction_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->financeTransactionUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| ID компании |
 **transaction_id** | **int**| ID транзакции |
 **accept** | **string**| e.g. application/vnd.yclients.v2+json |
 **content_type** | **string**| application/json |
 **authorization** | **string**| Bearer partner_token, User user_token |
 **finance_transaction_create_request** | [**\Vgrish\YclientsOpenApi\Model\FinanceTransactionCreateRequest**](../Model/FinanceTransactionCreateRequest.md)|  | [optional]

### Return type

[**\Vgrish\YclientsOpenApi\Model\FinanceTransactionUpdateResponse**](../Model/FinanceTransactionUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

