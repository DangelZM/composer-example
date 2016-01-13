<?php

require __DIR__ . '/../vendor/autoload.php';

$browser = new Buzz\Browser();
$url = 'http://blogs.yandex.ru/search.rss?numdoc=100&p=27&text=%D1%88%D0%B5%D1%80%D1%81%D1%82%D1%8F%D0%BD%D1%8B%D0%B5+%D0%BD%D0%BE%D1%81%D0%BA%D0%B8';
$response = $browser->get($url);

echo $response->getContent();
