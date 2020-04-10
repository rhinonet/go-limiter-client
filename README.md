# go-limiter-client
限流服务客户端


## Installation

``` shell
composer require rhinonet/golimiter
```


## Example

``` php
<?php

require dirname(__FILE__).'/vendor/autoload.php';

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

```
