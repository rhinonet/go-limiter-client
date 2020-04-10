<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

// php:generate protoc --proto_path=./../protos   --php_out=./   --grpc_out=./ --plugin=protoc-gen-grpc=./../../bins/opt/grpc_php_plugin ./../protos/helloworld.proto

require dirname(__FILE__).'/vendor/autoload.php';

//AcquireReply.php  AcquireRequest.php  CreateReply.php  CreateRequest.php  GetRateReply.php  GetRateRequest.php  RateLimiterClient.php  TryAcquireReply.php  TryAcquireRequest.php
@include_once dirname(__FILE__).'/Limiter/RateLimiterClient.php';
@include_once dirname(__FILE__).'/Limiter/AcquireReply.php';
@include_once dirname(__FILE__).'/Limiter/AcquireRequest.php';
@include_once dirname(__FILE__).'/Limiter/CreateReply.php';
@include_once dirname(__FILE__).'/Limiter/CreateRequest.php';
@include_once dirname(__FILE__).'/Limiter/GetRateReply.php';
@include_once dirname(__FILE__).'/Limiter/GetRateRequest.php';
@include_once dirname(__FILE__).'/Limiter/TryAcquireReply.php';
@include_once dirname(__FILE__).'/Limiter/TryAcquireRequest.php';
@include_once dirname(__FILE__).'/GPBMetadata/RateLimiter.php';

function greet($alias)
{
    $client = new Limiter\RateLimiterClient('localhost:50053', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new Limiter\GetRateRequest();
    $request->setAlias($alias);
    list($reply, $status) = $client->GetRate($request)->wait();
    $mes['ret'] = $reply->getRet();

   $mes['permits'] = $reply->getPermits();

    return $mes;
}

var_dump(greet("project1"));
