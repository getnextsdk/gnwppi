<?php
/**
 * FileApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TruEdit REST API
 *
 * Welcome to the TruEdit Platform REST API Reference! You can use this REST API to develop integrations between TruEdit and other applications or script interactions with TruEdit.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * FileApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation retrieveFileUsingGET
     *
     * Fetch a specific file
     *
     * @param  int $id id (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key x_api_key (optional)
     * @param  string $x_app_api_key x_app_api_key (optional)
     * @param  string $accept_language accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function retrieveFileUsingGET($id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $this->retrieveFileUsingGETWithHttpInfo($id, $dl, $x_api_key, $x_app_api_key, $accept_language);
    }

    /**
     * Operation retrieveFileUsingGETWithHttpInfo
     *
     * Fetch a specific file
     *
     * @param  int $id id (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveFileUsingGETWithHttpInfo($id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveFileUsingGETRequest($id, $dl, $x_api_key, $x_app_api_key, $accept_language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveFileUsingGETAsync
     *
     * Fetch a specific file
     *
     * @param  int $id id (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveFileUsingGETAsync($id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        return $this->retrieveFileUsingGETAsyncWithHttpInfo($id, $dl, $x_api_key, $x_app_api_key, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveFileUsingGETAsyncWithHttpInfo
     *
     * Fetch a specific file
     *
     * @param  int $id id (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveFileUsingGETAsyncWithHttpInfo($id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveFileUsingGETRequest($id, $dl, $x_api_key, $x_app_api_key, $accept_language);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveFileUsingGET'
     *
     * @param  int $id id (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveFileUsingGETRequest($id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling retrieveFileUsingGET'
            );
        }

        $resourcePath = '/1/file/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($dl !== null) {
            $queryParams['dl'] = ObjectSerializer::toQueryValue($dl);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        // header params
        if ($x_app_api_key !== null) {
            $headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue($x_app_api_key);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation retrieveJobOutputFileUsingGET
     *
     * Fetch a specific output file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  int $output_type_id outputTypeID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key x_api_key (optional)
     * @param  string $x_app_api_key x_app_api_key (optional)
     * @param  string $accept_language accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function retrieveJobOutputFileUsingGET($job_id, $output_type_id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $this->retrieveJobOutputFileUsingGETWithHttpInfo($job_id, $output_type_id, $dl, $x_api_key, $x_app_api_key, $accept_language);
    }

    /**
     * Operation retrieveJobOutputFileUsingGETWithHttpInfo
     *
     * Fetch a specific output file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  int $output_type_id outputTypeID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveJobOutputFileUsingGETWithHttpInfo($job_id, $output_type_id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveJobOutputFileUsingGETRequest($job_id, $output_type_id, $dl, $x_api_key, $x_app_api_key, $accept_language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveJobOutputFileUsingGETAsync
     *
     * Fetch a specific output file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  int $output_type_id outputTypeID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveJobOutputFileUsingGETAsync($job_id, $output_type_id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        return $this->retrieveJobOutputFileUsingGETAsyncWithHttpInfo($job_id, $output_type_id, $dl, $x_api_key, $x_app_api_key, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveJobOutputFileUsingGETAsyncWithHttpInfo
     *
     * Fetch a specific output file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  int $output_type_id outputTypeID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveJobOutputFileUsingGETAsyncWithHttpInfo($job_id, $output_type_id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveJobOutputFileUsingGETRequest($job_id, $output_type_id, $dl, $x_api_key, $x_app_api_key, $accept_language);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveJobOutputFileUsingGET'
     *
     * @param  int $job_id jobID (required)
     * @param  int $output_type_id outputTypeID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveJobOutputFileUsingGETRequest($job_id, $output_type_id, $dl = 'false', $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        // verify the required parameter 'job_id' is set
        if ($job_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_id when calling retrieveJobOutputFileUsingGET'
            );
        }
        // verify the required parameter 'output_type_id' is set
        if ($output_type_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $output_type_id when calling retrieveJobOutputFileUsingGET'
            );
        }

        $resourcePath = '/1/file/job/{jobID}/outputType/{outputTypeID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($dl !== null) {
            $queryParams['dl'] = ObjectSerializer::toQueryValue($dl);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        // header params
        if ($x_app_api_key !== null) {
            $headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue($x_app_api_key);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($job_id !== null) {
            $resourcePath = str_replace(
                '{' . 'jobID' . '}',
                ObjectSerializer::toPathValue($job_id),
                $resourcePath
            );
        }
        // path params
        if ($output_type_id !== null) {
            $resourcePath = str_replace(
                '{' . 'outputTypeID' . '}',
                ObjectSerializer::toPathValue($output_type_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation retrieveJobWorkingFileUsingGET
     *
     * Fetch the working file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $version version (optional)
     * @param  string $x_api_key x_api_key (optional)
     * @param  string $x_app_api_key x_app_api_key (optional)
     * @param  string $accept_language accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function retrieveJobWorkingFileUsingGET($job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $this->retrieveJobWorkingFileUsingGETWithHttpInfo($job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language);
    }

    /**
     * Operation retrieveJobWorkingFileUsingGETWithHttpInfo
     *
     * Fetch the working file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $version version (optional)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveJobWorkingFileUsingGETWithHttpInfo($job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveJobWorkingFileUsingGETRequest($job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveJobWorkingFileUsingGETAsync
     *
     * Fetch the working file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $version version (optional)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveJobWorkingFileUsingGETAsync($job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        return $this->retrieveJobWorkingFileUsingGETAsyncWithHttpInfo($job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveJobWorkingFileUsingGETAsyncWithHttpInfo
     *
     * Fetch the working file for a specific job
     *
     * @param  int $job_id jobID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $version version (optional)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveJobWorkingFileUsingGETAsyncWithHttpInfo($job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        $returnType = '';
        $request = $this->retrieveJobWorkingFileUsingGETRequest($job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveJobWorkingFileUsingGET'
     *
     * @param  int $job_id jobID (required)
     * @param  bool $dl dl (optional, default to false)
     * @param  string $version version (optional)
     * @param  string $x_api_key (optional)
     * @param  string $x_app_api_key (optional)
     * @param  string $accept_language (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveJobWorkingFileUsingGETRequest($job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null)
    {
        // verify the required parameter 'job_id' is set
        if ($job_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_id when calling retrieveJobWorkingFileUsingGET'
            );
        }

        $resourcePath = '/1/file/job/{jobID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($dl !== null) {
            $queryParams['dl'] = ObjectSerializer::toQueryValue($dl);
        }
        // query params
        if ($version !== null) {
            $queryParams['version'] = ObjectSerializer::toQueryValue($version);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        // header params
        if ($x_app_api_key !== null) {
            $headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue($x_app_api_key);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }

        // path params
        if ($job_id !== null) {
            $resourcePath = str_replace(
                '{' . 'jobID' . '}',
                ObjectSerializer::toPathValue($job_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
