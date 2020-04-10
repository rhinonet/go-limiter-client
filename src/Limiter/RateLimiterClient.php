<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2015 gRPC authors.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Limiter;

/**
 * The rate limiter service definition.
 */
class RateLimiterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * create a limiter 
     * @param \Limiter\CreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Limiter\CreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/limiter.RateLimiter/Create',
        $argument,
        ['\Limiter\CreateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * get limiter permits
     * @param \Limiter\GetRateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetRate(\Limiter\GetRateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/limiter.RateLimiter/GetRate',
        $argument,
        ['\Limiter\GetRateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * acquire a token block in timeout
     * @param \Limiter\AcquireRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Acquire(\Limiter\AcquireRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/limiter.RateLimiter/Acquire',
        $argument,
        ['\Limiter\AcquireReply', 'decode'],
        $metadata, $options);
    }

    /**
     * acquire a token at once
     * @param \Limiter\TryAcquireRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TryAcquire(\Limiter\TryAcquireRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/limiter.RateLimiter/TryAcquire',
        $argument,
        ['\Limiter\TryAcquireReply', 'decode'],
        $metadata, $options);
    }

}
