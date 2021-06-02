<?php
// This file was auto-generated from sdk-root/src/data/resourcegroupstaggingapi/2017-01-26/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-01-26', 'endpointPrefix' => 'tagging', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Resource Groups Tagging API', 'signatureVersion' => 'v4', 'targetPrefix' => 'ResourceGroupsTaggingAPI_20170126', 'uid' => 'resourcegroupstaggingapi-2017-01-26', ], 'operations' => [ 'GetResources' => [ 'name' => 'GetResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourcesInput', ], 'output' => [ 'shape' => 'GetResourcesOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'InternalServiceException', ], [ 'shape' => 'PaginationTokenExpiredException', ], ], ], 'GetTagKeys' => [ 'name' => 'GetTagKeys', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTagKeysInput', ], 'output' => [ 'shape' => 'GetTagKeysOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'InternalServiceException', ], [ 'shape' => 'PaginationTokenExpiredException', ], ], ], 'GetTagValues' => [ 'name' => 'GetTagValues', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTagValuesInput', ], 'output' => [ 'shape' => 'GetTagValuesOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'InternalServiceException', ], [ 'shape' => 'PaginationTokenExpiredException', ], ], ], 'TagResources' => [ 'name' => 'TagResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourcesInput', ], 'output' => [ 'shape' => 'TagResourcesOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'UntagResources' => [ 'name' => 'UntagResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourcesInput', ], 'output' => [ 'shape' => 'UntagResourcesOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ThrottledException', ], [ 'shape' => 'InternalServiceException', ], ], ], ], 'shapes' => [ 'AmazonResourceType' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ErrorCode' => [ 'type' => 'string', 'enum' => [ 'InternalServiceException', 'InvalidParameterException', ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExceptionMessage' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, ], 'FailedResourcesMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'ResourceARN', ], 'value' => [ 'shape' => 'FailureInfo', ], ], 'FailureInfo' => [ 'type' => 'structure', 'members' => [ 'StatusCode' => [ 'shape' => 'StatusCode', ], 'ErrorCode' => [ 'shape' => 'ErrorCode', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'GetResourcesInput' => [ 'type' => 'structure', 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], 'TagFilters' => [ 'shape' => 'TagFilterList', ], 'ResourcesPerPage' => [ 'shape' => 'ResourcesPerPage', ], 'TagsPerPage' => [ 'shape' => 'TagsPerPage', ], 'ResourceTypeFilters' => [ 'shape' => 'ResourceTypeFilterList', ], ], ], 'GetResourcesOutput' => [ 'type' => 'structure', 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], 'ResourceTagMappingList' => [ 'shape' => 'ResourceTagMappingList', ], ], ], 'GetTagKeysInput' => [ 'type' => 'structure', 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], ], ], 'GetTagKeysOutput' => [ 'type' => 'structure', 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'GetTagValuesInput' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], 'Key' => [ 'shape' => 'TagKey', ], ], ], 'GetTagValuesOutput' => [ 'type' => 'structure', 'members' => [ 'PaginationToken' => [ 'shape' => 'PaginationToken', ], 'TagValues' => [ 'shape' => 'TagValuesOutputList', ], ], ], 'InternalServiceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, ], 'PaginationTokenExpiredException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'ResourceARN' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, ], 'ResourceARNList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceARN', ], 'max' => 20, 'min' => 1, ], 'ResourceTagMapping' => [ 'type' => 'structure', 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'ResourceTagMappingList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceTagMapping', ], ], 'ResourceTypeFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AmazonResourceType', ], ], 'ResourcesPerPage' => [ 'type' => 'integer', ], 'StatusCode' => [ 'type' => 'integer', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagFilter' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Values' => [ 'shape' => 'TagValueList', ], ], ], 'TagFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagFilter', ], 'max' => 50, 'min' => 0, ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagKeyListForUntag' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 1, ], 'TagResourcesInput' => [ 'type' => 'structure', 'required' => [ 'ResourceARNList', 'Tags', ], 'members' => [ 'ResourceARNList' => [ 'shape' => 'ResourceARNList', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourcesOutput' => [ 'type' => 'structure', 'members' => [ 'FailedResourcesMap' => [ 'shape' => 'FailedResourcesMap', ], ], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'TagValueList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagValue', ], 'max' => 20, 'min' => 0, ], 'TagValuesOutputList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagValue', ], ], 'TagsPerPage' => [ 'type' => 'integer', ], 'ThrottledException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'exception' => true, ], 'UntagResourcesInput' => [ 'type' => 'structure', 'required' => [ 'ResourceARNList', 'TagKeys', ], 'members' => [ 'ResourceARNList' => [ 'shape' => 'ResourceARNList', ], 'TagKeys' => [ 'shape' => 'TagKeyListForUntag', ], ], ], 'UntagResourcesOutput' => [ 'type' => 'structure', 'members' => [ 'FailedResourcesMap' => [ 'shape' => 'FailedResourcesMap', ], ], ], ],];
