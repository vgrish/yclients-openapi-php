# Vgrish\YclientsOpenApi\CompanyApi

All URIs are relative to *https://api.yclients.com/api/v1*, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companyCreate()**](CompanyApi.md#companyCreate) | **POST** /companies | Создать компанию |
| [**companyGet()**](CompanyApi.md#companyGet) | **GET** /company/{id}/ | Получить компанию |
| [**companyGetList()**](CompanyApi.md#companyGetList) | **GET** /companies | Получить список компаний |
| [**companyRemove()**](CompanyApi.md#companyRemove) | **DELETE** /company/{id}/ | Удалить компанию |
| [**companyUpdate()**](CompanyApi.md#companyUpdate) | **PUT** /company/{id}/ | Изменить компанию |


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



$apiInstance = new Vgrish\YclientsOpenApi\Api\CompanyApi(
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
    echo 'Exception when calling CompanyApi->companyCreate: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vgrish\YclientsOpenApi\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = {{company_id}}; // int | Идентификатор компании, информацию о которой нужно получить.
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$my = 1; // int | Только для авторизованного пользователя. Если нужны дополнительные данные по компании, на управление которой пользователь имеет права
$for_booking = 1; // int | Показать дату и время ближайшего свободного сеанса в компании (ISO8601).
$show_groups = 1; // int | Включить в объект компании список сетей в которые входит эта компания
$show_bookforms = 1; // int | Показать виджеты онлайн-записи компании
$bookform_id = 19203; // int | Показать адрес виджета онлайн-записи с указанным идентификатором

try {
    $result = $apiInstance->companyGet($id, $accept, $content_type, $authorization, $my, $for_booking, $show_groups, $show_bookforms, $bookform_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Идентификатор компании, информацию о которой нужно получить. | |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **my** | **int**| Только для авторизованного пользователя. Если нужны дополнительные данные по компании, на управление которой пользователь имеет права | [optional] |
| **for_booking** | **int**| Показать дату и время ближайшего свободного сеанса в компании (ISO8601). | [optional] |
| **show_groups** | **int**| Включить в объект компании список сетей в которые входит эта компания | [optional] |
| **show_bookforms** | **int**| Показать виджеты онлайн-записи компании | [optional] |
| **bookform_id** | **int**| Показать адрес виджета онлайн-записи с указанным идентификатором | [optional] |

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



$apiInstance = new Vgrish\YclientsOpenApi\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = application/vnd.yclients.v2+json; // string | e.g. application/vnd.yclients.v2+json
$content_type = 'content_type_example'; // string | application/json
$authorization = Bearer {{partner_token}},User {{user_token}}; // string | Bearer partner_token, User user_token
$id = 4564; // int | ID компании. Фильтр по идентификатору компании
$group_id = 83; // int | ID сети компаний. Фильтр по идентификатору сети компаний _Default: 83_
$my = 1; // int | Только для авторизованного пользователя. Если нужно компании, на управление которыми пользователь имеет права
$active = 1; // int | Если нужно получить только компании с активной лицензией и доступным бронированием
$moderated = 1; // int | Если нужно получить только прошедшие модерацию компании, чей контент проверен для публикации
$for_booking = 1; // int | Показать дату и время ближайшего свободного сеанса в компании (ISO8601)
$show_groups = 1; // int | Включить в объект компании список сетей в которые входит эта компания
$city_id = 2; // int | Поиск по ID города ([метод получения городов](#cities))
$show_bookforms = 1; // int | Включить в объект компании виджеты онлайн-записи
$vk_api_id = 2; // int | Поиск виджеты онлайн-записи по vk_api_id. Параметр работает при showBookforms=1
$min_id = 1000; // int | Минимальный ID компании
$show_deleted = 1; // int | Включить в список удалённые компании
$hide_record_type_single = 1; // int | Не показывать салоны с индивидуальной записью
$hide_record_type_activity = 1; // int | Не показывать салоны с групповой записью
$hide_record_type_mixed = 1; // int | Не показывать салоны со смешанной записью
$business_group_id = 1; // int | Идентификатор группы бизнеса. Фильтр по группе бизнеса
$business_type_id = 1; // int | Идентификатор сферы бизнеса. Фильтр по сфере бизнеса
$yandex = 1; // int | Фильтр по синхронизации данных компании с партнерскими площадкам
$include = ["staff","positions"]; // string[] | Включить в объект компании дополнительные данные
$count = 56; // int | Количество компаний на странице
$page = 56; // int | Номер страницы

try {
    $result = $apiInstance->companyGetList($accept, $content_type, $authorization, $id, $group_id, $my, $active, $moderated, $for_booking, $show_groups, $city_id, $show_bookforms, $vk_api_id, $min_id, $show_deleted, $hide_record_type_single, $hide_record_type_activity, $hide_record_type_mixed, $business_group_id, $business_type_id, $yandex, $include, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| e.g. application/vnd.yclients.v2+json | |
| **content_type** | **string**| application/json | |
| **authorization** | **string**| Bearer partner_token, User user_token | |
| **id** | **int**| ID компании. Фильтр по идентификатору компании | [optional] |
| **group_id** | **int**| ID сети компаний. Фильтр по идентификатору сети компаний _Default: 83_ | [optional] |
| **my** | **int**| Только для авторизованного пользователя. Если нужно компании, на управление которыми пользователь имеет права | [optional] |
| **active** | **int**| Если нужно получить только компании с активной лицензией и доступным бронированием | [optional] |
| **moderated** | **int**| Если нужно получить только прошедшие модерацию компании, чей контент проверен для публикации | [optional] |
| **for_booking** | **int**| Показать дату и время ближайшего свободного сеанса в компании (ISO8601) | [optional] |
| **show_groups** | **int**| Включить в объект компании список сетей в которые входит эта компания | [optional] |
| **city_id** | **int**| Поиск по ID города ([метод получения городов](#cities)) | [optional] |
| **show_bookforms** | **int**| Включить в объект компании виджеты онлайн-записи | [optional] |
| **vk_api_id** | **int**| Поиск виджеты онлайн-записи по vk_api_id. Параметр работает при showBookforms&#x3D;1 | [optional] |
| **min_id** | **int**| Минимальный ID компании | [optional] |
| **show_deleted** | **int**| Включить в список удалённые компании | [optional] |
| **hide_record_type_single** | **int**| Не показывать салоны с индивидуальной записью | [optional] |
| **hide_record_type_activity** | **int**| Не показывать салоны с групповой записью | [optional] |
| **hide_record_type_mixed** | **int**| Не показывать салоны со смешанной записью | [optional] |
| **business_group_id** | **int**| Идентификатор группы бизнеса. Фильтр по группе бизнеса | [optional] |
| **business_type_id** | **int**| Идентификатор сферы бизнеса. Фильтр по сфере бизнеса | [optional] |
| **yandex** | **int**| Фильтр по синхронизации данных компании с партнерскими площадкам | [optional] |
| **include** | [**string[]**](../Model/string.md)| Включить в объект компании дополнительные данные | [optional] |
| **count** | **int**| Количество компаний на странице | [optional] |
| **page** | **int**| Номер страницы | [optional] |

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



$apiInstance = new Vgrish\YclientsOpenApi\Api\CompanyApi(
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
    echo 'Exception when calling CompanyApi->companyRemove: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Vgrish\YclientsOpenApi\Api\CompanyApi(
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
    echo 'Exception when calling CompanyApi->companyUpdate: ', $e->getMessage(), PHP_EOL;
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
