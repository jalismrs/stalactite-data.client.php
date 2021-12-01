# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/jalismrs/stalactite-data-client.git"
    }
  ],
  "require": {
    "jalismrs/stalactite-data-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: StalactiteToken
$config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKey('X-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jalismrs\Stalactite\Client\Data\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-TOKEN', 'Bearer');


$apiInstance = new Jalismrs\Stalactite\Client\Data\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_customer_request = new \Jalismrs\Stalactite\Client\Data\Model\CreateCustomerRequest(); // \Jalismrs\Stalactite\Client\Data\Model\CreateCustomerRequest

try {
    $result = $apiInstance->createCustomer($create_customer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://stalactite.jalis.pro/data*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | 
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /customers/{uid} | 
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{uid} | 
*CustomersApi* | [**getCustomerBy**](docs/Api/CustomersApi.md#getcustomerby) | **GET** /customers/by | 
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | 
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /customers/{uid} | 
*CustomersAccessApi* | [**getCustomerAccessClearance**](docs/Api/CustomersAccessApi.md#getcustomeraccessclearance) | **GET** /customers/{customerUid}/access/{domainUid} | 
*CustomersAccessApi* | [**getMyCustomerAccessClearance**](docs/Api/CustomersAccessApi.md#getmycustomeraccessclearance) | **GET** /customers/me/access/{uid} | 
*CustomersMeApi* | [**getMeAsCustomer**](docs/Api/CustomersMeApi.md#getmeascustomer) | **GET** /customers/me | 
*CustomersRelationsApi* | [**getCustomerRelations**](docs/Api/CustomersRelationsApi.md#getcustomerrelations) | **GET** /customers/{uid}/relations | 
*CustomersRelationsApi* | [**getMyCustomerRelations**](docs/Api/CustomersRelationsApi.md#getmycustomerrelations) | **GET** /customers/me/relations | 
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /domains | 
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **DELETE** /domains/{uid} | 
*DomainsApi* | [**getDomain**](docs/Api/DomainsApi.md#getdomain) | **GET** /domains/{uid} | 
*DomainsApi* | [**getDomainBy**](docs/Api/DomainsApi.md#getdomainby) | **GET** /domains/by | 
*DomainsApi* | [**getDomains**](docs/Api/DomainsApi.md#getdomains) | **GET** /domains | 
*DomainsApi* | [**getDomainsNames**](docs/Api/DomainsApi.md#getdomainsnames) | **GET** /domains/names | 
*DomainsApi* | [**updateDomain**](docs/Api/DomainsApi.md#updatedomain) | **PUT** /domains/{uid} | 
*DomainsRelationsApi* | [**addCustomerRelations**](docs/Api/DomainsRelationsApi.md#addcustomerrelations) | **POST** /domains/{uid}/relations/customers | 
*DomainsRelationsApi* | [**addUserRelations**](docs/Api/DomainsRelationsApi.md#adduserrelations) | **POST** /domains/{uid}/relations/users | 
*DomainsRelationsApi* | [**getDomainRelations**](docs/Api/DomainsRelationsApi.md#getdomainrelations) | **GET** /domains/{uid}/relations | 
*PermissionsApi* | [**createPermission**](docs/Api/PermissionsApi.md#createpermission) | **POST** /permissions | 
*PermissionsApi* | [**deletePermission**](docs/Api/PermissionsApi.md#deletepermission) | **DELETE** /permissions/{uid} | 
*PermissionsApi* | [**getPermission**](docs/Api/PermissionsApi.md#getpermission) | **GET** /permissions/{uid} | 
*PermissionsApi* | [**getPermissions**](docs/Api/PermissionsApi.md#getpermissions) | **GET** /permissions | 
*PermissionsApi* | [**updatePermission**](docs/Api/PermissionsApi.md#updatepermission) | **PUT** /permissions/{uid} | 
*PostsApi* | [**addPostPermissions**](docs/Api/PostsApi.md#addpostpermissions) | **POST** /posts/{uid}/permissions | 
*PostsApi* | [**createPost**](docs/Api/PostsApi.md#createpost) | **POST** /posts | 
*PostsApi* | [**deletePost**](docs/Api/PostsApi.md#deletepost) | **DELETE** /posts/{uid} | 
*PostsApi* | [**deletePostPermissions**](docs/Api/PostsApi.md#deletepostpermissions) | **DELETE** /posts/{uid}/permissions | 
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /posts/{uid} | 
*PostsApi* | [**getPostUser**](docs/Api/PostsApi.md#getpostuser) | **GET** /posts/{uid}/users | 
*PostsApi* | [**getPosts**](docs/Api/PostsApi.md#getposts) | **GET** /posts | 
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /posts/{uid} | 
*RelationsApi* | [**deleteDomainCustomerRelation**](docs/Api/RelationsApi.md#deletedomaincustomerrelation) | **DELETE** /relations/customers/{uid} | 
*RelationsApi* | [**deleteDomainUserRelation**](docs/Api/RelationsApi.md#deletedomainuserrelation) | **DELETE** /relations/users/{uid} | 
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | 
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /users/{uid} | 
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{uid} | 
*UsersApi* | [**getUserBy**](docs/Api/UsersApi.md#getuserby) | **GET** /users/by | 
*UsersApi* | [**getUserSubordinates**](docs/Api/UsersApi.md#getusersubordinates) | **GET** /users/{uid}/subordinates | 
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | 
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /users/{uid} | 
*UsersAccessClearancesApi* | [**getMyAccessClearances**](docs/Api/UsersAccessClearancesApi.md#getmyaccessclearances) | **GET** /users/me/access/{domainUid} | 
*UsersAccessClearancesApi* | [**getUserAccessClearances**](docs/Api/UsersAccessClearancesApi.md#getuseraccessclearances) | **GET** /users/{userUid}/access/{domainUid} | 
*UsersLeadsApi* | [**addUserLeads**](docs/Api/UsersLeadsApi.md#adduserleads) | **POST** /users/{uid}/leads | 
*UsersLeadsApi* | [**getUserLeads**](docs/Api/UsersLeadsApi.md#getuserleads) | **GET** /users/{uid}/leads | 
*UsersLeadsApi* | [**removeUserLeads**](docs/Api/UsersLeadsApi.md#removeuserleads) | **DELETE** /users/{uid}/leads | 
*UsersMeApi* | [**getMeAsUser**](docs/Api/UsersMeApi.md#getmeasuser) | **GET** /users/me | 
*UsersMeApi* | [**getMyLeads**](docs/Api/UsersMeApi.md#getmyleads) | **GET** /users/me/leads | 
*UsersMeApi* | [**getMyPosts**](docs/Api/UsersMeApi.md#getmyposts) | **GET** /users/me/posts | 
*UsersMeApi* | [**getMySubordinates**](docs/Api/UsersMeApi.md#getmysubordinates) | **GET** /users/me/subordinates | 
*UsersPostsApi* | [**addUserPosts**](docs/Api/UsersPostsApi.md#adduserposts) | **POST** /users/{uid}/posts | 
*UsersPostsApi* | [**getUserPosts**](docs/Api/UsersPostsApi.md#getuserposts) | **GET** /users/{uid}/posts | 
*UsersPostsApi* | [**removeUserPosts**](docs/Api/UsersPostsApi.md#removeuserposts) | **DELETE** /users/{uid}/posts | 
*UsersRelationsApi* | [**getMyDomainRelations**](docs/Api/UsersRelationsApi.md#getmydomainrelations) | **GET** /users/me/relations | 
*UsersRelationsApi* | [**getUserDomainRelations**](docs/Api/UsersRelationsApi.md#getuserdomainrelations) | **GET** /users/{uid}/relations | 

## Models

- [AccessClearance](docs/Model/AccessClearance.md)
- [AddCustomerRelationsRequest](docs/Model/AddCustomerRelationsRequest.md)
- [AddUserRelationsRequest](docs/Model/AddUserRelationsRequest.md)
- [ApiError](docs/Model/ApiError.md)
- [CreateCustomerRequest](docs/Model/CreateCustomerRequest.md)
- [CreateDomainRequest](docs/Model/CreateDomainRequest.md)
- [CreatePermissionRequest](docs/Model/CreatePermissionRequest.md)
- [CreatePostRequest](docs/Model/CreatePostRequest.md)
- [CreateUserRequest](docs/Model/CreateUserRequest.md)
- [Customer](docs/Model/Customer.md)
- [Customer2](docs/Model/Customer2.md)
- [Customer3](docs/Model/Customer3.md)
- [Domain](docs/Model/Domain.md)
- [Domain2](docs/Model/Domain2.md)
- [DomainCustomerRelation](docs/Model/DomainCustomerRelation.md)
- [DomainCustomerRelation2](docs/Model/DomainCustomerRelation2.md)
- [DomainCustomerRelation3](docs/Model/DomainCustomerRelation3.md)
- [DomainUserRelation](docs/Model/DomainUserRelation.md)
- [DomainUserRelation2](docs/Model/DomainUserRelation2.md)
- [DomainUserRelation3](docs/Model/DomainUserRelation3.md)
- [GetCustomersResponse](docs/Model/GetCustomersResponse.md)
- [GetDomainRelationsResponse](docs/Model/GetDomainRelationsResponse.md)
- [GetDomainsResponse](docs/Model/GetDomainsResponse.md)
- [GetUsersResponse](docs/Model/GetUsersResponse.md)
- [PaginationMetas](docs/Model/PaginationMetas.md)
- [PaginationMetas2](docs/Model/PaginationMetas2.md)
- [Permission](docs/Model/Permission.md)
- [Permission2](docs/Model/Permission2.md)
- [Post](docs/Model/Post.md)
- [Post2](docs/Model/Post2.md)
- [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
- [UpdateDomainRequest](docs/Model/UpdateDomainRequest.md)
- [UpdatePermissionRequest](docs/Model/UpdatePermissionRequest.md)
- [UpdatePostPermissionsRequest](docs/Model/UpdatePostPermissionsRequest.md)
- [UpdatePostRequest](docs/Model/UpdatePostRequest.md)
- [UpdateUserLeadsRequest](docs/Model/UpdateUserLeadsRequest.md)
- [UpdateUserPostsRequest](docs/Model/UpdateUserPostsRequest.md)
- [UpdateUserRequest](docs/Model/UpdateUserRequest.md)
- [User](docs/Model/User.md)
- [User2](docs/Model/User2.md)
- [User3](docs/Model/User3.md)
- [User4](docs/Model/User4.md)

## Authorization

### StalactiteToken

- **Type**: API key
- **API key parameter name**: X-API-TOKEN
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.1`
    - Package version: `1.3.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
