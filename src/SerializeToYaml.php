<?php
namespace App\Serializeme;

use Symfony\Component\Yaml\Yaml;

class SerializeToYaml extends AbstractSerializeMe
{
    public function getResult()
    {
        $data = parent::getSerealized();
        $yaml = Yaml::dump($data);

        //remove not needed symbols from $yaml before return
        return str_replace(['"', '\0'], ['', ''],$yaml);
    }
}