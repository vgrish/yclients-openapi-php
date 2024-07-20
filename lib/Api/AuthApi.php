<?php
/**
 * AuthApi
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
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  Vgrish\YclientsOpenApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthApi
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
        'authUser' => [
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
     * Operation authUser
     *
     * Авторизовать пользователя
     *
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token (required)
     * @param  \Vgrish\YclientsOpenApi\Model\AuthRequest $auth_request auth_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authUser'] to see the possible values for this operation
     *
     * @throws \Vgrish\YclientsOpenApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Vgrish\YclientsOpenApi\Model\AuthUserResponse
     */
    public function authUser($accept, $content_type, $authorization, $auth_request = null, string $contentType = self::contentTypes['authUser'][0]) : \Vgrish\YclientsOpenApi\Model\AuthUserResponse
    {
        list($response) = $this->authUserWithHttpInfo($accept, $content_type, $authorization, $auth_request, $contentType);
        return $response;
    }

    /**
     * Operation authUserWithHttpInfo
     *
     * Авторизовать пользователя
     *
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token (required)
     * @param  \Vgrish\YclientsOpenApi\Model\AuthRequest $auth_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authUser'] to see the possible values for this operation
     *
     * @throws \Vgrish\YclientsOpenApi\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Vgrish\YclientsOpenApi\Model\AuthUserResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function authUserWithHttpInfo($accept, $content_type, $authorization, $auth_request = null, string $contentType = self::contentTypes['authUser'][0]) : array
    {
        $request = $this->authUserRequest($accept, $content_type, $authorization, $auth_request, $contentType);

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
                case 201:
                    if ('\Vgrish\YclientsOpenApi\Model\AuthUserResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Vgrish\YclientsOpenApi\Model\AuthUserResponse' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Vgrish\YclientsOpenApi\Model\AuthUserResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Vgrish\YclientsOpenApi\Model\AuthUserResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vgrish\YclientsOpenApi\Model\AuthUserResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation authUserAsync
     *
     * Авторизовать пользователя
     *
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token (required)
     * @param  \Vgrish\YclientsOpenApi\Model\AuthRequest $auth_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authUserAsync($accept, $content_type, $authorization, $auth_request = null, string $contentType = self::contentTypes['authUser'][0]) : \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->authUserAsyncWithHttpInfo($accept, $content_type, $authorization, $auth_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authUserAsyncWithHttpInfo
     *
     * Авторизовать пользователя
     *
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token (required)
     * @param  \Vgrish\YclientsOpenApi\Model\AuthRequest $auth_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authUserAsyncWithHttpInfo($accept, $content_type, $authorization, $auth_request = null, string $contentType = self::contentTypes['authUser'][0]) : \GuzzleHttp\Promise\PromiseInterface
    {
        $returnType = '\Vgrish\YclientsOpenApi\Model\AuthUserResponse';
        $request = $this->authUserRequest($accept, $content_type, $authorization, $auth_request, $contentType);

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
     * Create request for operation 'authUser'
     *
     * @param  string $accept e.g. application/vnd.yclients.v2+json (required)
     * @param  string $content_type application/json (required)
     * @param  string $authorization Bearer partner_token (required)
     * @param  \Vgrish\YclientsOpenApi\Model\AuthRequest $auth_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authUser'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authUserRequest($accept, $content_type, $authorization, $auth_request = null, string $contentType = self::contentTypes['authUser'][0]) : \GuzzleHttp\Psr7\Request
    {

        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling authUser'
            );
        }

        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling authUser'
            );
        }

        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling authUser'
            );
        }



        $resourcePath = '/auth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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



        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.yclients.v2+json'],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($auth_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($auth_request));
            } else {
                $httpBody = $auth_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
