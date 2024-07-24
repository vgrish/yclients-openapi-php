# Vgrish\YclientsOpenApi\DefaultApi

All URIs are relative to *https://api.yclients.com/api/v1*, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authUser()**](DefaultApi.md#authUser) | **POST** /auth | Авторизовать пользователя |
| [**clientCreate()**](DefaultApi.md#clientCreate) | **POST** /clients/{company_id} | Добавить клиента |
| [**clientGet()**](DefaultApi.md#clientGet) | **GET** /client/{company_id}/{id} | Получить клиента |
| [**clientGetList()**](DefaultApi.md#clientGetList) | **POST** /company/{company_id}/clients/search | Получить список клиентов |
| [**clientRemove()**](DefaultApi.md#clientRemove) | **DELETE** /client/{company_id}/{id} | Удалить клиента |
| [**clientUpdate()**](DefaultApi.md#clientUpdate) | **PUT** /client/{company_id}/{id} | Редактировать клиента |
| [**companyCreate()**](DefaultApi.md#companyCreate) | **POST** /companies | Создать компанию |
| [**companyGet()**](DefaultApi.md#companyGet) | **GET** /company/{id}/ | Получить компанию |
| [**companyGetList()**](DefaultApi.md#companyGetList) | **GET** /companies | Получить список компаний |
| [**companyRemove()**](DefaultApi.md#companyRemove) | **DELETE** /company/{id}/ | Удалить компанию |
| [**companyUpdate()**](DefaultApi.md#companyUpdate) | **PUT** /company/{id}/ | Изменить компанию |
| [**loyaltyCardByClientIdGetList()**](DefaultApi.md#loyaltyCardByClientIdGetList) | **GET** /loyalty/client_cards/{client_id} | Получить список карт клиента по ID |
| [**loyaltyCardByClientPhoneGetList()**](DefaultApi.md#loyaltyCardByClientPhoneGetList) | **GET** /loyalty/cards/{phone}/{chain_id}/{company_id} | Получить список карт клиента по номеру телефона |
| [**loyaltyCardCreate()**](DefaultApi.md#loyaltyCardCreate) | **POST** /loyalty/cards/{company_id} | Выдать карту лояльности |
| [**loyaltyCardRemove()**](DefaultApi.md#loyaltyCardRemove) | **DELETE** /loyalty/cards/{company_id}/{card_id} | Удалить карту  лояльности |
| [**loyaltyCardTransactionCreate()**](DefaultApi.md#loyaltyCardTransactionCreate) | **POST** /company/{company_id}/loyalty/cards/{card_id}/manual_transaction | Ручное списание/пополнение карты лояльности в компании |
| [**loyaltyCardTypeByChainIdGetList()**](DefaultApi.md#loyaltyCardTypeByChainIdGetList) | **GET** /chain/{chain_id}/loyalty/card_types | Получить список типов карт, доступных в сети |
| [**loyaltyCardTypeByClientPhoneGetList()**](DefaultApi.md#loyaltyCardTypeByClientPhoneGetList) | **GET** /loyalty/card_types/client/{company_id}/{phone} | Получить список типов карт доступных для выдачи клиенту |
| [**loyaltyCardTypeByCompanyIdGetList()**](DefaultApi.md#loyaltyCardTypeByCompanyIdGetList) | **GET** /loyalty/card_types/salon/{company_id} | Получить список типов карт доступных в филиале |
| [**loyaltyTransactionGetList()**](DefaultApi.md#loyaltyTransactionGetList) | **GET** /chain/{chain_id}/loyalty/transactions | Получить список транзакций лояльности в сети |


## `authUser()`

```php
authUser($accept, $content_type, $authorization, $auth_user_request): \Vgrish\YclientsOpenApi\Model\AuthUserResponse
```

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
$auth_user_request = {"login":"{{login}}","password":"{{password}}"}; // \Vgrish\YclientsOpenApi\Model\AuthUserRequest

try {
    $result = $apiInstance->authUser($accept, $content_type, $authorization, $auth_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token | |
| **auth_user_request** | [**\Vgrish\YclientsOpenApi\Model\AuthUserRequest**](../Model/AuthUserRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\AuthUserResponse**](../Model/AuthUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clientCreate()`

```php
clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request): \Vgrish\YclientsOpenApi\Model\ClientCreateResponse
```

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
$client_create_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","categories":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientCreateRequest

try {
    $result = $apiInstance->clientCreate($company_id, $accept, $content_type, $authorization, $client_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientCreate: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->clientGetList: ', $e->getMessage(), PHP_EOL;
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
clientRemove($company_id, $id, $accept, $content_type, $authorization): string
```

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

**string**

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
$client_update_request = {"name":"<string>","phone":"<string>","surname":"<string>","patronymic":"<string>","email":"<string>","sex_id":"<number>","importance_id":"<number>","discount":"<number>","card":"<string>","birth_date":"<string>","comment":"<string>","spent":"<number>","balance":"<number>","sms_check":"<number>","sms_not":"<number>","labels":{},"custom_fields":{}}; // \Vgrish\YclientsOpenApi\Model\ClientUpdateRequest

try {
    $result = $apiInstance->clientUpdate($company_id, $id, $accept, $content_type, $authorization, $client_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->clientUpdate: ', $e->getMessage(), PHP_EOL;
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

## `companyCreate()`

```php
companyCreate($accept, $content_type, $authorization, $company_create_request): \Vgrish\YclientsOpenApi\Model\CompanyCreateResponse
```

Создать компанию

Создать новую компанию.

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
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$company_create_request = {"title":"Новая компания","country_id":1,"city_id":2,"address":"Талалихина, д. 1, к. 2","site":"new-company.ru","coordinate_lat":"55.835662","coordinate_lot":"37.778218","business_type_id":1,"short_descr":"Салон красоты"}; // \Vgrish\YclientsOpenApi\Model\CompanyCreateRequest

try {
    $result = $apiInstance->companyCreate($accept, $content_type, $authorization, $company_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **company_create_request** | [**\Vgrish\YclientsOpenApi\Model\CompanyCreateRequest**](../Model/CompanyCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\CompanyCreateResponse**](../Model/CompanyCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyGet()`

```php
companyGet($id, $accept, $content_type, $authorization, $my, $for_booking, $show_groups, $show_bookforms, $bookform_id): \Vgrish\YclientsOpenApi\Model\CompanyGetResponse
```

Получить компанию

Получение данных о компании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = {{company_id}}; // float | Идентификатор компании, информацию о которой нужно получить.
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$my = 1; // float | Только для авторизованного пользователя. Если нужны дополнительные данные по компании, на управление которой пользователь имеет права
$for_booking = 1; // float | Показать дату и время ближайшего свободного сеанса в компании (ISO8601).
$show_groups = 1; // float | Включить в объект компании список сетей в которые входит эта компания
$show_bookforms = 1; // float | Показать виджеты онлайн-записи компании
$bookform_id = 19203; // float | Показать адрес виджета онлайн-записи с указанным идентификатором

try {
    $result = $apiInstance->companyGet($id, $accept, $content_type, $authorization, $my, $for_booking, $show_groups, $show_bookforms, $bookform_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **float**| Идентификатор компании, информацию о которой нужно получить. | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **my** | **float**| Только для авторизованного пользователя. Если нужны дополнительные данные по компании, на управление которой пользователь имеет права | [optional] |
| **for_booking** | **float**| Показать дату и время ближайшего свободного сеанса в компании (ISO8601). | [optional] |
| **show_groups** | **float**| Включить в объект компании список сетей в которые входит эта компания | [optional] |
| **show_bookforms** | **float**| Показать виджеты онлайн-записи компании | [optional] |
| **bookform_id** | **float**| Показать адрес виджета онлайн-записи с указанным идентификатором | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\CompanyGetResponse**](../Model/CompanyGetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyGetList()`

```php
companyGetList($accept, $content_type, $authorization, $id, $group_id, $my, $active, $moderated, $for_booking, $show_groups, $city_id, $show_bookforms, $vk_api_id, $min_id, $show_deleted, $hide_record_type_single, $hide_record_type_activity, $hide_record_type_mixed, $business_group_id, $business_type_id, $yandex, $include, $count, $page): \Vgrish\YclientsOpenApi\Model\CompanyGetListResponse
```

Получить список компаний

Получить список с данными о компаниях

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
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$id = 4564; // float | ID компании. Фильтр по идентификатору компании
$group_id = 83; // float | ID сети компаний. Фильтр по идентификатору сети компаний _Default: 83_
$my = 1; // float | Только для авторизованного пользователя. Если нужно компании, на управление которыми пользователь имеет права
$active = 1; // float | Если нужно получить только компании с активной лицензией и доступным бронированием
$moderated = 1; // float | Если нужно получить только прошедшие модерацию компании, чей контент проверен для публикации
$for_booking = 1; // float | Показать дату и время ближайшего свободного сеанса в компании (ISO8601)
$show_groups = 1; // float | Включить в объект компании список сетей в которые входит эта компания
$city_id = 2; // float | Поиск по ID города ([метод получения городов](#cities))
$show_bookforms = 1; // float | Включить в объект компании виджеты онлайн-записи
$vk_api_id = 2; // float | Поиск виджеты онлайн-записи по vk_api_id. Параметр работает при showBookforms=1
$min_id = 1000; // float | Минимальный ID компании
$show_deleted = 1; // float | Включить в список удалённые компании
$hide_record_type_single = 1; // float | Не показывать салоны с индивидуальной записью
$hide_record_type_activity = 1; // float | Не показывать салоны с групповой записью
$hide_record_type_mixed = 1; // float | Не показывать салоны со смешанной записью
$business_group_id = 1; // float | Идентификатор группы бизнеса. Фильтр по группе бизнеса
$business_type_id = 1; // float | Идентификатор сферы бизнеса. Фильтр по сфере бизнеса
$yandex = 1; // float | Фильтр по синхронизации данных компании с партнерскими площадкам
$include = ["staff","positions"]; // string[] | Включить в объект компании дополнительные данные
$count = 3.4; // float | Количество компаний на странице
$page = 3.4; // float | Номер страницы

try {
    $result = $apiInstance->companyGetList($accept, $content_type, $authorization, $id, $group_id, $my, $active, $moderated, $for_booking, $show_groups, $city_id, $show_bookforms, $vk_api_id, $min_id, $show_deleted, $hide_record_type_single, $hide_record_type_activity, $hide_record_type_mixed, $business_group_id, $business_type_id, $yandex, $include, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **id** | **float**| ID компании. Фильтр по идентификатору компании | [optional] |
| **group_id** | **float**| ID сети компаний. Фильтр по идентификатору сети компаний _Default: 83_ | [optional] |
| **my** | **float**| Только для авторизованного пользователя. Если нужно компании, на управление которыми пользователь имеет права | [optional] |
| **active** | **float**| Если нужно получить только компании с активной лицензией и доступным бронированием | [optional] |
| **moderated** | **float**| Если нужно получить только прошедшие модерацию компании, чей контент проверен для публикации | [optional] |
| **for_booking** | **float**| Показать дату и время ближайшего свободного сеанса в компании (ISO8601) | [optional] |
| **show_groups** | **float**| Включить в объект компании список сетей в которые входит эта компания | [optional] |
| **city_id** | **float**| Поиск по ID города ([метод получения городов](#cities)) | [optional] |
| **show_bookforms** | **float**| Включить в объект компании виджеты онлайн-записи | [optional] |
| **vk_api_id** | **float**| Поиск виджеты онлайн-записи по vk_api_id. Параметр работает при showBookforms&#x3D;1 | [optional] |
| **min_id** | **float**| Минимальный ID компании | [optional] |
| **show_deleted** | **float**| Включить в список удалённые компании | [optional] |
| **hide_record_type_single** | **float**| Не показывать салоны с индивидуальной записью | [optional] |
| **hide_record_type_activity** | **float**| Не показывать салоны с групповой записью | [optional] |
| **hide_record_type_mixed** | **float**| Не показывать салоны со смешанной записью | [optional] |
| **business_group_id** | **float**| Идентификатор группы бизнеса. Фильтр по группе бизнеса | [optional] |
| **business_type_id** | **float**| Идентификатор сферы бизнеса. Фильтр по сфере бизнеса | [optional] |
| **yandex** | **float**| Фильтр по синхронизации данных компании с партнерскими площадкам | [optional] |
| **include** | [**string[]**](../Model/string.md)| Включить в объект компании дополнительные данные | [optional] |
| **count** | **float**| Количество компаний на странице | [optional] |
| **page** | **float**| Номер страницы | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\CompanyGetListResponse**](../Model/CompanyGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyRemove()`

```php
companyRemove($id, $accept, $content_type, $authorization): string
```

Удалить компанию

Удаление компании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 37532; // int | Идентификатор компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->companyRemove($id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор компании | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyUpdate()`

```php
companyUpdate($id, $accept, $content_type, $authorization, $request_body): \Vgrish\YclientsOpenApi\Model\CompanyUpdateResponse
```

Изменить компанию

Изменение данных о компании.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = {{company_id}}; // int | Идентификатор компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$request_body = {"title":"Новая компания","country":"Россия","city":"Москва","address":"Большой Саввинский пер., д. 4","zip":"119435","phones":["79876543210","79876543211"],"social":{"vk":"vk.com/newcompany"},"site":"new-company.ru","coordinate_lat":55.735662,"coordinate_lon":37.678218,"description":"Самая <strong>Новая компания</strong> на рынке","business_type_id":1,"short_descr":"Салон красоты"}; // map[string,object]

try {
    $result = $apiInstance->companyUpdate($id, $accept, $content_type, $authorization, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор компании | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **request_body** | [**map[string,object]**](../Model/object.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\CompanyUpdateResponse**](../Model/CompanyUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardByClientIdGetList()`

```php
loyaltyCardByClientIdGetList($client_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientIdGetListResponse
```

Получить список карт клиента по ID

Возвращает список карт клиента с программами, которые активны в данном салоне    Атрибуты в ответе на запрос полностью совпадают с методом \"Получить список выданных карт по номеру телефона\", описанным выше

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 56; // int | ID клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardByClientIdGetList($client_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardByClientIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| ID клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientIdGetListResponse**](../Model/LoyaltyCardByClientIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardByClientPhoneGetList()`

```php
loyaltyCardByClientPhoneGetList($phone, $chain_id, $company_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientPhoneGetListResponse
```

Получить список карт клиента по номеру телефона

Возвращает список карт клиента с программами, которые активны в данном салоне    | Атрибут        | Тип    | Описание|  |----------------|--------|--------------------------------------------------------------------------------------------------------------|  | id             | int    | Идентификатор карты лояльности                                                                                  |  | balance        | decimal| Баланс карты лояльности                                                                                        |  | paid_amount    | decimal| Сумма \"Оплачено\" |  | sold_amount    | decimal| Сумма \"Продано\"                                                                                        |  | visits_count   | int    | Количество визитов                                                                     |  | number         | string | Номер карты |  | type_id        | int    | Идентификатор типа карты лояльности                                                                               |  | salon_group_id | int    | Идентификатор сети, где создана карта                                                                    |  | type           | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор типа карты и название типа карты, соотвественно  | salon_group    | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор сети, где создан тип карты и название этой сети                                                                                        |  | programs       | array  | Массив с информацией об акциях, привязанных к карте лояльности                                                                     |  | rules          | array  | Массив с информацией о правилах, настроенных в акции |    Массив programs состоит из объектов со следующими полями:    | Атрибут         | Тип    | Описание                             |  |-----------------|--------|--------------------------------------|  | id              | int    | Идентификатор акции                  |  | title           | string | Название акции                       |  | loyalty_type_id | int    | Идентификатор типа акции             |  | item_type_id    | int    | Начисляется ли кэшбек от товаров     |  | value_unit_id   | int    | Поле \"Бонус\". Скидка % или Фикс. сумма                                     |  | group_id        | int    | Идентифкатор сети, где создана акция |  | loyalty_type    | object | Объект с информацией о акции         |      Массив rules состоит из объектов со следующими полями:    | Атрибут            | Тип    | Описание                                         |  |--------------------|--------|--------------------------------------------------|  | id                 | int    | Идентификатор правила                            |  | loyalty_program_id | int    | Идентификатор акции, к которой привязано правило |  | loyalty_type_id    | int    | Идентификатор типа акции                         |  | value              | decimal| Значение от которого сработает правило           |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$phone = 'phone_example'; // string | Номер телефона клиента в формате 70001234567
$chain_id = 56; // int | ID сети
$company_id = 56; // int | ID филиала
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardByClientPhoneGetList($phone, $chain_id, $company_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardByClientPhoneGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| Номер телефона клиента в формате 70001234567 | |
| **chain_id** | **int**| ID сети | |
| **company_id** | **int**| ID филиала | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardByClientPhoneGetListResponse**](../Model/LoyaltyCardByClientPhoneGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardCreate()`

```php
loyaltyCardCreate($company_id, $accept, $content_type, $authorization, $loyalty_card_create_request): \Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateResponse
```

Выдать карту лояльности

| Атрибут              | Тип    | Описание                                     |  |----------------------|--------|----------------------------------------------|  | loyalty_card_number  | number | Номер карты лояльности                       |  | loyalty_card_type_id | number | Идентификатор типа карты лояльности          |  | phone                | number | Номер телефона клиента в формате 70001234567 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID филиала
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$loyalty_card_create_request = {"loyalty_card_number":9090909,"loyalty_card_type_id":"8230","phone":79091552422}; // \Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateRequest

try {
    $result = $apiInstance->loyaltyCardCreate($company_id, $accept, $content_type, $authorization, $loyalty_card_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID филиала | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **loyalty_card_create_request** | [**\Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateRequest**](../Model/LoyaltyCardCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardCreateResponse**](../Model/LoyaltyCardCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardRemove()`

```php
loyaltyCardRemove($company_id, $card_id, $accept, $content_type, $authorization): object
```

Удалить карту  лояльности

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID филиала
$card_id = {{client_loyalty_card_id}}; // int | ID карты лояльности
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardRemove($company_id, $card_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID филиала | |
| **card_id** | **int**| ID карты лояльности | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTransactionCreate()`

```php
loyaltyCardTransactionCreate($company_id, $card_id, $accept, $content_type, $authorization, $loyalty_transaction_create_request): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTransactionCreateResponse
```

Ручное списание/пополнение карты лояльности в компании

Ручное списание/пополнение карты лояльности в компании

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | Идентификатор филиала.
$card_id = {{client_loyalty_card_id}}; // int | ID карты лояльности
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$loyalty_transaction_create_request = new \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest(); // \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest

try {
    $result = $apiInstance->loyaltyCardTransactionCreate($company_id, $card_id, $accept, $content_type, $authorization, $loyalty_transaction_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardTransactionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| Идентификатор филиала. | |
| **card_id** | **int**| ID карты лояльности | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **loyalty_transaction_create_request** | [**\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionCreateRequest**](../Model/LoyaltyTransactionCreateRequest.md)|  | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTransactionCreateResponse**](../Model/LoyaltyCardTransactionCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByChainIdGetList()`

```php
loyaltyCardTypeByChainIdGetList($chain_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByChainIdGetListResponse
```

Получить список типов карт, доступных в сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = {{chain_id}}; // int | Идентификатор сети
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByChainIdGetList($chain_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardTypeByChainIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| Идентификатор сети | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByChainIdGetListResponse**](../Model/LoyaltyCardTypeByChainIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByClientPhoneGetList()`

```php
loyaltyCardTypeByClientPhoneGetList($company_id, $phone, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByClientPhoneGetListResponse
```

Получить список типов карт доступных для выдачи клиенту

Возвращает список типов карт, которые доступны для выдачи клиенту салона.    | Атрибут        | Тип    | Описание                                                                                                     |  |----------------|--------|--------------------------------------------------------------------------------------------------------------|  | id             | int    | Идентификатор типа карты                                                                                     |  | title          | string | Название типа карты                                                                                          |  | salon_group_id | int    | Идентификатор сети, где создан тип карты                                                                     |  | salon_group    | object | Объект, содержащий в себе поля \"id\" и \"title\": идентификатор сети, где создан тип карты и название этой сети |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID компании
$phone = {{client_phone}}; // string | Номер телефона клиента
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByClientPhoneGetList($company_id, $phone, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardTypeByClientPhoneGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **phone** | **string**| Номер телефона клиента | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByClientPhoneGetListResponse**](../Model/LoyaltyCardTypeByClientPhoneGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyCardTypeByCompanyIdGetList()`

```php
loyaltyCardTypeByCompanyIdGetList($company_id, $accept, $content_type, $authorization): \Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByCompanyIdGetListResponse
```

Получить список типов карт доступных в филиале

Возвращает список типов карт, которые действуют для данного филиала.    Атрибуты и их описания соответсвуют методу \"Коллекция типов карт доступных клиенту\", описанному выше.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = {{company_id}}; // int | ID компании
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token

try {
    $result = $apiInstance->loyaltyCardTypeByCompanyIdGetList($company_id, $accept, $content_type, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyCardTypeByCompanyIdGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **int**| ID компании | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyCardTypeByCompanyIdGetListResponse**](../Model/LoyaltyCardTypeByCompanyIdGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loyaltyTransactionGetList()`

```php
loyaltyTransactionGetList($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count): \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse
```

Получить список транзакций лояльности в сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vgrish\YclientsOpenApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = {{chain_id}}; // int | Идентификатор сети
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата начала выборки в формате Y-m-d
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата окончания выборки в формате Y-m-d
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$types = array('types_example'); // string[] | Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета
$company_ids = array(56); // int[] | Идентификаторы филиалов транзакций лояльности, включенные в выборку
$visit_ids = array(56); // int[] | Идентификаторы визитов транзакций лояльности, включенные в выборку
$page = 56; // int | Страница выборки
$count = 56; // int | Количество результатов на одной странице выборки

try {
    $result = $apiInstance->loyaltyTransactionGetList($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loyaltyTransactionGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **int**| Идентификатор сети | |
| **created_after** | **\DateTime**| Дата начала выборки в формате Y-m-d | |
| **created_before** | **\DateTime**| Дата окончания выборки в формате Y-m-d | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **types** | [**string[]**](../Model/string.md)| Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета | [optional] |
| **company_ids** | [**int[]**](../Model/int.md)| Идентификаторы филиалов транзакций лояльности, включенные в выборку | [optional] |
| **visit_ids** | [**int[]**](../Model/int.md)| Идентификаторы визитов транзакций лояльности, включенные в выборку | [optional] |
| **page** | **int**| Страница выборки | [optional] |
| **count** | **int**| Количество результатов на одной странице выборки | [optional] |

### Return type

[**\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse**](../Model/LoyaltyTransactionGetListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
