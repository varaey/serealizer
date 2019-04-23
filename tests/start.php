#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/User.php';
require __DIR__ . '/../src/SerializeToJson.php';
require __DIR__ . '/../src/SerializeToYaml.php';
require __DIR__ . '/../src/SerializeToXml.php';

echo "Result in JSON: " . PHP_EOL;
$toJson = new SerializeToJson(new User('Vasya', 1));
echo $toJson->getResult() .PHP_EOL;
echo PHP_EOL;

echo "Result in Yaml: " . PHP_EOL;
$toYaml = new SerializeToYaml(new User('Vasya', 1));
echo $toYaml->getResult() . PHP_EOL;
echo PHP_EOL;

echo "Result in XML: " . PHP_EOL;
$toXml = new SerializeToXml(new User('Vasya', 1));
echo $toXml->getResult() . PHP_EOL;
echo PHP_EOL;