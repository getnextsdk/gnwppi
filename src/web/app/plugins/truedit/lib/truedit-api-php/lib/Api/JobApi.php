<?php
/**
 * JobApi
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
 * JobApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobApi {

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
		$this->client         = $client ?: new Client();
		$this->config         = $config ?: new Configuration();
		$this->headerSelector = $selector ?: new HeaderSelector();
	}

	/**
	 * @return Configuration
	 */
	public function getConfig() {
		return $this->config;
	}

	/**
	 * Operation fetchAllUsingGET3
	 *
	 * Fetch all available Revision objects for a Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  bool $minimal minimal (optional, default to false)
	 * @param  int $page_number pageNumber (optional, default to 1)
	 * @param  int $page_size pageSize (optional, default to 100)
	 * @param  string[] $order_by orderBy (optional, default to name asc)
	 * @param  string $x_api_key x_api_key (optional)
	 * @param  string $x_app_api_key x_app_api_key (optional)
	 * @param  string $accept_language accept_language (optional)
	 *
	 * @throws \Swagger\Client\ApiException on non-2xx response
	 * @throws \InvalidArgumentException
	 * @return \Swagger\Client\Model\API1ResultListResponseRevisionV1TO_
	 */
	public function fetchAllUsingGET3( $job_id, $minimal = 'false', $page_number = '1', $page_size = '100', $order_by = 'name asc', $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		list($response) = $this->fetchAllUsingGET3WithHttpInfo( $job_id, $minimal, $page_number, $page_size, $order_by, $x_api_key, $x_app_api_key, $accept_language );
		return $response;
	}

	/**
	 * Operation fetchAllUsingGET3WithHttpInfo
	 *
	 * Fetch all available Revision objects for a Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  bool $minimal minimal (optional, default to false)
	 * @param  int $page_number pageNumber (optional, default to 1)
	 * @param  int $page_size pageSize (optional, default to 100)
	 * @param  string[] $order_by orderBy (optional, default to name asc)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \Swagger\Client\ApiException on non-2xx response
	 * @throws \InvalidArgumentException
	 * @return array of \Swagger\Client\Model\API1ResultListResponseRevisionV1TO_, HTTP status code, HTTP response headers (array of strings)
	 */
	public function fetchAllUsingGET3WithHttpInfo( $job_id, $minimal = 'false', $page_number = '1', $page_size = '100', $order_by = 'name asc', $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '\Swagger\Client\Model\API1ResultListResponseRevisionV1TO_';
		$request    = $this->fetchAllUsingGET3Request( $job_id, $minimal, $page_number, $page_size, $order_by, $x_api_key, $x_app_api_key, $accept_language );

		try {
			$options = $this->createHttpClientOption();
			try {
				$response = $this->client->send( $request, $options );
			} catch ( RequestException $e ) {
				throw new ApiException(
					"[{$e->getCode()}] {$e->getMessage()}",
					$e->getCode(),
					$e->getResponse() ? $e->getResponse()->getHeaders() : null,
					$e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
				);
			}

			$statusCode = $response->getStatusCode();

			if ( $statusCode < 200 || $statusCode > 299 ) {
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
			if ( $returnType === '\SplFileObject' ) {
				$content = $responseBody; //stream goes to serializer
			} else {
				$content = $responseBody->getContents();
				if ( $returnType !== 'string' ) {
					$content = json_decode( $content );
				}
			}

			return [
				ObjectSerializer::deserialize( $content, $returnType, [] ),
				$response->getStatusCode(),
				$response->getHeaders(),
			];

		} catch ( ApiException $e ) {
			switch ( $e->getCode() ) {
				case 200:
					$data = ObjectSerializer::deserialize(
						$e->getResponseBody(),
						'\Swagger\Client\Model\API1ResultListResponseRevisionV1TO_',
						$e->getResponseHeaders()
					);
					$e->setResponseObject( $data );
					break;
			}
			throw $e;
		}
	}

	/**
	 * Operation fetchAllUsingGET3Async
	 *
	 * Fetch all available Revision objects for a Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  bool $minimal minimal (optional, default to false)
	 * @param  int $page_number pageNumber (optional, default to 1)
	 * @param  int $page_size pageSize (optional, default to 100)
	 * @param  string[] $order_by orderBy (optional, default to name asc)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Promise\PromiseInterface
	 */
	public function fetchAllUsingGET3Async( $job_id, $minimal = 'false', $page_number = '1', $page_size = '100', $order_by = 'name asc', $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		return $this->fetchAllUsingGET3AsyncWithHttpInfo( $job_id, $minimal, $page_number, $page_size, $order_by, $x_api_key, $x_app_api_key, $accept_language )
			->then(
				function ( $response ) {
					return $response[0];
				}
			);
	}

	/**
	 * Operation fetchAllUsingGET3AsyncWithHttpInfo
	 *
	 * Fetch all available Revision objects for a Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  bool $minimal minimal (optional, default to false)
	 * @param  int $page_number pageNumber (optional, default to 1)
	 * @param  int $page_size pageSize (optional, default to 100)
	 * @param  string[] $order_by orderBy (optional, default to name asc)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Promise\PromiseInterface
	 */
	public function fetchAllUsingGET3AsyncWithHttpInfo( $job_id, $minimal = 'false', $page_number = '1', $page_size = '100', $order_by = 'name asc', $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '\Swagger\Client\Model\API1ResultListResponseRevisionV1TO_';
		$request    = $this->fetchAllUsingGET3Request( $job_id, $minimal, $page_number, $page_size, $order_by, $x_api_key, $x_app_api_key, $accept_language );

		return $this->client
			->sendAsync( $request, $this->createHttpClientOption() )
			->then(
				function ( $response ) use ( $returnType ) {
					$responseBody = $response->getBody();
					if ( $returnType === '\SplFileObject' ) {
						$content = $responseBody; //stream goes to serializer
					} else {
						$content = $responseBody->getContents();
						if ( $returnType !== 'string' ) {
							$content = json_decode( $content );
						}
					}

					return [
						ObjectSerializer::deserialize( $content, $returnType, [] ),
						$response->getStatusCode(),
						$response->getHeaders(),
					];
				},
				function ( $exception ) {
					$response   = $exception->getResponse();
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
	 * Create request for operation 'fetchAllUsingGET3'
	 *
	 * @param  int $job_id jobID (required)
	 * @param  bool $minimal minimal (optional, default to false)
	 * @param  int $page_number pageNumber (optional, default to 1)
	 * @param  int $page_size pageSize (optional, default to 100)
	 * @param  string[] $order_by orderBy (optional, default to name asc)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	protected function fetchAllUsingGET3Request( $job_id, $minimal = 'false', $page_number = '1', $page_size = '100', $order_by = 'name asc', $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		// verify the required parameter 'job_id' is set
		if ( $job_id === null ) {
			throw new \InvalidArgumentException(
				'Missing the required parameter $job_id when calling fetchAllUsingGET3'
			);
		}

		$resourcePath = '/1/job/{jobID}/revision';
		$formParams   = [];
		$queryParams  = [];
		$headerParams = [];
		$httpBody     = '';
		$multipart    = false;

		// query params
		if ( $minimal !== null ) {
			$queryParams['minimal'] = ObjectSerializer::toQueryValue( $minimal );
		}
		// query params
		if ( $page_number !== null ) {
			$queryParams['pageNumber'] = ObjectSerializer::toQueryValue( $page_number );
		}
		// query params
		if ( $page_size !== null ) {
			$queryParams['pageSize'] = ObjectSerializer::toQueryValue( $page_size );
		}
		// query params
		if ( is_array( $order_by ) ) {
			$order_by = ObjectSerializer::serializeCollection( $order_by, 'multi', true );
		}
		if ( $order_by !== null ) {
			$queryParams['orderBy'] = ObjectSerializer::toQueryValue( $order_by );
		}
		// header params
		if ( $x_api_key !== null ) {
			$headerParams['x-api-key'] = ObjectSerializer::toHeaderValue( $x_api_key );
		}
		// header params
		if ( $x_app_api_key !== null ) {
			$headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue( $x_app_api_key );
		}
		// header params
		if ( $accept_language !== null ) {
			$headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue( $accept_language );
		}

		// path params
		if ( $job_id !== null ) {
			$resourcePath = str_replace(
				'{' . 'jobID' . '}',
				ObjectSerializer::toPathValue( $job_id ),
				$resourcePath
			);
		}

		// body params
		$_tempBody = null;

		if ( $multipart ) {
			$headers = $this->headerSelector->selectHeadersForMultipart(
				[ '*/*' ]
			);
		} else {
			$headers = $this->headerSelector->selectHeaders(
				[ '*/*' ],
				[]
			);
		}

		// for model (json/xml)
		if ( isset( $_tempBody ) ) {
			// $_tempBody is the method argument, if present
			$httpBody = $_tempBody;
			// \stdClass has no __toString(), so we should encode it manually
			if ( $httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $httpBody );
			}
		} elseif ( count( $formParams ) > 0 ) {
			if ( $multipart ) {
				$multipartContents = [];
				foreach ( $formParams as $formParamName => $formParamValue ) {
					$multipartContents[] = [
						'name'     => $formParamName,
						'contents' => $formParamValue,
					];
				}
				// for HTTP post (form)
				$httpBody = new MultipartStream( $multipartContents );

			} elseif ( $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $formParams );

			} else {
				// for HTTP post (form)
				$httpBody = \GuzzleHttp\Psr7\build_query( $formParams );
			}
		}

		$defaultHeaders = [];
		if ( $this->config->getUserAgent() ) {
			$defaultHeaders['User-Agent'] = $this->config->getUserAgent();
		}

		$headers = array_merge(
			$defaultHeaders,
			$headerParams,
			$headers
		);

		$query = \GuzzleHttp\Psr7\build_query( $queryParams );
		return new Request(
			'GET',
			$this->config->getHost() . $resourcePath . ( $query ? "?{$query}" : '' ),
			$headers,
			$httpBody
		);
	}

	/**
	 * Operation fetchOneUsingGET
	 *
	 * Fetch a single specicified Revision from a specified Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  int $rev_id revID (required)
	 * @param  string $x_api_key x_api_key (optional)
	 * @param  string $x_app_api_key x_app_api_key (optional)
	 * @param  string $accept_language accept_language (optional)
	 *
	 * @throws \Swagger\Client\ApiException on non-2xx response
	 * @throws \InvalidArgumentException
	 * @return \Swagger\Client\Model\API1SingleResultResponseRevisionV1TO_
	 */
	public function fetchOneUsingGET( $job_id, $rev_id, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		list($response) = $this->fetchOneUsingGETWithHttpInfo( $job_id, $rev_id, $x_api_key, $x_app_api_key, $accept_language );
		return $response;
	}

	/**
	 * Operation fetchOneUsingGETWithHttpInfo
	 *
	 * Fetch a single specicified Revision from a specified Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  int $rev_id revID (required)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \Swagger\Client\ApiException on non-2xx response
	 * @throws \InvalidArgumentException
	 * @return array of \Swagger\Client\Model\API1SingleResultResponseRevisionV1TO_, HTTP status code, HTTP response headers (array of strings)
	 */
	public function fetchOneUsingGETWithHttpInfo( $job_id, $rev_id, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '\Swagger\Client\Model\API1SingleResultResponseRevisionV1TO_';
		$request    = $this->fetchOneUsingGETRequest( $job_id, $rev_id, $x_api_key, $x_app_api_key, $accept_language );

		try {
			$options = $this->createHttpClientOption();
			try {
				$response = $this->client->send( $request, $options );
			} catch ( RequestException $e ) {
				throw new ApiException(
					"[{$e->getCode()}] {$e->getMessage()}",
					$e->getCode(),
					$e->getResponse() ? $e->getResponse()->getHeaders() : null,
					$e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
				);
			}

			$statusCode = $response->getStatusCode();

			if ( $statusCode < 200 || $statusCode > 299 ) {
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
			if ( $returnType === '\SplFileObject' ) {
				$content = $responseBody; //stream goes to serializer
			} else {
				$content = $responseBody->getContents();
				if ( $returnType !== 'string' ) {
					$content = json_decode( $content );
				}
			}

			return [
				ObjectSerializer::deserialize( $content, $returnType, [] ),
				$response->getStatusCode(),
				$response->getHeaders(),
			];

		} catch ( ApiException $e ) {
			switch ( $e->getCode() ) {
				case 200:
					$data = ObjectSerializer::deserialize(
						$e->getResponseBody(),
						'\Swagger\Client\Model\API1SingleResultResponseRevisionV1TO_',
						$e->getResponseHeaders()
					);
					$e->setResponseObject( $data );
					break;
			}
			throw $e;
		}
	}

	/**
	 * Operation fetchOneUsingGETAsync
	 *
	 * Fetch a single specicified Revision from a specified Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  int $rev_id revID (required)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Promise\PromiseInterface
	 */
	public function fetchOneUsingGETAsync( $job_id, $rev_id, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		return $this->fetchOneUsingGETAsyncWithHttpInfo( $job_id, $rev_id, $x_api_key, $x_app_api_key, $accept_language )
			->then(
				function ( $response ) {
					return $response[0];
				}
			);
	}

	/**
	 * Operation fetchOneUsingGETAsyncWithHttpInfo
	 *
	 * Fetch a single specicified Revision from a specified Job.
	 *
	 * @param  int $job_id jobID (required)
	 * @param  int $rev_id revID (required)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Promise\PromiseInterface
	 */
	public function fetchOneUsingGETAsyncWithHttpInfo( $job_id, $rev_id, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '\Swagger\Client\Model\API1SingleResultResponseRevisionV1TO_';
		$request    = $this->fetchOneUsingGETRequest( $job_id, $rev_id, $x_api_key, $x_app_api_key, $accept_language );

		return $this->client
			->sendAsync( $request, $this->createHttpClientOption() )
			->then(
				function ( $response ) use ( $returnType ) {
					$responseBody = $response->getBody();
					if ( $returnType === '\SplFileObject' ) {
						$content = $responseBody; //stream goes to serializer
					} else {
						$content = $responseBody->getContents();
						if ( $returnType !== 'string' ) {
							$content = json_decode( $content );
						}
					}

					return [
						ObjectSerializer::deserialize( $content, $returnType, [] ),
						$response->getStatusCode(),
						$response->getHeaders(),
					];
				},
				function ( $exception ) {
					$response   = $exception->getResponse();
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
	 * Create request for operation 'fetchOneUsingGET'
	 *
	 * @param  int $job_id jobID (required)
	 * @param  int $rev_id revID (required)
	 * @param  string $x_api_key (optional)
	 * @param  string $x_app_api_key (optional)
	 * @param  string $accept_language (optional)
	 *
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	protected function fetchOneUsingGETRequest( $job_id, $rev_id, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		// verify the required parameter 'job_id' is set
		if ( $job_id === null ) {
			throw new \InvalidArgumentException(
				'Missing the required parameter $job_id when calling fetchOneUsingGET'
			);
		}
		// verify the required parameter 'rev_id' is set
		if ( $rev_id === null ) {
			throw new \InvalidArgumentException(
				'Missing the required parameter $rev_id when calling fetchOneUsingGET'
			);
		}

		$resourcePath = '/1/job/{jobID}/revision/{revID}';
		$formParams   = [];
		$queryParams  = [];
		$headerParams = [];
		$httpBody     = '';
		$multipart    = false;

		// header params
		if ( $x_api_key !== null ) {
			$headerParams['x-api-key'] = ObjectSerializer::toHeaderValue( $x_api_key );
		}
		// header params
		if ( $x_app_api_key !== null ) {
			$headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue( $x_app_api_key );
		}
		// header params
		if ( $accept_language !== null ) {
			$headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue( $accept_language );
		}

		// path params
		if ( $job_id !== null ) {
			$resourcePath = str_replace(
				'{' . 'jobID' . '}',
				ObjectSerializer::toPathValue( $job_id ),
				$resourcePath
			);
		}
		// path params
		if ( $rev_id !== null ) {
			$resourcePath = str_replace(
				'{' . 'revID' . '}',
				ObjectSerializer::toPathValue( $rev_id ),
				$resourcePath
			);
		}

		// body params
		$_tempBody = null;

		if ( $multipart ) {
			$headers = $this->headerSelector->selectHeadersForMultipart(
				[ '*/*' ]
			);
		} else {
			$headers = $this->headerSelector->selectHeaders(
				[ '*/*' ],
				[]
			);
		}

		// for model (json/xml)
		if ( isset( $_tempBody ) ) {
			// $_tempBody is the method argument, if present
			$httpBody = $_tempBody;
			// \stdClass has no __toString(), so we should encode it manually
			if ( $httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $httpBody );
			}
		} elseif ( count( $formParams ) > 0 ) {
			if ( $multipart ) {
				$multipartContents = [];
				foreach ( $formParams as $formParamName => $formParamValue ) {
					$multipartContents[] = [
						'name'     => $formParamName,
						'contents' => $formParamValue,
					];
				}
				// for HTTP post (form)
				$httpBody = new MultipartStream( $multipartContents );

			} elseif ( $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $formParams );

			} else {
				// for HTTP post (form)
				$httpBody = \GuzzleHttp\Psr7\build_query( $formParams );
			}
		}

		$defaultHeaders = [];
		if ( $this->config->getUserAgent() ) {
			$defaultHeaders['User-Agent'] = $this->config->getUserAgent();
		}

		$headers = array_merge(
			$defaultHeaders,
			$headerParams,
			$headers
		);

		$query = \GuzzleHttp\Psr7\build_query( $queryParams );
		return new Request(
			'GET',
			$this->config->getHost() . $resourcePath . ( $query ? "?{$query}" : '' ),
			$headers,
			$httpBody
		);
	}

	/**
	 * Operation retrieveJobWorkingFileUsingGET1
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
	public function retrieveJobWorkingFileUsingGET1( $job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$this->retrieveJobWorkingFileUsingGET1WithHttpInfo( $job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language );
	}

	/**
	 * Operation retrieveJobWorkingFileUsingGET1WithHttpInfo
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
	public function retrieveJobWorkingFileUsingGET1WithHttpInfo( $job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '';
		$request    = $this->retrieveJobWorkingFileUsingGET1Request( $job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language );

		try {
			$options = $this->createHttpClientOption();
			try {
				$response = $this->client->send( $request, $options );
			} catch ( RequestException $e ) {
				throw new ApiException(
					"[{$e->getCode()}] {$e->getMessage()}",
					$e->getCode(),
					$e->getResponse() ? $e->getResponse()->getHeaders() : null,
					$e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
				);
			}

			$statusCode = $response->getStatusCode();

			if ( $statusCode < 200 || $statusCode > 299 ) {
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

			return [ null, $statusCode, $response->getHeaders() ];

		} catch ( ApiException $e ) {
			switch ( $e->getCode() ) {
			}
			throw $e;
		}
	}

	/**
	 * Operation retrieveJobWorkingFileUsingGET1Async
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
	public function retrieveJobWorkingFileUsingGET1Async( $job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		return $this->retrieveJobWorkingFileUsingGET1AsyncWithHttpInfo( $job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language )
			->then(
				function ( $response ) {
					return $response[0];
				}
			);
	}

	/**
	 * Operation retrieveJobWorkingFileUsingGET1AsyncWithHttpInfo
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
	public function retrieveJobWorkingFileUsingGET1AsyncWithHttpInfo( $job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		$returnType = '';
		$request    = $this->retrieveJobWorkingFileUsingGET1Request( $job_id, $dl, $version, $x_api_key, $x_app_api_key, $accept_language );

		return $this->client
			->sendAsync( $request, $this->createHttpClientOption() )
			->then(
				function ( $response ) use ( $returnType ) {
					return [ null, $response->getStatusCode(), $response->getHeaders() ];
				},
				function ( $exception ) {
					$response   = $exception->getResponse();
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
	 * Create request for operation 'retrieveJobWorkingFileUsingGET1'
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
	protected function retrieveJobWorkingFileUsingGET1Request( $job_id, $dl = 'false', $version = null, $x_api_key = null, $x_app_api_key = null, $accept_language = null ) {
		// verify the required parameter 'job_id' is set
		if ( $job_id === null ) {
			throw new \InvalidArgumentException(
				'Missing the required parameter $job_id when calling retrieveJobWorkingFileUsingGET1'
			);
		}

		$resourcePath = '/1/job/{jobID}/workingFile';
		$formParams   = [];
		$queryParams  = [];
		$headerParams = [];
		$httpBody     = '';
		$multipart    = false;

		// query params
		if ( $dl !== null ) {
			$queryParams['dl'] = ObjectSerializer::toQueryValue( $dl );
		}
		// query params
		if ( $version !== null ) {
			$queryParams['version'] = ObjectSerializer::toQueryValue( $version );
		}
		// header params
		if ( $x_api_key !== null ) {
			$headerParams['x-api-key'] = ObjectSerializer::toHeaderValue( $x_api_key );
		}
		// header params
		if ( $x_app_api_key !== null ) {
			$headerParams['x-app-api-key'] = ObjectSerializer::toHeaderValue( $x_app_api_key );
		}
		// header params
		if ( $accept_language !== null ) {
			$headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue( $accept_language );
		}

		// path params
		if ( $job_id !== null ) {
			$resourcePath = str_replace(
				'{' . 'jobID' . '}',
				ObjectSerializer::toPathValue( $job_id ),
				$resourcePath
			);
		}

		// body params
		$_tempBody = null;

		if ( $multipart ) {
			$headers = $this->headerSelector->selectHeadersForMultipart(
				[ '*/*' ]
			);
		} else {
			$headers = $this->headerSelector->selectHeaders(
				[ '*/*' ],
				[]
			);
		}

		// for model (json/xml)
		if ( isset( $_tempBody ) ) {
			// $_tempBody is the method argument, if present
			$httpBody = $_tempBody;
			// \stdClass has no __toString(), so we should encode it manually
			if ( $httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $httpBody );
			}
		} elseif ( count( $formParams ) > 0 ) {
			if ( $multipart ) {
				$multipartContents = [];
				foreach ( $formParams as $formParamName => $formParamValue ) {
					$multipartContents[] = [
						'name'     => $formParamName,
						'contents' => $formParamValue,
					];
				}
				// for HTTP post (form)
				$httpBody = new MultipartStream( $multipartContents );

			} elseif ( $headers['Content-Type'] === 'application/json' ) {
				$httpBody = \GuzzleHttp\json_encode( $formParams );

			} else {
				// for HTTP post (form)
				$httpBody = \GuzzleHttp\Psr7\build_query( $formParams );
			}
		}

		$defaultHeaders = [];
		if ( $this->config->getUserAgent() ) {
			$defaultHeaders['User-Agent'] = $this->config->getUserAgent();
		}

		$headers = array_merge(
			$defaultHeaders,
			$headerParams,
			$headers
		);

		$query = \GuzzleHttp\Psr7\build_query( $queryParams );
		return new Request(
			'GET',
			$this->config->getHost() . $resourcePath . ( $query ? "?{$query}" : '' ),
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
	protected function createHttpClientOption() {
		$options = [];
		if ( $this->config->getDebug() ) {
			$options[ RequestOptions::DEBUG ] = fopen( $this->config->getDebugFile(), 'a' );
			if ( ! $options[ RequestOptions::DEBUG ] ) {
				throw new \RuntimeException( 'Failed to open the debug file: ' . $this->config->getDebugFile() );
			}
		}

		return $options;
	}
}
