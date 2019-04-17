<?php
$http = new Swoole\Http\Server("127.0.0.1", 9527);
$http->on('request', function ($request, $response) {
    var_dump($request->post);
    $response->end("<h1>Hello Swoole.</h1>");
});
$http->start();