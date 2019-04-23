<?php

require_once __DIR__ . '/AbstractSerializeMe.php';

use Symfony\Component\Yaml\Yaml;

class SerializeToYaml extends AbstractSerializeMe
{
    public function getResult()
    {
        $data = parent::getSerealized();
        $yaml = Yaml::dump($data);
        return str_replace(['"', '\0'], ['', ''],$yaml);
    }
}