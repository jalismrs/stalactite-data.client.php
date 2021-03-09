<?php
/**
 * UsersAccessClearancesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stalactite Data API client
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.4.1-dev.75f5c64dc785dd4d005488b1c203e2802e74dca7
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Jalismrs\Stalactite\Client\Data\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Jalismrs\Stalactite\Client\Data\ApiException;
use Jalismrs\Stalactite\Client\Data\Configuration;
use Jalismrs\Stalactite\Client\Data\HeaderSelector;
use Jalismrs\Stalactite\Client\Data\ObjectSerializer;

/**
 * UsersAccessClearancesApi Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsersAccessClearancesApi
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
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMyAccessClearances
     *
     * @param  string $domain_uid domain_uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError
     */
    public function getMyAccessClearances($domain_uid)
    {
        list($response) = $this->getMyAccessClearancesWithHttpInfo($domain_uid);
        return $response;
    }

    /**
     * Operation getMyAccessClearancesWithHttpInfo
     *
     * @param  string $domain_uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMyAccessClearancesWithHttpInfo($domain_uid)
    {
        $request = $this->getMyAccessClearancesRequest($domain_uid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Data\Model\ApiError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jalismrs\Stalactite\Client\Data\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMyAccessClearancesAsync
     *
     * 
     *
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyAccessClearancesAsync($domain_uid)
    {
        return $this->getMyAccessClearancesAsyncWithHttpInfo($domain_uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyAccessClearancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyAccessClearancesAsyncWithHttpInfo($domain_uid)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]';
        $request = $this->getMyAccessClearancesRequest($domain_uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMyAccessClearances'
     *
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getMyAccessClearancesRequest($domain_uid)
    {
        // verify the required parameter 'domain_uid' is set
        if ($domain_uid === null || (is_array($domain_uid) && count($domain_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_uid when calling getMyAccessClearances'
            );
        }

        $resourcePath = '/users/me/access/{domainUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($domain_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'domainUid' . '}',
                ObjectSerializer::toPathValue($domain_uid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-TOKEN');
        if ($apiKey !== null) {
            $headers['X-API-TOKEN'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getUserAccessClearances
     *
     * @param  string $user_uid user_uid (required)
     * @param  string $domain_uid domain_uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError
     */
    public function getUserAccessClearances($user_uid, $domain_uid)
    {
        list($response) = $this->getUserAccessClearancesWithHttpInfo($user_uid, $domain_uid);
        return $response;
    }

    /**
     * Operation getUserAccessClearancesWithHttpInfo
     *
     * @param  string $user_uid (required)
     * @param  string $domain_uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserAccessClearancesWithHttpInfo($user_uid, $domain_uid)
    {
        $request = $this->getUserAccessClearancesRequest($user_uid, $domain_uid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Data\Model\ApiError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jalismrs\Stalactite\Client\Data\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUserAccessClearancesAsync
     *
     * 
     *
     * @param  string $user_uid (required)
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserAccessClearancesAsync($user_uid, $domain_uid)
    {
        return $this->getUserAccessClearancesAsyncWithHttpInfo($user_uid, $domain_uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserAccessClearancesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $user_uid (required)
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserAccessClearancesAsyncWithHttpInfo($user_uid, $domain_uid)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Data\Model\AccessClearance[]';
        $request = $this->getUserAccessClearancesRequest($user_uid, $domain_uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getUserAccessClearances'
     *
     * @param  string $user_uid (required)
     * @param  string $domain_uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUserAccessClearancesRequest($user_uid, $domain_uid)
    {
        // verify the required parameter 'user_uid' is set
        if ($user_uid === null || (is_array($user_uid) && count($user_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_uid when calling getUserAccessClearances'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $user_uid)) {
            throw new \InvalidArgumentException("invalid value for \"user_uid\" when calling UsersAccessClearancesApi.getUserAccessClearances, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'domain_uid' is set
        if ($domain_uid === null || (is_array($domain_uid) && count($domain_uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_uid when calling getUserAccessClearances'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $domain_uid)) {
            throw new \InvalidArgumentException("invalid value for \"domain_uid\" when calling UsersAccessClearancesApi.getUserAccessClearances, must conform to the pattern /[a-z0-9]{64}/.");
        }


        $resourcePath = '/users/{userUid}/access/{domainUid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($user_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'userUid' . '}',
                ObjectSerializer::toPathValue($user_uid),
                $resourcePath
            );
        }
        // path params
        if ($domain_uid !== null) {
            $resourcePath = str_replace(
                '{' . 'domainUid' . '}',
                ObjectSerializer::toPathValue($domain_uid),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-TOKEN');
        if ($apiKey !== null) {
            $headers['X-API-TOKEN'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
    protected function createHttpClientOption()
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
