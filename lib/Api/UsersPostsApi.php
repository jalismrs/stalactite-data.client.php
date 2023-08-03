<?php
/**
 * UsersPostsApi
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Jalismrs\Stalactite\Client\Data\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Jalismrs\Stalactite\Client\Data\ApiException;
use Jalismrs\Stalactite\Client\Data\Configuration;
use Jalismrs\Stalactite\Client\Data\HeaderSelector;
use Jalismrs\Stalactite\Client\Data\ObjectSerializer;

/**
 * UsersPostsApi Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Data
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsersPostsApi
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
        'addUserPosts' => [
            'application/json',
        ],
        'getUserPosts' => [
            'application/json',
        ],
        'removeUserPosts' => [
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
     * Operation addUserPosts
     *
     * @param  string $uid uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addUserPosts($uid, $update_user_posts_request, string $contentType = self::contentTypes['addUserPosts'][0])
    {
        $this->addUserPostsWithHttpInfo($uid, $update_user_posts_request, $contentType);
    }

    /**
     * Operation addUserPostsWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addUserPostsWithHttpInfo($uid, $update_user_posts_request, string $contentType = self::contentTypes['addUserPosts'][0])
    {
        $request = $this->addUserPostsRequest($uid, $update_user_posts_request, $contentType);

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
     * Operation addUserPostsAsync
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addUserPostsAsync($uid, $update_user_posts_request, string $contentType = self::contentTypes['addUserPosts'][0])
    {
        return $this->addUserPostsAsyncWithHttpInfo($uid, $update_user_posts_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addUserPostsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addUserPostsAsyncWithHttpInfo($uid, $update_user_posts_request, string $contentType = self::contentTypes['addUserPosts'][0])
    {
        $returnType = '';
        $request = $this->addUserPostsRequest($uid, $update_user_posts_request, $contentType);

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
     * Create request for operation 'addUserPosts'
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addUserPostsRequest($uid, $update_user_posts_request, string $contentType = self::contentTypes['addUserPosts'][0])
    {

        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling addUserPosts'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersPostsApi.addUserPosts, must conform to the pattern /[a-z0-9]{64}/.");
        }
        
        // verify the required parameter 'update_user_posts_request' is set
        if ($update_user_posts_request === null || (is_array($update_user_posts_request) && count($update_user_posts_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_user_posts_request when calling addUserPosts'
            );
        }


        $resourcePath = '/users/{uid}/posts';
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


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_user_posts_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_user_posts_request));
            } else {
                $httpBody = $update_user_posts_request;
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
     * Operation getUserPosts
     *
     * @param  string $uid uid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jalismrs\Stalactite\Client\Data\Model\Post[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError
     */
    public function getUserPosts($uid, string $contentType = self::contentTypes['getUserPosts'][0])
    {
        list($response) = $this->getUserPostsWithHttpInfo($uid, $contentType);
        return $response;
    }

    /**
     * Operation getUserPostsWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jalismrs\Stalactite\Client\Data\Model\Post[]|\Jalismrs\Stalactite\Client\Data\Model\ApiError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserPostsWithHttpInfo($uid, string $contentType = self::contentTypes['getUserPosts'][0])
    {
        $request = $this->getUserPostsRequest($uid, $contentType);

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
                    if ('\Jalismrs\Stalactite\Client\Data\Model\Post[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Jalismrs\Stalactite\Client\Data\Model\Post[]' !== 'string') {
                            $content = json_decode($content);
                        }
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
                        if ('\Jalismrs\Stalactite\Client\Data\Model\ApiError' !== 'string') {
                            $content = json_decode($content);
                        }
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
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
     * Operation getUserPostsAsync
     *
     * @param  string $uid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserPostsAsync($uid, string $contentType = self::contentTypes['getUserPosts'][0])
    {
        return $this->getUserPostsAsyncWithHttpInfo($uid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserPostsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserPostsAsyncWithHttpInfo($uid, string $contentType = self::contentTypes['getUserPosts'][0])
    {
        $returnType = '\Jalismrs\Stalactite\Client\Data\Model\Post[]';
        $request = $this->getUserPostsRequest($uid, $contentType);

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
     * Create request for operation 'getUserPosts'
     *
     * @param  string $uid (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUserPostsRequest($uid, string $contentType = self::contentTypes['getUserPosts'][0])
    {

        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling getUserPosts'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersPostsApi.getUserPosts, must conform to the pattern /[a-z0-9]{64}/.");
        }
        

        $resourcePath = '/users/{uid}/posts';
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


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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
     * Operation removeUserPosts
     *
     * @param  string $uid uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeUserPosts($uid, $update_user_posts_request, string $contentType = self::contentTypes['removeUserPosts'][0])
    {
        $this->removeUserPostsWithHttpInfo($uid, $update_user_posts_request, $contentType);
    }

    /**
     * Operation removeUserPostsWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeUserPosts'] to see the possible values for this operation
     *
     * @throws \Jalismrs\Stalactite\Client\Data\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeUserPostsWithHttpInfo($uid, $update_user_posts_request, string $contentType = self::contentTypes['removeUserPosts'][0])
    {
        $request = $this->removeUserPostsRequest($uid, $update_user_posts_request, $contentType);

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
     * Operation removeUserPostsAsync
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserPostsAsync($uid, $update_user_posts_request, string $contentType = self::contentTypes['removeUserPosts'][0])
    {
        return $this->removeUserPostsAsyncWithHttpInfo($uid, $update_user_posts_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeUserPostsAsyncWithHttpInfo
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeUserPostsAsyncWithHttpInfo($uid, $update_user_posts_request, string $contentType = self::contentTypes['removeUserPosts'][0])
    {
        $returnType = '';
        $request = $this->removeUserPostsRequest($uid, $update_user_posts_request, $contentType);

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
     * Create request for operation 'removeUserPosts'
     *
     * @param  string $uid (required)
     * @param  \Jalismrs\Stalactite\Client\Data\Model\UpdateUserPostsRequest $update_user_posts_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeUserPosts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removeUserPostsRequest($uid, $update_user_posts_request, string $contentType = self::contentTypes['removeUserPosts'][0])
    {

        // verify the required parameter 'uid' is set
        if ($uid === null || (is_array($uid) && count($uid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uid when calling removeUserPosts'
            );
        }
        if (!preg_match("/[a-z0-9]{64}/", $uid)) {
            throw new \InvalidArgumentException("invalid value for \"uid\" when calling UsersPostsApi.removeUserPosts, must conform to the pattern /[a-z0-9]{64}/.");
        }
        
        // verify the required parameter 'update_user_posts_request' is set
        if ($update_user_posts_request === null || (is_array($update_user_posts_request) && count($update_user_posts_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_user_posts_request when calling removeUserPosts'
            );
        }


        $resourcePath = '/users/{uid}/posts';
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


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_user_posts_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_user_posts_request));
            } else {
                $httpBody = $update_user_posts_request;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
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
