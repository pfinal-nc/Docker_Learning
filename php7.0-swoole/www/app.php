<?php

$http = new swoole_http_server('0.0.0.0', 80, SWOOLE_BASE);
$http->on('request', function(swoole_http_request $req, swoole_http_response $res) use($http) {
    $res->write("hello world");
    $res->end();
});
$http->start();