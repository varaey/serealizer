<?php
namespace App\Serializeme;

abstract class AbstractSerializeMe implements SerializeMeInterface
{
    protected $serealized;
    public function __construct($object)
    {
        $this->setSerealized($object);
    }
    protected function getSerealized(){
        $array = $this->serealized;
        if (!is_array($array) || empty($array)) {
            throw new \ImpossibleEmptyArray('Object is empty');
        }

        return $this->serealized;
    }

    protected function setSerealized($serealized){
        if ($serealized) {
            $this->serealized = (Array) $serealized;
        }
    }

    public function getResult() {
        return serialize($this->getSerealized());
    }
}