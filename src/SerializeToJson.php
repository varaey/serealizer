<?php

require_once __DIR__ . '/AbstractSerializeMe.php';

class SerializeToJson extends AbstractSerializeMe
{
    public function getResult()
    {
        $data = parent::getSerealized();

        return str_replace('\u0000', '', json_encode($data, JSON_UNESCAPED_UNICODE));
    }
}