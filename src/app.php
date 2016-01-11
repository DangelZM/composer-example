<?php

require __DIR__ . '/../vendor/autoload.php';

$browser = new Buzz\Browser();
$response = $browser->get('http://api.openweathermap.org/data/2.5/weather?q=Cherkassy,uk&appid=641f3fe60ccd91f2f3b4d40740e7f8c0');

echo $response->getContent();
