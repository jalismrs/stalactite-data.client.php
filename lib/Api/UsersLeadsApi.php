<?php
/**
 * UsersLeadsApi
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
 * The version of the OpenAPI document: 1.1.0-dev.4857c2e728c70fbebf477594a851998b25e376c0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
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
 * UsersLeadsApi Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsersLeadsApi
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
    public function setHostIndex($hostIndex): void
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
     * Operation addUserLeads
     *
     * @param  string $uid uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request update_user_leads_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addUserLeads($uid, $update_user_leads_request)
    {
        $this->addUserLeadsWithHttpInfo($uid, $update_user_leads_request);
    }

    /**
     * Operation addUserLeadsWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addUserLeadsWithHttpInfo($uid, $update_user_leads_request)
    {
        $request = $this->addUserLeadsRequest($uid, $update_user_leads_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation addUserLeadsAsync
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addUserLeadsAsync($uid, $update_user_leads_request)
    {
        return $this->addUserLeadsAsyncWithHttpInfo($uid, $update_user_leads_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addUserLeadsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addUserLeadsAsyncWithHttpInfo($uid, $update_user_leads_request)
    {
        $returnType = '';
        $request = $this->addUserLeadsRequest($uid, $update_user_leads_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'addUserLeads'
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addUserLeadsRequest($uid, $update_user_leads_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling addUserLeads'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersLeadsApi.addUserLeads, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'update_user_leads_request' is set
        if ($update_user_leads_request === null || (is_array($update_user_leads_request) && count($update_user_leads_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_user_leads_request when calling addUserLeads'
            );
        }

        $resourcePath = '/users/{uid}/leads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($update_user_leads_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_user_leads_request));
            } else {
                $httpBody = $update_user_leads_request;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getUserLeads
     *
     * @param  string $uid uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Data\Model\Post[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError
     */
    public function getUserLeads($uid)
    {
        list($response) = $this->getUserLeadsWithHttpInfo($uid);
        return $response;
    }

    /**
     * Operation getUserLeadsWithHttpInfo
     *
     * @param  string $uid (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Data\Model\Post[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserLeadsWithHttpInfo($uid)
    {
        $request = $this->getUserLeadsRequest($uid);

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
                    if ('\Jalismrs\Stalactite\Client\Data\Model\Post[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\Post[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Jalismrs\Stalactite\Client\Data\Model\ApiError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Jalismrs\Stalactite\Client\Data\Model\ApiError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Jalismrs\Stalactite\Client\Data\Model\Post[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Jalismrs\Stalactite\Client\Data\Model\Post[]',
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
     * Operation getUserLeadsAsync
     *
     * @param  string $uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserLeadsAsync($uid)
    {
        return $this->getUserLeadsAsyncWithHttpInfo($uid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserLeadsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserLeadsAsyncWithHttpInfo($uid)
    {
        $returnType = '\Jalismrs\Stalactite\Client\Data\Model\Post[]';
        $request = $this->getUserLeadsRequest($uid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getUserLeads'
     *
     * @param  string $uid (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUserLeadsRequest($uid)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling getUserLeads'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersLeadsApi.getUserLeads, must conform to the pattern /[a-z0-9]{64}/.");
        }


        $resourcePath = '/users/{uid}/leads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
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
     * Operation removeUserLeads
     *
     * @param  string $uid uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request update_user_leads_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeUserLeads($uid, $update_user_leads_request)
    {
        $this->removeUserLeadsWithHttpInfo($uid, $update_user_leads_request);
    }

    /**
     * Operation removeUserLeadsWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeUserLeadsWithHttpInfo($uid, $update_user_leads_request)
    {
        $request = $this->removeUserLeadsRequest($uid, $update_user_leads_request);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation removeUserLeadsAsync
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserLeadsAsync($uid, $update_user_leads_request)
    {
        return $this->removeUserLeadsAsyncWithHttpInfo($uid, $update_user_leads_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeUserLeadsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserLeadsAsyncWithHttpInfo($uid, $update_user_leads_request)
    {
        $returnType = '';
        $request = $this->removeUserLeadsRequest($uid, $update_user_leads_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'removeUserLeads'
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserLeadsRequest $update_user_leads_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removeUserLeadsRequest($uid, $update_user_leads_request)
    {
        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling removeUserLeads'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersLeadsApi.removeUserLeads, must conform to the pattern /[a-z0-9]{64}/.");
        }

        // verify the required parameter 'update_user_leads_request' is set
        if ($update_user_leads_request === null || (is_array($update_user_leads_request) && count($update_user_leads_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_user_leads_request when calling removeUserLeads'
            );
        }

        $resourcePath = '/users/{uid}/leads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uid !== null) {
            $resourcePath = str_replace(
                '{' . 'uid' . '}',
                ObjectSerializer::toPathValue($uid),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($update_user_leads_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_user_leads_request));
            } else {
                $httpBody = $update_user_leads_request;
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
            'DELETE',
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
