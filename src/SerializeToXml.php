<?php
namespace App\Serializeme;

use SimpleXMLElement;

class SerializeToXml extends AbstractSerializeMe
{
    public function getResult()
    {
        $data = parent::getSerealized();
        $xml = new SimpleXMLElement('<object/>');
        $this->arrayToXml($data, $xml);
        $result =  $xml->asXML();

        //convert oneline xml to multiline
        $result = str_replace("><", ">\n<", $result);
        return $result;
    }

    private function arrayToXml($array, &$xml) {
        foreach ($array as $key => $item) {
            if (is_numeric($key)) {
                $key = 'item_' . $key;
            }
            $key = str_replace("\0", '', strval($key));

            if (is_array($item)) {
                if (!is_numeric($key)) {
                    $sub = $xml->addChild($key);
                    $this->arrayToXml($sub, $xml);
                } else {
                    $this->arrayToXml($item, $xml);
                }
            } else {
                $xml->addChild($key, $item);
            }
        }
    }
}