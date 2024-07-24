# # CompanyResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор компании | [optional]
**title** | **string** | Название компании | [optional]
**country_id** | **int** | Идентификатор страны, в которой расположена компания | [optional]
**country** | **string** | Название страны, в которой расположена компания | [optional]
**city_id** | **int** | Идентификатор города, в котором расположена компания | [optional]
**city** | **string** | Название города, в котором расположена компания | [optional]
**timezone_name** | **string** | Наименование временной зоны, в которой расположена компания | [optional]
**address** | **string** | Адрес, по которому расположена компания | [optional]
**zip** | **string** | Индекс | [optional]
**social** | **map[string,object]** | Социальные сети компании | [optional]
**site** | **string** | Сайт компании | [optional]
**coordinate_lat** | **float** | Широта | [optional]
**coordinate_lon** | **float** | Долгота | [optional]
**phone_confirmation** | **bool** | Нужно ли подтверждать телефон по смс, при бронировании | [optional]
**active_staff_count** | **int** | Количество сотрудников, доступных для бронирования. Поле будет присутствовать только если передан GET параметр forBooking&#x3D;1 | [optional]
**next_slot** | [**\DateTime**](\DateTime.md) | Дата и время ближайшего свободного сеанса в компании (ISO8601). Поле будет присутствовать только если передан GET параметр forBooking&#x3D;1 | [optional]
**group_priority** | **int** | Чем больше приоритет, тем выше компания при выводе в списке филиалов сети | [optional]
**push_notification_phone_confirm** | **int** | Подтверждать номер клиента для отправки push уведомлений | [optional]
**main_group_id** | **int** | Идентификатор основной сети компании | [optional]
**main_group** | **map[string,object]** | Основная сеть компании | [optional]
**groups** | **map[string,object]** | Сети в которые входит компания. Поле будет присутствовать только если передан GET параметр show_groups&#x3D;1 | [optional]
**bookforms** | [**map[string,object][]**](map.md) | Виджеты онлайн-записи компании | [optional]
**online_sales_form_url** | **string** | Адрес виджета онлайн-записи. Поле будет присутствовать только если передан GET параметр bookform_id | [optional]
**access** | **map[string,object]** | Список прав. Поле будет присутствовать только если передан GET параметр my&#x3D;1 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
