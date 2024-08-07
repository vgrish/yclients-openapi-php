<?php
/**
 * LoyaltyTransactionApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yclients
 *
 * yclients-openapi-php package for YCLIENTS generated based on the openapi schema
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Vgrish\YclientsOpenApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Vgrish\YclientsOpenApi\ApiException;
use Vgrish\YclientsOpenApi\Configuration;
use Vgrish\YclientsOpenApi\HeaderSelector;
use Vgrish\YclientsOpenApi\ObjectSerializer;

/**
 * LoyaltyTransactionApi Class Doc Comment
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyTransactionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'loyaltyTransactionGetList' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex) : void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex() : int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig() : Configuration
    {
        return $this->config;
    }

    /**
     * Operation loyaltyTransactionGetList
     *
     * Получить список транзакций лояльности в сети
     *
     * @param  int $chain_id Идентификатор сети (required)
     * @param  \DateTime $created_after Дата начала выборки в формате Y-m-d (required)
     * @param  \DateTime $created_before Дата окончания выборки в формате Y-m-d (required)
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token, User user_token (required)
     * @param  string[] $types Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета (optional)
     * @param  int[] $company_ids Идентификаторы филиалов транзакций лояльности, включенные в выборку (optional)
     * @param  int[] $visit_ids Идентификаторы визитов транзакций лояльности, включенные в выборку (optional)
     * @param  int $page Страница выборки (optional)
     * @param  int $count Количество результатов на одной странице выборки (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loyaltyTransactionGetList'] to see the possible values for this operation
     *
     * @throws \Vgrish\YclientsOpenApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse
     */
    public function loyaltyTransactionGetList($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types = null, $company_ids = null, $visit_ids = null, $page = null, $count = null, string $contentType = self::contentTypes['loyaltyTransactionGetList'][0]) : \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse
    {
        list($response) = $this->loyaltyTransactionGetListWithHttpInfo($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count, $contentType);
        return $response;
    }

    /**
     * Operation loyaltyTransactionGetListWithHttpInfo
     *
     * Получить список транзакций лояльности в сети
     *
     * @param  int $chain_id Идентификатор сети (required)
     * @param  \DateTime $created_after Дата начала выборки в формате Y-m-d (required)
     * @param  \DateTime $created_before Дата окончания выборки в формате Y-m-d (required)
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token, User user_token (required)
     * @param  string[] $types Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета (optional)
     * @param  int[] $company_ids Идентификаторы филиалов транзакций лояльности, включенные в выборку (optional)
     * @param  int[] $visit_ids Идентификаторы визитов транзакций лояльности, включенные в выборку (optional)
     * @param  int $page Страница выборки (optional)
     * @param  int $count Количество результатов на одной странице выборки (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loyaltyTransactionGetList'] to see the possible values for this operation
     *
     * @throws \Vgrish\YclientsOpenApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function loyaltyTransactionGetListWithHttpInfo($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types = null, $company_ids = null, $visit_ids = null, $page = null, $count = null, string $contentType = self::contentTypes['loyaltyTransactionGetList'][0]) : array
    {
        $request = $this->loyaltyTransactionGetListRequest($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation loyaltyTransactionGetListAsync
     *
     * Получить список транзакций лояльности в сети
     *
     * @param  int $chain_id Идентификатор сети (required)
     * @param  \DateTime $created_after Дата начала выборки в формате Y-m-d (required)
     * @param  \DateTime $created_before Дата окончания выборки в формате Y-m-d (required)
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token, User user_token (required)
     * @param  string[] $types Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета (optional)
     * @param  int[] $company_ids Идентификаторы филиалов транзакций лояльности, включенные в выборку (optional)
     * @param  int[] $visit_ids Идентификаторы визитов транзакций лояльности, включенные в выборку (optional)
     * @param  int $page Страница выборки (optional)
     * @param  int $count Количество результатов на одной странице выборки (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loyaltyTransactionGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loyaltyTransactionGetListAsync($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types = null, $company_ids = null, $visit_ids = null, $page = null, $count = null, string $contentType = self::contentTypes['loyaltyTransactionGetList'][0]) : \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->loyaltyTransactionGetListAsyncWithHttpInfo($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loyaltyTransactionGetListAsyncWithHttpInfo
     *
     * Получить список транзакций лояльности в сети
     *
     * @param  int $chain_id Идентификатор сети (required)
     * @param  \DateTime $created_after Дата начала выборки в формате Y-m-d (required)
     * @param  \DateTime $created_before Дата окончания выборки в формате Y-m-d (required)
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token, User user_token (required)
     * @param  string[] $types Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета (optional)
     * @param  int[] $company_ids Идентификаторы филиалов транзакций лояльности, включенные в выборку (optional)
     * @param  int[] $visit_ids Идентификаторы визитов транзакций лояльности, включенные в выборку (optional)
     * @param  int $page Страница выборки (optional)
     * @param  int $count Количество результатов на одной странице выборки (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loyaltyTransactionGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loyaltyTransactionGetListAsyncWithHttpInfo($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types = null, $company_ids = null, $visit_ids = null, $page = null, $count = null, string $contentType = self::contentTypes['loyaltyTransactionGetList'][0]) : \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\Vgrish\YclientsOpenApi\Model\LoyaltyTransactionGetListResponse';
        $request = $this->loyaltyTransactionGetListRequest($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types, $company_ids, $visit_ids, $page, $count, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'loyaltyTransactionGetList'
     *
     * @param  int $chain_id Идентификатор сети (required)
     * @param  \DateTime $created_after Дата начала выборки в формате Y-m-d (required)
     * @param  \DateTime $created_before Дата окончания выборки в формате Y-m-d (required)
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token, User user_token (required)
     * @param  string[] $types Типы транзакций лояльности, включенные в выборку: 1 - Скидка по акции, 2 - Начисление по программе лояльности, 3 - Списание с карты лояльности, 4 - Начисление по реферальной программе, 5 - Ручное пополнение, 6 - Ручное списание, 7 - Списание просроченных баллов, 8 - Списание с сертификата, 9 - Использование абонемента, 10 - Перерасчет стоимости по абонементу, 11 - Списание с личного счета (optional)
     * @param  int[] $company_ids Идентификаторы филиалов транзакций лояльности, включенные в выборку (optional)
     * @param  int[] $visit_ids Идентификаторы визитов транзакций лояльности, включенные в выборку (optional)
     * @param  int $page Страница выборки (optional)
     * @param  int $count Количество результатов на одной странице выборки (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loyaltyTransactionGetList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loyaltyTransactionGetListRequest($chain_id, $created_after, $created_before, $accept, $content_type, $authorization, $types = null, $company_ids = null, $visit_ids = null, $page = null, $count = null, string $contentType = self::contentTypes['loyaltyTransactionGetList'][0]) : \GuzzleHttp\Psr7\Request
    {

        // verify the required parameter 'chain_id' is set
        if ($chain_id === null || (is_array($chain_id) && count($chain_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chain_id when calling loyaltyTransactionGetList'
            );
        }

        // verify the required parameter 'created_after' is set
        if ($created_after === null || (is_array($created_after) && count($created_after) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_after when calling loyaltyTransactionGetList'
            );
        }

        // verify the required parameter 'created_before' is set
        if ($created_before === null || (is_array($created_before) && count($created_before) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_before when calling loyaltyTransactionGetList'
            );
        }

        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling loyaltyTransactionGetList'
            );
        }

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling loyaltyTransactionGetList'
            );
        }

        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling loyaltyTransactionGetList'
            );
        }







        $resourcePath = '/chain/{chain_id}/loyalty/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_after,
            'created_after', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_before,
            'created_before', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $company_ids,
            'company_ids', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $visit_ids,
            'visit_ids', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $count,
            'count', // param base name
            '', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }

        // path params
        if ($chain_id !== null) {
            $resourcePath = str_replace(
                '{' . 'chain_id' . '}',
                ObjectSerializer::toPathValue($chain_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.yclients.v2+json'],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption() : array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
